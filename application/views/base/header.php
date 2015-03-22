<!DOCTYPE html>
<html>
<head>
  <title>Nanoblog</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
  </head>
<body>
  <!-- this is a navbar -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('index.php/user'); ?>">Nanoblog</a>
    </div>
  
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($current_section === 'home')?'active':''; ?>"><a href="<?php echo base_url('index.php/user'); ?>">Home</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search!</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo ($current_section === 'profile')?'active':''; ?>"><a href="<?php echo base_url('index.php/user/profile'); ?>">Profile</a></li>
		<li class=""><a href="<?php echo base_url('index.php/user/logout'); ?>">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>" type="text/javascript" charset="utf-8" ></script>
  <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js'); ?>" type="text/javascript" charset="utf-8" ></script>
