<?php if(isset($_GET['id'])){?>
			<?php $id = htmlentities($_GET['id']);?>
<?php }else{?>
			<?php $id = '1';?>
<?php }?>

	<?php $items = $spconn->query("SELECT * FROM tb_rooms where category_id = $id");?>
    <?php $structure = $spconn->query("SELECT * FROM tb_category where category_id = $id");?>
    
    <?php if(empty($items)){?>		
    		<?php header('location:?page=category');?>         
	<?php }?>
    
<div style="padding:0px"> 

            <?php foreach($items as $key=> $row){?> 
            <?php $id = $row['roomID'];?>
            <div class="col-sm-3 del<?php echo $id?>">
                <div class="panel panel-default text-center effect2 efbor">
                    <div style="padding:1px;" class="panel-body">
                        <ul id="da-thumbs" class="da-thumbs">
									
									<li>
										<a href="">
                                        
                
                <?php foreach($structure as $key=> $srow){?>
				<img width="100%" src="<?php echo SPTHM.SPUPL.$srow['category_image'];?>" class="img-responsive"/>
                <?php }?>                       
													<div>
														<span>
                                                        
                                                        <p><?php echo $row['room_name'];?></p>
                                                       
                                                        </span>
                                                        
													</div>
										</a>
									</li>
									
							</ul>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo $row['room_name'];?></li>
                         	<li class="list-group-item">
                        	<a id="<?php echo $id;?>" class="delete_room btn btn-sm btn-danger efbor">
                        	<i class="glyphicon glyphicon-trash"></i>  Delete</a>
                        	</li>
                    </ul>
                </div>
            </div>
            
            <?php }?>


</div>