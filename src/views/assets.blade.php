@section('css_assets')
<!-- Generic page styles -->
<link rel="stylesheet" href="packages/laravella/uploader/assets/css/style.css">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<!-- <link rel="stylesheet" href="http://blueimp.github.io/cdn/css/bootstrap-responsive.min.css"> -->
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://blueimp.github.io/cdn/css/bootstrap-ie6.min.css">
<![endif]-->
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="packages/laravella/uploader/assets/css/jquery.fileupload-ui.css">
{{----}}

<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="packages/laravella/uploader/assets/css/jquery.fileupload-ui-noscript.css"></noscript>
<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="packages/laravella/uploader/assets/styles/css/main.css">
@stop

@section('js_assets')
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <p class="size">{%=o.formatFileSize(file.size)%}</p>
            {% if (!o.files.error) { %}
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            {% } %}
        </td>
        <td>
            {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
            </p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
        </td>
    </tr>
{% } %}
</script>

{{--
this breaks the bootstrap navbar

<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="packages/laravella/uploader/assets/js/vendor/bootstrap.min.js"></script>
--}}

<!-- <script src="packages/laravella/uploader/assets/js/jquery.min.js"></script> -->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="packages/laravella/uploader/assets/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="packages/laravella/uploader/assets/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="packages/laravella/uploader/assets/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="packages/laravella/uploader/assets/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="packages/laravella/uploader/assets/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="packages/laravella/uploader/assets/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="packages/laravella/uploader/assets/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="packages/laravella/uploader/assets/js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->

@stop