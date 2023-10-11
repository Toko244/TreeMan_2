@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h3>{{ $section->title }}</h3>
            <a href="/{{ app()->getLocale() }}/admin/section/{{ $section->id }}/posts/create" type="button"
                class="float-right btn btn-info waves-effect width-md waves-light">{{ trans('admin.add_post') }}</a>

            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ trans('admin.image') }}</th>
                        <th>{{ trans('admin.title') }}</th>
                        <th>{{ trans('admin.desc') }}</th>
                        <th>{{ trans('admin.date') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                @if (isset($post->image))
                                    <img src="/{{config('config.file_path').$post->image}}" alt="" style="width: 80px;">
                                @elseif(isset($post->thumb))
                                    <img src="{{image($post->thumb)}}" alt="" style="width: 80px;">
                                @else
                                    <img src="/projectscover.png" alt="" style="    width: 80px;">
                                @endif
                            </td>
                            <td class="list-group-item">
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
                                    <h5 style="color: #414141">{!! Str::limit($post->translate()->position, 30)!!}</h5>
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
                                <a style="color: #fff" href="{{ route('post.edit', [app()->getLocale(), $post->id]) }}"
                                    class="btn btn-primary">{{ trans('admin.edit') }}</a>
                                <a style="color: #fff" href="{{ route('post.destroy', [app()->getLocale(), $post->id]) }}"
                                    onclick="return confirm_alert(this);"
                                    class="btn btn-warning">{{ trans('admin.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- third party css -->
<link href="{{ asset('/admin/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endpush

@push('scripts')
<!-- third party js -->
<script src="{{ asset('/admin/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('/admin/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('/admin/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/admin/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->
<!-- Datatables init -->
<script src="{{ asset('/admin/js/pages/datatables.init.js') }}"></script>
<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Post?");
    }
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function (event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }

</script>
@endpush
