<?php
	$title = __("Choose a plataform");
	$this->assign('title', $title);
	$error = __("No clients found.");
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= $title ?></div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div>
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#windows" aria-controls="home" role="tab" data-toggle="tab">Windows</a></li>
						<li role="presentation"><a href="#linux" aria-controls="profile" role="tab" data-toggle="tab">Linux</a></li>
					<ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="windows">
							<?php if ($windows->count() > 0): ?>
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th class="text-center">Version</th>
										<th class="text-center">Size</th>
										<th class="text-center">Downloads</th>
										<th class="text-center"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($windows as $client): ?>
									<tr>
										<?php if (!empty($client->exe_file)): ?>
										<?php $version = str_replace("n", "", $client->version); ?>
										<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
										<td class="text-center"><?= $client->exe_size ?></td>
										<td class="text-center"><?= $client->downloads ?></td>
										<td class="text-center">
											<?= $this->Html->link(__('<i class="fa fa-download" aria-hidden="true"></i> Download .exe'), ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
											<?php if (!empty($client->zip_file)): ?>
											<?= $this->Html->link(__('<i class="fa fa-download" aria-hidden="true"></i> Download .zip'), ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
											<?php else: ?>
											<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
											<?php endif; ?>
										</td>
										<?php endif; ?>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?php else: ?>
							<div class="row">
								<div class="col-md-12">
									<h4 class="page-header"><?= $error ?></h4>
								</div>
							</div>
							<?php endif; ?>
						</div>
						<div role="tabpanel" class="tab-pane" id="linux">
							<?php if ($linux->count() > 0): ?>
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th class="text-center">Version</th>
										<th class="text-center">Size</th>
										<th class="text-center">Downloads</th>
										<th class="text-center"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($linux as $client): ?>
									<tr>
										<?php if (!empty($client->exe_file)): ?>
										<?php $version = str_replace("n", "", $client->version); ?>
										<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
										<td class="text-center"><?= $client->exe_size ?></td>
										<td class="text-center"><?= $client->downloads ?></td>
										<td class="text-center">
											<a class="btn btn-green btn-xs strong" href="#" role="button"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
											<?php if (!empty($client->zip_file)): ?>
											<a class="btn btn-red btn-xs strong" href="#" role="button"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
											<?php else: ?>
											<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
											<?php endif; ?>
										</td>
										<?php endif; ?>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?php else: ?>
							<div class="row">
								<div class="col-md-12">
									<h4 class="page-header"><?= $error ?></h4>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer new-footer"></div>
</div>
