
<div class="form-floating mb-7">
    {{ Form::text($locale.'['.$key.']',  null,   array_merge(  ['class' => 'form-control', 'placeholder' => ""])) }}
    @error("{$locale}.$key")
        <small
        style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
    @enderror
    {{ Form::label($key,  trans('admin.'.$key),  ) }}
</div>

