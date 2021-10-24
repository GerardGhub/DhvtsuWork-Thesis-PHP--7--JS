<?php $cur = $spcheck->newguest();?>
<?php if(empty($cur)){$aspmember->RedirectToURL('./');}?>   
<div style="padding:0px"> 

            <?php foreach($cur as $row){?>
             
            <div class="col-sm-2">
                <div class="panel panel-default text-center effect2 efbor">
                    <div style="padding:0px;" class="panel-body">
                        <ul id="da-thumbs" class="da-thumbs">
									
									<li>
										<a href="">
            
				<img width="100%" src="<?php echo SPTHM.SPUPL.$row->image;?>" class="img-responsive"/>
                   
													<div>
														<span>
                                                        <p><?php echo ucwords($row->name);?></p>
                                                        <p><?php echo ucwords($row->lastname);?></p>
                                                        </span>
                                                        
													</div>
										</a>
									</li>
									
							</ul>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                        <a class="btn btn-info btn-sm efbor" href='?page=guestorders&id=<?php echo $row->id_user;?>'>
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        View Orders</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <?php }?>


</div>


