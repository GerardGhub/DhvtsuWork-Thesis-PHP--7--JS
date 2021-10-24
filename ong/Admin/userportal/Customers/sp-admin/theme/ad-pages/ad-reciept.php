<?php 
	
if(isset($_POST['reciept'])){	

	$id = $_POST['checkout'];
	
	if(empty($id))
		{			
			$spmember->RedirectToURL('./');		
		}
		$order_id = $spmember->Sanitize($_POST['checkout']);
				
?>




<div class="col-sm-12">
<form id="acheckout" name="checks" method="post">
      <!--<div class="jumbotron">-->
         <div class="panel panel-default effect2 efbor">
         	
            <div style="margin:5px;" class="pull-right" id="divButtons" name="divButtons">
             					<button class="btn btn-sm btn-success effect2 efbor" type="button" onclick="tablePrint();">
                                <span class="glyphicon glyphicon-print"></span> Print <?php echo $title;?>
                                </button>
								<?php for($i=0; $i < count($order_id); $i++){?>
                                <input name="checkouts[]" type="hidden" value="<?php echo $order_id[$i];?>">
                                <?php }?>
                                <input name="upc" type="hidden" value="1">
                                <button name="reciept" type="submit" class="btn btn-sm btn-danger efbor">
                                <i class="glyphicon glyphicon-check"></i> Submit now</button>
            </div>
         	
            <div class="panel-body">  
			
<span id="printout">
				
        <div style="margin-top:40px;" align="right">
            	<?php
                $Today=date('y:m:d');
                $new=date('l, F d, Y',strtotime($Today));
                echo '<strong>Date issued: </strong>'.$new; ?>
        </div>
        
		<div style="margin-top:20px;" align="right">
    			<strong>Cashier: </strong> <?php echo $aspmember->userfullname();?>
    	</div>	
        
        <center><strong>Republic of the Philippines</strong></center>
        <center><strong>Region II - Pampanga </strong></center>
        <center><strong>Magic Jade Kingdom</strong></center>
        <center><strong>Pampanga City</strong></center>
        <center><strong>Manila</strong></center><br />
                
        <center><h2>Official receipt</h2></center><br />       

        	  <table class="table table-bordered table-hover">
    
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
                                                        <th><div class="text-center">Balance</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                    <?php for($i=0; $i < count($order_id); $i++){?>
                    	
                        <?php $reservation = $spconn->query("SELECT * FROM tb_reservation,tb_rooms,tb_category,tb_status,tb_guest where tb_reservation.roomID = tb_rooms.roomID AND tb_rooms.category_id = tb_category.category_id AND tb_reservation.status_id = tb_status.status_id AND tb_reservation.id_user = tb_guest.id_user AND tb_reservation.reservation_id = $order_id[$i]");?>
        					<?php if(empty($reservation)){$spmember->RedirectToURL('./');}?>
							<?php foreach($reservation as $key => $row){?>
                              <tr class="text-center">
                              	<?php $guest_id = $row['id_user'];?>
                              	<td><?php echo $row['confirmation'];?></td>
                                <td><?php echo $row['lastname'];?></td>
                                <td><?php echo $row['category_name'];?></td>
                                <td><?php echo $row['room_name'];?></td>
                                <td><?php echo $spcheck->sphp(2,$row['category_price']);?></td>
                                <td><?php echo $row['arrival'];?></td>
                                <td><?php echo $row['departure'];?></td>
                                <td><?php echo $spcheck->sphp(1,$row['day_no']);?></td>
                                <td><?php echo $spcheck->sphp(2,$row['payable']/2);?></td>
                              </tr>
                              	<?php $spcheck->calculator($row['payable']/2);?>
                                <?php $spcheck3->calculator($row['payable']);?>
                            <?php }?>
                        
                    <?php }?>
                </tbody>
                
    </table> 
    
    
    
    			<div style="margin-top:20px;" class="pull-right">                                            
                <label class="text-danger">                                          
                <strong>Total of balance: </strong>
                </label>
                <?php echo $spcheck->sphp(2,$spcheck->getTotal());?>
                
                <strong><i class="glyphicon glyphicon-plus"></i></strong>
                
                <label class="text-danger">
                	<?php $entrances = $spconn->query("SELECT * FROM tb_payable,tb_entrance_swimmers WHERE tb_payable.id_user = $guest_id AND tb_entrance_swimmers.entrance_id = tb_payable.entrance_id");?>
                    
                      
                    
					<?php foreach($entrances as $key=> $row){?>     
                    
                    		<?php $guestitem = $spcheck->guestitem($row['id_user'],$row['bank_code']);?>
								<?php foreach($guestitem as $result){?>
                                       <?php $code = $result->bank_code;?>      
                                       <?php $cadult = $result->Adult;?>
                                       <?php $cchild = $result->Child;?>
                                       <?php $csenior = $result->Senior;?>     
                                <?php }?>
                                
                                <?php if($row['swimmer_details'] == 'Adult'){$c = $cadult*$row['swimmer_price'];};?>
                                <?php if($row['swimmer_details'] == 'Child'){$d = $cchild*$row['swimmer_price'];};?>
                                <?php if($row['swimmer_details'] == 'Senior'){$a =$csenior*$row['swimmer_price'];};?>
                                
                    <?php }?>
                   				
                    			<?php $spcheck2->calculator($c);?>
                                <?php $spcheck2->calculator($d);?>
                                <?php $spcheck2->calculator($a);?>
                    			<strong>Total of Entrance:</strong>
                   </label> 
                                <?php echo $spcheck2->sphp(2,$spcheck2->getTotal());?>
                                <?php $Ototal = $spcheck->getTotal();?>
    							<?php $Ctotal = $spcheck2->getTotal();?>
                                <?php $Atotal = $spcheck3->getTotal();?>
               

                <label class="label-success">                                          
                <strong>Overall Total Amount:</strong>
                </label>
                <?php 
				$Over = $Ototal + $Ctotal;
				echo $spcheck->sphp(2,$Over);?>
                
                </div> 
                
                <input name="code" type="hidden" value="<?php echo $code;?>" />
                <input name="totalorder" type="hidden" value="<?php echo $Atotal;?>" />
                <input name="roombal" type="hidden" value="<?php echo $Ototal;?>" />
				<input name="entrancebal" type="hidden" value="<?php echo $Ctotal;?>" />	
				<input name="over" type="hidden" value="<?php echo $Over;?>" />
                <input name="guestID" type="hidden" value="<?php echo $guest_id;?>" />	
</span>


  

            </div>
          </div>  
    </div>
</form>


<?php }else{$spmember->RedirectToURL('./');}?>


    

