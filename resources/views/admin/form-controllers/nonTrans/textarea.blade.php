<div class="form-floating mb-7">
    {{ Form::textarea($locale.'['.$key.']', null, [
        'id' => 'kt_docs_ckeditor_classic',
        'placeholder' => 'Description here...',
        $field['required']
    ]) }}

</div>
