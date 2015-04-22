<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		@extends('app')
 
@section('content')
    <h2>Edit Votant "{{ $votant->name }}"</h2>
 
    {!! Form::model($votant, ['method' => 'PATCH', 'route' => ['poblacions.votants.update', $poblacion->slug, $votant->slug]]) !!}
        @include('votants/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection
	</body>
</html>