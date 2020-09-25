<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Design responsivo -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- JQuery 3 -->
<script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<!--Bootstrap 3 -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"/>-->
<!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animate.css')); ?>"/>-->
<!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/theme/theme.min.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/theme/theme.css')); ?>"/>-->
<!--<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>-->
<!-- Google -->
<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<meta name="google-signin-client_id" content="1079643134516-foleohdgtqreqvnubc9edq64ts2k3nk9.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Data Table -->
<script type="text/javascript" src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/datatables.min.css')); ?>"/>
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!-- Scripts Personalizados -->

<script src="<?php echo e(asset('js/cem-coisas.js')); ?>"></script>
<title><?php echo e(config('app.name', 'Laravel')); ?></title>
<!-- Estilos padrão do Laravel -->


<!--Chart 2d-->
<script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/utils.js')); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/global.css')); ?>"/>