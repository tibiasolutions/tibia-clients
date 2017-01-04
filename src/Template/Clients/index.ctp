<?php
	$title = __("Choose a plataform");
	$this->assign('title', $title);
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= $title ?></div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<?= $this->Html->link(__("Windows Clients"), ['controller' => 'Clients', 'action' => 'windows'], ['class' => 'btn btn-primary btn-lg']); ?>
				<?= $this->Html->link(__("Linux Clients"), ['controller' => 'Clients', 'action' => 'linux'], ['class' => 'btn btn-default btn-lg pull-right']); ?>
			</div>
		</div>
	</div>
	<div class="panel-footer new-footer"></div>
</div>
