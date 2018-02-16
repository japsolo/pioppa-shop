<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/images/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<title>@yield('title') | Pioppa</title>

	<link href="/css/ionicons.min.css" rel="stylesheet">
	<link href="/css/pioppa.css?v=1" rel="stylesheet">

	@yield('otherStyleSheet')

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	@include('layouts.headerNav')

	<!-- Main-Content -->
	<div class="container">
		@yield('mainContent')
	</div>
	<!-- /Main-Content -->

	@include('layouts.footer')

	<!-- Main-Scripts -->
	<script src="/js/jquery.min_3.1.1.js"></script>
	<script src="/js/scripts.js"></script>

	@yield('otherScripts')

	@if (getenv('APP_ENV') === 'local')
	<script id="__bs_script__">//<![CDATA[
		document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
	//]]></script>
	@endif
</body>
</html>
