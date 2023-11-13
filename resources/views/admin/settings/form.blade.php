<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Row-->
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title">{{ trans('admin.edit_settings') }}</h3>
                <div class="card-toolbar">

                </div>
            </div>
            <div class="card-body py-5">
                @if (isset($settings))
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                    @foreach ($settings as $k => $setting)
                    <li class="nav-item">
                        <a class="nav-link @if($loop->first) active @endif" data-bs-toggle="tab"
                            href="#setting-{{ $k }}">
                            <span>{{ trans('admin.'.$k) }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($settings as $k => $setting)
                    <div class="tab-pane fade show @if($loop->first) active show @endif" id="#setting-{{ $k }}"
                        role="tabpanel">
                        <div class="">
                            @foreach (config('app.locales') as $locale)
                            <div class="tab-pane fade   @if($locale == app()->getLocale()) active show @endif"
                                id="locale-{{ $locale }}" role="tabpanel">
                                @foreach (settingTransAttrs($setting) as $key => $field)
                                <div class="form-floating mb-7">


                                    @if ($field['type'] == 'textarea')

                                    {{ Form::textarea($k.'['.$key.'][value]['.$locale.']',  $field['value'][$locale] ?? null, [
                                                                                'class' => 'form-control',
                                                                            ]) }}

                                    @elseif($field['type'] == 'text')

                                    {{ Form::text($k.'['.$key.'][value]['.$locale.']',  $field['value'][$locale] ?? null, array_merge(['class' => 'form-control'])) }}

                                    @endif

                                    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}

                                </div>

                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        <br>
                        @foreach (settingNonTransAttrs($setting) as $key => $field)
                        <div class="form-floating mb-7">


                            @if($field['type'] == 'select')
                            <select name="{{ $k }}[{{ $key }}][value]" id="" class="form-control">
                                @foreach(getSectionsWithTypes($field['options']) as $section)
                                <option @if ($field['value']==$section->id) selected @endif
                                    value="{{ $section->id }}">{{ $section->title }}</option>
                                @endforeach
                            </select>
                            @elseif($field['type'] == 'text')

                            {{ Form::text($k.'['.$key.'][value]',  $field['value'][$locale] ?? null, array_merge(['class' => 'form-control', 'placeholder' => ""])) }}


                            @elseif($field['type'] == 'pubselector')
                            <select name="{{ $k }}[{{ $key }}][value]" id="" class="form-control">
                                <option value="NULL" selected></option>
                                @foreach (getPostTitles( ) as $post)
                                <option @if ($field['value']==$post->id) selected @endif
                                    value="{{ $post->id }}">{{$post->parent->title}} - {{ $post->translate()->title }}
                                </option>
                                @endforeach
                            </select>
                            @endif

                            {{ Form::label($key, trans('admin.'.$key), null, ['class' => 'control-label']) }}

                        </div>
                        @endforeach

                    </div>

                    @endforeach
                </div>
                @endif

            </div>

            <div class="card-footer">
                <button class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable"
                    type="submit">
                    {{ trans('admin.save') }}
                </button>
            </div>
        </div>

    </div>
</div>
