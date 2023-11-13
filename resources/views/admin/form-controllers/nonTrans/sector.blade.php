<div class="mb-7">
    <select class="form-select form-select-solid @error('type') danger @enderror" name="{{ $key }}" id="{{ $key }}" data-control="select2" data-placeholder="Parent" data-hide-search="true">
        @foreach (getSectors()->posts as $item)
		    <option value="{{$item->id}}" @if(isset($post->sector) && in_array($item->id, ($post->sector))) selected @endif>{{$item->translate(app()->getlocale())->title}}</option>
		@endforeach
    </select>

	{{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
</div>
