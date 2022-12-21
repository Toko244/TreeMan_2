@extends('website.master')

@section('master')
    <h1>main page</h1>
    <form action="{{route('search', app()->getLocale())}}"  method="POST">
    @csrf
    <input type="text" name="search">
    </form>
@endsection
