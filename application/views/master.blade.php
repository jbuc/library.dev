<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Dev Library :: repeat and reuse</title>
	<link rel="stylesheet" href="/css/vendor/flatui/bootstrap.css">
	<link rel="stylesheet" href="/css/vendor/flatui/flat-ui.css">
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