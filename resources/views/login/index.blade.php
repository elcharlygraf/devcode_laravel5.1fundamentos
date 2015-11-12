<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
{!! Form::open(array('route' => 'getViews')) !!}

	{!! Form::text('email', 'example@gmail.com') !!}
	{!! Form::password('password', array('class' => 'awesome')); !!}
	{!! Form::submit('Click Me!') !!}

{!! Form::close() !!}
</body>
</html>