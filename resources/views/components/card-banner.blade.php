@if(isset($section) && isset($section->posts) && count($section->posts) > 0)
<section>
    <div class="front-card-banner section-padding">
        <div class="container">
            <div class="row">

                @foreach ($section->posts as $key => $post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card flex items-center justify-center relative w-full hidden mb-2 shadow transition-duration">
                        <a href="" class="w-full h-full relative flex items-center justify-center">
                            <img src="/assets/img/card.png" alt="" class="w-full h-full cover relative">
                        </a>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </div>
</section>
@endif