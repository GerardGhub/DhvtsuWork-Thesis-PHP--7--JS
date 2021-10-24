<?php $cur = $spcheck->newdashboard('tb_guest');?>
<?php if(empty($cur)){$aspmember->RedirectToURL('./');}?>
<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">
											<a href='?page=customer' class="btn btn-sm btn-default efbor">
                                            <i class="glyphicon glyphicon-user"></i> View all user</a>       
                        			</div>

                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-file"></i> <?php echo $title;?> records
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Guest id.</div></th>
                                                        <th><div class="text-center">Firstname</div></th>
                                                        <th><div class="text-center">Lastname</div></th>
                                                        <th><div class="text-center">Email</div></th>
                                                        <th><div class="text-center">Contact no.</div></th>
                                                        <th><div class="text-center">Username</div></th>
                                                        <th><div class="text-center">Password</div></th>
                                                        <th><div class="text-center">Status</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                	<?php foreach($cur as $result){?>
                    	<?php $id = $result->id_user;?>
                    <tr class="del<?php echo $id?>">
                    	<td><?php echo $result->id_user;?></td>
                        <td><?php echo $result->name;?></td>
                        <td><?php echo $result->lastname;?></td>
                        <td><?php echo $result->email;?></td>
                        <td><?php echo $result->phone_number;?></td>
                        <td><?php echo $result->username;?></td>
                        <td><?php echo $result->password;?></td>
                        <td><?php if($result->confirmcode == '1'){echo 'Verified';}else{echo 'Unverified';}?></td>
                        <td>
                        
                        <a href='?page=guestorders&id=<?php echo $id;?>' class="btn btn-sm btn-warning efbor">
    						<i class="glyphicon glyphicon-list tooltip-top" title="Click to view guest order">
                            </i></a>
                        
                        <a id="<?php echo $id;?>" class="btn btn-sm btn-danger efbor delete_guest">
    						<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete guest">
                            </i></a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
                                             
</div>      




