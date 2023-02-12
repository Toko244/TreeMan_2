@if(isset($component))
    <div class="section-padding">
        <div class="book-section w-full relative flex items-center justify-start hidden">
            <div class="container h-full">
                <div class="row h-full">
                    <div class="col-lg-6 padding-0 h-full">
                        <div class="book-info relative z-10 flex items-center justify-start w-full h-full pl-6">
                            <div class="flex column">
                                <div class="title flex items-center bold white mb-1">
                                    {{$component->translate(app()->getlocale())->title}}
                                </div>
            
                                <div class="desc white semibold">
                                    {!! $component->translate(app()->getlocale())->desc !!}
                                </div>
                            </div>
        
                            <div class="flex items-center h-full">
                                <button id="myBtn" class="book-button book-button-black relative text-lg bold black background-white transition-duration" style="line-height: 32px;">
                                    {{ trans('website.book') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 padding-0 h-full">
                        <div class="book-image w-full h-full relative">
                            
                            @if($component->image != '')
                            <img src="/uploads/files/{{$component->image}}" alt="" class="w-full h-full cover">
                            @else
                            <img src="assets/img/book.png" alt="" class="w-full h-full cover">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endif