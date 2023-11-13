<div class="form-floating mb-7">
    {{ Form::text($locale.'[slug]', isset($post) ? $post->getSlug()[$locale] : null, array_merge(['class' => 'form-control', 'placeholder' => ""])) }}
    {{ Form::label(trans('admin.'.$key)) }}
</div>
@error("{$locale}.slug")
    <small
    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.slug_is_required') }}</small>
@enderror
