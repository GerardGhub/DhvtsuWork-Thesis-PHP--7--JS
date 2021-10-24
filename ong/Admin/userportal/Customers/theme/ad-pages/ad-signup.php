		<?php
			
			$itemCode = $_POST['itemCode'];
			if(empty($itemCode)){
			
			$spmember->RedirectToURL('./');
				
			}
			$itemTotal = $_POST['itemTotal'];
			$itemId = $_POST['itemId'];
			$itemPrice = $_POST['itemPrice'];
			$itemArrival = $_POST['itemArrival'];
			$itemDeparture = $_POST['itemDeparture'];
			$itemDateresult = $_POST['itemDateresult'];
			$tempType = $_POST['tempType'];
			$tempName = $_POST['tempName'];
			$amount = $_POST['amount'];
			$timecheck = $_POST['face'];
		?>
        
        
<div class="col-sm-9">
                                <div class="panel panel-default text-center effect2 efbor">
                                    <div class="panel-heading">
                                    		<i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart details
                                    </div>
                                    <div class="panel-body">
                                    
                   <table class="table table-bordered table-hover">
                                                    <thead class="tbody">
                                                      <tr>
                                                        <th><div class="text-center">Transaction Code</div></th>
                                                        <th><div class="text-center">Category</div></th>
                                                        <th><div class="text-center">Room no.</div></th>
                                                        <th><div class="text-center">Room price</div></th>
                                                        <th><div class="text-center">Check In</div></th>
                                                        <th><div class="text-center">Check Out</div></th>
                                                        <th><div class="text-center">Nights</div></th>
                                                        <th><div class="text-center">Amount</div></th>
                                                      </tr>
                                                    </thead>
                                            
                								<tbody class="tbody">
                                                    <?php for($i=0; $i < count($itemId); $i++){?>
                                                      <tr>
                                                      	<td><?php echo strtoupper($itemCode[$i]);?></td>
                                                        <td><?php echo $tempType[$i];?></td>
                                                        <td><?php echo $tempName[$i];?></td>
                                                        <td><?php echo $spcheck->sphp(2,$itemPrice[$i]);?></td>
                                                        <td><?php echo $itemArrival[$i];?></td>
                                                        <td><?php echo $itemDeparture[$i];?></td>
                                                        <td><?php echo $spcheck->sphp('1',$itemDateresult[$i]);?></td>
                                                        <td><?php echo $spcheck->sphp(2,$itemTotal[$i]);?></td>
                                                      </tr>
                                                   <?php }?>  
                                              </tbody>
                                                    
              	</table>  


<span class="pull-left">                                            
<label class="text-danger">                                          
<strong>Total of reservation: </strong>
</label>
<?php echo $amount;?>
</span>   
            
                
                                  </div>
        
                                 </div> 
                                 
                                 
                                   
                                	
                                
                                 
                                             
</div>          

<div class="col-sm-3 pull-right">



<div class="panel panel-default text-center effect2 efbor">

                        <div class="panel-heading">
                            Informations
                        </div>
                        
                        <div class="panel-body">

<form id="regForm" name="regForm" method="post">


							<?php for($i=0; $i < count($itemId); $i++){?>
                          
                            <input name="itemcode[]" type="hidden" 
                                value="<?php echo strtoupper($itemCode[$i]);?>" />
                            
                            <input name="itemid[]" type="hidden" 
                                value="<?php echo $itemId[$i];?>" />
                            
                            <input name="itemarrival[]" type="hidden" 
                                value="<?php echo $itemArrival[$i];?>" />
                            
                            <input name="itemdeparture[]" type="hidden" 
                                value="<?php echo $itemDeparture[$i];?>" />
                                
                            <input name="itemresult[]" type="hidden" 
                                value="<?php echo $itemDateresult[$i];?>" />
                             
                            <input name="itemtotal[]" type="hidden" 
                                value="<?php echo $itemTotal[$i];?>" />  
                                    
                            <?php }?> 
                             	
	<input name="face" type='hidden' value='<?php echo $timecheck;?>'/>                          
    <input class="form-control" type='hidden' name="submitted" value='1'/>
    <input class="form-control" type='hidden' name="<?php echo $spmember->GetSpamTrapInputName(); ?>" value=''/>
    
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
    <input class="form-control" name="password" type="password" placeholder="Password" />
    </div>
    <div class="form-group">
    <input class="form-control" name="confirmpassword" type="password" placeholder="Retype-password" />
    </div>
    <button type="submit" class="form-control btn btn-sm btn-success efbor"><i class="glyphicon glyphicon-pencil"></i> Register</button>
    	
</form>

    
    <script>
	  function preventBack(){window.history.forward();}
	  setTimeout("preventBack()", 0);
	  window.onunload=function(){null};
	</script>
    
	</div>

</div>

</div>


