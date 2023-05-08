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
	<h1>Registration</h1>
	<p>Hello, friend, it is Laravel site</p>
	<form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.registration') }}">
		@csrf
		<div class="form-group">
			<label for="email" class="col-form-label-lg">You email</label>
			<input class="form-control" id="email" type="text" name="email" value="" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="username" class="col-form-label-lg">You username</label>
			<input class="form-control" id="username" type="text" name="username" value="" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="surname" class="col-form-label-lg">You surname</label>
			<input class="form-control" id="surname" type="text" name="surname" value="" placeholder="Surname">
		</div>
		<div class="form-group">
			<label for="name" class="col-form-label-lg">You name</label>
			<input class="form-control" id="name" type="text" name="name" value="" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="middlename" class="col-form-label-lg">You middle name</label>
			<input class="form-control" id="middlename" type="text" name="middlename" value="" placeholder="Middlename">
		</div>
		<div class="form-group">
			<label for="passportseries" class="col-form-label-lg">You passport series</label>
			<input class="form-control" id="passportseries" type="text" name="passportseries" value="" placeholder="Passportseries">
		</div>
		<div class="form-group">
			<label for="passportnumber" class="col-form-label-lg">You passport number</label>
			<input class="form-control" id="passportnumber" type="passportnumber" name="email" value="" placeholder="Passportnumber">
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