<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Slug;
use App\Models\Section;
use App\Models\MenuSection;
use App\Models\PostTranslation;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ForSlugService{

    public function storePostSlug($request, $values, $post)
    {
        foreach (config('app.locales') as $locale) {
            if ($request->has('is_component')) {
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
            } else {
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug',  $values[$locale]['slug']);
            }
        }

        foreach (config('app.locales') as $key =>  $locale) {
            $post->slugs()->create([
                'fullSlug' => $locale . '/' . $values[$locale]['slug'],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $post->id,
                'locale' => $locale
            ]);
        }
    }

    public function storeSectionSlug($request, $values, $section)
    {
        foreach (config('app.locales') as $locale) {
            if ($request->has('is_component')) {
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
            } else {
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug',  $values[$locale]['slug']);
            }
            $fullslug[$locale] = $locale . '/' . $values[$locale]['slug'];
        }

        if (isset($values['menu_types']) && $values['menu_types'] !== null) {
            foreach ($values['menu_types'] as $type) {
                MenuSection::create([
                    'section_id' => $section->id,
                    'menu_type_id' => $type
                ]);
            }
        }

        foreach (config('app.locales') as $locale) {
            $section->slugs()->create([
                'fullSlug' => $fullslug[$locale],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $section->id,
                'locale' => $locale
            ]);
        }
    }

    public function updatePostSlug($request, $values, $post, $section, $id)
    {
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
        // dd($values['en']['slug'], $post->translations[0]['slug'], !$request->has('is_component'));
        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();
        if ($request->has('is_component')) {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable));
        } else {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
        }

        foreach (config('app.locales') as $key =>  $locale) {

            if (!$request->has('is_component') && $values[$locale]['slug'] != $post->translations[$key]['slug']) {
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['slug']);
            } elseif ($values[$locale]['title'] != $post->translations[$key]['title']) {
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
            } else {
                $values[$locale]['slug'] = $post->translations[$key]['slug'];
            }
            if ($request->has('is_component')) {
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable));
            } else {
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }
        }

        foreach (config('app.locales') as $key =>  $locale) {
            $post->slugs()->create([
                'fullSlug' => $locale . '/' . $values[$locale]['slug'],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $id,
                'locale' => $locale
            ]);
        }

        Post::findOrFail($post->id)->update($values);
    }

    public function updateSectionSlug($request, $values, $section, $id)
    {
        $section = Section::where('id', $id)->with('translations')->first();

        foreach (config('app.locales') as $key => $locale) {
            if ($request->has('is_component')) {
                if ($section->translations[$key]['title'] != $values[$locale]['title']) {
                    $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
                }else{
                    $values[$locale]['slug'] = $section->translations[$key]['slug'];
                }
            } else {
                if ($section->translations[$key]['slug'] != $values[$locale]['slug']) {
                    $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['slug']);
                }else{
                    $values[$locale]['slug'] = $section->translations[$key]['slug'];
                }
            }

            $values[$locale]['locale_additional'] = getAdditional($values[$locale], config('sectionAttr.translateable_additional'));
        }

        if (isset($values['menu_types']) && $values['menu_types'] !== null) {
            foreach ($values['menu_types'] as $type) {
                MenuSection::create([
                    'section_id' => $id,
                    'menu_type_id' => $type
                ]);
            }
        }

        foreach (config('app.locales') as $key => $locale) {
            $section->slugs()->create([
                'fullSlug' => $locale . '/' . $values[$locale]['slug'],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $id,
                'locale' => $locale
            ]);
        }
    }
}

?>
