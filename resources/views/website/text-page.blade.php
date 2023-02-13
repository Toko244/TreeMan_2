@extends('website.master')
@section('master')
    @if (isset($section))
        @if ($section->post())
            <div class="text_section section-pad relative">
                <img src="/assets/img/Vector 1.png" alt="" class="w-full absolute left-0 line">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info flex items-start justify-center column h-full">
                                <a href="{{ $section->post()->translate(app()->getlocale())->redirect_link }}"
                                    @if ($section->target_blank == 1) target="_blank" @endif
                                    class="title green text-xl lemon-medium relative">
                                    {{ $section->post()->translate(app()->getlocale())->title }}
                                </a>

                                <div class="text medium text-lg black">
                                    {!! $section->post()->translate(app()->getlocale())->desc !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="image flex items-center justify-center hidden relative">
                                <img src="/uploads/img/{{ $section->post()->thumb }}"
                                    alt="{{ $section->post()->translate(app()->getlocale())->title }}"
                                    class="w-full h-full cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(count($section->components()) > 0)
        @foreach ($section->components() as $key => $item)
            <section>
                <x-dynamic-component :component="$item" :sectionId="$key" />
            </section>
        @endforeach
        @endif
    @endif
@endsection
