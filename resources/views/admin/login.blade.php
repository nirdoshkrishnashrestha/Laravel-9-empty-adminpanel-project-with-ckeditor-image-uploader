<title>Login - {{ env('APP_NAME') }}</title>
<link rel="stylesheet" href="{{ asset('public/admin/css/login.css') }}">

<div class="login-section">

	<div class="login-box">
		<div class="form">

			<h2>{{ env('APP_NAME') }}</h2>
				<h3>Login</h3>
			
     <form method="POST" action="{{ route('login_users') }}" >
  
        {{ csrf_field() }}
        <br>
       <div class="result">
         @if(Session::get('fail'))
           <div class="alert alert-danger">
            {{ Session::get('fail') }}
          </div>    
         @endif
       </div>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="inputBx">
					<input type="text" name="user" placeholder="Username" value="{{ old('user') }}">
					<img src="{{ asset('public/admin/images/user.png') }}"/>
				</div>
				<span class="text-danger">
        @error('user')
            {{ $message }}
        @enderror
      </span>
				<div class="inputBx">
					<input type="password" name="pass" placeholder="Password" value="{{ old('pass') }}">
					<img src="{{ asset('public/admin/images/lock.png') }}"/>
				</div>
                <span class="text-danger">
        @error('pass')
            {{ $message }}
        @enderror
      </span>		
				<div class="inputBx">
					<input type="submit" value="Login">
				</div>
				
			</form>
		</div>
	</div>
	</div>
	</div>
