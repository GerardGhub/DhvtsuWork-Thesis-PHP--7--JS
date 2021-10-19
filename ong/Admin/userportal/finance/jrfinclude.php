
<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			
				
				 <!--form enctype="multipart/form-data" method="post" action="addmemogs.php"-->
                   <fieldset>
					
					<!--input type="hidden" id="username"  style="color:black;"name="JRFno" value="<?php
                        $id = mysql_query("select MAX(JRFno) as max_JRFno from Jobrequest ");                                       
                        $row = mysql_fetch_array($id);
                        echo $row['max_JRFno'] + 1;                                       
                        ?>" class="input-xlarge"/-->
<!--    
  font-family: Arial, Helvetica, sans-serif;
}                                                                       -->


<table class="table table-bordered table-responsive">
  <tr>
    <th style="color:black; display"><i style="display:none;">Date: <?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?> </i><input type="text"value="<?php 
	  $today = date("Y-m-d", time() );
	  
	  
	  echo $today;?>" class="btn btn4" id="InputEmail3" name="Date_now" style="display:nones; background-color:white; border-color:gresy;"readonly></th>
	  
	  
    <th style="color:black;">Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.</th>

	  
    <th style="color:black;"><input type="text" id="username" class="btn btn4" size="5" style="color:black; background-color:white; border-color:greys;"name="JRFno" value="<?php echo $JRFno; ?>" class="input-xlarge" readonly/></th>
  </tr>
  
  <tr>
    <td style="color:black; font-size:14px; size:190px;">Name:&nbsp;<?php echo $Name;?>&nbsp;<?php echo $_SESSION[sess_lastname];?><input type="text" style="display:none;" name="Name" value="<?php echo $_SESSION[sess_fname];?> <?php echo $_SESSION[sess_lastname];?>"><br><input type="text" style="display:none;" name="Department"
	value="<?php echo $_SESSION[sess_department];?>"> Department/Section:&nbsp;<?php echo $Department; ?> </td>
   
	<form> <td style="font-size:13px;">
	
  <!--input type="radio" name="Type" value="Software" required> Software<br>
  <input type="radio" name="Type" value="Systems&nbsp;Development"> System&nbsp;Dev<br>
  <input type="radio" name="Type" value="Hardware" > Hardware
    <input type="radio" name="Type" value="Others" > Others-->
    <input type="text" name="Type"  style="border:none;" value="<?php echo $Type;?>">
 </td></form>
  
	    <td>
<input type="text" name="Typeothers" placeholder="" value="<?php echo $Typeothers;?>" id="InputEmail3" class="btn btn4"  size="37" style="background-color:white; border-color:greya;" readonly><!--MIS&nbsp;Dev&nbsp;Code___________________-->
&nbsp; 
</td>

  </tr>



  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td style="font-size:11px; border:none;" colspan="2">Date / Time Started:&nbsp;<?php echo $Started;?> </td>
    <td style="font-size:11px; border:none;">Date / Time Finished:&nbsp;<?php echo $Finished;?></td>
	  
  </tr>
  
  
  
  
  
  
  
  
    <tr>
    <th colspan="0" style="text-align:center;">Job Request</th>
    <th  colspan="2" rowspan="1" style="text-align:center;">Purpose</th>
  </tr>
  <tr>
    <td><textarea rows="4" type="text" cols="123" name="JobReq" value="adad<?php echo $JobReq;?>" readonly><?php echo $JobReq;?></textarea></td>
    
	   <td colspan="2"><textarea rows="4" type="text" cols="123" name="Purpose" readonly><?php echo $Purpose;?></textarea></td>
  </tr>
  
  
    <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; font-size:12px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2">Prepared by: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved by:	 



	</td>
	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke; font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noted by:</td>
	  


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  
  
  
  
      <tr style="border:none;  border-bottom: 1px solid whitesmoke;">
    <td style="color:black; size:5px; border:none;   border-left: 1px solid whitesmoke; "  colspan="2"><?php echo $Name;?><input type="text" name="Preparedby" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" style="display:none;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DH;?><!--input type="text" value="puki" size="2" required--> <!--?php echo $_SESSION['sess_fname'];?-->&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requisitioner   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Department Head &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</emp> </td>
	
	

	  	    <td style="color:black; border:none; size:10px; border-right: 1px solid whitesmoke;background-color">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="background-color:skybluewhiet;">Jerwin Ibañez</emp><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<emp style="font-size:12px;">MIS Officer in Charge</emp></td>


	  
    <!--th style="color:black;">Noted  by:</th--->
  </tr>
  <tr>
<td colspan="3" style="text-align:center; border-top:dotted; border-left: 1px solid whitesmoke; border-right: 1px solid whitesmoke; border-bottom: 1px solid whitesmoke;">

  <!--u style="border-style:dotted;: 4px dotted blue; color:black;"></u-->
<i>(this portion is to be accomplished by MIS who will attend the request)</i>
 </td>
 
 
 </tr>
 <tr>
 <th colspan="3" style="border-top:outset; text-align:center;"> Action Taken / Remarks</th>
 </tr>
 <tr>
    <td colspan="3" style="border-bottom: 1px solid whitesmoke; border-left: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">
<textarea input type="text" name="gago" rows="3" cols="256" id="tang ina" readonly><?php echo $actiontaken;?></textarea>
	<emp style="font-size:12px;"> Attended by (MIS POGI): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Acknowledged by (Requisitioner):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;   Noted by:</emp></td>	
 
 
	
 </tr>
 <tr>
 <td colspan="2" style="border-right: 1px solid whitesmoke;border-bottom: 1px solid whitesmoke;border-left: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;<du><!--MIS TEAM--><?php echo $attendedbymis;?><!--?php echo $_SESSION['sess_fname'];?-->&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--></uw> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u22><?php echo $acknowledgedby;?><!--HR--><!--?php echo $_SESSION['sess_fname'];?-->&nbsp;<!--?php echo $_SESSION['sess_lastname'];?--></u22><br><emp style="font-size:12px;">(Signature over printed name and Date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;(Signature over printed name and Date)</td>

   <td style="border-style:none; border-bottom: 1px solid whitesmoke;border-right: 1px solid whitesmoke;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <u>Jerwin Ibañez</u><br><emp style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;MIS Officer in Charge</emp></td>
 </tr>
 
</table>
				
				
				
				
				
				
				
				
				
				






  </tr>
  

				  
				  
				  
				  
		    <div class="form-group">

	
						      <!--label for="inputEmail3" class="col-sm-2 control-label" style="color:black;">Subject</label>
						  
							
							
							
						 
						  <select id="types" class="form-control" name="Subject_identity"> 
						  <option value="">...</option>
						
 <?php
			include('..connect.php');
		
        $query=mysql_query("select * from subject") or die (mysql_error());
        while($row=mysql_fetch_array($query)){
        ?>
        <option value="<?php echo $row['Subject_id'];?>"><?php echo $row['Subject_name'];?></option>
		
        <?php } ?>
 

</select-->  	
					
				

  </div>
  	  
				  		  
				  
				  
			    <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject</label>
  
      <input type="text" name="Subject_identity" class="form-control" id="inputEmail3" required/>

  </div-->
				  
			











			
				  
				      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Subject&nbsp;Date</label>
    <!--div class="col-sm-10"-->
      <!--input type="Date" name="Subject_Date" class="form-control" id="inputEmail3" required/>
    <!--/div-->
  <!--/div-->

			
	
	
	<!-- Start of the series here!-->
	
	                                     <a  href="#">
										  
										  
<!--?php 

include(connect.php);

$sql ="SELECT * from Jobrequest'; ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();

// $sql ="SELECT * from tomemorandum where owncc='Finance Department'; ";
?>
<!--?php 
$sql ="SELECT * from Jobrequest ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubject=$query->rowCount();
?-->
 
                                     
                                            <!--span class="number counter"><?php echo ($totalsubjects)+1;?> </span>
											
                                            <span class="name">MIS Department</b>&nbsp;&nbsp;</span><?php echo ($totalsubject);?>&nbsp;Category</b>
                                            <span class="bg-icon"><i class="fa fa-cloud"></i></span-->
											
                                        </a>
  
  
  

   			  <!-- series div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style="color:black;"> New&nbsp;Series&nbsp;Code</label>
    
      <input type="text" name="Series_Code" class="form-control" value="FD-<?php echo ($totalsubjects)+1;?>-<?php echo date("Y"); ?>" id="inputPassword3" required/>

  </div-->
	
	
	
	
	
	
	
	
	
	
	<!-- end of the Series_Code -->
	
	
	
	
	
	
	
	
	
	

				  		  
				  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Series_Code</label>
 
      <input type="text" name="name" class="form-control" id="inputEmail3"  required/>
   
  </div-->
			
					  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Employee</label>
    <div class="col-sm-10">
      <input type="text" name="Employee" class="form-control" id="inputEmail3" required/>
    </div>
  </div-->
				  

				  
						  					      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Prepared&nbsp;by:</label>
    <div class="col-sm-10">
      <input type="text" name="Prepared_By" class="form-control" value="<?php echo $_SESSION['sess_fname'];?> <?php echo $_SESSION['sess_lastname'];?>" id="inputEmail3" required/>
    </div>
  </div-->
					  
				  
				  
						      <!--div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Arial, Helvetica, sans-serif;color:black;">Noted&nbsp;by:</label>

      <input type="text" name="name" class="form-control" id="inputEmail3" required/>
 
  </div-->
			
				  
				  
				  
				  
				  
			  
   
  	  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <!--/div-->
            
              <div class="modal-footesr">
               
                <!--button class="btn btn-success btn-md" name="item_save">Save</button-->
				   <!--button type="submit" name="submitbabykox" class="btn btn-success">Submit</button>
				   </form>
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button-->
				
				  <td colspan="1">
		
		   <!--a span class="glyphicon glyphicon-filsm"> <input class="btn btn-success glyphicon glyphicon-filsm" style="width:120px; height:35px; background-color:green;"  src="../item_images/<?php echo $item_image; ?>" type="file"name="item_image" accept="image/*" /></span> </a-->
		
		
		<!--button type="submitassets" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Send JRF on MIS
        </button-->
      
        <!--a class="btn btn-danger" title="Back into Previous Page"  onclick="goBack()"> <span class="glyphicon glyphicon-backward"></span> Cancel </a-->
        
        </td>
				
					 </fieldset>
				   </form>