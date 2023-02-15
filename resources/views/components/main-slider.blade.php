@if(isset($components) && count($components) > 0)
    <div class="home-slider resp-slider-none">
        @foreach ($components as $key => $component)
            <div class="home-banner w-full relative background-green">
                <div class="home-slider-slide w-full h-full flex items-center">
                    <div class="container">
                        <div class="row">
                            <div class="green-side-width">
                                <div class="info">
                                    <div class="title white lemon-regular text-3xl">
                                        {{$component->translate(app()->getlocale())->title}}
                                    </div>
        
                                    <div class="text text-xl white medium">
                                        {!! $component->translate(app()->getlocale())->desc !!}
                                    </div>
        
                                    <a href="" class="book-button-2 text-lg bold green background-white transition-duration" style="line-height: 32px;">
                                        {{ trans('website.book_meeting') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="image absolute z-1 top-0 right-0 h-full image-side-width">
        
        
                        <div class="image-slider w-full h-full">
                            @if(count($component->files) > 0)
                                @foreach($component->files as $key => $image)
                                <div class="img w-full h-full">
                                    <img src="/uploads/img/{{$image->file}}" alt="" class="w-full h-full cover">
                                </div>
                                @endforeach
                            @endif
                        </div>
        
                    </div>
                </div>
            </div>  
        @endforeach
    </div>

    <div class="home-slider-resp">
        <div class="flex column w-full relative">
            <div class="image-slider">
                        @if(count($component->files) > 0)
                                @foreach($component->files as $key => $image)
                                <div class="img-slide">
                                    <img src="/uploads/img/{{$image->file}}" alt="" class="w-full h-full cover">
                                </div>
                                @endforeach
                        @endif
            </div>
        </div>

        <div class="slide-info background-green">
            <div class="info relative">
                <div class="title white lemon-regular text-3xl">
                    {{$component->translate(app()->getlocale())->title}}
                </div>

                <div class="text text-xl white medium">
                    {!! $component->translate(app()->getlocale())->desc !!}
                </div>

                <a href="" class="book-button-2 text-lg bold green background-white transition-duration" style="line-height: 32px;">
                    {{ trans('website.book_meeting') }}
                </a>
            </div>
        </div>
    </div>
@endif
