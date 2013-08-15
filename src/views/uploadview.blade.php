@include("crud::title")
@include("crud::extra_head")
@include('crud::layouts.admin.navbar')

@include("uploader::getupload")

@include("crud::bottom")

@section('content')
    @yield('getUpload')
@stop



