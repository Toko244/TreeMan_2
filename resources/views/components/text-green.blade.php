@if(isset($section) && isset($section->posts) && count($section->posts) > 0)
<section>
    <div class="green-section w-full background-green relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 col-12">
                    <div class="title mt-4 mb-2">
                        <h3 class="white text-2xl bold">
                            {{$section->posts[0]->translate(app()->getlocale())->title}}
                        </h3>
                    </div>

                    <div class="text white medium text-xl pr-4">
                        
                        {!! $section->posts[0]->translate(app()->getlocale())->desc !!}
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12 col-12">
                    <div class="video w-full relative hidden">
                        <a href="{{$section->posts[0]->youtube}}" class="w-full h-full relative flex items-center justify-center flex items-center justify-center" data-fancybox="green">
                            <img src="/uploads/files/{{$section->posts[0]->image}}" alt="" class="w-full h-full cover">
                            <img src="/assets/img/play.png" alt="" class="absolute z-1">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif