@extends('admin.layouts.app')
@push('name')
{{ trans('admin.sections') }}
@endpush
@section('content')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ trans('admin.add_section') }}</h1>
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
                    <h3 class="card-title">{{ trans('admin.add_section') }}</h3>
                </div>
                <div class="card-body py-5">
                    <form action="/{{ app()->getLocale() }}/admin/sections/create" method="post"
                        enctype="multipart/form-data" novalidate>
                        @csrf

                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            @foreach (config('app.locales') as $locale)
                            <li class="nav-item">
                                <a href="#locale-{{ $locale }}"
                                    class="nav-link @if($locale == app()->getLocale()) active @endif"
                                    aria-expanded="false" data-bs-toggle="tab">
                                    <span>{{ trans('admin.locale_' . $locale) }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach (config('app.locales') as $locale)
                            <div class="tab-pane fade @if($locale == app()->getLocale()) active show @endif"
                                id="locale-{{ $locale }}" role="tabpanel">

                                <div class="form-floating mb-7">

                                    <input type="text" name="{{ $locale }}[title]" placeholder=""
                                        parsley-trigger="change" class="@error('title') danger @enderror form-control"
                                        id="{{ $locale }}-title" Required>
                                    @error("{$locale}.title")
                                    <small
                                        style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <label for="{{ $locale }}-title">{{ trans('admin.title') }}</label>

                                </div>

                                <div class="form-floating mb-7">

                                    <input type="text" name="{{ $locale }}[slug]" placeholder=""
                                        parsley-trigger="change" class="@error('slug') danger @enderror form-control"
                                        id="{{ $locale }}-slug" Required>
                                    @error("{$locale}.slug")
                                    <small
                                        style="display:block; color:rgb(239, 83, 80)">{{ $message }}</small>
                                    @enderror
                                    <label for="{{ $locale }}-slug">{{ trans('admin.slug') }}</label>

                                </div>

                                <div class="form-floating mb-7">
                                    @foreach ($sections as $section)
                                    <input type="hidden" name="order" value="{{ $section->id }}">
                                    @endforeach
                                </div>

                                <div class="form-floating mb-7">
                                    <textarea class="form-control kt_docs_ckeditor_classic" name="{{ $locale }}[desc]"
                                        placeholder="Description Here..." style="height: 100px"></textarea>
                                </div>

                                <div class="form-floating mb-7">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input type="hidden" name="{{ $locale }}[active]" value="0" />
                                        <input class="form-check-input" name="{{ $locale }}[active]" type="checkbox"
                                            value="1" id="{{ $locale }}-active" />
                                        @error('active')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                        @enderror
                                        <label class="form-check-label" for="{{ $locale }}-active">
                                            {{ trans('admin.active') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        <div style="padding-top:20px">
                            <div class="form-floating mb-7">
                                @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.type_is_required') }}</small>
                                @enderror
                                <select class="form-control  @error('type') danger @enderror " name="type_id"
                                    id="typeselect">

                                    @foreach ($sectionTypes as $key => $type)
                                    <option value="{{ $type['id'] }}" id="typeoption">
                                        {{ trans('sectionTypes.' . $key) }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="type">{{ trans('admin.type') }}</label>

                            </div>

                            <div class="form-floating mb-7">
                                <select class="form-control" name="parent_id" id="parent">
                                    <option value="">{{ trans('admin.parent') }}</option>
                                    @foreach ($sections as $key => $sec)
                                    <option value="{{ $sec->id }}">{{ $sec->title }}</option>
                                    @endforeach
                                </select>
                                <label for="parent">{{ trans('admin.parent') }}</label>
                            </div>

                            @foreach (menuTypes() as $key => $menuType)
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="menu_types[]" id="type_{{ $key }}" value="{{ $key }}">
                                <label for="type_{{ $key }}">
                                    {{ trans('menuTypes.' . $menuType) }}
                                </label>
                            </div>
                            @endforeach

                            <div class="form-group text-right mb-0">
                                <button
                                    class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable"
                                    type="submit">
                                    {{ trans('admin.save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
