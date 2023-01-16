@extends('website.master')

@section('master')
    <h1>main page</h1>


    {{-- main banner slider --}}
       @foreach ($main_banner_slider as $item)
       <a href="{{$item->translate()->locale_additional['redirect_link'] ?? '/'}}">{{$item->translate()->locale_additional['button_name'] ?? trans('website.get_quote')}} </a>
       <button></button>
           @foreach ($item->files as $file)
               <img src="{{image($file->file)}}" alt="">
           @endforeach
       @endforeach

@endsection
