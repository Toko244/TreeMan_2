@extends('admin.layouts.app')

@push('name')
    {{ trans('admin.users') }}
@endpush



@section('content')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ trans('admin.edit_user') }}</h1>
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
                <h3 class="card-title">{{ trans('admin.edit_user') }}</</h3>
            </div>
            <div class="card-body py-5">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                        <form action="/{{ app()->getLocale() }}/admin/users/edit/{{ $user->id }}" method="post" data-parsley-validate novalidate>
                            @csrf
                            <div class="mb-7">
                                <h5>{{ trans('admin.type') }}</h5>
                            @error('type_id')
                                <small style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.type_is_required') }}</small>
                            @enderror

                            <select class="form-select @error('type_id') danger @enderror" data-control="select2" data-placeholder="Select an option" name="type_id">
                                @foreach ($user_types as $key => $type)
                                    <option value="{{ $key }}" @if ($user->type_id == $key) selected @endif >{{ trans('admin.'.$type) }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-floating mb-7">
                                <input type="text" name="name" parsley-trigger="change" value="{{ $user->name }}" class="form-control @error('name') danger @enderror" placeholder="" required />
                                @error('name')
                                    <small style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.username_is_required') }}</small>
                                @enderror
                                <label for="userName">{{ trans('admin.username') }}</label>
                            </div>
                            <div class="form-floating mb-7">
                                <input type="email" name="email" parsley-trigger="change" value="{{ $user->email }}" class="form-control @error('email') danger @enderror" placeholder="" required />
                                @error('email')
                                    <small style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.email_is_required_and_must_be_unique') }}</small>
                                @enderror
                                <label for="emailAddress">{{ trans('admin.email') }}</label>
                            </div>

                            <div class="form-floating mb-7">
                                <input type="password" name="password" class="form-control @error('password') danger @enderror" placeholder="" required />
                                @error('password')
                                    <small style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.password_is_required_min_8_characters') }}</small>
                                @enderror
                                <label for="pass1">{{ trans('admin.password') }}</label>
                            </div>
                            <div class="form-floating mb-7">
                                <input type="password" name="re_password" class="form-control @error('email') danger @enderror" placeholder="" required />
                                @error('re_password')
                                    <small style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.email_is_required_and_must_be_unique') }}</small>
                                @enderror
                                <label for="passWord2">{{ trans('admin.re_password') }}</label>
                            </div>
                            <div class="card-footer">
                                <button class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
