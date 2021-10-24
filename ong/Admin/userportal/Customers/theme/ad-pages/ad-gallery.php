<div class="container option">

<form  id="orderForm" action="?page=book" method="POST">

<?php $result = $spconn->query("SELECT * FROM tb_category");?> 
    	     
<div class="row">

			<?php foreach($result as $key=> $row){?>
			
            <div class="col-sm-3">
                <div class="panel panel-default text-center effect2 efbor">
                    
                    <div class="panel-heading">
                        <strong><?php echo ucwords($row['category_name']);?></strong>
                    </div>

                   
                    <div class="panel-body category">
                    	<ul id="da-thumbs" class="da-thumbs">
            		
                      <?php if($spcheck->arrival() && $spcheck->departure()){?>
                      			     <li>
										<a href="">
                                        
                <img style="width:100%" src="<?php echo SPTHM.SPUPL.$row['category_image'];?>" class="img-responsive"/>
                      
													<div>
														<span>
                                                        <p><?php echo 'Arrival: '.$spcheck->arrival();?></p>
                                                        <p><?php echo 'Departure: '.$spcheck->departure();?></p>
                        <button data-loading-text="Please wait ...." id="loadologin" class="btn btn-success efbor" name="order" type="submit">
                        <i class="glyphicon glyphicon-pencil"></i> Book now</button>
                        
                        								</span>
                                                        
													</div>
                                                    
                                           </a>
									</li>
                                          <?php }else if(!$spcheck->arrival()){?> 
                                          
                                    <li>
									 <a class="image-zoom" href="<?php echo SPTHM.SPUPL.$row['category_image'];?>" rel="prettyPhoto[gallery]">
                                        
                <img style="width:100%" src="<?php echo SPTHM.SPUPL.$row['category_image'];?>" class="img-responsive"/>
                                          			<div>
														<span>
                                                            <h1><strong>
                                                            <i class="glyphicon glyphicon-zoom-in"></i>
                                                            </strong></h1>
                                                        <p><?php echo $row['category_name'];?></p>
                                                        </span>          
													</div>
                                                    
                                         </a>
									</li>
                                          <?php }?>
									
									
							</ul>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo 'PHP '.sprintf('%.2f',$row['category_price'])?></li>
                        <?php 
						if(isset($_POST['check'])){?>
							<?php 
								$cur = $spcheck->check($row['category_id']);
                                if(!empty($cur)){
                                foreach($cur as $result)
                                {	
                                $total = count($cur);
                                }
								}
                            ?>
                        <li class="list-group-item">
                        	<?php if(empty($cur)){?>
                            <label class="text-success">
                            <strong><?php echo 'Reserved';?></strong>
                            </label>
                            <?php }else{?>
                            <label class="text-danger">
                      		<strong><?php echo $total.' Available';?></strong>
                            </label>
                            <?php }?>
 						</li>	
                        
                        <li class="list-group-item">
                        	<?php if(!empty($cur)){?>
								<?php foreach($cur as $result){?>
                                    <input class="tooltip-top" title="Choose <?php echo $result->room_name;?>" 
                                    name="selector[]" type="checkbox" value="<?php echo $result->roomID;?>" />
                                <?php }?> 
                            <?php }?>
								<?php if(empty($cur)){?>
                                	<?php for($i=0; $i < 10;$i++){?>
                                <strong><i class="glyphicon glyphicon-remove"></i></strong>
                                	<?php }?>
                                <?php }?> 
                        </li>    
                                       
                        
						<?php }?>
                    </ul>
                    
                </div>
            </div>
            
            <?php }?>
            
            		<input name="arrival" type="hidden" value="<?php echo $spcheck->arrival();?>" />
                    <input name="departure" type="hidden" value="<?php echo $spcheck->departure();?>" />
                    <input name="result" type="hidden" value="<?php echo $spcheck->datecalculation();?>" />
                    <input name="face" type="hidden" value="<?php echo $spcheck->timecheck();?>" />

</div>

</form>

</div>