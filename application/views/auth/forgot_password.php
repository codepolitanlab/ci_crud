<?php $this->load->view('header'); ?>

<div class="container">
	
	<h1><?php echo lang('forgot_password_heading');?></h1>

	<?php if($message): ?>
	<div class="alert alert-warning">
		<?php echo $message; ?>
	</div>
	<?php endif; ?>

<div class="well">
	<?php echo form_open("auth/forgot_password", 'class="bs-example form-horizontal"');?>
	<fieldset>
		<legend><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></legend>
		<div class="form-group">
			<label for="email" class="col-lg-2 control-label"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
			<div class="col-lg-10"><?php echo form_input($email, null, 'class="form-control"');?></div>
		</div>

		<div class="form-group">
			<label for="input" class="col-lg-2 col-lg-offset-2">
				<?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-lg"');?>
			</label>
		</div>

	</fieldset>
	<?php echo form_close();?>
</div>

</div>
<?php $this->load->view('footer'); ?>