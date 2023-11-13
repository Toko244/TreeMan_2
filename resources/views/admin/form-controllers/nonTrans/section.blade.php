<div class="mb-7">
    <select class="form-select form-select-solid @error('type') danger @enderror" name="{{ $key }}" id="{{ $key }}" data-control="select2" data-placeholder="Parent" data-hide-search="true">
        @foreach (getSectionsWithTypes($field['types']) as $k => $sec)
			<option value="{{ $sec->id }}" @if(isset($post) && $post->section_id == $sec->id) selected @else @if(isset($section) && $section->id == $sec->id) selected @endif  @endif  >{{ $sec->title }}</option>
		@endforeach
    </select>

	{{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
</div>
