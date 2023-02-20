@if (isset($component) && $component != '')
<div class="slider-posts section-padding">
    <div class="container">
        <div class="title w-full flex items-center justify-between mb-3">
            <div class="green text-2xl bold">
                {{$component->translate(app()->getlocale())->title}}
            </div>

            <div class="info flex items-center justify-end">
                <div class="arrow flex items-center">
                    <div class="prev flex items-center">
                        <svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.87034 8.71432L34 8.71432L34 11.2857L4.87034 11.2857L11.6949 18.1821L9.89589 20L2.22735e-08 10L9.89589 2.26179e-08L11.6949 1.81795L4.87034 8.71432Z" fill="#006838"/>
                        </svg>
                    </div>

                    <div class="next flex items-center">
                        <svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.1297 11.2857L4.55712e-06 11.2857L4.77619e-06 8.71432L29.1297 8.71432L22.3051 1.81795L24.1041 1.0196e-06L34 10L24.1041 20L22.3051 18.1821L29.1297 11.2857Z" fill="#006838"/>
                        </svg>
                    </div>
                </div>
                @if($component->translate(app()->getlocale())->redirect_link != '')
                <div class="see-all">
                    <a href=" {{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif"  class="black text-xl medium">
                        {{ trans('website.see_all') }}
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <div class="w-full hidden">
        <div class="container">
            <div class="post-slider" style="width: 130%;">
                @if(count($component->files) > 0)
                    @foreach($component->files as $key => $image)
                    <div class="slide">
                        <a href="@if($image->title != '') {{$image->title}} @else /uploads/img/{{$image->file}} @endif" class="block w-full h-full"  data-fancybox="photo">
                            <img src="/uploads/img/{{$image->file}}" alt="" class="w-full h-full cover">
                        </a>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endif
