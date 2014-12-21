<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CodeIgniter CRUD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen">
  <style>
    body {padding-top: 80px;}
    a {text-decoration: none !important;}
    .label a {color: white;}
  </style>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
      <![endif]-->
</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo site_url(); ?>" class="navbar-brand">CodeIgniter CRUD</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <?php if($this->ion_auth->logged_in()): ?>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav pull-right">
          <li><a href="<?php echo site_url('auth/index'); ?>">Users</a></li>
          <li><a href="<?php echo site_url('auth/groups'); ?>">User Groups</a></li>
          <li><a href="<?php echo site_url('auth/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
      </div>
      <?php endif; ?>
    </div>
  </div>