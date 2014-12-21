<?php $this->load->view('header'); ?>

<div class="container">
	
	<h1><?php echo lang('deactivate_heading');?></h1>

	<div class="well">
		<?php echo form_open("auth/deactivate/".$user->id, 'class="bs-example form-horizontal"');?>
		<fieldset>
			<legend><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></legend>

			<div class="form-group">
				<div class="col-lg-10">					
					<div class="radio">	
						<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
						<input type="radio" name="confirm" value="yes" checked="checked" />
					</div>
					<div class="radio">	
						<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
						<input type="radio" name="confirm" value="no" />
					</div>
				</div>
			</div>	

			<?php echo form_hidden($csrf); ?>
			<?php echo form_hidden(array('id'=>$user->id)); ?>

			<div class="form-group">
				<label for="input" class="col-lg-2">
					<?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-lg"');?>
				</label>
			</div>

		</fieldset>
		<?php echo form_close();?>
	</div>

</div>
<?php $this->load->view('footer'); ?>