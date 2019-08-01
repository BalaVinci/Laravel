<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #110019;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            @import url(https://fonts.googleapis.com/css?family=Varela+Round);
          
       
          
          h1 {
            color: hsla(0, 0%, 0%, .9);
            font: normal 140px Varela Round, sans-serif;
         
            left: 0;
            letter-spacing: 5px;
           
         
            
           
            animation: move linear 2000ms infinite;  
          }
          
          @keyframes move {
            0% {
              text-shadow:
                4px -4px 0 hsla(0, 100%, 50%, 1), 
                3px -3px 0 hsla(0, 100%, 50%, 1), 
                2px -2px 0 hsla(0, 100%, 50%, 1), 
                1px -1px 0 hsla(0, 100%, 50%, 1),
                -4px 4px 0 hsla(180, 100%, 50%, 1), 
                -3px 3px 0 hsla(180, 100%, 50%, 1), 
                -2px 2px 0 hsla(180, 100%, 50%, 1), 
                -1px 1px 0 hsla(180, 100%, 50%, 1)
              ;
            }
            25% {    
              text-shadow:      
                -4px -4px 0 hsla(180, 100%, 50%, 1), 
                -3px -3px 0 hsla(180, 100%, 50%, 1), 
                -2px -2px 0 hsla(180, 100%, 50%, 1), 
                -1px -1px 0 hsla(180, 100%, 50%, 1),
                4px 4px 0 hsla(0, 100%, 50%, 1), 
                3px 3px 0 hsla(0, 100%, 50%, 1), 
                2px 2px 0 hsla(0, 100%, 50%, 1), 
                1px 1px 0 hsla(0, 100%, 50%, 1)      
              ;
            }
            50% {
              text-shadow:
                -4px 4px 0 hsla(0, 100%, 50%, 1), 
                -3px 3px 0 hsla(0, 100%, 50%, 1), 
                -2px 2px 0 hsla(0, 100%, 50%, 1), 
                -1px 1px 0 hsla(0, 100%, 50%, 1),
                4px -4px 0 hsla(180, 100%, 50%, 1), 
                3px -3px 0 hsla(180, 100%, 50%, 1), 
                2px -2px 0 hsla(180, 100%, 50%, 1), 
                1px -1px 0 hsla(180, 100%, 50%, 1)
              ;
            }
            75% {
              text-shadow:
                4px 4px 0 hsla(180, 100%, 50%, 1), 
                3px 3px 0 hsla(180, 100%, 50%, 1), 
                2px 2px 0 hsla(180, 100%, 50%, 1), 
                1px 1px 0 hsla(180, 100%, 50%, 1),
                -4px -4px 0 hsla(0, 100%, 50%, 1), 
                -3px -3px 0 hsla(0, 100%, 50%, 1), 
                -2px -2px 0 hsla(0, 100%, 50%, 1), 
                -1px -1px 0 hsla(0, 100%, 50%, 1)      
              ;
            }
            100% {
              text-shadow:
                4px -4px 0 hsla(0, 100%, 50%, 1), 
                3px -3px 0 hsla(0, 100%, 50%, 1), 
                2px -2px 0 hsla(0, 100%, 50%, 1), 
                1px -1px 0 hsla(0, 100%, 50%, 1),
                -4px 4px 0 hsla(180, 100%, 50%, 1), 
                -3px 3px 0 hsla(180, 100%, 50%, 1), 
                -2px 2px 0 hsla(180, 100%, 50%, 1), 
                -1px 1px 0 hsla(180, 100%, 50%, 1)
              ;
            }  
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

            <div class="content" id="starshine">
                <div class="title m-b-md">
                   <h1> VINCI Laravel </h1>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
