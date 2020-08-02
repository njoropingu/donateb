<?php defined('BASEPATH') OR exit('no direct script access allowed');?>

<div class="container">
    <table class="table table-bordered space27">
        <tr>
            
                <th>Consumer Key</th>
                    <th>Secret</th>
                    <th>Add Parameters</th>
        </tr>
        <?php    foreach($parameter as $param) {?>
        <tr>
            <td><?php echo $param->conkey?></td>
            <td><?php echo $param->secret?></td>
            <td><a href="<?php echo site_url('dashboard/edit/'.$param->id)?>" class="btn btn-primary">Update Parameters</a></td>
        </tr>
        <?php } ?>
    </table>
    <p class="space5">donors table</p>
    <table class="table table-bordered space27">
        <tr>
            <th>First Name</th>
            <th class="gray">Last Name</th>
            <th>Merchant ID</th>
            <th class="gray">Phone</th>
            <th>Description</th>
            <th class="gray">Transaction Code</th>
            <th>Amount Donated</th>
            <th class="gray">Date</th> 
            <th>Status</th>
       
        </tr>
    <?php    foreach($donors as $row) {?>
        <tr>
            <td><?php echo $row->first_name?></td>
            <td class="gray"><?php echo $row->last_name?></td>
            <td><?php echo $row->merchant_id?></td>
             <td class="gray"><?php echo $row->phone?></td>
            <td><?php echo $row->description?></td>
            <td class="gray"><?php echo $row->transaction_code?></td>           
            <td><?php echo $row->amount?></td>
            <td class="gray"><?php echo $row->date?></td>
            <td><?php echo $row->status?></td>
            
        </tr>
    <?php }?>
    </table>
</div>

