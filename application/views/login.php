<?php defined('BASEPATH') OR exit('no direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>
            Admin
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/bootstrap.css">
          <script src="<?php echo base_url()?>public/js/bootstrap.js" type="text/javascript"></script>
    </head>
    
    <body>
<div class="container">
    <div class="jumbotron space27">
        <form method="post" action="<?php echo site_url('login/checkAdmin')?>" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Username</label>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" required>
                         <?php echo form_error('name','<div class="text-danger">','</div>');?>                     
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Password</label>
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control" required>
                         <?php echo form_error('password','<div class="text-danger">','</div>');?>                       
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        
        </form>
    </div>
</div>

    </body>