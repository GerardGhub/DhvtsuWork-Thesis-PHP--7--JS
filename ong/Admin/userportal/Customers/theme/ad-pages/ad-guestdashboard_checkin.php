<?php $cur = $spcheck->newguest_checkin();?>
<?php if(empty($cur)){$aspmember->RedirectToURL('./');}?>   
<div style="padding:0px"> 

            <?php foreach($cur as $row){?>
             
            <div class="col-sm-2">
                <div class="panel panel-default text-center effect2 efbor">
                    <div style="padding:0px;" class="panel-body">
                        <ul id="da-thumbs" class="da-thumbs">
									
									<li>
										<a href="">
            
				<img width="100%" src="<?php echo SPTHM.SPUPL.$row->image;?>" class="img-responsive"/>
                   
													<div>
														<span>
                                                        <p><?php echo ucwords($row->name);?></p>
                                                        <p><?php echo ucwords($row->lastname);?></p>
                                                        </span>
                                                        
													</div>
										</a>
									</li>
									
							</ul>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                        <a class="btn btn-danger btn-sm efbor" href='?page=guestcheckin&id=<?php echo $row->id_user;?>'>
                        <i class="glyphicon glyphicon-off"></i>
                        Checkout</a>
                        </li>
                        <li class="list-group-item">
                        <a class="btn btn-default btn-sm efbor" href='#guest<?php echo $row->id_user;?>' data-toggle="modal">
                        <i class="glyphicon glyphicon-usd"></i>
                        View Balance</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
            
            
<!--------------------------------------------------------------------------------------------------->

<div id="guest<?php echo $row->id_user;?>" class="modal fade efbor" tabindex="-1" style="display: none; "data-width="600px">

 	<?php $id = $row->id_user;?>
	<?php $bal = $spconn->query("SELECT * FROM tb_reservation,tb_guest WHERE tb_reservation.id_user = tb_guest.id_user AND tb_reservation.status_id = 2 AND tb_reservation.id_user = $id");?>
    
    <?php $entrances = $spconn->query("SELECT * FROM tb_payable,tb_entrance_swimmers WHERE tb_payable.id_user = $id AND tb_entrance_swimmers.entrance_id = tb_payable.entrance_id");?>

<div class="modal-header">
	<strong>Guest name:</strong> <?php echo ucwords($row->lastname);?> <?php echo ucwords($row->name);?> Balance</strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>

<div class="modal-body">
	
    <table class="table table-bordered table-hover">
    
                								<thead class="tbody">
                                                	
                                                      <tr>
                                                        <th><div class="text-center">Bank Receipt Code</div></th>
                                                        <th><div class="text-center">Room Balance</div></th>
                                                        <th><div class="text-center">Entrance Balance</div></th>
                                                        <th><div class="text-center">Total Balance</div></th>
                                                      </tr>
                                                   	
                                                   </thead>
    
                <tbody class="tbody">
                
               		<?php foreach($bal as $key => $row){?>
                    <?php $spcheck->calculator($row['payable']/2);?>
                    <?php }?>
                    
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
                                <?php $Ototal = $spcheck->getTotal();?>
    							<?php $Ctotal = $spcheck2->getTotal();?>
                    
                    <tr class="text-center">
                    	<td><?php echo $code;?></td>
                        <td><?php echo $spcheck->sphp(2,$spcheck->getTotal());?></td>
                        <td><?php echo $spcheck2->sphp(2,$spcheck2->getTotal());?></td>
                        <td><?php 
							$Over = $Ototal + $Ctotal;
							echo $spcheck->sphp(2,$Over);?>
                        </td>
                    </tr>
                    
                </tbody>
                
    </table>
	
</div>

<div class="modal-footer">  	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</div>
            
            
            
            
            
            <?php }?>


</div>


