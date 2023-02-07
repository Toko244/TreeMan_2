@if(isset($section) && isset($section->posts) && count($section->posts) > 0)
<section>
    <div class="count-section section-padding">
        <div class="container">
            <div class="row">
                @foreach ($section->posts as $key => $post)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="count flex column w-full">
                        <div class="dot"></div>
                        <div class="title lemon-medium text-2xl green mb-1">
                            {{$post->translate(app()->getlocale())->title}}
                        </div>
                        <div class="number green text-4xl lemon-medium">
                            {{$post->translate(app()->getlocale())->value}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif