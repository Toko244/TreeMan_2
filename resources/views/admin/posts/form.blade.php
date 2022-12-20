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
@if (isset($related_posts) && $related_posts->count() > 0)
    <h4 tabindex="40">{{ trans('website.related_activities') }} ({{($related_posts->count())}})</h4>


@foreach ($related_posts as $related_post)

<span style="display: block; margin-bottom:20px"> <img src="{{image($related_post->post->thumb)}}" alt="" style="width: 40px; height:40px; object-fit:cover"> <b> <a href="{{$related_post->post->parent->getfullslug()}}" target="blank" style="color: red">{{$related_post->post->parent->title}}</a></b> <a href="{{$related_post->post->getfullslug()}}" target="blank">{{$related_post->post->translate()->title}}</a> <a href="/{{ app()->getLocale() }}/relatedpost/destroy/{{ $related_post->id }}" class="fas fa-trash-alt" style="color: red" data-action="" onclick="return confirm_alert(this);"></a></span>

@endforeach
@endif
  {{-- <div class="form-group">
    {{ Form::text($key, null, array_merge(['class' => 'form-control', 'placeholder' => "dd/mm/yyyy", 'id' => "timepicker3"])) }}
</div> --}}
 {{-- @if($section->type_id !== 2 && $section->type_id !== 14 && $section->type_id !== 15)
<div class="form-group">
    <input type="hidden" value="0" name="active_on_home">
    <input type="checkbox" value="1" name="active_on_home" @if (isset($post) && $post->active_on_home != 0) checked @endif>
    <label for="">{{trans('admin.show_on_home_page')}}</label>
</div>
@endif --}}
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
