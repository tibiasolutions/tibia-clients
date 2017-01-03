<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->css(['bootstrap.min', 'style', 'social-media', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css']) ?>

	<?= $this->Html->script(['jquery.min', 'bootstrap.min']) ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
</head>
<body>
	<div id="topo" class="hidden-xs">
		<h1>
			Tibia Clients <small>Downloads Linux & Windows</small>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-static-top" role="navigation">
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
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
			<ul class="nav navbar-nav">
				<li>
					<?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display', 'home']); ?>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Downloads <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<?= $this->Html->link('Windows', ['controller' => 'Clients', 'action' => 'windows']); ?>
						</li>
						<li class="divider"></li>
						<li>
							<?= $this->Html->link('Linux', ['controller' => 'Clients', 'action' => 'linux']); ?>
						</li>
					</ul>
				</li>
				<li>
					<?= $this->Html->link('About', ['controller' => 'Pages', 'action' => 'display', 'about']); ?>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
				<li>
					<?= $this->Html->link('Contact', ['controller' => 'Pages', 'action' => 'display', 'contact']); ?>
				</li>
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
							<div class="panel-heading"><i class="fa fa-bar-chart" aria-hidden="true"></i> Statiscts</div>
							<div class="panel-body new-body">
								<p>We have a total of <strong>60955</strong> downloads from <strong>238</strong> clients.</p>
							</div>
							<div class="panel-footer new-footer"></div>
						</div>
					</div>
					<div class="widget">
						<div class="panel panel-default">
							<div class="panel-heading"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Follow Us</div>
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

	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>
</html>
