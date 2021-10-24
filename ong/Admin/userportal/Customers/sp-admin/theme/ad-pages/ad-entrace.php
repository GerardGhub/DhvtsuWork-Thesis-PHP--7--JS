<?php $entrance = $spconn->query("SELECT * FROM tb_entrance,tb_entrance_swimmers where tb_entrance.entrace_id = tb_entrance_swimmers.entrance_id");?>

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
											<a href="#entrance-modal" class="btn btn-sm btn-success efbor" 
                            data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add <?php echo $title;?></a>
                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> records
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Entrance id</div></th>
                                                        <th><div class="text-center">Entrance</div></th>
                                                        <th><div class="text-center">Time</div></th>
                                                        <th><div class="text-center">Type</div></th>
                                                        <th><div class="text-center">Price</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                	<?php foreach($entrance as $key=>$row){?>
                    
                    	<?php $id = $row['swimmer_id']?>
                        <tr class="del<?php echo $id?>">
                    	<td><?php echo $row['swimmer_id'];?></td>
                        <td><?php echo $row['entrance_details'];?></td>
                        <td><?php echo $row['entrance_time'];?></td>
                        <td><?php echo $row['swimmer_details'];?></td>
                        <td><?php echo $spcheck->sphp(2,$row['swimmer_price']);?></td>
                        <td width="360px">
                        	<a href='#addentrance-modal<?php echo $id;?>' data-toggle="modal" class="btn btn-sm btn-info efbor">
    						<i class="glyphicon glyphicon-plus tooltip-top" title="Click to add promo">
                            </i> Add promo</a>
                        
                        	<a href='?page=editentrance&id=<?php echo $id;?>' class="btn btn-sm btn-primary efbor">
    						<i class="glyphicon glyphicon-edit tooltip-top" title="Click to edit entrance">
                            </i> Edit</a>
                            
                            <a id="<?php echo $id;?>" class="btn btn-sm btn-danger efbor delete_entrance">
    						<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete entrance">
                            </i> Delete</a>
                            
                            <a href='?page=promo&id=<?php echo $id;?>' data-toggle="modal" class="btn btn-sm btn-warning efbor">
    						<i class="glyphicon glyphicon-list-alt tooltip-top" title="Click to  view promos">
                            </i> Promo</a>
                            
                        </td>
                    </tr>  
                    
                    
                    
<!--------------------------------------------------------------------------------------------------->

<div id="addentrance-modal<?php echo $id?>" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="300px">

<form action="?page=5" method="post">

<div class="modal-header">
	<strong><i class="glyphicon glyphicon-plus"></i> Add Promo</strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>

<div class="modal-body">

    <div class="form-group">
    <input class="form-control" name="promoid" type="hidden" value="<?php echo $id;?>"/>
    <input readonly="readonly" class="form-control" name="promocode" type="text" 
    value="<?php echo strtoupper($spcheck->createRandomCode());?>"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="promo" type="text" placeholder="Promo details" required="required"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="discount" type="text" placeholder="Discount" required="required"/>
    </div>

</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-save"></i> <?php echo $title;?></button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>

<!--------------------------------------------------------------------------------------------------->
                    
                        
                    
                    <?php }?>
                </tbody>
                
    </table>
    

                                 </div>
        
                                 </div> 
                                 
                             
                                                   

</div>


<!--------------------------------------------------------------------------------------------------->

<div id="entrance-modal" class="modal fade efbor" style="display: none;" data-width="300px">

<form id="adentrance" name="sentrance" method="post">

<div class="modal-header">
	<strong><i class="glyphicon glyphicon-plus"></i> Add <?php echo $title;?></strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">

	<?php $entrace = $spconn->query("SElECT * FROM tb_entrance");?>
	
    <div class="form-group">
    <select class="form-control" name="entrance">
    	<option></option>
        <?php foreach($entrace as $key=> $row){?>
        <option value="<?php echo $row['entrace_id'];?>"><?php echo $row['entrance_details'];?></option>
        <?php }?>
    </select>
    </div>
    <div class="form-group">
    <input class="form-control" name="type" type="text" placeholder="Guest type" />
    </div>
    <div class="form-group">
    <input class="form-control" name="price" type="text" placeholder="Price" />
    </div>
    
</div>	

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-save"></i> <?php echo $title;?></button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>

<!--------------------------------------------------------------------------------------------------->
