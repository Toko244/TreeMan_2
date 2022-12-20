<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\BannerTranslation;
use App\Models\BannerFile;
use Redirect;
use File;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index($type){
        $type = collect(bannerTypes())->where('id', $type)->first();
        if (isset($type['type']) && $type['type'] == 2) {
            $banner = Banner::where('type_id', $type['id'])->first();
            if (isset($banner) && $banner !== null && !empty($banner)) {
                return Redirect::route('banner.edit', [app()->getLocale(), $banner->id]);
            }
            return Redirect::route('banner.create', [app()->getLocale(), $type['id'],]);
        }



        $banners = Banner::where('type_id', $type['id'])->whereHas('translation')->with('translation')->orderBy('date', 'desc')->paginate(9);

        return view('admin.banners.list', compact('type', 'banners' ));
    }
    public function create($type){
        $type = collect(bannerTypes())->where('id', $type)->first();

        return view('admin.banners.add', compact('type' ));
    }

    public function store($type, Request $request){
        $type = collect(bannerTypes())->where('id', $type)->first();
        $values = $request->all();
        $banner = null;
        $this->storeBanner($values, $type, $banner);

        return Redirect::route('banner.list', [app()->getLocale(), $type['id'],]);
    }


    public function edit($banner){
        $banner = Banner::where('id', $banner)->with(['translations', 'files'])->first();
        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();
        return view('admin.banners.edit', compact('type', 'banner' ));
    }

    public function update($banner, Request $request){


        $values = $request->all();
        if(isset($values['icon']) && ($values['icon'] != null)){
                    $name = time().'.'.$values['icon']->extension();
                    $values['icon']->move(config('config.icon_path'), $name );
                    $values['icon'] = '';
                    $values['icon'] = $name;
                }

        $banner = Banner::where('id', $banner)->with(['translations', 'files'])->first();
        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();
        $this->storeBanner($values, $type, $banner);

        return Redirect::route('banner.list', [app()->getLocale(), $type['id']]);
    }

    public function destroy($banner){

        $banner = Banner::find($banner);

        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();

        $files = BannerFile::where('banner_id', $banner->id)->get();
        foreach($files as $file){
            if(File::exists(config('config.image_path').$file->file)) {
                File::delete(config('config.image_path').$file->file);
            }
            if(File::exists(config('config.image_path').'thumb/'.$file->file)) {
                File::delete(config('config.image_path').'thumb/'.$file->file);
            }

            $file->delete();
        }

        BannerTranslation::where('banner_id', $banner->id)->delete();
        Banner::where('id', $banner->id)->delete();
        BannerFile::where('banner_id', $banner->id)->delete();


        $banner->delete();


        return Redirect::route('banner.list', [app()->getLocale(), $type['id'],]);

    }



    protected function storeBanner($values, $type, $banner){
        $values['type_id'] = $type['id'];
        $values['author_id'] = auth()->user()->id;
        $bannerFillable = (new Banner)->getFillable();
        $bannerTransFillable = (new BannerTranslation)->getFillable();
// dd($count);
        Validator::validate($values, genValidation($type['fields']['nonTrans']));

        $values['additional'] = getAdditional($values, array_diff(array_keys($type['fields']['nonTrans']), $bannerFillable) );



        foreach(locales() as $locale){


            if (isset($values[$locale]['files']) && $values[$locale]['files'] !== null) {
                foreach ($values[$locale]['files'] as $key => $files) {
                    if (array_key_exists('same',$values[$locale]['files'][$key])) {
                        foreach (config('app.locales') as $lang) {
                            if ($lang != $locale) {
                                if (!array_key_exists($key, $values[$lang])) {
                                    $values[$lang][$key] = [];
                                }
                                foreach ($values[$locale]['files'][$key]['file'] as $k => $value) {
                                    $values[$lang][$key][] = [
                                        'file' => $value,
                                        'name' => $files['desc'][$k]
                                    ];
                                }
                            }
                        }
                    }
                        $values[$locale][$key] = [];
                        foreach ($values[$locale]['files'][$key]['file'] as $k => $value) {
                            $values[$locale][$key][] = [
                                'file' => $value,
                                'name' => $files['desc'][$k]
                            ];
                        }


                }
            }



            if(isset($values[$locale]['active']) && $values[$locale]['active'] == 1){
if(isset($values[$locale]['title'])){
                $values[$locale]['slug'] = str_replace(' ', '', $values[$locale]['title']);
}else{
    $values[$locale]['slug'] = str_replace(' ', '', $values[$locale]['name']);
};



                Validator::validate($values[$locale], genValidation($type['fields']['trans']));

                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($type['fields']['trans']), $bannerTransFillable) );


            }
        }
        if (isset($banner) && $banner !== null) {

            $allOldFiles = BannerFile::where('banner_id', $banner->id)->get();

            foreach ($allOldFiles as $key => $fil) {
                if(isset($values['old_file']) && count($values['old_file']) > 0) {
                if(!in_array($fil->id, array_keys ($values['old_file']))){
                    $fil->delete();
                }
                }else{
                $fil->delete();
                }

            }
            Banner::find($banner->id)->update($values);

        }else{
            $banner = Banner::create($values);
        }



		if (isset($values['files']) && count($values['files']) > 0) {
            foreach($values['files'] as $key => $files){
				foreach($files['file'] as $k => $file){
					$bannerFile = new BannerFile;
					$bannerFile->file = $file;
					$bannerFile->banner_id = $banner->id;
					$bannerFile->save();
				}
            }
        }
    }
}
