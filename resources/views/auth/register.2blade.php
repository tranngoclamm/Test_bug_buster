<!doctype html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Login" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/sign_in.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h1 class="w3ls">Bug Buster</h1>
<div class="content-w3ls">
    <div class="content-agile1">
        <h2 class="agileits1">Official</h2>
        <p class="agileits2">"It’s not a bug — it’s an undocumented feature."</p>
    </div>
    <div class="content-agile2">
            <form method="POST" action="{{ route('register') }}">
            
                @csrf
			<h2 class="agileits3">Đăng Ký</h2>
			<div class="form-control w3layouts">
				<input type="text" class="form-control" id="firstname" name="name" placeholder="Họ tên" title="Please enter your name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>

			<div class="form-control w3layouts">	
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" title="Please enter a valid email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

			<div class="form-control agileinfo">	
				<input type="password" class="form-control lock" name="password" placeholder="Mật khẩu" id="password1" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>	

			<div class="form-control agileinfo">	
				<input type="password" class="form-control lock" placeholder="Xác nhận mật khẩu" id="password2" name="password_confirmation" required autocomplete="new-password">
            </div>			
			
			<input type="submit" class="login" value="Đăng Ký">
		</form>
        
        <p class="wthree w3l">Đã có tài khoản? <a href="/login" class="text_blue">Đăng nhập</a></p>
        
    </div>
    <div class="clear"></div>
</div>
<p class="copyright w3l">© 2024 Form. Design by <a href="https://github.com/tranngoclamm" target="_blank">Me</a></p>
</body>
</html>
