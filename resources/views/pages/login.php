<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Login 
                </div>
                <tr>
                     <td colspan="3">
                        <center><font face="Impact" size="6" color="black">CONTACT US</font></center>
                        <hr>
                     </td>
                </tr>

                <tr>
                    
                    <td><center>
                    <font face="Calibri" size="3" color="black">
                    <br>
                    <b>Phone Number : </b> 1-800-300-877

                    <form name="contact" method="post">

                    <br><br><font face="calibri">
                    <b>ANY COMMENTS? SEND YOUR FEEDBACK.</b><br><br>
                    <b>Name :</b><br>
                    <input name="name" type="text" size="30" required>

                    <br><br><font face="calibri">
                    <b>Email :</b><br>
                    <input name="email" type="text" size="30" required>

                    <br><br><font face="calibri">
                    <b>Comments & Feedback :</b><br>
                    <textarea name="feeds" cols="50" rows="5" required></textarea>

                    <br><br>
                    <input name="Submit" type="Submit" value="Submit Feedback">
                    <input name="reset" type="Reset" value="Reset"></center>
                    </td>
                </tr>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
