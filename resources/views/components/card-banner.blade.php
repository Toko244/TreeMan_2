@if(isset($section) && isset($section->posts) && count($section->posts) > 0)    
    <div class="front-card-banner section-padding">
        <div class="container">
            <div class="row">
                @foreach ($section->posts as $key => $post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card flex items-center justify-center relative w-full hidden mb-2 shadow transition-duration">
                        <a href="" class="w-full h-full relative flex items-center justify-center">
                            <img src="/assets/img/card-brown.png" alt="" class="w-full h-full cover absolute top-0 left-0 brown">
                            <img src="/assets/img/card-white.png" alt="" class="w-full h-full cover absolute top-0 left-0 white">
                            <div class="relative z-10 text-xl card-title pl-2 pr-3 bold">
                                {{$post->translate(app()->getlocale())->title}}
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif