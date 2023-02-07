@extends('website.master')

@section('master')
       @foreach ($components as $key => $item)
        <x-dynamic-component :component="$item" :sectionId="$key"/>
       @endforeach
@endsection
