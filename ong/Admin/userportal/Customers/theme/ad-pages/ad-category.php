<?php $category = $spconn->query("SELECT * FROM tb_category");?>

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
													<a href="#add-modal" class="btn btn-sm btn-success efbor" 
                            data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> <?php echo $title;?></a>
                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> records
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Category id.</div></th>
                                                        <th><div class="text-center">Name</div></th>
                                                        <th><div class="text-center">Price</div></th>
                                                        <th><div class="text-center">Capacity</div></th>
                                                        <th><div class="text-center"># of rooms</div></th>
                                                        <th><div class="text-center">Image</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                	<?php foreach($category as $key=> $row){?>
                    	<?php $id = $row['category_id']?>
                        <?php $total = $spconn->query("SELECT * from tb_rooms where category_id = $id");?>
                    <tr class="del<?php echo $id?>">
                        <td><?php echo $row['category_id'];?></td>
                        <td><?php echo $row['category_name'];?></td>
                        <td><?php echo $spcheck->sphp(2,$row['category_price']);?></td>
                        <td><?php echo $spcheck->sphp(1,$row['category_capacity']);?></td>
                        <td><?php echo count($total);?></td>
                        <td> 
                        <a class="image-zoom" href="<?php echo SPTHM.SPUPL.$row['category_image'];?>" 
                        rel="prettyPhoto[gallery]">              
                <img width="35px" src="<?php echo SPTHM.SPUPL.$row['category_image'];?>" class="img-responsive img-thumbnail"/>
                		</a>
                </td>
                        <td width="330px">
                        
                        		<a href="#addroom-modal<?php echo $id?>" data-toggle="modal" class="btn btn-sm btn-info efbor">
    								<i class="glyphicon glyphicon-plus tooltip-top" title="Click to category rooms">
                                    </i> Add</a>
                       
                                    <a href="?page=editcategory&id=<?php echo $row['category_id'];?>" class="btn btn-sm btn-primary efbor">
    								<i class="glyphicon glyphicon-edit tooltip-top" title="Click to edit category">
                                    </i> Edit</a>
                                    
                                    <a id="<?php echo $id;?>" class="btn btn-sm btn-danger efbor delete_category">
    								<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete category">
                                    </i> Delete</a>
                                    
                                    <a href="?page=rooms&id=<?php echo $row['category_id'];?>" class="btn btn-sm btn-warning efbor">
    								<i class="glyphicon glyphicon-list tooltip-top" title="Click to view category">
                                    </i> View</a>

                        </td>
                    </tr>
                    
                    
<!--------------------------------------------------------------------------------------------------->

<div id="addroom-modal<?php echo $id?>" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="300px">

<form action="?page=4" method="post">

<div class="modal-header">
	<strong>Room Code</strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>

<div class="modal-body">

    <div class="form-group">
    <input readonly="readonly" class="form-control" name="rname" type="text" 
    placeholder="Room name" value="<?php echo $row['category_name'][0].'-'. strtoupper($spcheck->createRandomRoom());?>"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="cid" type="hidden" placeholder="Price" value="<?php echo $id?>" />
    </div>

</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> <?php echo $title;?></button>   	
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

<div id="add-modal" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="300px">

<form action="?page=2" id="addcategory" method="post" enctype="multipart/form-data">

<div class="modal-header">
	<strong><?php echo $title;?></strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">


    <div class="form-group">
    <input class="form-control" name="cname" type="text" placeholder="Category name"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="cprice" type="text" placeholder="Price" />
    </div>
    <div class="form-group">
    <input class="form-control" name="ccapacity" type="text" placeholder="Capacity" />
    </div>
    <div class="form-group">
    <input class="form-control btn btn-sm btn-danger efbor" name="image" type="file"/>
    </div>

</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> <?php echo $title;?></button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>

<!--------------------------------------------------------------------------------------------------->

