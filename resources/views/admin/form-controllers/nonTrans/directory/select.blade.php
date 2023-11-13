<div class="mb-7">
    <select class="form-select form-select-solid @error('type') danger @enderror" name="{{ $key }}" id="{{ $key }}" data-control="select2" data-placeholder="Parent" data-hide-search="true">
        @foreach (directories($field['directory_type']) as $k => $directory)
            <option value="{{ $directory->id }}" @if(isset($post) && $post->{$key} !== null && in_array($directory->id, $post->{$key})) selected @endif >{{ $directory->title }}</option>
		@endforeach
    </select>

	{{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
</div>
