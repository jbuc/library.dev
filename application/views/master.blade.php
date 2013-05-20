<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Dev Library :: repeat and reuse</title>
	<link rel="stylesheet" href="/css/vendor/flatui/bootstrap.css">
	<link rel="stylesheet" href="/css/vendor/flatui/flat-ui.css">
	<link rel="stylesheet" href="/css/vendor/cm/codemirror.css">
	<link rel="stylesheet" href="/css/vendor/cm/twilight.css">
	<script src="/js/vendor/flatui/jquery-1.8.2.min.js"></script>
	<style>
		.content {width:98%; margin:0 auto;}
		label {display:block;}
		textarea {box-sizing:border-box;}
		input[type='text'], textarea {display:block;  width:90%;}
		input[type='text'] {line-height:1.5em;width:95%;background: #141414; border-color: #323435;}
		.inputGroup {width:50%; float:left;}
		.CodeMirror {min-height: 500px; border:1px solid #303030; margin:0 auto;}
		.formWrapper {margin:20px; overflow: hidden;}
		input[type='submit'] {clear:both;}
		body {background: #262626; color:#eee;}
	</style>

	@yield('styles')

</head>
<body>
	
	<h1 class="title"> @yield('title') </h1>
	

	
	<div class="content">
		@yield('content')
	</div>


	@yield('script')
</body>
</html>