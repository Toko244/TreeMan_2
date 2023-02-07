@if(isset($section) && isset($section->posts) && count($section->posts) > 0)
<section>
    <div class="book-section w-full relative flex items-center justify-start hidden">
        <img src="/assets/img/book_cover.png" alt="" class="w-full h-full cover absolute left-0 top-0">
        <img src="/assets/img/book-section-cover.png" alt="" class="h-full absolute left-0 z-1">

        <div class="container">
            <div class="book-info relative z-10 flex items-start w-initial">
                <div class="flex column">
                    <div class="title flex items-center bold white mb-1">
                        {{$section->posts[0]->translate(app()->getlocale())->title}}
                    </div>

                    <div class="desc white semibold">
                        {!! $section->posts[0]->translate(app()->getlocale())->desc !!}
                    </div>
                </div>

                <div class="flex items-center h-full">
                    <a href="" class="book-button book-button-black relative text-lg bold black background-white transition-duration" style="line-height: 32px;">
                        Book
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif