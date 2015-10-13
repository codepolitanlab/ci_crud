<?php $this->load->view('header'); ?>

<div class="container">

<h1><?php echo lang('create_group_heading');?></h1>

<?php if($message): ?>
      <div class="alert alert-warning">
            <?php echo $message; ?>
      </div>
<?php endif; ?>

<div class="well">
<?php echo form_open("auth/create_group", 'class="bs-example form-horizontal"');?>
<fieldset>
	<legend><?php echo lang('create_group_subheading');?></legend>
      <div class="form-group">
            <label for="group_name" class="col-lg-2 control-label"><?php echo lang('create_group_name_label');?></label>
            <div class="col-lg-10"><?php echo form_input($group_name, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label for="description" class="col-lg-2 control-label"><?php echo lang('create_group_desc_label');?></label>
            <div class="col-lg-10"><?php echo form_input($description, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
      	<label for="input" class="col-lg-2 col-lg-offset-2 control-label">
      	<?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-lg"');?>
      	</label>
      </div>

</fieldset>
<?php echo form_close();?>
</div>

</div>
<?php $this->load->view('footer'); ?>