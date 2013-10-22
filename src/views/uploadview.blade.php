@section('title')
File Upload
@stop

@include("uploader::assets")

@include("uploader::extra_head")

@include('skins::'.$skin['admin'].'.inc.navbar')

@include("skins::".$skin['admin'].".inc.messages")

@include("uploader::getupload")

@include("skins::".$skin['admin'].".inc.bottom")

@section('content')
    @yield('getUpload')
@stop
