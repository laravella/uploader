@include("crud::title")

@include("uploader::extra_head")

@include('crud::layouts.admin.navbar')

@include("crud::messages")

@include("uploader::getupload")

@include("crud::bottom")

@section('content')
    @yield('getUpload')
@stop
