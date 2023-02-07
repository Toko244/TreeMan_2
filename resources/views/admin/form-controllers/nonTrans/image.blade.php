<div class="form-group mt-20">
    <div class="row">
        <div class="col-lg-6">
            <label data-icon="-">{{ trans('admin.' . $key) }}</label> <br>
            @if (isset($post) && isset($post->image))
                <input type="hidden" name="old_image" value="{{ $post->image }}">
            @endif
            <input type="file" name="image">
        </div>
        @if (isset($post) && isset($post->image))
            <div class="col-lg-6">
                <img src="/{{ config('config.file_path') . $post->image }}" class="slide_image">
                <a style="margin-top: 10px; display: block;" href="/{{ config('config.file_path') . $post->image }}"
                    download="{{ $post->image }}">{{ $post->image }}</a>
            </div>
        @endif
    </div>
</div>
