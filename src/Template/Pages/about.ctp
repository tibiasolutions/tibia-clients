<?php
	$title = __("About Us");
	$this->assign('title', $title);
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= $title ?></div>
		<div class="panel-body new-body">
			<blockquote>
				<p><?= __("We are a group of developers using our knowledge to develope tools for facilitate / help the fun of users or other developers.") ?></p>

				<p><?= __("We have no intention of earning profits, we do this as a hobby and also a way to improve our skills.") ?></p>

				<p><?= __("Any help will be welcome, our systems will always be available on GitHub for everyone to follow the development.") ?></p>
			</blockquote>
			<div class="team">
				<div class="row">
					<div class="col-md-12">
						<h6 class="description"><?= __("Our Team") ?></h6>
						<div class="row pt-md">
							<!-- Profile -->
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
								<div class="img-box">
									<img src="https://avatars.githubusercontent.com/u/10432401?v=3&s=460" class="img-responsive">
									<ul class="text-center">
									<a href="https://www.facebook.com/bmminervino"><li><i class="fa fa-facebook"></i></li></a>
									<a href="https://github.com/brunominervino"><li><i class="fa fa-github"></i></li></a>
									<a href="mailto:bruno@tibiasolutions.com"><li><i class="fa fa-envelope-o"></i></li></a>
									</ul>
								</div>
								<h1>Bruno Minervino</h1>
								<h2>Developer</h2>
							</div>
							<!-- End Profile -->
						
							<!-- Profile -->
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
								<div class="img-box">
									<img src="https://avatars.githubusercontent.com/u/5226773?v=3&s=460" class="img-responsive">
									<ul class="text-center">
									<a href="https://www.facebook.com/celopeccin"><li><i class="fa fa-facebook"></i></li></a>
									<a href="https://github.com/celopeccin"><li><i class="fa fa-github"></i></li></a>
									<a href="mailto:marcelo@tibiasolutions.com"><li><i class="fa fa-envelope-o"></i></li></a>
									</ul>
								</div>
								<h1>Marcelo Peccin</h1>
								<h2>Developer</h2>
							</div>
							<!-- End Profile -->
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="panel-footer new-footer"></div>
</div>
