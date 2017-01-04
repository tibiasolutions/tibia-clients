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
								<a href="https://github.com/tibiaclients/" class="btn btn-social-icon btn-github" target="_blank"><i class="fa fa-github"></i></a>
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
				if (path === href) {
					$(this).parent().addClass('active');
					$(this).parent().parent().parent().addClass('active');
				}
			});
		}
	</script>
</body>
</html>
