@if (isset($section) && isset($section->posts) && count($section->posts) > 0)
    <section>
        <div class="green-section w-full background-green relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 background-green">
                        <div class="title mt-4 mb-4">
                            <h3 class="white text-2xl bold">
                                Why to work with us
                            </h3>
                        </div>

                        <div class="row">

                            @foreach ($section->posts as $key => $post)
                                <div class="col-xl-4 col-lg-4 col-md-12">
                                    <div class="text-block flex items-center justify-start">
                                        <div class="logo h-full flex items-center mr-2">
                                            <img src="/assets/img/check.png" alt="">
                                        </div>

                                        <div class="info">
                                            <div class="title mb-1">
                                                <h3 class="white text-2xl bold">
                                                    {{$post->translate(app()->getlocale())->title}}
                                                </h3>
                                            </div>

                                            <div class="text white pr-4 medium"
                                                style="font-size: 18px; line-height: 26px;">
                                                {!! $post->translate(app()->getlocale())->desc !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
