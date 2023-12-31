@if (isset($component['fields']['trans']) && count($component['fields']['trans']) > 0)
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
            @foreach ($component['fields']['trans'] as $key => $field)
                @include('admin.form-controllers.trans.'.$field['type'])
            @endforeach
        </div>
        @endforeach
    </div>
@endif
@if (isset($component['fields']['nonTrans']) && count($component['fields']['nonTrans']) > 0)
    @foreach ($component['fields']['nonTrans'] as $key => $field)
        @include('admin.form-controllers.nonTrans.'.$field['type'])
    @endforeach
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
