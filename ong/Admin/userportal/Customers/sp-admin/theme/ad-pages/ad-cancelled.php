<?php $reservation = $spconn->query("SELECT * FROM tb_reservation,tb_rooms,tb_category,tb_status,tb_guest where tb_reservation.roomID = tb_rooms.roomID AND tb_rooms.category_id = tb_category.category_id AND tb_reservation.status_id = tb_status.status_id AND tb_reservation.id_user = tb_guest.id_user AND tb_reservation.status_id = 4");?>
<form action="?page=reciept" method="post">
<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<input name="reciept" type="hidden" value="1" />
                                    
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-remove"></i> <?php echo $title;?>
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="example">
    
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
                    </tr>
                    
                    <?php }?>
                    
                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
                                             
</div>      
</form>

