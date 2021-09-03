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
             body{
                background-color:red;
            }
            li a{
                color:white;
                text-decoration:none;
            }
            h2 {
                font-size:30px;
                color:white;
                text-decoration:none;
            }
            a{
                color:white;
                text-decoration:none;

            }
            li a:hover{
                font-size:28px;
            }
        
        

        </style>
    </head>
    <body>
        

            

                <div class="links">
                    <a href="{{ route('home')}}"><h2>Home</h2></a>
                    <ul>
                        <li><a href="{{ route('serie-tv')}}">Serie-tv</a></li>
                        <li><a href="{{ route('attori')}}">Attori</a></li>
                        <li><a href="{{ route('genere')}}">Genere e Anno</a></li>
                    </ul>
                    <!-- <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a> -->
                 
                </div>
            
        
    </body>
</html>
