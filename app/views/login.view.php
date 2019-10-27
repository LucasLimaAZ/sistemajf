<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema JF</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="public/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/theme/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/theme/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="public/theme/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="public/theme/plugins/iCheck/square/blue.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

	<div class="login-box">

		<div class="login-logo">
			<b>JF</b> PEÇAS AUTOMOTIVAS
		</div>

		<div class="login-box-body">
			<p class="login-box-msg">Faça login para acessar o sistema</p>
			<form id="login" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="usuario" placeholder="Usuário">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="senha" placeholder="Senha">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<!-- <div class="col-xs-8">
						<div class="checkbox icheck">
						<label>
							<input type="checkbox"> Lembrar de mim
						</label>
						</div>
					</div> -->
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
					</div>
					<div class="row" id="incorreto">
						<div class="col-md-12">
							<p style="padding-top:10px;text-align:center;color:red;">Usuário ou senha incorretos.</p>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>

<script src="public/theme/bower_components/jquery/dist/jquery.min.js"></script>
<script src="public/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="public/theme/plugins/iCheck/icheck.min.js"></script>
<script src="public/assets/js/login.js"></script>
<script>
    $(function () {
	$('input').iCheck({
	    checkboxClass: 'icheckbox_square-blue',
	    radioClass: 'iradio_square-blue',
	    increaseArea: '20%' /* optional */
	});
    });
</script>

</body>
</html>
