<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }?>

<?php $promo = $spconn->query("SELECT * FROM tb_promo,tb_entrance_swimmers,tb_entrance where tb_entrance.entrace_id = tb_entrance_swimmers.entrance_id AND tb_entrance_swimmers.swimmer_id = tb_promo.swimmer_id AND tb_promo.swimmer_id = $id");?>

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
 
											<a href='?page=entrance' class="btn btn-sm btn-default efbor">
                                            <i class="glyphicon glyphicon-remove"></i> Back</a>

                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> records
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Promo id</div></th>
                                                        <th><div class="text-center">Promo</div></th>
                                                        <th><div class="text-center">Code</div></th>
                                                        <th><div class="text-center">Discount</div></th>
                                                        <th><div class="text-center">Guest</div></th>
                                                        <th><div class="text-center">Session</div></th>
                                                        <th><div class="text-center">Time</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
                                                    <input id="prom" type="hidden" value="<?php echo $id;?>" />
    
                <tbody class="tbody">
                <?php foreach($promo as $key=> $row){?>
                	
                	<?php $ids = $row['promo_id'];?>
                	<tr class="del<?php echo $ids?>">
                    	<td><?php echo $row['promo_id'];?></td>
                        <td><?php echo $row['promo'];?></td>
                        <td><?php echo $row['promo_code'];?></td>
                        <td><?php echo $spcheck->sphp(2,$row['promo_discount']);?></td>
                        <td><?php echo $row['swimmer_details'];?></td>
                        <td><?php echo $row['entrance_details'];?></td>
                        <td><?php echo $row['entrance_time'];?></td>
                        
                        <td>
                        	
                            <a href='?page=editpromo&id=<?php echo $ids;?>' class="btn btn-sm btn-primary efbor">
    						<i class="glyphicon glyphicon-edit tooltip-top" title="Click to edit promo">
                            </i> Edit</a>
                        
                           <a id="<?php echo $ids;?>" class="btn btn-sm btn-danger efbor delete_promo">
    						<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete promo"></i> 
                           Delete</a>
                        </td>
                    </tr>
                    
                <?php }?>
                </tbody>
                
    </table>
    

                                 </div>
        
                                 </div> 
                                 
                             
                                                   

</div>
