
@if(isset($section) && isset($section->posts) && count($section->posts) > 0)
<section>
    <div class="home-slider">
        @foreach ($section->posts as $key => $post)
        <div class="home-banner w-full relative background-green">
            <div class="home-slider-slide w-full h-full flex items-center">
                <div class="container">
                    <div class="row">
                        <div class="green-side-width">
                            <div class="info">
                                <div class="title white lemon-regular text-3xl">
                                    {{$post->translate(app()->getlocale())->title}}
                                </div>
    
                                <div class="text text-xl white medium">
                                    {!! $post->translate(app()->getlocale())->desc !!}
                                </div>
    
                                <a href="" class="book-button-2 text-lg bold green background-white transition-duration" style="line-height: 32px;">
                                    {{ trans('website.get_quote') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="image absolute z-1 top-0 right-0 h-full image-side-width">
                    <img src="/uploads/files/{{$post->image}}" alt="" class="tringle-cover h-full absolute top-0 z-10" style="left: -1px;">
    
    
                    <div class="image-slider w-full h-full">
                        <div class="img w-full h-full">
                            <img src="/assets/img/slider-image.png" alt="" class="w-full h-full cover">
                        </div>
                        <div class="img w-full h-full">
                            <img src="/assets/img/Mask group.png" alt="" class="w-full h-full cover">
                        </div>
                    </div>
    
                </div>
            </div>
        </div>  
        @endforeach
    </div>
</section>
@endif