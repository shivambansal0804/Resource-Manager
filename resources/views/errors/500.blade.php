<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>DTUTImes</title>
    <style type="text/css">
    	body {
 		   background: #252525;
		}
		.page-wrap {
    		min-height: 100vh;
		}
		.title{
			color: #fff;
			font-size: 100px;
		}
		.sub{
			color: #fff;
			font-size: 25px;
		}
		
		.btn-primary{
			margin: 60px;
			background: #fff;
			color: #252525;
			border-color: #252525;
		}
		.btn-primary:hover{
			color:#fff;
			background: #252525;
			border-color: #fff;
		}
    </style>
</head>
<body>



<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container col-xs-12">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xs-12 text-center">
                <span class="title">500</span>
                <div class="sub">Internal Server Error</div>
                <div class="button"><a href="{{ route('welcome') }}" class="btn btn-primary">Back to Home</a></div>
            </div>
        </div>
    </div>
</div>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>