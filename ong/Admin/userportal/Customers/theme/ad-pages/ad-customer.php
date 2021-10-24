<?php $guest = $spconn->query("SELECT * FROM tb_guest");?>
<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">

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
                	<?php foreach($guest as $key=>$row){?>
                    	<?php $id = $row['id_user'];?>
                    <tr class="del<?php echo $id?>">
                    	<td><?php echo $row['id_user'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone_number'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php if($row['confirmcode'] == '1'){echo 'Verified';}else{echo 'Unverified';}?></td>
                        <td>
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




