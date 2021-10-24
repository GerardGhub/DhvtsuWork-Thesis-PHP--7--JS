<!-- Static navbar -->
      <div class="navbar navbar-default navbar-fixed-top effect1" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MagicJade</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php if(!empty($activehome)){echo SPCLS.$activehome;}?>>
              <a href='./'><i class="glyphicon glyphicon-cog"></i> Dashboard</a></li>
              
              <li <?php if(!empty($activemessage)){echo SPCLS.$activemessage;}?>><a href='?page=message'><i class="glyphicon glyphicon-envelope"></i> Messages</a></li>
              
              <?php if($aspmember->UserType() == '1'){?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-hdd"></i> Utilities <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li <?php if(!empty($activebackup)){echo SPCLS.$activebackup;}?>><a data-toggle="modal" href='#backup'>
                  <i class="glyphicon glyphicon-download"></i> Backup</a></li>
                  <li class="divider"></li>
                  <li <?php if(!empty($activeslider)){echo SPCLS.$activeslider;}?>><a href='?page=addslider'>
                  <i class="glyphicon glyphicon-picture"></i> Slider</a></li>
                  
                  	<li class="divider"></li>
                  	<li <?php if(!empty($activereports)){echo SPCLS.$activereports;}?>><a href='?page=reports'>
              		<i class="glyphicon glyphicon-file"></i> Reports</a></li>
                </ul>
              </li>
              <?php }?>
              
             <?php if($aspmember->UserType() == '1'){?>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-wrench"></i> Maintenance <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li <?php if(!empty($activeguest)){echo SPCLS.$activeguest;}?>><a href='?page=customer'>
                  <i class="glyphicon glyphicon-user"></i> Customers</a></li>
                  <li class="divider"></li>
                  <li <?php if(!empty($activeuser)){echo SPCLS.$activeuser;}?>><a href='?page=user'>
                  <i class="glyphicon glyphicon-cog"></i> System Users</a></li>
                  <li class="divider"></li>
                  <li <?php if(!empty($activecategory)){echo SPCLS.$activecategory;}?>>
                  <a href='?page=category'><i class="glyphicon glyphicon-home"></i> Room rates & list</a></li>
                  <li class="divider"></li>
                  <li <?php if(!empty($activeentrance)){echo SPCLS.$activeentrance;}?>>
                  <a href='?page=entrance'><i class="glyphicon glyphicon-usd"></i> Entrance rates</a></li>
                  
                </ul>
              </li>
     		<?php }?>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-briefcase"></i> Transactions <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li <?php if(!empty($activecheckin)){echo SPCLS.$activecheckin;}?>><a href='?page=checkin'>
                  <i class="glyphicon glyphicon-circle-arrow-right"></i> Check-in</a></li>
                  <li class="divider"></li>
                  <li <?php if(!empty($activecheckout)){echo SPCLS.$activecheckout;}?>><a href='?page=checkout'>
                  <i class="glyphicon glyphicon-circle-arrow-left"></i> Check-out</a></li>
                  <li class="divider"></li>
                  <li <?php if(!empty($activecancel)){echo SPCLS.$activecancel;}?>><a href='?page=cancel'>
                  <i class="glyphicon glyphicon-remove-sign"></i> Cancelled</a></li>
                </ul>
              </li>
              
              <li><a href='#check-modal' data-toggle='modal'>
              <i class="glyphicon glyphicon-calendar"></i> Checkavailability</a></li>
              
              <li><a href='#sitemap-modal' data-toggle='modal'>
              <i class="glyphicon glyphicon-question-sign"></i> Sitemap</a></li>
              
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i> 
                        <?php echo ucwords($aspmember->UserFullName());?><b class="caret"></b></a>
                		<ul class="dropdown-menu">		
                         <li><a href='?page=setting'>
                         <i class="glyphicon glyphicon-wrench"></i> Settings</a></li> 
                         <li class="divider"></li>
                         <li><a href='?page=logout'>
                         <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>       
                		</ul>
            		</li>
           	</ul>	
            
            
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>


<!--------------------------------------------------------------------------------------------------->

<div id="backup" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="300px">

<form id="databases" name="dbs">

<div class="modal-header">
	<strong><i class="glyphicon glyphicon-hdd"></i> Backup database</strong>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>

<div class="modal-body">
	<input name="data" type="hidden" value="1" />
    <div class="form-group">
    <input class="form-control" name="database" type="text" placeholder="Desired database name"/>
    </div>

</div>

<div class="modal-footer">
	<button type="submit" class="btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-save"></i> Startbackup</button>   	
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</form>

</div>

<!--------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------->

<div id="check-modal" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="250px">



<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    Check our room available
</div>
<div class="modal-body">

<form name="clock" id="datepickerForm" action='?page=gallery' method="POST"> 
           	<div class="alert alert-success" style="display: none;"></div>
           
           	<input type="hidden" name="result" id="result" />

            <input id="trans" type="hidden"  name="face" value="">

            <div class="form-group">
              	<input readonly type="text" id="arrival" placeholder="Arrival" 
                               class="form-control tooltip-viewport-right  input-sm" title="Choose arrival" name="arrival" />
            </div>
            
            <div class="form-group">
              	<input readonly type="text" id="departure" placeholder="Departure" 
                class="form-control tooltip-viewport-right  input-sm" title="Choose departure" name="departure" />
            </div>
            
            <button id="check" data-loading-text="Please wait ..." onclick="setDifference(this.form);" name="check" type="submit" class="form-control btn btn-sm btn-danger efbor">
            <i class="glyphicon glyphicon-check"></i> Submit</button>  
</form>

</div>


</div>

<!--------------------------------------------------------------------------------------------------->

<div id="sitemap-modal" class="modal fade efbor" tabindex="-1" style="display: none;" data-width="650px">


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    Sitemap
</div>
<div class="modal-body">

<div class="row">
            
                <div class="col-sm-4">
                    <div class="panel panel-primary effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-cog"></i></h1>
                                </div>
                            </div>
                        </div>

                            <div class="panel-footer">
                            	<a href='./'>
                                <span class="pull-left">Dashboard</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-primary effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-envelope"></i></h1>
                                </div>
                            </div>
                        </div>

                            <div class="panel-footer">
                            	<a href='?page=message'>
                                <span class="pull-left">Message</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-primary effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-calendar"></i></h1>
                                </div>
                            </div>
                        </div>

                            <div class="panel-footer">
                            	<a href='#check-modal' data-toggle='modal'>
                                <span class="pull-left">Checkavailability</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>
                
                 <div class="col-sm-4">
                    <div class="panel panel-danger effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-hdd"></i></h1>
                                </div>
                            </div>
                        </div>

                            <div class="panel-footer">
                                <span class="pull-left">Utilities</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-down"></i></span>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='#backup' data-toggle='modal'>
                                <span class="pull-left">Backup</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=addslider'>
                                <span class="pull-left">Slider</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=reports'>
                                <span class="pull-left">Report</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>
                
                
                <div class="col-sm-4">
                    <div class="panel panel-danger effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-briefcase"></i></h1>
                                </div>
                            </div>
                        </div>

                            <div class="panel-footer">
                                <span class="pull-left">Transactions</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-down"></i></span>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=checkin' data-toggle='modal'>
                                <span class="pull-left">Check-in</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=checkout'>
                                <span class="pull-left">Check-out</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=cancel'>
                                <span class="pull-left">Cancelled</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>
                
                
                
                 <div class="col-sm-4">
                    <div class="panel panel-danger effect2 efbor">
                        <div class="panel-heading efbor">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h1><i class="glyphicon glyphicon-briefcase"></i></h1>
                                </div>
                            </div>
                        </div>

                            <div class="panel-footer">
                                <span class="pull-left">Maintenance</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-down"></i></span>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=user' data-toggle='modal'>
                                <span class="pull-left">System user</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=category'>
                                <span class="pull-left">Room rates & list</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="panel-footer">
                            	<a href='?page=customer'>
                                <span class="pull-left">Customers</span>
                                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>
                
                
                
                
</div>

</div>

<div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-sm btn-default efbor"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>

</div>