<div class="panel panel-default">
	<div class="panel-heading"><?= __("Linux Client's List") ?></div>
		<div class="panel-body">
			<?php if ($clients->count() > 0): ?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">Version</th>
						<th class="text-center">Downloads</th>
						<th class="text-center"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($clients as $client): ?>
					<tr>
						<?php if (!empty($client->exe_url)): ?>
						<?php $version = str_replace("n", "", $client->version); ?>
						<td class="text-center"><?= str_replace(",", ".", $this->Number->format($version, ['pattern' => strlen($version) == 4 ? '##,##' : strlen($version) == 3 ? '#,##' : '#,#'])) ?></th>
						<td class="text-center"><?= $client->downloads ?></td>
						<td class="text-center">
							<a class="btn btn-green btn-xs strong" href="#" role="button"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
							<?php if (!empty($client->zip_url)): ?>
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
			<p><?= __("No clients found.") ?></p>
			<?php endif; ?>
		</div>
	<div class="panel-footer new-footer"></div>
</div>
