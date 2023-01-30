@extends('website.master')

@section('master')
@foreach ($homepage->children as $child)
{{dd($child->posts)}}

<h1>{{$child->title}}</h1>
@endforeach
@endsection
