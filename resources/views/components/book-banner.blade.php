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


<section>
    <div class="section-padding">
        <div class="book-section w-full relative flex items-center justify-start hidden">
            <div class="container h-full">
                <div class="row h-full">
                    <div class="col-lg-6 padding-0 h-full">
                        <div class="book-info relative z-10 flex items-center justify-start w-full h-full pl-6">
                            <div class="flex column">
                                <div class="title flex items-center bold white mb-1">
                                    Want to learn more?
                                </div>
            
                                <div class="desc white semibold">
                                    Book an online appointment
                                </div>
                            </div>
        
                            <div class="flex items-center h-full">
                                <button id="myBtn" class="book-button book-button-black relative text-lg bold black background-white transition-duration" style="line-height: 32px;">
                                    Book
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 padding-0 h-full">
                        <div class="book-image w-full h-full relative">
                            <img src="assets/img/book.png" alt="" class="w-full h-full cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content flex justify-center column items-center">
        <div class="bold text-2xl black">Send Request</div>
        <span class="close">&times;</span>
        <form action="">
            <div class="modal-form flex column items-center">
                <div class="modal-input flex column items-start">
                    <label for=""class="required">Name</label>
                    <input type="text" name="" id="">
                </div>

                <div class="modal-input flex column items-start">
                    <label for=""class="required">E-Mail</label>
                    <input type="text" name="" id="">
                </div>

                <div class="modal-input flex column items-start">
                    <label for="">Phone</label>
                    <input type="text" name="" id="">
                </div>

                <div class="modal-input flex column items-start">
                    <label for="">Organisation</label>
                    <input type="text" name="" id="">
                </div>

                <div class="modal-input flex column items-start">
                    <label for="">Country</label>
                    <input type="text" name="" id="">
                </div>

                <div class="modal-input flex column items-start">
                    <label for="">Quality</label>
                    <input type="text" name="" id="">
                </div>

                <div class="modal-input flex column items-start">
                    <label for=""class="required">Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="flex items-center modal-button">
                    <button style="font-size: 16px; border-radius: 8px; border: 2px solid #006838;" class="bold background-green white transition-duration">
                        SEND
                    </button>
                </div>
            </div>
        </form>
    </div>
  
</div>