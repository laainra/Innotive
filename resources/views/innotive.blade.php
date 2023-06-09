<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
        <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>


    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    <title>INNOTIVE</title>
  </head>
  <body>
    <div class="container">
      @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
      @endif
  
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{ route('login') }}" method="POST" class="sign-in-form" id="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" value="{{old('username')}}" autofocus required/>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" class="btn"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </form>
        
          <form action="{{route('register')}}" method="post" class="sign-up-form" id="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" autofocus required class="@error('name') is-invalid
              @enderror"/>
              @error('name')
                  <div font-color='red'>
                    {{$message}}
                  </div>

              @enderror
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required/>
            </div>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" pattern="[a-zA-Z0-9_]+" title="Username must only contain letters, numbers or underscore." value="{{ old('username') }}"required/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" minlength="8" title="Password must contain  at least 8 characters long" onkeyup="check();" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirm Password" title="Please enter the same password as above." onkeyup="check();" required/>
              
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Sign In to<br>Recharge Direct</h3><br>
            <p class="m-3">
              Hello, Welcome to Website, If you don't have an account you can
            </p>
            <button  class="btn transparent" id="sign-up-btn">Register</button>
          </div>
          <img src="{{asset('img/log.png')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3><br>
            <p>
              Make money with your innovation<br>Empowering Innovation and Creativity, Sharing Possibilities.
            </p><br>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button><br><br>
          </div>
          <img src="{{asset('img/registrasi.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
    var check = function() {
      if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
      }
    }

      </script>
  </body>
</html>
