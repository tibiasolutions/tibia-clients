<?php
	$title = __("Download in progress");
	$this->assign('title', $title);
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= $title ?></div>
		<div class="panel-body">
			<span>:) <?= $client_downloaded->version ?></span>
		</div>
	<div class="panel-footer new-footer"></div>
</div>
