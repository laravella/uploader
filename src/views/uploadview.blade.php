
{{--
@include("uploader::getupload")

@include("crud::title")
@include("crud::extra_head")
    @yield('getUpload')

--}}
@section('content')
@stop

@include('crud::layouts.admin.navbar')


@include("crud::bottom")
