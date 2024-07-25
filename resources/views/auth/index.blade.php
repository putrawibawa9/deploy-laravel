<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="/register" method="post">
             @csrf
			<h1>Buat Akun</h1>
			<input name="username" type="text" placeholder="Username" />
			<input name="password" type="password" placeholder="Password" />
			<button>Daftar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Masuk</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			@if (isset($error))
				<span style="color: red;">Password / Username Salah</span>
			@elseif(session('register'))
				<span style="color: blue;">{{ session('register') }}</span>
			@endif
			<input name="username" placeholder="Username" />
			<input name="password" type="password" placeholder="Password" />
			<button name="login">Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Selamat Datang!</h1>
				<p>Tolong daftar</p>
				<button class="ghost" id="signIn">Masuk</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat Datang!</h1>
				<p>Masukan data anda</p>
				<button class="ghost" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<!-- <p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p> -->
</footer>
<script src="js/login.js"></script>
</body>
</html>