<div class="form-floating mb-7">
    {{ Form::text($locale.'[slug]', isset($post) ? $post->getSlug()[$locale] : null, array_merge(['class' => 'form-control'])) }}
    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
</div>
