@extends('admin.layouts.app')

@push('name')
{{ trans('admin.submission') }} 
@endpush



@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div style="display: flex; align-items:center; justify-content: space-between; padding:20px 0">
				@if ($submission->post->translate(app()->getLocale()) !== null)
                <h4 class=" ">{{ $submission->post->translate(app()->getLocale())->title }} </h4>
					
				@elseif ($submission->post->parent->translate(app()->getLocale())->title)
                <h4>{{ $submission->post->parent->title }} </h4>
				@endif
                 
            </div> 
            
            <h4 style="font-weight: 600; line-height:20px; font-size:16px">{{ trans('admin.send_date') }} - {{ $submission->created_at->format(' d.m.Y   H:i') }}</h4>
            {{-- <h5 style="font-weight: 500; line-height:20px"><b style="margin-right: 15px">{{trans('admin.author')}} {{ $submission->name}}</h5>  --}}
           @if (isset($submission)) 
           {{-- {{dd($submission->additional['post_id'])}} --}}
           @foreach ($submission->additional as $key => $additional) 
           @if ($key != 'post_id')
               
           <h5 style="font-weight: 500; line-height:20px"><b style="margin-right: 15px">{{ trans('admin.'.$key) }}:</b> {{  $additional }}</h5>
           @endif
           @endforeach    
           @endif

            

            
        </div>
        {{-- <a class="btn btn-warning" href="/{{ app()->getLocale() }}/admin/submission/export/{{$submission->id }}">Export Submission Data</a> --}}
    </div>
</div>
@endsection 