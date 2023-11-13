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
                    {{ trans('admin.edit_profile') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Admin</a>
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
                    <h3 class="card-title">{{ trans('admin.edit_profile') }}</h3>
                </div>
                <div class="card-body py-5">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                            <form action="/{{ app()->getLocale() }}/admin/profile" method="post" data-parsley-validate
                                novalidate>
                                @csrf
                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name"
                                        parsley-trigger="change" required
                                        class="@error('name') danger @enderror form-control" placeholder="" />
                                    @error('name')
                                    <small
                                        style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.username_is_required') }}</small>
                                    @enderror
                                    <label for="userName">{{ trans('admin.username') }}</label>
                                </div>

                                <div class="form-floating mb-7">
                                    <input type="email" value="{{ $user->email }}" name="email" parsley-trigger="change"
                                        required class="@error('email') danger @enderror form-control" placeholder="" />
                                    @error('email')
                                    <small
                                        style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.email_is_required_and_must_be_unique') }}</small>
                                    @enderror
                                    <label for="emailAddress">{{ trans('admin.email') }}</label>
                                </div>
                                <div class="form-floating mb-7">
                                    <input type="password" class="form-control @error('password') danger @enderror"
                                        name="password" placeholder="" />
                                    @error('password')
                                    <small
                                        style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.password_is_required_min_8_characters') }}</small>
                                    @enderror
                                    <label for="pass1">{{ trans('admin.password') }}</label>
                                </div>
                                <div class="form-floating mb-7">
                                    <input type="password" name="re_password"
                                        class="form-control @error('re_password') danger @enderror" placeholder="" />
                                    <label for="passWord2">{{ trans('admin.re_password') }}</label>
                                </div>
                                <div class="card-footer">
                                    <button
                                        class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable"
                                        type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection
