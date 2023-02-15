@if(isset($component))
<div class="text_section flex column section-pad">
    <div class="container">
        
        <a  href="{{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif class="title green text-xl lemon-medium relative">
            {{$component->translate(app()->getlocale())->title}}
        </a>

        <div class="text-seemore flex items-center justify-between">
            <div class="text medium text-lg black">
                {!! $component->translate(app()->getlocale())->desc !!}
            </div>
            
            
        </div>

        <div class="image">
            <img src="/uploads/files/{{$component->image}}" alt="{{$component->translate(app()->getlocale())->title}}" class="w-full h-full cover">
        </div>
    </div>
</div>
@endif