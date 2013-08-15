@include("crud::title")

@include("uploader::extra_head")

@include('crud::layouts.admin.navbar')

@include("uploader::getupload")

@include("crud::bottom")
@include("crud::messages")

@section('content')
    @yield('getUpload')
@stop
