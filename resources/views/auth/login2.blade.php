<!doctype html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Login" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h1 class="w3ls">Bug Buster</h1>
<div class="content-w3ls">
    <div class="content-agile1">
        <h2 class="agileits1">Official</h2>
        <p class="agileits2">"It’s not a bug — it’s an undocumented feature."</p>
    </div>
    <div class="content-agile2">
        <form action="/LoginSqlInjection.php" method="post">
            @csrf
			<h2 class="agileits3 login-label">Đăng nhập</h2>
			<div class="form-control w3layouts">	
				<input type="text" id="email" name="email" placeholder="Tài khoản" title="" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" placeholder="Mật khẩu" id="password1" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="flex between">
                <div class="form-check block">
                    <input class="form-check-input pd-left" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text_blue" for="remember">
                        {{ __('Ghi nhớ đăng nhập') }}
                    </label>
                </div>
                <div class="block">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link text_blue align-center" href="{{ route('password.request') }}">
                            {{ __('Quên mật khẩu?') }}
                        </a>
                    @endif
                </div>
            </div>		
			<input type="submit" class="login" value="Đăng nhập">
            <p class="wthree w3l">Hoặc đăng nhập bằng</p>
            <ul class="social-agileinfo wthree2">
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
            </ul>
            
		</form>
        

    </div>
    <div class="clear"></div>
</div>
<p class="copyright w3l">© 2024 Form. Design by <a href="https://github.com/tranngoclamm" target="_blank">Me</a></p>
</body>
</html>
