<?php
	$title = __("Choose a plataform");
	$this->assign('title', $title);
	$error = __("No clients found.");
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= $title ?></div>
	<div class="panel-body new-body">
		<div class="tabbable">
			<ul class="nav nav-tabs navbar-right">
				<li class="active"><a href="#windows" data-toggle="tab">Windows</a></li>
				<li><a href="#linux" data-toggle="tab">Linux</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="windows">
					<?php if (count($windows) > 0): ?>
					<div class="span8">
						<div class="tabbable">
							<ul class="nav nav-pills nav-stacked col-md-2">
								<li class="active"><a href="#wfeatured" data-toggle="tab">Featured</a></li>
								<li><a href="#w11" data-toggle="tab">11.x</a></li>
								<li><a href="#w10" data-toggle="tab">10.x</a></li>
								<li><a href="#w9" data-toggle="tab">9.x</a></li>
								<li><a href="#w8" data-toggle="tab">8.x</a></li>
								<li><a href="#w7" data-toggle="tab">7.x</a></li>
								<li><a href="#wall" data-toggle="tab">All Clients</a></li>
							</ul>
							<div class="tab-content col-md-10">
								<div class="tab-pane active" id="wfeatured">
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
											<?php foreach ($wfeatured as $client): ?>
											<tr>
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="w11">
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
											<?php foreach ($w11x as $client): ?>
											<tr>
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="w10">
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
											<?php foreach ($w10x as $client): ?>
											<tr>
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="w9">
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
											<?php foreach ($w9x as $client): ?>
											<tr>
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="w8">
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
											<?php foreach ($w8x as $client): ?>
											<tr>
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="w7">
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
											<?php foreach ($w7x as $client): ?>
											<tr>
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="wall">
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
												<?php if (!empty($client->exe_file) OR !empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->exe_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?php if (!empty($client->exe_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .exe', ['controller' => 'Clients', 'action' => 'download', $client->version, "exe", "windows"], ['class' => 'btn btn-green btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-green btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
													<?php endif; ?>
													<?php if (!empty($client->zip_file)): ?>
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download .zip', ['controller' => 'Clients', 'action' => 'download', $client->version, "zip", "windows"], ['class' => 'btn btn-red btn-xs strong', 'escape' => false]); ?>
													<?php else: ?>
													<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
													<?php endif; ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<?php else: ?>
					<h4 class="page-header"><?= $error ?></h4>
					<?php endif; ?>
				</div>
				<div class="tab-pane" id="linux">
					<?php if (count($linux) > 0): ?>
					<div class="span8">
						<div class="tabbable">
							<ul class="nav nav-pills nav-stacked col-md-2">
								<li class="active"><a href="#lfeatured" data-toggle="tab">Featured</a></li>
								<li><a href="#l11" data-toggle="tab">11.x</a></li>
								<li><a href="#l10" data-toggle="tab">10.x</a></li>
								<li><a href="#l9" data-toggle="tab">9.x</a></li>
								<li><a href="#l8" data-toggle="tab">8.x</a></li>
								<li><a href="#l7" data-toggle="tab">7.x</a></li>
								<li><a href="#lall" data-toggle="tab">All Clients</a></li>
							</ul>
							<div class="tab-content col-md-10">
								<div class="tab-pane active" id="lfeatured">
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
											<?php foreach ($lfeatured as $client): ?>
											<tr>
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="l11">
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
											<?php foreach ($l11x as $client): ?>
											<tr>
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="l10">
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
											<?php foreach ($l10x as $client): ?>
											<tr>
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="l9">
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
											<?php foreach ($l9x as $client): ?>
											<tr>
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="l8">
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
											<?php foreach ($l8x as $client): ?>
											<tr>
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="l7">
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
											<?php foreach ($l7x as $client): ?>
											<tr>
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="lall">
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
												<?php if (!empty($client->zip_file)): ?>
												<?php $version = str_replace("n", "", $client->version); ?>
												<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
												<td class="text-center"><?= $client->zip_size ?></td>
												<td class="text-center"><?= $client->downloads ?></td>
												<td class="text-center">
													<?= $this->Html->link('<i class="fa fa-download" aria-hidden="true"></i> Download', ['controller' => 'Clients', 'action' => 'download', $client->version, "tar", "linux"], ['class' => 'btn btn-purple btn-xs strong', 'escape' => false]); ?>
												</td>
												<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<?php else: ?>
					<h4 class="page-header"><?= $error ?></h4>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer new-footer"></div>
</div>
