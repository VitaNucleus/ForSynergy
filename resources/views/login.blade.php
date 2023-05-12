<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<title>Login</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<h1>Login</h1>
	<p>Hello, friend, it is Laravel site</p>
	<form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.login') }}">
		@csrf
		<div class="form-group">
			<label for="email" class="col-form-label-lg">You email</label>
			<input class="form-control" id="email" type="text" name="email" value="" placeholder="Email">
		</div>
	<div class="form-group">
		<label for="password" class="col-form-label-lg">Password</label>
		<input class="form-control" id="password" type="password" name="password" value="" placeholder="Password">
	</div>
	<div class="form-group">
		<button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Enter</button>
	</div>
	</form>
</body>
</html>