<?php 

/**
	Reservation script from Fujimura & Graphics Solutions
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    
    This program is distributed in the hope that it will
    be useful - WITHOUT ANY WARRANTY; without even the
    implied warranty of MERCHANTABILITY or FITNESS FOR A
    PARTICULAR PURPOSE.
    
    For updates, please send me your personal message or comment us @facebook.com.michael.galanza
    Copyright Fujimura IT & Graphics Solutions, All Right Reserved 2014
    Email:kringcarl_j@yahoo.com.ph
	
**/

require_once("fg_membersite.php");
require_once("class.database.php");

class checkavailability extends FGMembersite
{
	
	private $mysql_db;
	private $mysql_fetch;
	public $_arrival;
	public $_departure;
	public $_result;
	public $_time;
	
	function __construct()
	{	
		$this->mysql_db = new Database();
		
			if(!$this->mysql_db)
				{
					$this->HandleError("checkavailability class connection error!");
					return false;
				}	
	}
	
	function check($id)
	{	
		if(!isset($_POST['check']))
        {
           return false;
        }
	
		if(empty($_POST['arrival']))
        {
            $this->HandleError("arrival is empty!");
            return false;
        }
		
		if(empty($_POST['face']))
        {
            $this->HandleError("time is empty!");
            return false;
        }
		
		if(empty($_POST['result']))
        {
            $this->HandleError("date calculation is empty!");
            return false;
        }
        
        if(empty($_POST['departure']))
        {
            $this->HandleError("departure is empty!");
            return false;
        }
		$roomID = $this->Sanitize($id);
		$check_in = $this->Sanitize($_POST['arrival']);
		$check_out = $this->Sanitize($_POST['departure']);
		$time = $this->Sanitize($_POST['face']);
		$result = $this->Sanitize($_POST['result']);
		
		$this->_arrival = $check_in;
		$this->_departure = $check_out;
		$this->_result = $result;
		$this->_time = $time;
		
		$this->mysql_db->setQuery("SELECT * FROM tb_rooms WHERE category_id = '$roomID' AND roomID NOT IN
						(SELECT roomID FROM tb_reservation WHERE
   						(arrival <= '$check_in' AND departure >= '$check_in') OR
   						(arrival <= '$check_out' AND departure >= '$check_out') OR
   						(arrival >= '$check_in' AND departure <= '$check_out')) LIMIT 10");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("check function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
	}
	
	function newdashboard($table)
	{
		$tb = $this->SanitizeForSQL($table);
		$date = $this->ttime();	
		$this->mysql_db->setQuery("SELECT * from $tb where date_reg = '$date'");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("newdashboard function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
			
	}
	
	function guestitem($id,$code)
	{
		
		$this->mysql_db->setQuery("SELECT * FROM tb_guestno where id_user = '$id' AND bank_code = '$code'");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("guestitem function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
			
	}
	
	function newguest()
	{
		
		$date = $this->ttime();	
		$this->mysql_db->setQuery("SELECT * FROM tb_guest WHERE id_user IN
						(SELECT id_user FROM tb_reservation WHERE(status_id = '1'))");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("newdashboard function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
			
	}
	
	function newguest_checkin()
	{
		
		$date = $this->ttime();	
		$this->mysql_db->setQuery("SELECT * FROM tb_guest WHERE id_user IN
						(SELECT id_user FROM tb_reservation WHERE(status_id = '2'))");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("newdashboard function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
			
	}
	
	
	function newreservation()
	{
		$date = $this->ttime();	
		$this->mysql_db->setQuery("SELECT * FROM tb_reservation,tb_rooms,tb_category,tb_status,tb_guest where tb_reservation.roomID = tb_rooms.roomID AND tb_rooms.category_id = tb_category.category_id AND tb_reservation.status_id = tb_status.status_id AND tb_reservation.id_user = tb_guest.id_user AND tb_reservation.date_reg = '$date' AND tb_reservation.status_id = '1'");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("newdashboard function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
			
	}
	
	function arrival()
		{
			return $this->_arrival;
		}
		
	function departure()
		{
			return $this->_departure;
		}
	function datecalculation()
		{
			return $this->_result;
		}
	function timecheck()
		{
			return $this->_time;
		}
		
	function sphp($point,$string)
	{
		if($point == 1){
			
			$point = '%.1f';
			$php = sprintf($point,$string);
			
		}else
		{
			$point = '%.2f';
			$php = "PHP ".sprintf($point,$string);
		}	
			
		return $php;
	}
	
	function calculator($value)
	{
		$this->total += $value;	
	}
	function getTotal()
	{	
		if(empty($this->total)){
			
			return false;
		}
		
		return $this->total;
	}
	
	function createRandomPassword() {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 9) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
	}
	
	function createRandomRoom() {
    $chars = "01234567899876543210";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 5) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
	}
	
	function createRandomCode() {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 4) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
	}
	
	
	function newpayment()
	{
		
		$date = $this->ttime();	
		$this->mysql_db->setQuery("SELECT * FROM tb_payment,tb_guest WHERE tb_payment.date_paid = '$date' AND tb_payment.id_user = tb_guest.id_user");
						
		$this->mysql_fetch = $this->mysql_db->loadResultList();
		
				if(!$this->mysql_fetch)
				{
					$this->HandleError("newpayment function error retriving data!");
            		return false;
				}
		
		return $this->mysql_fetch;	
			
	}
	
	
	
	
	
}
?>