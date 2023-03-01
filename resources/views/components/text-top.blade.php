@if(isset($component))
<div class="text_section flex column section-pad text-top">
    <div class="container">
        @if($component->translate(app()->getlocale())->redirect_link != '')
        <a  href="{{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif class="title green text-xl bold relative">
            {{$component->translate(app()->getlocale())->title}}
        </a>
        @else
        <p class="title green text-xl bold relative">
            {{ $component->translate(app()->getlocale())->title }}
        </p>
        @endif
        <div class="text-seemore flex items-center justify-between mb-2">
            <div class="text regular text-lg black">
                {!! $component->translate(app()->getlocale())->desc !!}
            </div>
        </div>
        @if($component->image != '')
        <div class="image">
            <img src="/uploads/files/{{$component->image}}" alt="{{$component->translate(app()->getlocale())->title}}" class="w-full h-full cover">
        </div>
        @endif
    </div>
</div>
@endif