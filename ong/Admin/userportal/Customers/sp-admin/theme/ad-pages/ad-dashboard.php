  <!-- /.row -->
            <div class="row">
            
                <div class="col-sm-2">
                    <div class="panel panel-primary effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-envelope"></i></h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                	<?php if($message = $spcheck->newdashboard('tb_message')){;?>
                                    <div class="huge"><?php echo count($message);?></div>
                                    <?php }else{?>
                                    <div class="huge"><?php echo '0';?></div>
                                    <?php }?>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <?php if($spcheck->newdashboard('tb_message')){;?>
                        <a href='?page=newmessage'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php }else{?>
                        	<a href='./'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-remove"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        	</a>
                        <?php }?>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="panel panel-success effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                     <h1><i class="glyphicon glyphicon-check"></i></h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                	<?php if($checkin = $spcheck->newguest_checkin()){;?>
                                    <div class="huge"><?php echo count($checkin);?></div>
                                    <?php }else{?>
                                    <div class="huge"><?php echo '0';?></div>
                                    <?php }?>
                                    <div>New guest checkin!</div>
                                </div>
                            </div>
                        </div>
                        <?php if($spcheck->newguest_checkin()){;?>
                        <a href='?page=checkin'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php }else{?>
                        	<a href='./'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-remove"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        	</a>
                        <?php }?>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="panel panel-danger effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-shopping-cart"></i></h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                	<?php if($orders = $spcheck->newreservation()){;?>
                                    <div class="huge"><?php echo count($orders);?></div>
                                    <?php }else{?>
                                    <div class="huge"><?php echo '0';?></div>
                                    <?php }?>
                                    <div>New Reservations!</div>
                                </div>
                            </div>
                        </div>
                        <?php if($spcheck->newreservation()){;?>
                        <a href='?page=newreservation'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php }else{?>
                        	<a href='./'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-remove"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        	</a>
                        <?php }?>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="panel panel-info effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-user"></i></h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                	<?php if($guests= $spcheck->newdashboard('tb_guest')){;?>
                                    <div class="huge"><?php echo count($guests);?></div>
                                    <?php }else{?>
                                    <div class="huge"><?php echo '0';?></div>
                                    <?php }?>
                                    <div>New magic guest!</div>
                                </div>
                            </div>
                        </div>
                         <?php if($spcheck->newdashboard('tb_guest')){;?>
                            <a href='?page=newcustomer'>
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        <?php }else{?>
                        	<a href='./'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-remove"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        	</a>
                        <?php }?>
                    </div>
                </div>
                
                 <div class="col-sm-2">
                    <div class="panel panel-warning effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-usd"></i></h1>
                                </div>
                                <div class="col-xs-9 text-right">
                                	<?php if($payments = $spcheck->newpayment()){;?>
                                    <div class="huge"><?php echo count($payments);?></div>
                                    <?php }else{?>
                                    <div class="huge"><?php echo '0';?></div>
                                    <?php }?>
                                    <div>New payments!</div>
                                </div>
                            </div>
                        </div>
                        <?php if($spcheck->newpayment()){;?>
                        <a href='?page=payment'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php }else{?>
                        	<a href='./'>
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-remove"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        	</a>
                        <?php }?>
                    </div>
                </div>
                
                
            </div>