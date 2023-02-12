@if(isset($component))

<div class="text_section section-pad relative reverce">
    <img src="/assets/img/Vector 2.png" alt="" class="w-full absolute left-0 line">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="info flex items-start justify-center column h-full">
                    <a  href="{{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif class="title green text-xl lemon-medium relative">
                        {{$component->translate(app()->getlocale())->title}}
                    </a>

                    <div class="text medium text-lg black">
                        {!! $component->translate(app()->getlocale())->desc !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image flex items-center justify-center hidden relative">
                    <img src="/uploads/files/{{$component->image}}" alt="{{$component->translate(app()->getlocale())->title}}" class="w-full h-full cover">
                </div>
            </div>
        </div>
    </div>
</div>
@endif