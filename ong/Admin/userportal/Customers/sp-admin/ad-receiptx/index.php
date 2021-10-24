<?php
require('fpdf.php');

$d=date('d_m_Y');

if(isset($_POST['reciept'])){
	
	$id = $_POST['checkout'];	


class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(255,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(30,20,30,20,20,20,20);
	
	
	//Header
	$this->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	
	$this->SetFont('Arial','',10);
	foreach ($data as $eachResult) 
	{ //width
		$this->Cell(10);
		$this->Cell(30,6,$eachResult["confirmation"],1);
		$this->Cell(20,6,$eachResult["roomID"],1);
		$this->Cell(30,6,$eachResult["lastname"],1);
		$this->Cell(20,6,$eachResult["arrival"],1);
		$this->Cell(20,6,$eachResult["departure"],1);
		$this->Cell(20,6,$eachResult["payable"],1);
		$this->Cell(20,6,$eachResult["booked"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}

for($x=0; $x < count($id); $x++){

$pdf=new PDF();

	

$header=array('T_code','R_#','Guest','C_in','C_out', 'Amount','Booked');
//Data loading
//*** Load MySQL Data ***//

$objConnect = mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("sp_database");
$strSQL = "Select * From tb_reservation,tb_guest where tb_guest.id_user = tb_reservation.id_user AND tb_reservation.reservation_id = $id[$x]";
$objQuery = mysql_query($strSQL);

$resultData = array();
for ($i=0;$i<mysql_num_rows($objQuery);$i++) {
	$result = mysql_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//


//*** Table 1 ***//
$pdf->AddPage();
	
	$pdf->SetFont('Arial','',20);
	$pdf->Cell(68);
	$pdf->Write(10, 'Magic Jade Kingdom');
	$pdf->Ln();

	$pdf->SetFont('Helvetica','',14);
	$pdf->Cell(78);
	$pdf->Write(5, 'Reservation Records');
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(8);
	$pdf->Cell(60);
	$result=mysql_query("select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysql_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	//count total numbers of visitors
	$result=mysql_query("Select * from tb_reservation") or die ("Database query failed: $query" . mysql_error());
	
	$count = mysql_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, '             Total Reservation: '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->Cell(10);
$pdf->BasicTable($header,$resultData);
//forme();
$pdf->Output("$d.pdf","F");
}
$location = $d.'.pdf';

header('location:'.$location);

//$pdf->Output();

}

?>