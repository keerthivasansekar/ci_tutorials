<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CI Tutorial | <?php echo $title ?></title>
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
  <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/') ?>assets/css/style-starter.css">
  </head>
  <body>


<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row">
		<div class="social-top col-sm-6 col-6 pl-0">
			<li>Welcome to Coporate Business</li>
			
		</div>
		<div class="accounts col-sm-6 col-6 pr-0">
				<li class="top_li1"><a href="#">Login</a></li>
				<li class="top_li2"><a href="#">Register</a></li>
		</div>
		
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url() ?>"><span>D-</span>Business</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('site/about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('site/services') ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('news') ?>">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('site/contact') ?>">Contact</a>
          </li>
        </ul>
        <p>For Support Call<span class="fa fa-headphones pl-1"></span><br><a href="tel:900-369-8527">900-369-8527</a></p>
      </div>
    </div>
  </nav>
</section>
