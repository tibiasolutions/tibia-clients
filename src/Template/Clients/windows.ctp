<div class="panel panel-default">
	<div class="panel-heading"><?= __("Windows Client's List") ?></div>
		<div class="panel-body new-body">
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
						<td class="text-center"><?= str_replace(",", ".", $this->Number->format($client->version, ['pattern' => strlen($client->version) == 4 ? '##,##' : strlen($client->version) == 3 ? '#,##' : '#,#'])) ?></th>
						<td class="text-center"><?= $client->downloads ?></td>
						<td class="text-center">
							<a class="btn btn-green btn-xs strong" href="#" role="button" data-toggle="tooltip" data-placement="top" title="<?= !empty($client->exe_size) ? __('Size: {0}', [$client->exe_size])  : "" ?>"><i class="fa fa-download" aria-hidden="true"></i> Download .exe</a>
							<?php if (!empty($client->zip_url)): ?>
							<a class="btn btn-red btn-xs strong" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="<?= !empty($client->zip_size) ? __('Size: {0}', [$client->zip_size])  : "" ?>"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
							<?php else: ?>
							<a class="btn btn-red btn-xs strong" href="#" role="button" disabled="disabled"><i class="fa fa-download" aria-hidden="true"></i> Download .zip</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	<div class="panel-footer new-footer"></div>
</div>
