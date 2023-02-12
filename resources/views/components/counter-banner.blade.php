@if(isset($components) && count($components) > 0)
<section>
    <div class="count-section section-padding">
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
                        <div class="number green text-4xl lemon-medium">
                            {{$component->translate(app()->getlocale())->value}}
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