<!DOCTYPE HTML>
<html>
	<head>
	    <meta charset="">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="renderer" content="webkit">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	    <title></title>

	    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

		<script>
			window.Laravel = {
				csrfToken: '{{ csrf_token() }}'
			}
		</script>
	</head>
	<body>
		<div id="app">
			<app-header></app-header>
			<div id="body">
			    <div class="wrapper">
			    	<div class="row">
						@yield('app-body')
						<app-sidebar></app-sidebar>
			    	</div>
				</div>
			</div>

		</div>

		@yield('app-js')

	</body>
</html>
