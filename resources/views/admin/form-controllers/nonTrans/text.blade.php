<div class="form-floating mb-7">

    {{ Form::text($key,  null, array_merge(['class' => 'form-control', 'placeholder' => ''])) }}
    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}

</div>





