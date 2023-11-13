@extends('admin.layouts.app')

@push('name')
{{ trans('admin.components') }}
@endpush

@section('content')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Section Components</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Dashboard</li>
                </ul>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">{{ trans('admin.edit_component') }}</h3>
                    <div class="card-toolbar">

                    </div>
                </div>
                <div class="card-body py-5">
                    <form action="/{{ app()->getLocale() }}/admin/sections/edit/{{ $section->id }}" method="post"
                        enctype="multipart/form-data" data-parsley-validate novalidate>
                        @csrf
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            @foreach (config('app.locales') as $locale)
                            <li class="nav-item">
                                <a href="#locale-{{ $locale }}"
                                    class="nav-link @if ($locale == app()->getLocale()) active @endif"
                                    aria-expanded="false" data-bs-toggle="tab">
                                    <span>{{ trans('admin.locale_' . $locale) }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            @foreach (config('app.locales') as $locale)
                            <div class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif"
                                id="locale-{{ $locale }}" role="tabpanel">

                                <div class="form-floating mb-7">
                                    <input type="text" class="form-control @error('title') danger @enderror"
                                        value="{{ $section->translate($locale)->title ?? '' }}"
                                        id="{{ $locale }}-title" placeholder="" name="{{ $locale }}[title]" Required />
                                    <label for="{{ $locale }}-title">{{ trans('admin.title') }}</label>
                                </div>

                                <div class="form-floating mb-7">
                                    <textarea class="form-control kt_docs_ckeditor_classic" name="{{ $locale }}[desc]"
                                        placeholder="Description Here..." id="{{ $locale }}-desc">{{ $section->translate($locale)->desc ?? '' }}</textarea>
                                </div>


                            </div>
                            @endforeach
                        </div>
                        <div class="form-floating mb-7">
                            <select disabled class="form-control @error('parent_id') danger @enderror" name="parent_id"
                                id="parent_id">
                                <option value="" selected>{{ trans('admin.parent') }}</option>
                                @foreach ($sections as $key => $sec)
                                    <option value="{{ $sec->id }}"
                                        {{ $sec->id == $section->parent_id ? 'selected' : '' }}>{{ $sec->title }}</option>
                                @endforeach
                            </select>
                            <label for="type">{{ trans('admin.parent') }}</label>
                        </div>

                        <div class="mb-7">
                            <select class="form-select form-select-solid" data-control="select2" name="type_id"
                                data-placeholder="{{ trans('admin.component') }}" data-hide-search="true">
                                <option value="">{{ trans('admin.choose_component') }}</option>
                                @foreach (componentsType() as $key => $type)
                                    <option value="{{ $type['id'] }}"
                                        {{ $type['id'] == $section->type_id ? 'selected' : '' }}>
                                        {{ trans('componentTypes.' . $key) }}</option>
                                @endforeach
                            </select>
                                @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.component_is_required') }}</small>
                                @enderror
                        </div>
                        @if($section->type_id == 2)
                        <div class="button-container on">
                            {{-- <div class="button"></div> --}}
                            <div class="text">
                                {{ Form::label(trans('admin.scroll_content'), null, ['class' => 'control-label']) }}
                                <br>

                                <input type="hidden" name="scroll_content" value="0" />
                                <input type="checkbox" name="scroll_content" @if(isset($section->additional['scroll_content']) && $section->additional['scroll_content'] == 1) checked @endif value="1" data-plugin="switchery"
                                    data-color="#3bafda" />
                            </div>
                          </div>
                        @endif
                        <input type="hidden" name="parent_id" value="{{ $section->id }}">
                        <input type="hidden" name="is_component" value="1">
                        <div class="card-footer">
                            <button
                                class="float-end btn btn-primary waves-effect waves-light mr-1 btn-save btn-save-nestable"
                                type="submit">
                                {{ trans('admin.save') }}
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
