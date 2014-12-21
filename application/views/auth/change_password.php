<?php $this->load->view('header'); ?>

<div class="container">

      <h1><?php echo lang('change_password_heading');?></h1>

      <?php if($message): ?>
      <div class="alert alert-warning">
            <?php echo $message; ?>
      </div>
      <?php endif; ?>

      <div class="well">
      <?php echo form_open("auth/change_password", 'class="bs-example form-horizontal"');?>
            <fieldset>
            <div class="form-group">
                  <label for="old_password" class="col-lg-2 control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
                  <div class="col-lg-10"><?php echo form_input($old_password, null, 'class="form-control"');?></div>
            </div>

            <div class="form-group">
                  <label for="new_password" class="col-lg-2 control-label"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label></label>
                  <div class="col-lg-10"><?php echo form_input($new_password, null, 'class="form-control"');?></div>
            </div>

            <div class="form-group">
                  <label for="new_password_confirm" class="col-lg-2 control-label"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
                  <div class="col-lg-10"><?php echo form_input($new_password_confirm, null, 'class="form-control"');?></div>
            </div>

            <?php echo form_hidden('id', $user_id);?>

            <div class="form-group">
                  <label for="input" class="col-lg-2 col-lg-offset-2">
                        <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-lg"');?>
                  </label>
            </div>

            </fieldset>
      <?php echo form_close();?>
      </div>

</div>
<?php $this->load->view('footer'); ?>