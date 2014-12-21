<?php $this->load->view('header'); ?>

<div class="container">
	
	<h1><?php echo lang('reset_password_heading');?></h1>

	<?php if($message): ?>
	<div class="alert alert-warning">
		<?php echo $message; ?>
	</div>
	<?php endif; ?>

	<div class="well">
	<?php echo form_open('auth/reset_password/' . $code,  'class="bs-example form-horizontal"');?>
	<fieldset>
		<div class="form-group">
			<label for="old_password" class="col-lg-2 control-label"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label>
			<div class="col-lg-10"><?php echo form_input($new_password, null, 'class="form-control"');?></div>
		</div>

		<div class="form-group">
			<label for="old_password" class="col-lg-2 control-label"><?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?></label>
			<div class="col-lg-10"><?php echo form_input($new_password_confirm, null, 'class="form-control"');?></div>
		</div>

		<?php echo form_hidden('id', $user_id);?>
		<?php echo form_hidden($csrf); ?>

		<div class="form-group">
			<label for="input" class="col-lg-2 col-lg-offset-2">
			<?php echo form_submit('submit', lang('reset_password_submit_btn') 'class="btn btn-lg"');?>
			</label>
		</div>

	</fieldset>
	<?php echo form_close();?>
	</div>

</div>
<?php $this->load->view('footer'); ?>