<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            width: calc(80%);
            margin: 0 auto;
            text-align: center;
        }

        .head {
            padding: 1rem;
            background: #222222;
            color: white;
        }

        .head .logo {
            text-align: left;
        }

        .head .logo img {
            width: 15rem;
        }

        p {
            padding: 1rem;
            margin-top: 1rem;
        }

        .heading-1 {
            margin-top: 2rem;
            padding-left: 1rem;
            font-size: 2.2rem;
            font-weight: 300;
            text-align: left;
        }

        .btn {
            padding: 10px 20px;
            color: white;
            background: #1ABC9C;
            border-radius: 5px;
            text-decoration: none;
        }

        .text {
            float: right;
            width: 100%;
            margin: auto;
            font: 14px 'Lato', sans-serif;
            color: #555;
            line-height: 1.5;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border: 2px solid white;
            border-radius: 40px;
            color: #FFF;
            text-align: center;
            display: inline-block;
            margin: 20px 20px -10px 0px;
            font-size: 20px;
        }

        .facebook:hover {
            border-color: #1265A8;
        }

        .instagram:hover {
            border-color: #1693A5;
        }

        .mail:hover {
            border-color: #C02942;
        }

        .icon {
            width: 100%;
            margin-top: 7px;
            color: white;
        }

    </style>
</head>

<body>
    <div class="head">
        <div class="container">
            <div class="logo" style="text-align:center;">
                <img src="http://dtutimes.dtu.ac.in/images/logo-dark.png" alt="">
            </div>
        </div>
    </div>
    <div class="container" style="padding:1rem 0 2rem 0;">
        <h1 class="heading-1" style="text-align:center;">
            <small>Welcome</small>
            <small>To DTU Times.</small>
        </h1>

        <div>
            <div style="text-align: center; margin-top: 1rem;">
                <img style="max-width: 14rem;" src="http://dtutimes.me/img/mailer-img.png" alt="">
            </div>
            <div class="text" style="margin-bottom:20px; text-align:center;">
                <p>
                    <h5>Hey {{ $user->name }}, Welcome to DTU Times.</h5><br> Happy to have you on board! <br> You can login
                    with <strong>{{ $password }}</strong> as your password.
                </p>
            </div>
        </div><br><br>
        <a href="{{ env('APP_URL').'/login' }}" class="btn">Login</a>
    </div><br><br>

    <footer id="" class="" style="background-color: black; text-align:center; padding: 1rem;">

        <!-- Copyrights
			============================================= -->
        <div>

            <div class="col_full center " style="color:lightgrey; font-size: .7rem;">
                &copy; DTU Times 2018. All Rights Reserved.
                <br>
                <br> 
                Developed by
                <br> crankShaft, manishsahani999, nandana-21, akxx33, sambhavjain9138
            </div>

        </div>

        </div>
        <!-- #copyrights end -->

    </footer>
    <!-- #footer end -->
</body>


</html>