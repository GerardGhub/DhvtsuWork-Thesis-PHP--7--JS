<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }?>

<?php $reservation = $spconn->query("SELECT * FROM tb_reservation,tb_rooms,tb_category,tb_status,tb_guest where tb_reservation.roomID = tb_rooms.roomID AND tb_rooms.category_id = tb_category.category_id AND tb_reservation.status_id = tb_status.status_id AND tb_reservation.id_user = tb_guest.id_user AND tb_reservation.status_id = 1 AND tb_guest.id_user = $id");?>

<?php if(empty($reservation)){?>
		<?php $aspmember->RedirectToURL('./');?>
<?php }?>
<div style="padding:0px" class="col-sm-12">
<form id="confirmR" name="sconfirm" method="post">
								<input name="confirm" type="hidden" value="1"/>
                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
                                    	
                                        <?php foreach($reservation as $key=> $row){?>
                                        <?php $cpid = $row['id_user'];?>
                                        <?php }?>
   <?php  $payable_c = $spconn->query("SELECT * FROM tb_payable where id_user = $cpid AND status_id = 1");?>
   										<?php if(empty($payable_c)){?>
                                        <a class="btn btn-sm btn-success efbor" href="#add_entrance_c" data-toggle="modal">
                                        <i class="glyphicon glyphicon-plus"></i> Add Guest Entrance</a>
                                        <?php }else{?>
                                        
                                        <button type="submit" class="btn btn-sm btn-info efbor">
                                        <i class="glyphicon glyphicon-check"></i> Confirm reservation
                                        </button>
                                      
                                        <?php }?>
                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-user"></i> Guest reservation list
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Transaction Code</div></th>
                                                        <th><div class="text-center">Guest</div></th>
                                                        <th><div class="text-center">Category</div></th>
                                                        <th><div class="text-center">Room no.</div></th>
                                                        <th><div class="text-center">Room price</div></th>
                                                        <th><div class="text-center">Check In</div></th>
                                                        <th><div class="text-center">Check Out</div></th>
                                                        <th><div class="text-center">Nights</div></th>
                                                        <th><div class="text-center">Amount</div></th>
                                                        <th><div class="text-center">Status</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                	<?php foreach($reservation as $key=> $row){?>
                
                    <tr>
                    	<td><?php echo $row['confirmation'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['category_name'];?></td>
                        <td><?php echo $row['room_name'];?></td>
                        <td><?php echo $spcheck->sphp(2,$row['category_price']);?></td>
                        <td><?php echo $row['arrival'];?></td>
                        <td><?php echo $row['departure'];?></td>
                        <td><?php echo $spcheck->sphp(1,$row['day_no']);?></td>
                        <td><?php echo $spcheck->sphp(2,$row['payable']/2);?></td>
                        <td><?php echo ucwords($row['status_details']);?></td>
                        <td>
                        
                        	<?php
							$pid = $row['id_user'];
                            $payable = $spconn->query("SELECT * FROM tb_payable where id_user = $pid AND status_id = 1");
							if(!empty($payable)){
							?>
                        	<a class="tooltip-top" title="Chose">
                            <input name="select[]" type="checkbox" value="<?php echo $row['reservation_id'];?>" /></a>
                            <?php }else{?>
                            <input disabled="disabled" type="checkbox" value="" />
                            <?php }?>
                            
                        </td>
                    </tr>
                    
                    <?php }?>
                    
                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
</form>                                             
</div>      


<!--------------------------------------------------------------------------------------------------->

<div id="add_entrance_c" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="230px">

<form id="addentrance_c" name="entrance_c" method="post">

<div class="modal-header">
	<strong><i class="glyphicon glyphicon-plus"></i> Add Guest Entrance</strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>

<div class="modal-body">

	<input id="guest_id" name="guest_id" type="hidden"  value="<?php echo $row['id_user'];?>"/>
    <div class="form-group">
    <select class="form-control" name="entrance">
    	<option value="">--Select Entrance--</option>
    	<?php $entrance = $spconn->query("SELECT * FROM tb_entrance");?>
			<?php foreach($entrance as $key=> $row){?>
            <option value="<?php echo $row['entrace_id'];?>"><?php echo $row['entrance_details'];?></option>
            <?php }?>
    </select>
    </div>
    <div class="form-group">
    <input name="bank" class="form-control" type="text" placeholder="Back receipt code" />
    </div>
    Number of Adult
    <div class="form-group">
    <select class="form-control" name="adult">
    <?php for($i=1; $i < 11; $i++){?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php }?>
    </select>
    </div>
    
    Number of Child
    <div class="form-group">
    <select class="form-control" name="child">
    <?php for($i=0; $i < 10; $i++){?>
    <option value="<?php echo $i;?>"><?php if($i == '0'){echo 'None';}else{echo $i;};?></option>
    <?php }?>
    </select>
    </div>
    
    Number of Senior
    <div class="form-group">
    <select class="form-control" name="senior">
    <?php for($i=0; $i < 10; $i++){?>
    <option value="<?php echo $i;?>"><?php if($i == '0'){echo 'None';}else{echo $i;};?></option>
    <?php }?>
    </select>
    </div>
    
   
</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-check"></i> Submit</button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>


