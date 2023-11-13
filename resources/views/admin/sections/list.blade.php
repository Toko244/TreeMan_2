@extends('admin.layouts.app')

@push('name')
{{ trans('admin.sections') }}
@endpush

@section('content')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ trans('admin.sections') }}</h1>
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
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Sections</h3>
                <div class="card-toolbar">
                    @if (auth()->user()->isType('admin'))
                        <a href="/{{ app()->getLocale() }}/admin/sections/create">
                            <button type="button" class="btn btn-sm btn-light">
                                {{ trans('admin.add_section') }}
                            </button>
                        </a>
                    @endif
                </div>
            </div>
            <div class="card-body py-5">
                <div class="dd section-list">
                    @include('admin.sections.list-helper', ['sections' => $sections])
                    <script>
                        function confirm_alert(node) {
                            return confirm("Do you want to delete this Section?");
                        }

                    </script>
                </div>
            </div>
            <div class="card-footer">
                <button class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable"
                    type="submit">
                    {{ trans('admin.save') }}
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
