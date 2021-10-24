<?php
namespace Dompdf;
require_once 'dompdf/autoload.inc.php';
session_start();
ob_start();
require_once('includes/configpdo.php');
error_reporting(0);
?>

<html>




<?php

	
	
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];


	}
	






$query1=mysql_connect("localhost","root","");
mysql_select_db("srms",$query1);





$query=mysql_query("SELECT * from gsdepartment where revisionno=3");


while($query2=mysql_fetch_array($query))
{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
        

			
			
            </div>
            <div class='panel-body'>
   
	
					<center><img src='../item_images/".$query2['item_image']."' style='width:778px;height:990px;' /></center>
					</a>
				
					
			
					
		
					
										
							
						
            </div>
          </div>
        </div>";
			
	
}


?>
			













 <table class="table table-inverse" border="0">
                      
                                             
                                                <thead>
                                             
  


                                                  
                                                  <tbody>

												  
												  
												  
												  
												  
												  
												  
												  
												  
												  <!--?php                                              
// Code for result
 $query ="select * from mis";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss",$rollid,$classid);
$stmt->execute();
                 $res=$stmt->get_result();
                 $cnt=1;
                   while($row=$res->fetch_object())
                  {

    ?-->
	
	

	
	
	
	
	
	
	
	
                                                
<?php 

$totlcount+=$totalmarks;
$cnt++;
$cnt++;
?>


                            </tbody>
                        </table>
                    </div>
</html>

<?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->setPaper('A4', 'portrait');
$dompdf->load_html($html);
$dompdf->render();
//dompdf->stream("",array("Attachment" => false));
$dompdf->stream("OP Policy.pdf");
?>