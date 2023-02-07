@if(isset($section) && isset($section->posts) && count($section->posts) > 0)
<section>
    <div class="text_section section-pad relative">
        <img src="/assets/img/Vector 1.png" alt="" class="w-full absolute left-0 line">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info flex items-start justify-center column h-full">
                        <div class="title green text-xl lemon-medium relative">
                            {{$section->posts[0]->translate(app()->getlocale())->title}}
                        </div>

                        <div class="text medium text-lg black">
                            {!! $section->posts[0]->translate(app()->getlocale())->desc !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image flex items-center justify-center hidden relative">
                        <img src="/uploads/files/{{$section->posts[0]->image}}" alt="" class="w-full h-full cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif