<header>
    <div class="responsive-margin"></div>
    <div class="header upper-header w-full pt-1 pb-1" style="border-bottom: 1.5px solid RGBA(1,81,78,0.2);">
        <div class="container">
            <div class="header flex w-full items-center justify-between">
                <div class="flex items-center justify-start">
                    <div class="follow-block flex items-center justify-start mr-1">
                        <div class="follow green medium text-lg">
                            {{trans('website.follow_us')}}
                        </div>
                    </div>

                    <div class="social flex items-center">
                        <div class="icon flex items-center h-full" style="margin: 0 11px;">
                            <a href="{{settings('facebook')}}" target="_blank" class="flex items-center justify-center rounded transition-duration shadow" style="width: 40px; height: 40px;">
                                <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.52306 17.8521H5.95551V9.03407H8.35008L8.60446 6.08183H5.95551V4.39709C5.95551 3.70084 6.09203 3.42885 6.74833 3.42885H8.60616V0.365723H6.23194C3.6771 0.365723 2.5256 1.51878 2.5256 3.72812V6.08183H0.737305V9.07455H2.52306V17.8521Z" fill="#006838"/>
                                </svg>
                            </a>
                        </div>

                        <div class="icon flex items-center h-full" style="margin: 0 11px;">
                            <a href="{{settings('linkedin')}}" target="_blank" class="flex items-center justify-center rounded transition-duration shadow" style="width: 40px; height: 40px;">
                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.95509 5.49658H0.541568C0.468901 5.49658 0.399211 5.52568 0.347828 5.57748C0.296445 5.62927 0.267578 5.69953 0.267578 5.77278V16.8262C0.267578 16.8994 0.296445 16.9697 0.347828 17.0215C0.399211 17.0733 0.468901 17.1024 0.541568 17.1024H3.95451C4.02717 17.1024 4.09686 17.0733 4.14825 17.0215C4.19963 16.9697 4.2285 16.8994 4.2285 16.8262V5.77278C4.2285 5.69963 4.19971 5.62946 4.14845 5.57768C4.0972 5.5259 4.02765 5.49674 3.95509 5.49658Z" fill="#006838"/>
                                    <path d="M2.2495 7.58068e-08C1.8045 0.000116046 1.36953 0.133239 0.999583 0.382537C0.629635 0.631834 0.341326 0.986111 0.171112 1.40057C0.000897201 1.81503 -0.043579 2.27106 0.0433067 2.711C0.130192 3.15094 0.344538 3.55503 0.659241 3.87218C0.973945 4.18932 1.37487 4.40528 1.81133 4.49275C2.24779 4.58022 2.70018 4.53527 3.11129 4.36358C3.52241 4.1919 3.87379 3.90118 4.121 3.5282C4.36822 3.15522 4.50017 2.71672 4.50017 2.26815C4.50017 1.97024 4.44195 1.67525 4.32884 1.40003C4.21572 1.12481 4.04993 0.874742 3.84093 0.664117C3.63193 0.453493 3.38381 0.286435 3.11075 0.172484C2.83769 0.0585336 2.54504 -7.69424e-05 2.2495 7.58068e-08Z" fill="#006838"/>
                                    <path d="M12.6357 5.21811C12.0757 5.20671 11.5195 5.31374 11.003 5.5323C10.4865 5.75086 10.0211 6.0761 9.63696 6.48705V5.76931C9.63696 5.69606 9.60809 5.62582 9.55671 5.57402C9.50533 5.52223 9.43564 5.49313 9.36297 5.49313H6.0943C6.02163 5.49313 5.95194 5.52223 5.90055 5.57402C5.84917 5.62582 5.82031 5.69606 5.82031 5.76931V16.8239C5.82031 16.8971 5.84917 16.9674 5.90055 17.0192C5.95194 17.071 6.02163 17.1001 6.0943 17.1001H9.50025C9.57292 17.1001 9.64261 17.071 9.694 17.0192C9.74538 16.9674 9.77425 16.8971 9.77425 16.8239V11.3552C9.77425 9.51223 10.271 8.79448 11.545 8.79448C12.933 8.79448 13.0435 9.94557 13.0435 11.4502V16.8239C13.0435 16.8971 13.0724 16.9674 13.1238 17.0192C13.1751 17.071 13.2448 17.1001 13.3175 17.1001H16.7246C16.7973 17.1001 16.867 17.071 16.9183 17.0192C16.9697 16.9674 16.9986 16.8971 16.9986 16.8239V10.7606C16.9986 8.01929 16.4803 5.21811 12.6357 5.21811Z" fill="#006838"/>
                                </svg>
                            </a>
                        </div>

                        <div class="icon flex items-center h-full" style="margin: 0 11px;">
                            <a href="{{settings('youtube')}}" target="_blank" class="flex items-center justify-center rounded transition-duration shadow" style="width: 40px; height: 40px;">
                                <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.12153 10.6291V4.81051L13.6236 7.71032L8.12153 10.6291ZM15.0798 0.623231H5.33393C0 0.623231 0 2.16537 0 5.9584V9.66483C0 13.272 0.75559 15 5.33393 15H15.0798C19.2152 15 20.4137 13.9902 20.4137 9.66483V5.9584C20.4137 1.96595 20.2124 0.623231 15.0798 0.623231Z" fill="#006838"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lang-search flex items-center">
                    <form action="{{route('search', app()->getLocale())}}"  method="POST">
                        @csrf
                        <div class="search flex items-center justify-center">
                            <button type="submit" class="h-full flex items-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.86088 0C13.7521 0 17.7218 3.96968 17.7218 8.86088C17.7218 13.7521 13.7521 17.7218 8.86088 17.7218C3.96968 17.7218 0 13.7521 0 8.86088C0 3.96968 3.96968 0 8.86088 0ZM8.86088 15.7527C12.6681 15.7527 15.7527 12.6681 15.7527 8.86088C15.7527 5.05267 12.6681 1.96909 8.86088 1.96909C5.05267 1.96909 1.96909 5.05267 1.96909 8.86088C1.96909 12.6681 5.05267 15.7527 8.86088 15.7527ZM17.2147 15.8226L20 18.6069L18.6069 20L15.8226 17.2147L17.2147 15.8226Z" fill="#006838"/>
                                </svg>
                            </button>

                            <div class="pl-1 pr-1" style="border-right: 1.5px solid #E6EEED">
                                <input type="text" placeholder="Search" class="medium green text-lg ">
                            </div>


                        </div>
                    </form>

                    <div class="lang flex items-center justify-center relative">
                        <div class="medium green text-lg ml-1 mr-1">
                            {{config('app.locale')}}
                        </div>
                        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.364 4.95L11.314 0L12.728 1.414L6.364 7.778L0 1.414L1.414 0L6.364 4.95Z" fill="#006838"/>
                        </svg>

                        <div class="other-langs flex items-center column pl-1 pr-1">
                                <a href="" class="medium green text-lg">
                                    KA
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-header" style="padding: 27px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="logo flex items-center justify-center" style="max-width: 105px;">
                        <a href="" class="w-full h-full block">
                            <img src="assets/img/header-logo.png" alt="" class="w-full h-full cover">
                        </a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="menu h-full flex items-center justify-start">
                        @foreach ($sections as $sec)
                            <div class="menu-item h-full flex items-center mr-4 relative">
                                <a href="" class="medium green text-lg menu-point relative">
                                    {{$sec->title}}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6">
                    <div class="flex items-center justify-end h-full">
                        <a href="" style="font-size: 16px; border-radius: 8px; border: 2px solid #006838;" class="bold background-green pt-1 pl-2 pb-1 pr-2 white transition-duration">
                            {{trans('website.get_a_quote')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="burgermenu flex column items-center pl-1 pr-1 pt-2">
        <form action="" class="w-full relative">
            <button type="submit" class="flex items-center absolute">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.86088 0C13.7521 0 17.7218 3.96968 17.7218 8.86088C17.7218 13.7521 13.7521 17.7218 8.86088 17.7218C3.96968 17.7218 0 13.7521 0 8.86088C0 3.96968 3.96968 0 8.86088 0ZM8.86088 15.7527C12.6681 15.7527 15.7527 12.6681 15.7527 8.86088C15.7527 5.05267 12.6681 1.96909 8.86088 1.96909C5.05267 1.96909 1.96909 5.05267 1.96909 8.86088C1.96909 12.6681 5.05267 15.7527 8.86088 15.7527ZM17.2147 15.8226L20 18.6069L18.6069 20L15.8226 17.2147L17.2147 15.8226Z" fill="#006838"/>
                </svg>
            </button>
            <input type="text" name="" id="" placeholder="Search" class="w-full">
        </form>

        <div class="burger-menu flex column mt-2">
            <div class="flex items-center justify-center">
                <a href="" class="semibold white text-xl">Home</a>
            </div>

            <div class="flex items-center justify-center">
                <a href="" class="semibold white text-xl">About</a>
            </div>

            <div class="flex items-center justify-center">
                <a href="" class="semibold white text-xl">Pawlonia</a>
            </div>

            <div class="flex items-center justify-center">
                <a href="" class="semibold white text-xl">Offers</a>
            </div>

            <div class="flex items-center justify-center">
                <a href="" class="semibold white text-xl">Contact</a>
            </div>
        </div>

        <div class="burger-lang flex items-center justify-center">
            <a href="" class="white bold text-xl">
                EN
            </a>
        </div>

        <div class="burger-social flex items-center justify-center">
            <div class="icon flex items-center h-full" style="margin: 0 11px;">
                <a href="" class="flex items-center justify-center rounded transition-duration shadow" style="width: 40px; height: 40px;">
                    <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.52306 17.8521H5.95551V9.03407H8.35008L8.60446 6.08183H5.95551V4.39709C5.95551 3.70084 6.09203 3.42885 6.74833 3.42885H8.60616V0.365723H6.23194C3.6771 0.365723 2.5256 1.51878 2.5256 3.72812V6.08183H0.737305V9.07455H2.52306V17.8521Z" fill="#006838"/>
                    </svg>
                </a>
            </div>

            <div class="icon flex items-center h-full" style="margin: 0 11px;">
                <a href="" class="flex items-center justify-center rounded transition-duration shadow" style="width: 40px; height: 40px;">
                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.95509 5.49658H0.541568C0.468901 5.49658 0.399211 5.52568 0.347828 5.57748C0.296445 5.62927 0.267578 5.69953 0.267578 5.77278V16.8262C0.267578 16.8994 0.296445 16.9697 0.347828 17.0215C0.399211 17.0733 0.468901 17.1024 0.541568 17.1024H3.95451C4.02717 17.1024 4.09686 17.0733 4.14825 17.0215C4.19963 16.9697 4.2285 16.8994 4.2285 16.8262V5.77278C4.2285 5.69963 4.19971 5.62946 4.14845 5.57768C4.0972 5.5259 4.02765 5.49674 3.95509 5.49658Z" fill="#006838"/>
                        <path d="M2.2495 7.58068e-08C1.8045 0.000116046 1.36953 0.133239 0.999583 0.382537C0.629635 0.631834 0.341326 0.986111 0.171112 1.40057C0.000897201 1.81503 -0.043579 2.27106 0.0433067 2.711C0.130192 3.15094 0.344538 3.55503 0.659241 3.87218C0.973945 4.18932 1.37487 4.40528 1.81133 4.49275C2.24779 4.58022 2.70018 4.53527 3.11129 4.36358C3.52241 4.1919 3.87379 3.90118 4.121 3.5282C4.36822 3.15522 4.50017 2.71672 4.50017 2.26815C4.50017 1.97024 4.44195 1.67525 4.32884 1.40003C4.21572 1.12481 4.04993 0.874742 3.84093 0.664117C3.63193 0.453493 3.38381 0.286435 3.11075 0.172484C2.83769 0.0585336 2.54504 -7.69424e-05 2.2495 7.58068e-08Z" fill="#006838"/>
                        <path d="M12.6357 5.21811C12.0757 5.20671 11.5195 5.31374 11.003 5.5323C10.4865 5.75086 10.0211 6.0761 9.63696 6.48705V5.76931C9.63696 5.69606 9.60809 5.62582 9.55671 5.57402C9.50533 5.52223 9.43564 5.49313 9.36297 5.49313H6.0943C6.02163 5.49313 5.95194 5.52223 5.90055 5.57402C5.84917 5.62582 5.82031 5.69606 5.82031 5.76931V16.8239C5.82031 16.8971 5.84917 16.9674 5.90055 17.0192C5.95194 17.071 6.02163 17.1001 6.0943 17.1001H9.50025C9.57292 17.1001 9.64261 17.071 9.694 17.0192C9.74538 16.9674 9.77425 16.8971 9.77425 16.8239V11.3552C9.77425 9.51223 10.271 8.79448 11.545 8.79448C12.933 8.79448 13.0435 9.94557 13.0435 11.4502V16.8239C13.0435 16.8971 13.0724 16.9674 13.1238 17.0192C13.1751 17.071 13.2448 17.1001 13.3175 17.1001H16.7246C16.7973 17.1001 16.867 17.071 16.9183 17.0192C16.9697 16.9674 16.9986 16.8971 16.9986 16.8239V10.7606C16.9986 8.01929 16.4803 5.21811 12.6357 5.21811Z" fill="#006838"/>
                    </svg>
                </a>
            </div>

            <div class="icon flex items-center h-full" style="margin: 0 11px;">
                <a href="" class="flex items-center justify-center rounded transition-duration shadow" style="width: 40px; height: 40px;">
                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.12153 10.6291V4.81051L13.6236 7.71032L8.12153 10.6291ZM15.0798 0.623231H5.33393C0 0.623231 0 2.16537 0 5.9584V9.66483C0 13.272 0.75559 15 5.33393 15H15.0798C19.2152 15 20.4137 13.9902 20.4137 9.66483V5.9584C20.4137 1.96595 20.2124 0.623231 15.0798 0.623231Z" fill="#006838"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="burger-book">
            <a href="" class="book-button text-lg bold green background-white transition-duration" style="line-height: 32px;">
                Book a meeting
            </a>
        </div>
    </div>
</header>
