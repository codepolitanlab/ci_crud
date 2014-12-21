<?php $this->load->view('header'); ?>

<!--login modal-->
  <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center"><?php echo lang('login_heading');?></h1>
        </div>
        <div class="modal-body">
          <?php if($message): ?>
            <div class="alert alert-warning">
              <?php echo $message; ?>
            </div>
          <?php endif; ?>

          <form action="<?php echo site_url('auth/login'); ?>" method="post" class="form col-md-12 center-block">
            <div class="form-group">
              <?php echo form_input($identity, null, 'class="form-control input-lg" placeholder="'.lang('login_identity_label').'"');?>
            </div>
            <div class="form-group">
              <?php echo form_input($password, null, 'class="form-control input-lg" placeholder="'.lang('login_password_label').'"');?>
            </div>
            <div class="form-group">
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              <?php echo lang('login_remember_label', 'remember');?>
            </div>
            <div class="form-group">
              <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary btn-lg btn-block"');?>
              <a href="<?php echo site_url('auth/forgot_password'); ?>"><?php echo lang('login_forgot_password');?></a>
            </div>
          </form>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>

<?php $this->load->view('footer'); ?>