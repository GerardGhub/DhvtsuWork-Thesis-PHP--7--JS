<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }?>

<div class="col-sm-3">

                                <div class="panel panel-default text-center effect2 efbor">

                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> information
                                    </div>
                                    <div class="panel-body">

<form id="editcategory" action='?page=3' method="post" enctype="multipart/form-data">

	<?php 
	$get = $spconn->query("SELECT * FROM tb_category where category_id = $id");
	?>
    
    <?php foreach($get as $key=> $row){?>                        	                         
<input name="cupdate" type="hidden"  value="1"/>    
<input name="category_id" type="hidden"  value="<?php echo $id;?>"/>
    <div class="form-group">
<input class="form-control" name="cname" type="text" placeholder="Category name" value="<?php echo $row['category_name'];?>"/>
    </div>
    <div class="form-group">
<input class="form-control" name="cprice" type="text" placeholder="Price" value="<?php echo $row['category_price'];?>"/>
    </div>
    <div class="form-group">
<input class="form-control" name="ccapacity" type="text" placeholder="Capacity" value="<?php echo $row['category_capacity'];?>" />
    </div>
    <div class="form-group">
<input class="form-control btn btn-sm btn-danger efbor" name="image" type="file"/>
    </div>
	
    <?php }?>

	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> <?php echo $title;?></button> 
    <a href='?page=category' class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</a>  	

</form>

</div>


</div>