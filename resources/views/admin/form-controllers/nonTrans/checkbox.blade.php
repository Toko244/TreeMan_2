<div class="form-check mb-7">
    {{ Form::hidden($key, '0') }}
    {{ Form::checkbox($key, 1,  null, [
        'class' => 'form-check-input'
        'id' =>  $key
    ]) }}    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}

</div>
<input class="" type="checkbox" value="" id="flexCheckDefault" />
