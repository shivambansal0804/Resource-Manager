<html>

<head>
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
            margin-top: 1rem;
            padding-left: 1rem;
            font-weight: 300;
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            color: white;
            background: #1ABC9C;
            border-radius: 5px;
            text-decoration: none;
        }

        .respImg {
            width: 100%;
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

        @media (min-width:966px) {
            .respImg {
                width: 37%;
            }
            .text {
                width: 60%;
            }
        }
    </style>
</head>

<body>
    <div class="head">
        <div class="container">
            <div class="logo" style="text-align:center;">
                <img src="http://dtutimes.me/img/logo-dark.png" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="heading-1">Blog Published</h1><br>
        <h2 style="font-variant: small-caps;; font-size:30px; text-align:center;">{{ $story->title }}</h2>
        <br><br>
        <div>
            <img src="{{ env('APP_URL').'/'.$story->getFirstMediaUrl('blog_images', 'fullscreen') }}" alt="image" class="respImg">
            <div class="text" style="margin-bottom:20px; text-align:left;">
                <p>
                    {{ $story->biliner }}
                </p>
            </div>
        </div><br><br>
        <a href="{{ env('APP_URL').'/blog/'.$story->slug }}" class="btn" style="color:white;">Read Full Article</a>
    </div><br><br>

    <footer id="" class="" style="background-color: black; text-align:center; padding: 1rem;">

        <!-- Copyrights
        			============================================= -->
        <div>

            <div class="col_full center " style="color:lightgrey; font-size: .7rem;">
                &copy; DTU Times 2018. All Rights Reserved.
                <br>
                <br> Developed by
                <br> crankShaft, manishsahani999, nandana-21, ak33xx, sambhavjain9138
            </div>

        </div>

        </div>
        <!-- #copyrights end -->

    </footer>
</body>


</html>