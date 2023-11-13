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
                    {{ trans('admin.users') }}</h1>
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
                                    @if (auth()->user()->isType('admin'))
                                    <a href="/{{ app()->getLocale() }}/admin/users/add">
                                        <button type="button" class="btn btn-sm btn-primary">
                                            {{ trans('admin.add_user') }}
                                        </button>
                                    </a>
                                    @endif
                                </div>
                                <tr class="fw-bold fs-6 text-gray-800 px-7">
                                    <th>{{ trans('admin.name') }}</th>
                                    <th>{{ trans('admin.email') }}</th>
                                    <th>{{ trans('admin.type') }}</th>
                                    <th>{{ trans('admin.create_date') }}</th>
                                    <th>{{ trans('admin.update_date') }}</th>
                                    <th>{{ trans('admin.action') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ trans('admin.'.$user->type) }}</td>
                                    <td>{{ $user->created_at->format('d.m.Y H:i') }}</td>
                                    <td>{{ $user->updated_at->format('d.m.Y H:i') }}</td>
                                    <td>
                                        <a href="/{{ app()->getLocale() }}/admin/users/edit/{{ $user->id }}"
                                            type="button" class="btn btn-primary">{{ trans('admin.edit') }}</a>
                                    </td>
                                    <td>
                                        @if ($user->id != 1)
                                        <a href="/{{ app()->getLocale() }}/admin/users/destroy/{{ $user->id }}"
                                            onclick="return confirm(trans('admin.sure_to_delete_user'));" type="button"
                                            class="btn btn-danger">{{ trans('admin.delete') }}</a>
                                        @endif
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
