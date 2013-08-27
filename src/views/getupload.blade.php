@section('getUpload') 
@if($action == 'getUpload')
<div class="page-header">
    <h1>Upload</h1>
</div>

<div class="well">
    <div class="btn-group">
        <a href="#" id="btnVisualize" onclick="javascript:debugBox();" class="btn">Debug</a>
        <a href="#" id="btnLog" onclick="javascript:logBox();" class="btn">Log</a>
    </div>
    <div class="btn-group pull-right">
        <a href="/admin" id="btnVisualize" class="btn"><i class="icon-remove"></i></a>
    </div>
</div>

@yield('messages')

<div class="container">
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="/upload/upload" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value=""></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span12">
                <div class="btn-group">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel upload</span>
                </button>
                <!--
                <button type="button" class="btn btn-danger delete">
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                </button>
                <button type="button" class="btn btn-danger toggle">
                    <i class="icon-check icon-white"></i>
                </button>
                -->
                </div>
                <select name="mcollection_id">
                    <option value="">-- Collection --</option>
                    @foreach($selects['mcollection_id'] as $option)
                        <option value="{{$option['value']}}">{{$option['text']}}</option>
                    @endforeach
                </select>
                <select name="gallery_id">
                    <option value="">-- Gallery --</option>
                    @foreach($selects['gallery_id'] as $option)
                        <option value="{{$option['value']}}">{{$option['text']}}</option>
                    @endforeach
                </select>
                
                <!-- The loading indicator is shown during file processing -->
                <span class="fileupload-loading"></span>
            </div>
            <!-- The global progress information -->
            <div class="span5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

@yield('js_assets')

@endif
@stop

