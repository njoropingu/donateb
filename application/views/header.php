<?php defined('BASEPATH') OR exit('no direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>
            DONATION TEST PROJECT
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/bootstrap.css">
          <script src="<?php echo base_url()?>public/js/bootstrap.js" type="text/javascript"></script>
    </head>
    
    <body>
        
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#1e62a6; color:white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <a class="navbar-brand" href="<?php echo base_url()?>" style="color:white">PESAPAL DONATION TEST</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="keyword" method="get" action="<?php echo base_url()?>welcome/search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      <a href="<?php echo base_url()?>dashboard/logout" class="btn btn-danger">Sign Out</a>
  </div>
</nav>
    


