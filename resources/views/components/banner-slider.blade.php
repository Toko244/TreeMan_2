@if(isset($components) && count($components) > 0)
    <div class="slider-posts section-padding">
        <div class="container">
            <div class="title w-full flex items-center justify-between mb-3">
                <div class="green text-2xl bold">
                    {{$section->translate(app()->getlocale())->title}}
                </div>
                <div class="info flex items-center justify-end">
                    <div class="arrow flex items-center">
                        <div class="prev flex items-center" id="prev">
                            <svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.87034 8.71432L34 8.71432L34 11.2857L4.87034 11.2857L11.6949 18.1821L9.89589 20L2.22735e-08 10L9.89589 2.26179e-08L11.6949 1.81795L4.87034 8.71432Z" fill="#006838"/>
                            </svg>
                        </div>
                        <div class="next flex items-center" id="next">
                            <svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.1297 11.2857L4.55712e-06 11.2857L4.77619e-06 8.71432L29.1297 8.71432L22.3051 1.81795L24.1041 1.0196e-06L34 10L24.1041 20L22.3051 18.1821L29.1297 11.2857Z" fill="#006838"/>
                            </svg>
                        </div>
                    </div>
                    <div class="see-all">
                        <a href="" class="black text-xl medium">
                            {{ trans('website.see_all') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-full hidden">
           <div class="container">
                <div class="post-slider" style="width: 130%;">
                    
                    @foreach ($components as $key => $component)
                    <div class="slide">
                        <a href="{{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target == 1) target="_blank" @endif class="block w-full h-full">
                            <img src="/uploads/files/{{$component->image}}" alt="" class="w-full h-full cover">
                        </a>
                    </div>
                    @endforeach

           </div>
        </div>
    </div>
@endif