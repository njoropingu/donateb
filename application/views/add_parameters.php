<?php defined('BASEPATH') OR exit('no direct script access allowed');?>
<div class="container space27">
    
    <form method="post" action="<?php echo site_url('dashboard/parameters')?>" enctype="multipart/form-data">
     <div class="form-group">
         <div class="row">
             <label class="col-md-3">Consumer Key</label>
             <div class="col-md-6">
                 <input type="text" name="conkey" class="form-control" placeholder="consumer key" required>
             </div>
         </div>
         
     </div>
        <div class="form-group">
         <div class="row">
             <label class="col-md-3">Consumer Secret</label>
             <div class="col-md-6">
                 <input type="text" name="secret" class="form-control" placeholder="secret key" required>
             </div>
         </div>
        
     </div>
        <input type="submit" class="btn btn-danger" value="submit">
        
    </form>
    
</div>


