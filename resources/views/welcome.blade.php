<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vacatota|Ac</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffe;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

          .title  h3{
            margin:0;

            }

            .links a{
                color:black;
                font-weight: 900;
            }


.links a:hover {
    background-color: white;
    color: blue;
    font-size: 16px;
    font: 200;
}

.m-b-md{
    
font-family: Arial; 
font-size: 90px; 
COLOR: #1278BF; 
text-shadow: 0px 0px 9px #508AD3;
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
                        <a href="{{ route('login') }}">Acceder</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
             <div class="title">
                   
                        <img src="{{asset('img/cat1.png')}}">
                </div> 
                 <div class="title m-b-md">
                <h3>vaCATota</h3>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs" title="Realiza tus compras en linea"><b>Tienda</b></a>
                    <a href="https://laracasts.com">Vestidos</a>
                    <a href="https://laravel-news.com">ELéctricos</a>
                    <a href="https://nova.laravel.com">Nosotros</a>
                    <a href="https://forge.laravel.com">Otro</a>
                    <a href="https://github.com/laravel/laravel">Contacto</a>
                    <a href="https://github.com/laravel/laravel">Ayuda</a>
                </div>
                <hr>
            </div>
        </div>
    </body>
</html>
