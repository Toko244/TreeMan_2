<div class="form-floating mb-7 mt-10">
    <div class="form-check form-switch form-check-custom form-check-solid">

        {{ Form::hidden($key, '0') }}
        {{ Form::checkbox($key, 1,  null, [
        'class' => 'form-check-input',
        'data-plugin' => 'switchery',
        'id' =>  $key
    ]) }}

        {{ Form::label(trans('admin.'.$key), null, ['class' => 'form-check-label']) }}
    </div>

</div>
