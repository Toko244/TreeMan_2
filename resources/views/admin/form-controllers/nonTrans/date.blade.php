 <div class="form-group col-lg-6 ">
    <div class="row">
        {{ Form::label($key,  trans('admin.'.$key),  ['class' => 'control-label iconify', 'data-icon' => "-"]) }}
        {{ Form::text($key, null, array_merge(['class' => 'form-control datepicker-autoclose',  'required', 'placeholder' => "yyyy/mm/dd", 'required',  'autocomplete'=>"off"])) }} 
    </div> 
</div>   