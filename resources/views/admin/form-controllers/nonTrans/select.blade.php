
{{-- {{dd(sections()['selected_posts'])}} --}}
{{-- @foreach (sections()['sections'] as $section)
{{dd($section->posts[0]->id)}}
@endforeach --}}
{{-- @if(sections()['selected_posts'] = $post->id)
{{dd($post->id)}}
@endif --}}
<div class="mb-7">
    <select class="form-select form-select-solid @error('type') danger @enderror" name="{{ $key }}" id="{{ $key }}" data-control="select2" data-placeholder="Parent" data-hide-search="true">
        @foreach (sections()['sections'] as $section)
        <option value="{{$section->id}}" @if(isset($sections)) {{in_array($section->id, $sections) ? 'selected' : ''}} @endif >{{ $section->title }}</option>
		@endforeach
    </select>

	{{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
</div>
