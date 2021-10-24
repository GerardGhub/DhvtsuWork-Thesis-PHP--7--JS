<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }?>

<div class="col-sm-3">

                                <div class="panel panel-default text-center effect2 efbor">

                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> information
                                    </div>
                                    <div class="panel-body">

<form id="editentrance" name="eentrance" method="post">

	<?php 
	$get = $spconn->query("SELECT * FROM tb_entrance_swimmers,tb_entrance where tb_entrance.entrace_id = tb_entrance_swimmers.entrance_id AND tb_entrance_swimmers.swimmer_id = $id");
	?>
    
    <?php foreach($get as $key=> $row){?>  
    <input name="eupdate" type="hidden" value="1" /> 
    <input name="euid" type="hidden" value="<?php echo $id;?>" />               	                         
	<div class="form-group">
    <select class="form-control" name="entrance">
    	<option value="<?php echo $row['entrance_id'];?>"><?php echo $row['entrance_details'];?></option>
        <?php $type = $row['entrance_id']?>
		<?php $position = $spconn->query("SELECT * FROM tb_entrance where entrace_id != $type");?>   
        <?php foreach($position as $key=> $srow){?>
        <option value="<?php echo $srow['entrace_id'];?>"><?php echo $srow['entrance_details'];?></option> 
        <?php }?>
    </select>
    </div>
    <div class="form-group">
    <input class="form-control" name="type" type="text" placeholder="Guest type" value="<?php echo $row['swimmer_details'];?>"/>
    </div>
    <div class="form-group">
    <input class="form-control" name="price" type="text" placeholder="Price" value="<?php echo $row['swimmer_price'];?>"/>
    </div>
    
    <?php }?>
    

	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> Update <?php echo $title;?></button> 
    <a href='?page=entrance' class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</a>  	

</form>

</div>


</div>