@if(isset($components) && count($components) > 0)
<section>
    <div class="count-section section-padding" id="counter">
        <div class="container">
            <div class="row">
                @foreach ($components as $key => $component)
                    @if($key < 4)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="count flex column w-full">
                            <div class="dot"></div>
                            <div class="title lemon-medium text-2xl green mb-1">
                                {{$component->translate(app()->getlocale())->title}}
                            </div>
                            <div class="flex items-center justify-start">
                                <div class="number green text-4xl lemon-medium counter-value" data-count="{{$component->translate(app()->getlocale())->value}}K">
                                    0
                                </div>
                                <div class="number green text-4xl lemon-medium plus">
                                    +
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif