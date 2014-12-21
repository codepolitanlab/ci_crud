<?php $this->load->view('header'); ?>

<div class="container">
            
<h1><?php echo lang('create_user_heading');?></h1>

<?php if($message): ?>
      <div class="alert alert-warning">
            <?php echo $message; ?>
      </div>
<?php endif; ?>

<div class="well">
<?php echo form_open("auth/create_user", 'class="bs-example form-horizontal"');?>
<fieldset>
      <legend><?php echo lang('create_user_subheading');?></legend>
      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_fname_label', 'first_name');?></label>
            <div class="col-lg-10"> <?php echo form_input($first_name, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_lname_label', 'last_name');?></label>
            <div class="col-lg-10"> <?php echo form_input($last_name, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_nim_label', 'nim');?></label>
            <div class="col-lg-10"> <?php echo form_input($nim, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_ipk_label', 'ipk');?></label>
            <div class="col-lg-10"> <?php echo form_input($ipk, null, 'class="form-control"');?></div>
      </div>

</fieldset>
<fieldset>
      <legend>Fill user authentication data below</legend>
      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_email_label', 'email');?></label>
            <div class="col-lg-10"> <?php echo form_input($email, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_password_label', 'password');?></label>
            <div class="col-lg-10"> <?php echo form_input($password, null, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label for="input" class="col-lg-2 control-label"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
            <div class="col-lg-10"> <?php echo form_input($password_confirm, null, 'class="form-control"');?></div>
      </div>


      <div class="form-group"><label for="input" class="col-lg-2 col-lg-offset-2 control-label"><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-lg"');?></label></div>

      </fieldset>
<?php echo form_close();?>

      </div>
</div>

<?php $this->load->view('footer'); ?>