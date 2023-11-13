<div class="form-floating mb-7">
    <div class="form-check form-switch form-check-custom form-check-solid">

    {{ Form::hidden($locale.'['.$key.']', '0') }}
    {{ Form::checkbox($locale.'['.$key.']', 1,  null, [
        'class' => 'form-check-input',
        'data-plugin' => 'switchery',
        'id' =>  $key
    ]) }}

    {{ Form::label(trans('admin.'.$key), null, ['class' => 'form-check-label']) }}
    </div>

</div>




