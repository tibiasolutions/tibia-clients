<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?= $this->fetch('title') . " - Tibia Clients" ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->meta('keywords', 'tibia,11.00,10.98,10.97,10.96,10.95,10.94,10.93,10.92,10.91,10.90,10.82,10.81,10.80,10.79,10.78,10.77,10.76,10.75,10.74,10.73,10.72,10.71,10.70,10.64,10.63,10.62,10.61,10.60,10.59,10.58,10.57,10.56,10.55,10.54,10.53,10.52,10.51,10.50,10.41,10.40,10.39,10.38,10.37,10.36,10.35,10.34,10.33,10.32,10.31,10.30,10.22,10.21,10.20,10.13,10.12,10.11,10.10,10.02,10.01,10.00,9.86,9.85,9.84,9.83,9.82,9.81,9.80,9.70,9.60,9.54,9.52,9.44,9.43,9.42,9.41,9.40,9.31,9.20,9.10,9.00,8.71,8.70,8.62,8.61,8.60,8.57,8.56,8.55,8.54,8.53,8.52,8.50,8.42,8.41,8.40,8.31,8.30,8.22,8.21,8.20,8.11,8.10,8.00,7.92,7.81,7.9,7.8,7.72,7.7,7.6,7.55,7.41,7.4,7.3,7.27,7.26,7.24,7.23,7.21,7.13,7.1,7.02,7.01,7.0,6.1,6.0,4.0,3.1,3.0,download,client,tibia king,xtibia,otland,otserv'); ?>

	<?= $this->Html->meta('description', 'Download Tibia Clients for Windows or Linux'); ?>

	<?= $this->Html->css(['bootstrap.min', 'style', 'social-media', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css']) ?>

	<?= $this->Html->script(['jquery.min', 'bootstrap.min', 'tibiaclients']) ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-56745295-6', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div id="top" class="hidden-xs">
		<h1>
			Tibia Clients <small>Downloads Windows & Linux</small>
		</h1>
	</div>

	<nav id="header" class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs" href="#">
				Tibia Clients
			</a>
		</div>
		<div id="top-menu" class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
			<ul class="nav navbar-nav">
				<li>
					<?= $this->Html->link(__("Home"), ['controller' => 'Clients', 'action' => 'index']); ?>
				</li>
				<li>
					<?= $this->Html->link(__("About"), ['controller' => 'Pages', 'action' => 'display', 'about']); ?>
				</li>
				<li>
					<?= $this->Html->link(__("Contact"), ['controller' => 'Pages', 'action' => 'display', 'contact']); ?>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
				<li>
					<a href="https://tibiaclients.slack.com">Slack</a>
				</li>
			</ul>
		</div>
	</nav>
	<?= $this->Flash->render() ?>
	<div id="wrapper" class="container">
		<div class="content">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8">
					<?= $this->fetch('content') ?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="widget">
						<div class="panel panel-default">
							<div class="panel-heading"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?= __("Statistics") ?></div>
							<div class="panel-body new-body">
								<p><?= __("We have a total of <strong>{0}</strong> downloads from <strong>{1}</strong> clients.", [$total_downloads, $total_clients]) ?></p>
							</div>
							<div class="panel-footer new-footer"></div>
						</div>
					</div>
					<div class="widget">
						<div class="panel panel-default">
							<div class="panel-heading"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> <?= __("Follow Us") ?></div>
							<div class="panel-body text-center">
								<a href="https://github.com/tibiasolutions/" class="btn btn-social-icon btn-github" target="_blank"><i class="fa fa-github"></i></a>
								<a href="https://www.facebook.com/tibiaclients/" class="btn btn-social-icon btn-facebook" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/tibiaclients/" class="btn btn-social-icon btn-twitter" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://plus.google.com/100761390530590591841" class="btn btn-social-icon btn-google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
								<a href="https://www.instagram.com/tibiaclients/" class="btn btn-social-icon btn-instagram" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>
							<div class="panel-footer new-footer"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
      <div class="container">
        <p class="text-muted">&copy; <?= date("Y") ?> - Tibia Clients</p>
      </div>
    </footer>

	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"><span class="glyphicon glyphicon-chevron-up"></span></a>

	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		});

		$(document).ready(function () {
			setNavigation();
		});

		function setNavigation() {
			var path = window.location.pathname;
			path = path.replace(/\/$/, "");
			path = decodeURIComponent(path);
			$("#top-menu a").each(function () {
				var href = $(this).attr('href');
				if (path.replace("/", "") === href.replace("/", "")) {
					$(this).parent().addClass('active');
					$(this).parent().parent().parent().addClass('active');
				}
			});
		}
	</script>
</body>
</html>
