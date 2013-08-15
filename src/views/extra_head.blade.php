{{-- crud::layouts.default includes extra_head in the html head --}}
@section('extra_head')
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>jQuery File Upload Demo</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="http://blueimp.github.io/cdn/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<link rel="stylesheet" href="http://blueimp.github.io/cdn/css/bootstrap-responsive.min.css">
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://blueimp.github.io/cdn/css/bootstrap-ie6.min.css">
<![endif]-->
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="public/packages/laravella/uploader/assets/css/jquery.fileupload-ui-noscript.css"></noscript>
@stop