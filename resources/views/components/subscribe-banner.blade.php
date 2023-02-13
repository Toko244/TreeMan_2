
@if(isset($component))
<div class="subscribe-section w-full background-green section-m-100 relative">
    <div class="subscribe-cover absolute right-0 top-0">
        <img src="/assets/img/Davit.png" alt="" class="w-full h-full cover">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="subscribe-info flex column items-start justify-center">
                    <div class="title semibold white text-2xl">
                        {{$component->translate(app()->getlocale())->title}}
                    </div>
                    
                    <div class="text medium white"> 
                        {!! $component->translate(app()->getlocale())->desc !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="subscribe-form w-full flex items-center">
                    <form action="" class="w-full relative">
                        <input type="text" class="w-full medium green" placeholder="{{ trans('website.email') }}">
                        <button type="submit" class="semibold text-lg" style="color: #006838">{{ trans('website.subscribe') }}</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="subscribe-logo flex items-center justify-center relative">
                    <img src="/assets/img/footerlogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endif