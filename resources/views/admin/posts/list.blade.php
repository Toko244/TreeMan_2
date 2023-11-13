@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ $section->title }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="/{{ app()->getLocale() }}/admin/profile" class="text-muted text-hover-primary">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Dashboard</li>
                </ul>

            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="card card-flush shadow-sm">
                <div class="card-body py-5">
                    <div class="tab-content" id="myTabContent">
                        <table id="kt_datatable_dom_positioning"
                            class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                            <thead>
                                <div class="card-toolbar" style="text-align: right;">
                                    <a href="/{{ app()->getLocale() }}/admin/section/{{ $section->id }}/posts/create">
                                        <button type="button" class="btn btn-sm btn-primary">
                                            {{ trans('admin.add_post') }}
                                        </button>
                                    </a>
                                </div>
                                <tr class="fw-bold fs-6 text-gray-800 px-7">
                                    <th>{{ trans('admin.image') }}</th>
                                    <th>{{ trans('admin.title') }}</th>
                                    <th>{{ trans('admin.desc') }}</th>
                                    <th>{{ trans('admin.date') }}</th>
                                    <th>{{ trans('admin.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        @if (isset($post->image))
                                        <img src="/{{config('config.file_path').$post->image}}" alt=""
                                            style="width: 80px;">
                                        @elseif (isset($post->thumb))
                                        <img src="{{image($post->thumb)}}" alt="" style="width: 80px;">
                                        @else
                                        <img src="/no_image.jpg" alt="" style="width: 80px;">
                                        @endif
                                    </td>
                                    <td>
                                        @if (isset($post->translate()->title))
                                        <h5 style="color: #414141">{{ Str::limit($post->translate()->title, 40)}}</h5>
                                        @else
                                        <h5 style="color: #414141">{{ Str::limit($post->translate()->name, 40)}}</h5>
                                        @endif
                                    </td>
                                    <td>
                                        @if (isset($post->translate()->desc))
                                        <h5 style="color: #414141">{!! Str::limit($post->translate()->desc, 30)!!}</h5>
                                        @else
                                        <h5 style="color: #414141">{!! Str::limit($post->translate()->position, 30)!!}
                                        </h5>
                                        @endif
                                    </td>
                                    <td>
                                        @if (isset($post->date))
                                        <h5 style="color: #414141">{{$post->date}}</h5>
                                        @else
                                        <h5 style="color: #414141">{{$post->date_from}}</h5>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('post.edit', [app()->getLocale(), $post->id]) }}"
                                            type="button" class="btn btn-primary">{{ trans('admin.edit') }}</a>
                                        <a href="{{ route('post.destroy', [app()->getLocale(), $post->id]) }}"
                                            onclick="return confirm_alert(this);" type="button"
                                            class="btn btn-danger">{{ trans('admin.delete') }}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
