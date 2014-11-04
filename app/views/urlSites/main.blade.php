<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="/light-blue/css/application.css" rel="stylesheet">
    <link href="/css/range.css" rel="stylesheet" type="text/css">
    <link href="/amp/amp-styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/timepicki.css" type="text/css" media="screen"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    @yield('style')
</head>

<body class="background-gray">
@include('urlSites.logo')
        		<div class="content container">
        	  		@yield('content')
          		</div>


  	 @section('scripts')

     <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

            
     @show
</body>
</html>