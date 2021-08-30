<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reset Password</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: #191919 ;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
            }
            .box{
          width: 300px;
          padding: 40px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #191919;
          text-align: center;
       }
           .box h1{
         color: white;
         text-transform: uppercase;
         font-weight: 500;
      }
          .box input[type = "email"],.box input[type = "password"]{
        border:0;
       background: none;
       display: block;
       margin: .1px auto;
       text-align: center;
       border: 2px solid #3498db;
       padding: 14px 10px;
       width: 200px;
       outline: none;
       color: white;
       border-radius: 24px;
       transition: 0.25s;
     }
         .box input[type = "email"]:focus,.box input[type = "password"]:focus{
       width: 280px;
       border-color: #2ecc71;
     }
        .box input[type = "submit"]{
       border:0;
       background: none;
       display: block;
       margin: .1px auto;
       text-align: center;
       border: 2px solid #2ecc71;
       padding: 14px 40px;
       outline: none;
       color: white;
       border-radius: 24px;
       transition: 0.25s;
       cursor: pointer;
     }
        .box input[type = "submit"]:hover{
       background: #2ecc71;
     }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <?php if (count($errors) > 0): ?>
        <div class="alert alert-danger">
          <ul>
            <?php foreach ($errors->all() as $value): ?>
              <li style="color:red;">{{$value}}</li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <form class="box" action="{{URL::to('/reset')}}" method="post">
                  <h1>RESET PASSWORD</h1>

                  <input type="email" name="email" placeholder="enter email" value="{{Request::old('email')}}"  required="">
                  <br><br>
                  <input type="password" name="pass" placeholder="Old password" value="{{Request::old('password')}}" required="">
                  <br><br>
                  <input type="password" name="password1" placeholder="New password" value="{{Request::old('password1')}}" required="">
                  <br><br>
                  <input type="password" name="password2" placeholder="Confirm password" value="{{Request::old('password2')}}" required="">
                  <br><br>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="submit" name="" value="submit">

                </form>



            </div>
        </div>
    </body>
</html>
