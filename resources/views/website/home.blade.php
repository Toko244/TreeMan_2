@extends('website.master')
@section('master')
       @if(isset($section) && count($section->components()) > 0)
       @foreach ($section->components() as $key => $item)
       <section>
        <x-dynamic-component :component="$item" :sectionId="$key"/>
       </section>
       @endforeach
       @endif
@endsection
