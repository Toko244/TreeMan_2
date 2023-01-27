@if($section->componentt == false)
    @if (isset($section->fields['trans']) && count($section->fields['trans']) > 0)
        <ul class="nav nav-tabs">

            @foreach (config('app.locales') as $locale)
            <li class="nav-item ">
                <a href="#locale-{{ $locale }}"  data-toggle="tab" aria-expanded="false" class="nav-link @if($locale == app()->getLocale()) active @endif">
                    <span class="d-none d-sm-block">{{ trans('admin.locale_'.$locale) }}</span>
                </a>
            </li>
            @endforeach

        </ul>
        <div class="tab-content">
            @foreach (config('app.locales') as $locale)
            <div role="tabpanel" class="tab-pane fade @if($locale == app()->getLocale()) active show @endif " id="locale-{{ $locale }}">
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
    @if (isset($section->getComponentAttribute()['trans']) && count($section->getComponentAttribute()['trans']) > 0)
    <ul class="nav nav-tabs">

        @foreach (config('app.locales') as $locale)
        <li class="nav-item ">
            <a href="#locale-{{ $locale }}"  data-toggle="tab" aria-expanded="false" class="nav-link @if($locale == app()->getLocale()) active @endif">
                <span class="d-none d-sm-block">{{ trans('admin.locale_'.$locale) }}</span>
            </a>
        </li>
        @endforeach

    </ul>
    <div class="tab-content">
        @foreach (config('app.locales') as $locale)
        <div role="tabpanel" class="tab-pane fade @if($locale == app()->getLocale()) active show @endif " id="locale-{{ $locale }}">
            @foreach ($section->getComponentAttribute()['trans'] as $key => $field)
                @include('admin.form-controllers.trans.'.$field['type'])
            @endforeach
        </div>
        @endforeach
    </div>


    @endif
    @if (isset($section->getComponentAttribute()['nonTrans']) && count($section->getComponentAttribute()['nonTrans']) > 0)
    @foreach ($section->getComponentAttribute()['nonTrans'] as $key => $field)
        @include('admin.form-controllers.nonTrans.'.$field['type'])
    @endforeach
    @endif
@endif

<div class="form-group text-right mb-0">
    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
        {{ trans('admin.save') }}
    </button>
</div>
<script>
    function confirm_alert(node) {
      return confirm("Do you want to delete this Post?");
    }
  </script>
