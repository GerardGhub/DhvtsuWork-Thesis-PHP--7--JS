
<?php 
	
if(isset($_POST['order'])){	

	$id = $_POST['selector'];
	
	if(empty($id))
		{			
			$spmember->RedirectToURL('./');		
		}
		$order_id = $spmember->Sanitize($_POST['selector']);
		$check_in = $spmember->Sanitize($_POST['arrival']);
		$check_out = $spmember->Sanitize($_POST['departure']);
		$dateresult = $spmember->Sanitize($_POST['result']);
		$timecheck = $spmember->Sanitize($_POST['face']);
				
?>

<form  id="formbook" action='?page=info' method="post">

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
                                    
                                           	<button name="order" data-loading-text="Please wait..." id="book" type="submit" class="btn btn-sm btn-primary efbor"><i class="glyphicon glyphicon-pencil"></i> Continue booking</button>
                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart details
                                    </div>
                                    <div class="panel-body">
	<span id="printout">
    <table class="table table-bordered table-hover">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Transaction Code</div></th>
                                                        <th><div class="text-center">Category</div></th>
                                                        <th><div class="text-center">Room no.</div></th>
                                                        <th><div class="text-center">Room price</div></th>
                                                        <th><div class="text-center">Check In</div></th>
                                                        <th><div class="text-center">Check Out</div></th>
                                                        <th><div class="text-center">Nights</div></th>
                                                        <th><div class="text-center">Amount</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                    <?php for($i=0; $i < count($id); $i++){?>
                    	
                        <?php $result = $spconn->query("SELECT * FROM tb_category,tb_rooms where 
                            tb_category.category_id = tb_rooms.category_id AND tb_rooms.roomID = $order_id[$i]");?>	
        
							<?php foreach($result as $key => $row){?>
                              <tr>
                              	<td><?php echo strtoupper($spcheck->createRandomPassword());?></td>
                                <td><?php echo $row['category_name'];?></td>
                                <td><?php echo $row['room_name'];?></td>
                                <td><?php echo $spcheck->sphp(2,$row['category_price']);?></td>
                                <td><?php echo $check_in;?></td>
                                <td><?php echo $check_out;?></td>
                                <td><?php echo $spcheck->sphp(1,$dateresult);?></td>
                                <td><?php echo $spcheck->sphp(2,($row['category_price'])*$dateresult);?></td>
                              </tr>
                              
                              	<input name="itemCode[]" type="hidden" 
                                value="<?php echo $spcheck->createRandomPassword();?>" />
                              
                              	<input name="itemTotal[]" type="hidden" 
                                value="<?php echo $row['category_price']*$dateresult;?>" />
                                
                                <input name="itemId[]" type="hidden" 
                                value="<?php echo $row['roomID'];?>" />
                                
                                <input name="itemPrice[]" type="hidden" 
                                value="<?php echo $row['category_price'];?>" />
                                
                                <input name="itemArrival[]" type="hidden" 
                                value="<?php echo $check_in;?>" />
                                
                                <input name="itemDeparture[]" type="hidden" 
                                value="<?php echo $check_out;?>" />
                                
                                <input name="itemDateresult[]" type="hidden" 
                                value="<?php echo $dateresult;?>" />
                                
                                <input name="tempType[]" type="hidden" 
                                value="<?php echo $row['category_name'];?>" />
                                
                                <input name="tempName[]" type="hidden" 
                                value="<?php echo $row['room_name'];?>" />
                                
                              	<?php $spcheck->calculator($row['category_price']*$dateresult);?>
                            <?php }?>
                        
                    <?php }?>
                </tbody>
                
    </table>
 	</span>

<span class="pull-left">                                            
<label class="text-danger">                                          
<strong>Total of reservation: </strong>
</label>
<?php echo $spcheck->sphp(2,$spcheck->getTotal());?>
</span> 
    
                                             
                                           <input name="amount" type="hidden" 
                                		   value="<?php echo $spcheck->sphp(2,$spcheck->getTotal());?>" />
                                           
                                           <input name="face" type="hidden" 
                                		   value="<?php echo $timecheck;?>" />
    
    
                                 </div>
        
                                 </div> 
                                 
                             
                                             
</div>      

</form>

<?php }else{$spmember->RedirectToURL('./');}?>