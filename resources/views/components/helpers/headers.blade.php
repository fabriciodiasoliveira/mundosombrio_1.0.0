<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Design responsivo -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- JQuery 3 -->
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<!--Bootstrap 3 -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/><!--teste-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
<!--<link rel="stylesheet" type="text/css" href="{{ asset('css/theme/theme.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/theme/theme.css') }}"/>-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Google -->
<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<meta name="google-signin-client_id" content="1079643134516-foleohdgtqreqvnubc9edq64ts2k3nk9.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Data Table -->
<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts Personalizados -->

<script src="{{ asset('js/cem-coisas.js') }}"></script>
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Estilos padrão do Laravel -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
<!--Chart 2d-->
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/utils.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}"/>