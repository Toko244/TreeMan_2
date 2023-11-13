<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title">{{ trans('admin.edit_languages') }}</h3>
            </div>

            @if (isset($languages))
            <div class="card-body py-5">
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                    @foreach ($languages as $k => $lang)
                        <li class="nav-item">
                            <a href="#locale-{{ $k }}" class="nav-link @if($k == app()->getLocale()) active @endif" aria-expanded="false" data-bs-toggle="tab" >
                                <span>{{ trans('admin.locale_'.$k) }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                @foreach ($languages as $k => $lang)
                    <div class="tab-pane fade @if($k == app()->getLocale()) active show @endif" id="locale-{{ $k }}" role="tabpanel">
                        @foreach ($lang as $key => $value)
                            <div class="form-floating mb-7">

                                {{ Form::text($k.'['.$key.']',  $value ?? null, array_merge(['class' => 'form-control', 'id' => $key, 'placeholder' => ""])) }}

                                {{ Form::label($key, null, ['for' => 'floating'.$key]) }}

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
