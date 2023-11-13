<div class="card-body py-5">
    @if (!$section->is_component)
    @if (isset($section->fields['trans']) && count($section->fields['trans']) > 0)
    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
        @foreach (config('app.locales') as $locale)
        <li class="nav-item">
            <a href="#locale-{{ $locale }}" class="nav-link @if($locale == app()->getLocale()) active @endif" aria-expanded="false" data-bs-toggle="tab"
                >
            <span>{{ trans('admin.locale_' . $locale) }}</span>
        </a>
        </li>
        @endforeach
    </ul>
    <div class="tab-content" id="myTabContent">
        @foreach (config('app.locales') as $locale)
        <div class="tab-pane fade @if($locale == app()->getLocale()) active show @endif" id="locale-{{ $locale }}" role="tabpanel">
            @foreach ($section->fields['trans'] as $key => $field)
            @include('admin.form-controllers.trans.'.$field['type'])
            @endforeach
        </div>
        @endforeach
    </div>

    @endif
    @if (isset($section->fields['nonTrans']) && count($section->fields['nonTrans']) > 0)
    @foreach ($section->fields['nonTrans'] as $key => $field)
    @include('admin.form-controllers.nonTrans.'.$field['type'])
    @endforeach
    @endif

    @else
    @if (isset(getComponentAttribute($section->type_id)['trans']) &&
    count(getComponentAttribute($section->type_id)['trans']) > 0)
    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
        @foreach (config('app.locales') as $locale)
        <li class="nav-item">
            <a class="nav-link @if($locale == app()->getLocale()) active @endif" data-bs-toggle="tab"
                href="#locale-{{ $locale }}">
                <span>{{ trans('admin.locale_'.$locale) }}</span>
            </a>
        </li>
        @endforeach
    </ul>
    <div class="tab-content" id="myTabContent">
        @foreach (config('app.locales') as $locale)
        <div class="tab-pane fade @if($locale == app()->getLocale()) active show @endif" id="locale-{{ $locale }}" role="tabpanel">
            @foreach (getComponentAttribute($section->type_id)['trans'] as $key => $field)
            @include('admin.form-controllers.trans.'.$field['type'], ['field' => $field])
            @endforeach
        </div>
        @endforeach
    </div>
    @endif
    @if (isset(getComponentAttribute($section->type_id)['nonTrans']) &&
    count(getComponentAttribute($section->type_id)['nonTrans']) > 0)
    @foreach (getComponentAttribute($section->type_id)['nonTrans'] as $key => $field)
    @include('admin.form-controllers.nonTrans.'.$field['type'])
    @endforeach
    @endif
    <input type="hidden" name="type_id" value="{{$section->type_id}}">
    <input type="hidden" name="is_component" value="1">
    @endif

    <div class="card-footer">
        <button class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable mb-10"
            type="submit">
            {{ trans('admin.save') }}
        </button>
    </div>
</div>
