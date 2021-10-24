<?php $slider = $spconn->query("SELECT * FROM tb_slider");?>

<div style="padding:0px"> 

            <?php foreach($slider as $key=> $row){?>
            <?php $id = $row['id'];?>
            <div class="col-sm-3 del<?php echo $id?>">
                <div class="panel panel-default text-center effect2 efbor">
                    <div style="padding:1px;" class="panel-body">
                        <ul id="da-thumbs" class="da-thumbs">
									
									<li>
										<a href="#addslider" data-toggle='modal'>
                
            
				<img width="100%" src="<?php echo SPTHM.'slider/'.$row['slider_image'];?>" class="img-responsive"/>
                   
													<div>
														<span>
                                                        <p><?php echo $row['slider_title'];?></p>
                                                        <p><strong><i class="glyphicon glyphicon-plus"></i> 
                                                        Add slider</strong></p>
                                                        </span>
                                                        
													</div>
										</a>
									</li>
									
							</ul>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo 'Slider '.$row['id'];?></li>
                        <li class="list-group-item">
                        <a id="<?php echo $id;?>" class="delete_slider btn btn-sm btn-danger efbor">
                        <i class="glyphicon glyphicon-trash"></i>  Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <?php }?>


</div>

<div id="addslider" class="modal fade" tabindex="-1" style="display: none;" data-width="650px">


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    Terms & Conditions
</div>
<div class="modal-body">


</div>

<div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</div>
