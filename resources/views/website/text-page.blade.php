@extends('website.master')
@section('master')
    @if (isset($section) && isset($post))
        <div class="text_section section-pad relative">
            @if ($post->thumb != '')
                <img src="/assets/img/Vector 1.png" alt="" class="w-full absolute left-0 line">
            @endif
            <div class="container">
                <div class="row">
                    <div @if ($post->thumb != '') class="col-lg-6" @else class="col-lg-12" @endif>
                        <div class="info flex items-start justify-center column h-full">
                            @if ($post->translation != '')
                                <a href="{{ $post->redirect_link }}" @if ($post->target_blank == 1) target="_blank" @endif
                                    class="title green text-xl lemon-medium relative">
                                    {{ $post->translate(app()->getlocale())->title }}
                                </a>
                            @endif
                            <div class="text medium text-lg black">
                                @if ($post->translation != '')
                                    {!! $post->translate(app()->getlocale())->desc !!}
                                @else
                                    {{ trans('website.no_content_acailable') }}
                                @endif
                            </div>

                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                    </div>
                    @if ($post->thumb != '')
                        <div class="col-lg-6">
                            
                            <div class="image flex items-center justify-center hidden relative">
                                <img src="/uploads/img/{{ $post->thumb }}" alt="{{ $post->title }}" class="w-full h-full cover">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @if(count($section->sectioncomponents()) > 0)
            <div class="guideline relative">
                <div class="container">
                    <div class="guideline-list">
                        <div class="title semibold text-2xl mb-3 w-full white">
                            {{ trans('website.page_guideline') }}
                        </div>
                        <div class="list flex wrap w-full">
                            @foreach ($section->sectioncomponents() as $key => $item)
                                <div class="list-bullet relative flex items-center">
                                    <div class="circle"></div>
                                    <a href="#{{ $item->id }}" class="semibold white">
                                        {{ $item->title }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="fixed-guidline">
                    <div class="guidline-icon">
                        <svg width="68" height="71" viewBox="0 0 68 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M-1 0H58C63.5228 0 68 4.47715 68 10V61C68 66.5229 63.5229 71 58 71H-1V0Z"
                                fill="#3F9752" />
                            <rect x="14" y="21" width="37" height="4" rx="2"
                                fill="white" />
                            <rect x="14" y="33" width="28" height="4" rx="2"
                                fill="white" />
                            <rect x="14" y="45" width="37" height="4" rx="2"
                                fill="white" />
                        </svg>
                    </div>

                    <div class="fixed-guidline-list flex column">

                        <div class="title semibold text-2xl mb-3 w-full white">
                            {{ trans('website.page_guideline') }}
                        </div>

                        @foreach ($section->sectioncomponents() as $key => $item)
                            <div class="flex items-center mb-3">
                                <div class="circle"></div>
                                <a href="#{{ $item->id }}" class="semibold white text-xl">
                                    {{ $item->title }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @foreach ($section->components() as $key => $item)
                <section id="{{ $key }}">
                    <x-dynamic-component :component="$item" :sectionId="$key" />
                </section>
            @endforeach
        @endif
    @endif
@endsection
