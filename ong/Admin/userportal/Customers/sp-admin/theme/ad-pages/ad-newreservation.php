<?php $reservation = $spcheck->newreservation();?>
<?php if(empty($reservation)){$aspmember->RedirectToURL('./');}?>
<form action="?page=reciept" method="post">
<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
											<a href='?page=guestdashboard' class="btn btn-sm btn-default efbor">
                                            <i class="glyphicon glyphicon-user"></i> View all reservation by guest</a>       
                        			</div>
                                    
                                
                                	<input name="reciept" type="hidden" value="1" />
                                    
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-bell"></i> <?php echo $title;?>
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
                	<?php foreach($reservation as $row){?>
                
                    <tr>
                    	<td><?php echo $row->confirmation;?></td>
                        <td><?php echo $row->lastname;?></td>
                        <td><?php echo $row->category_name;?></td>
                        <td><?php echo $row->room_name;?></td>
                        <td><?php echo $spcheck->sphp(2,$row->category_price);?></td>
                        <td><?php echo $row->arrival;?></td>
                        <td><?php echo $row->departure;?></td>
                        <td><?php echo $row->day_no;?></td>
                        <td><?php echo $spcheck->sphp(2,$row->payable);?></td>
                        <td><?php echo ucwords($row->status_details);?></td>
                    </tr>
                    
                    <?php }?>
                    
                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
                                             
</div>      
</form>

