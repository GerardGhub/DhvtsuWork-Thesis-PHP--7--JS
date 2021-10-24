<?php $cur = $spcheck->newpayment();?>

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
                               
                        			</div>
                         
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-check"></i> <?php echo $title;?>
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover">
    
                									<thead class="tbody">
                                                      <tr>
                                                      	<th><div class="text-center">Guest name</div></th>
                                                        <th><div class="text-center">Bank reciept code</div></th>
                                                        <th><div class="text-center">Total orders</div></th>
                                                        <th><div class="text-center">Room paid</div></th>
                                                        <th><div class="text-center">Entrance paid</div></th>
                                                        <th><div class="text-center">Total paid</div></th>
                                                        <th><div class="text-center">Date paid</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                	<?php foreach($cur as $result){?>
                    <tr>
                    	<td><?php echo ucwords($result->name).' '.ucwords($result->lastname);?></td>
                        <td><?php echo $result->bank_code;?></td>
                        <td><?php echo $spcheck->sphp(2,$result->total_order);?></td>
                        <td><?php echo $spcheck->sphp(2,$result->room_balance);?></td>
                        <td><?php echo $spcheck->sphp(2,$result->entrance_balance);?></td>
                        <td><?php echo $spcheck->sphp(2,$result->over_total);?></td>
                        <td><?php echo $result->date_paid;?></td>
                    </tr>
                    <?php }?>

                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
                                             
</div>      


