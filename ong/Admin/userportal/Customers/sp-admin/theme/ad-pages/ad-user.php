<?php $user = $spconn->query("SELECT * FROM tb_user,tb_usertype where tb_user.type_id = tb_usertype.type_id");?>

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
											<a href="#user-modal" class="btn btn-sm btn-success efbor" 
                            data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> <?php echo $title;?></a>
                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> records
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">User id.</div></th>
                                                        <th><div class="text-center">Firstname</div></th>
                                                        <th><div class="text-center">Lastname</div></th>
                                                        <th><div class="text-center">Email</div></th>
                                                        <th><div class="text-center">Contact no.</div></th>
                                                        <th><div class="text-center">Username</div></th>
                                                        <th><div class="text-center">Password</div></th>
                                                        <th><div class="text-center">Status</div></th>
                                                        <th><div class="text-center">Usertype</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                	<?php $user_id = $spmember->UserID();?>
                	<?php foreach($user as $key=>$row){?>
                    	<?php $id = $row['id_user']?>
                        <tr class="del<?php echo $id?>">
                    	<td><?php echo $row['id_user'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone_number'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php if($row['confirmcode'] == '1'){echo 'Verified';}else{echo 'Unverified';}?></td>
                        <td><?php echo $row['type_name'];?></td>
                        <td>
                        	<?php if($row['id_user'] == $user_id){?>
                            <a href='?page=edituser&id=<?php echo $id;?>' 
                        	class="btn btn-sm btn-primary efbor disabled">
    						<i class="glyphicon glyphicon-edit tooltip-top" title="Click to edit system user">
                            </i></a>
                            
                            <a id="<?php echo $id;?>" class="btn btn-sm btn-danger efbor delete_user disabled">
    						<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete system user">
                            </i></a>
                        	
                            <?php }else{?>
                            <a href='?page=edituser&id=<?php echo $id;?>' 
                        	class="btn btn-sm btn-primary efbor">
    						<i class="glyphicon glyphicon-edit tooltip-top" title="Click to edit system user">
                            </i></a>
                            
                            <a id="<?php echo $id;?>" class="btn btn-sm btn-danger efbor delete_user">
    						<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete system user">
                            </i></a>
                            <?php }?>
                        </td>
                    </tr>
                    
                    <?php }?>
                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
                                                   

</div>

<!--------------------------------------------------------------------------------------------------->

<div id="user-modal" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="300px">

<form id="adregForm" name="clock" method="post">

<div class="modal-header">
	<strong><i class="glyphicon glyphicon-plus"></i> <?php echo $title;?></strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">


                            	
	<input name="face" type='hidden' value=''/>                          
    <input class="form-control" type='hidden' name="submitted" value='1'/>
    <input class="form-control" type='hidden' name="<?php echo $aspmember->GetSpamTrapInputName(); ?>" value=''/>
    
    <div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Firstname" id="name" />
    </div>
    <div class="form-group">
    <input class="form-control" name="lastname" type="text" placeholder="Lastname" />
    </div>
    <div class="form-group">
    <input class="form-control" name="username" type="text" placeholder="Username" />
    </div>
    <div class="form-group">
    <input class="form-control" name="email" type="email" placeholder="Email" />
    </div>
    <div class="form-group">
    <input class="form-control" name="phone" type="text" placeholder="Contact no." />
    </div>
    <div class="form-group">
    <select class="form-control" name="position"> 
    <?php $position = $spconn->query("SELECT * FROM tb_usertype");?>   
    <option></option> 
    <?php foreach($position as $key=> $row){?>
    <option value="<?php echo $row['type_id'];?>"><?php echo $row['type_name'];?></option> 
    <?php }?> 
    </select>
    </div>
    <div class="form-group">
    <input readonly="readonly" class="form-control" name="password" type="password" value="<?php echo strtoupper($spcheck->createRandomPassword());?>" />
    </div>

</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-save"></i> <?php echo $title;?></button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>

<!--------------------------------------------------------------------------------------------------->

