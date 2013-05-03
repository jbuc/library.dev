<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Dev Library :: repeat and reuse</title>
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