<?php
/* Smarty version 3.1.31, created on 2018-03-28 15:37:54
  from "C:\wamp64\www\micro_blog\signup\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5abbb6d2718f66_88257424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06135447e6b80cc3d69bc72654750973ce1629a' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\signup\\templates\\index.tpl',
      1 => 1516143547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abbb6d2718f66_88257424 (Smarty_Internal_Template $_smarty_tpl) {
?>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Micro blog</title>

		<!-- Bootstrap Core CSS -->
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Theme CSS -->
		<link href="../css/freelancer.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
	</head>

	<body>
		<!-- Navigation -->
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="#page-top">Micro blog</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="page-scroll">
							<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value) {?>
								<span class='loggedIn' style='color: white;'>Bienvenue " . strval($email) . " / <a href='php/logout.php'>Deconnexion</a></span>
							<?php } else { ?>
								<a href='../login.php'>Connexion</a>
							<?php }?>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!-- Header -->
		<header>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-12'>
						<div class='intro-text'>
							<span class='name'><?php echo $_smarty_tpl->tpl_vars['pageBigTitle']->value;?>
</span>
							<hr class='star-light'>
						</div>
					</div>
				</div>
			</div>
		</header>


        <?php if ($_smarty_tpl->tpl_vars['signupError']->value != '') {?>
            <p style='display: block; width: 50%; margin: 20px auto; color: red; font-size: 20px;'><?php echo $_smarty_tpl->tpl_vars['signupError']->value;?>
</p>
        <?php }?>

        <form action='.' method='POST' style='width: 50%; margin: 20px auto;'>
            <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' class='form-control' id='email' name='email'>
            </div>
            <div class='form-group'>
                <label for='pwd'>Mot de Passe:</label>
                <input type='password' class='form-control' id='pwd' name='pwd'>
            </div>
            <div class='form-group'>
                <label for='pwd'>Confirmation du Mot de Passe:</label>
                <input type='password' class='form-control' id='pwdconfirm' name='pwdconfirm'>
            </div>

            <input class='btn btn-primary' type='submit'>
        </form>


		<!-- Footer -->
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-4">
							<h3>Location</h3>
							<p>3481 Melrose Place
								<br>Beverly Hills, CA 90210</p>
						</div>
						<div class="footer-col col-md-4">

						</div>
						<div class="footer-col col-md-4">
							<h3>A propos</h3>
							<p>Micro blog est une application PHP basée sur le thème <a href="https://startbootstrap.com/template-overviews/freelancer/">Freelancer</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							Copyright &copy; Your Website 2016
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
			<a class="btn btn-primary" href="#page-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>

		<!-- jQuery -->
		<?php echo '<script'; ?>
 src="../vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
		<!-- Bootstrap Core JavaScript -->
		<?php echo '<script'; ?>
 src="../vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<!-- Plugin JavaScript -->
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"><?php echo '</script'; ?>
>
		<!-- Theme JavaScript -->
		<?php echo '<script'; ?>
 src="../js/freelancer.min.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="../js/editMsg.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
