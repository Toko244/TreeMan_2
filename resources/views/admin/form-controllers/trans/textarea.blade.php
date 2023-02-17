
<div class="form-group">
    {{ Form::label($key,  trans('admin.'.$key),  ['class' => 'control-label iconify', 'data-icon' => $field['data-icon']]) }}
    {{ Form::textarea($locale.'['.$key.']', null, [
        'class' => 'form-control ckeditor',  $field['required']
    ]) }}
</div>

