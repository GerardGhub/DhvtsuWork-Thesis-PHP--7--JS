<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }?>

<div class="col-sm-3">

                                <div class="panel panel-default text-center effect2 efbor">

                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> information
                                    </div>
                                    <div class="panel-body">

<form id="updateForm" name="updateuser" method="post">

	<?php 
	$get = $spconn->query("SELECT * FROM tb_user,tb_usertype where tb_user.id_user = $id AND tb_user.type_id = tb_usertype.type_id");
	?>
    
    <?php foreach($get as $key=> $row){?>                        	                         
    
    <input name="update" type="hidden"  value="1"/>
    
    <input name="iduser" type="hidden"  value="<?php echo $id;?>"/>
	
    <div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Firstname" value="<?php echo $row['name'];?>" />
    </div>
    <div class="form-group">
    <input class="form-control" name="lastname" type="text" placeholder="Lastname" value="<?php echo $row['lastname'];?>" />
    </div>
    <div class="form-group">
    <input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo $row['username'];?>" />
    </div>
    <div class="form-group">
    <input class="form-control" name="email" type="email" placeholder="Email" value="<?php echo $row['email'];?>" />
    </div>
    <div class="form-group">
    <input class="form-control" name="phone" type="text" placeholder="Contact no." value="<?php echo $row['phone_number'];?>" />
    </div>
    <div class="form-group">
    <select class="form-control" name="position"> 
    <?php $type = $row['type_id'];?>
    <option value="<?php echo $row['type_id'];?>"><?php echo $row['type_name'];?></option> 
    <?php $position = $spconn->query("SELECT * FROM tb_usertype where type_id != $type");?>   
    <?php foreach($position as $key=> $srow){?>
    <option value="<?php echo $srow['type_id'];?>"><?php echo $srow['type_name'];?></option> 
    <?php }?> 
    </select>
    </div>
    <div class="form-group">
    <input  class="form-control" name="password" type="password" value="<?php echo $row['password'];?>" />
    </div>
	
    <?php }?>

	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> Update <?php echo $title;?></button> 
    <a href='?page=user' class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</a>  	

</form>

</div>


</div>