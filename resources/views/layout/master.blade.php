<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield("title")</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>

	@yield("navbar")
	@yield("content")






	<script src="{{asset('assets/js/jQuery.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	@yield("footer")
</body>
</html>