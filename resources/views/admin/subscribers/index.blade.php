@extends('admin.layouts.app')

@push('name')
{{ trans('admin.users') }}
@endpush

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ trans('admin.subscribers') }}</h1>
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
                                <tr class="fw-bold fs-6 text-gray-800 px-7">
                                    <th>{{ trans('admin.email') }}</th>
                                    <th>{{ trans('admin.create_date') }}</th>
                                    <th>{{ trans('admin.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                <tr>
                                    <td><a href="maito:{{ $subscriber->email }}" target="blank"
                                            style="color: #414141">{{ $subscriber->email }}</a></td>
                                    <td>{{ $subscriber->created_at }}</td>
                                    <td>
                                        <a href="/{{ app()->getLocale() }}/admin/subscribers/delete/{{$subscriber->id}}"
                                            onclick="return confirm('დარწმნებლი ხართ რომ გსურთ გამომწერის წაშლა ?');"
                                            type="button" class="btn btn-danger">{{ trans('admin.delete') }}</a>
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
