<?php $message = $spconn->query("SELECT * FROM tb_message");?>

<div style="padding:0px" class="col-sm-12">

                                <div class="panel panel-default text-center effect2 efbor">
                                
                                	<div style="margin:5px;" class="pull-right">

                        			</div>
                                
                                
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-envelope"></i> <?php echo $title;?> records
                                    </div>
                                    <div class="panel-body">

    <table class="table table-bordered table-hover" id="dataTables-example">
    
                									<thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Message id.</div></th>
                                                        <th><div class="text-center">Sender</div></th>
                                                        <th><div class="text-center">Email</div></th>
                                                        <th><div class="text-center">Contact no.</div></th>
                                                        <th><div class="text-center">Message</div></th>
                                                        <th><div class="text-center">Date send</div></th>
                                                        <th><div class="text-center">Time send</div></th>
                                                        <th><div class="text-center">Action</div></th>
                                                      </tr>
                                                    </thead>
    
                <tbody class="tbody">
                <?php foreach($message as $key => $row){?>
                			<?php $id = $row['message_id'];?>
                    <tr class="del<?php echo $id?>">
                    	<td><?php echo $row['message_id'];?></td>
                        <td><?php echo $row['name'];?></td>
                       	<td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact_no'];?></td>
                        <td><?php echo $row['message'];?></td>
                        <td><?php echo $row['date_reg'];?></td>
                        <td><?php echo $row['time_send'];?></td>
                        <td>
                        	<a href='#message<?php echo $id?>' data-toggle="modal" class="btn btn-sm btn-primary efbor">
    						<i class="glyphicon glyphicon-send tooltip-top" title="Click to reply message">
                            </i></a>
                            
                            <a id="<?php echo $id;?>" class="btn btn-sm btn-danger efbor delete_message">
    						<i class="glyphicon glyphicon-trash tooltip-top" title="Click to delete message">
                            </i></a>
                        </td>
                    </tr>                 
                    
				<?php }?> 
                </tbody>
                
    </table>

                                 </div>
        
                                 </div> 
                                 
                             
                                             
</div>   


<!--------------------------------------------------------------------------------------------------->

<div id="message<?php if($message){echo $id;}?>" class="modal fade efbor" tabindex="-1" 
style="display: none;" data-width="300px">

<form id="sentme" name="ssent">

<div class="modal-header">
	<strong>Send message</strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>

<div class="modal-body">
	
    <input name="sent" type="hidden" value="1" />
    <div class="form-group">
	<input readonly="readonly" class="form-control" name="email" type="text" 
    placeholder="Email address" value="<?php echo $row['email'];?>" />
    </div>
    <div class="form-group">
    <textarea class="form-control" name="message" cols="" rows="5" placeholder="Message" required="required"></textarea>
    </div>

</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-primary efbor"><i class="glyphicon glyphicon-send"></i> Send</button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>

<!--------------------------------------------------------------------------------------------------->    

