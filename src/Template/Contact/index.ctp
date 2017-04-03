<?php
	$title = __("Contact Us");
	$this->assign('title', $title);
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= __("Contact Us") ?></div>
	<div class="panel-body new-body">
		<div class="row">
			<div class="col-md-12">
				<?= $this->Flash->render() ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<section class="contact section">
					<div class="row">
						<div class="col-md-12">
							<?= $this->Form->create($contact) ?>
							<div class="form-group">
								<?= $this->Form->label('name', __("Name {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Required.'), 'escape' => false]) ?>
								<?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => __("Name"), 'label' => false]) ?>
							</div>
							<div class="form-group">
								<?= $this->Form->label('email', __("Email {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Required.'), 'escape' => false]) ?>
								<?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => __("Email"), 'label' => false]) ?>
							</div>
							<div class="form-group">
								<?= $this->Form->input('subject', ['class' => 'form-control', 'placeholder' => __("Subject")]) ?>
							</div>
							<div class="form-group">
								<?= $this->Form->label('message', __("Message {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Required.'), 'escape' => false]) ?>
								<?= $this->Form->input('message', ['type' => 'textarea', 'class' => 'form-control', 'placeholder' => __("Enter your message..."), 'label' => false]) ?>
							</div>
							<?= $this->Form->button(__('{0} Send', '<i class="fa fa-envelope-o"></i>'), ['class' => 'btn btn-primary-outline', 'escape' => false]) ?>
							<?= $this->Form->end() ?>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
