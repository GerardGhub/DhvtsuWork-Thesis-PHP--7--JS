<?PHP

require_once '../../../sp-config.php';

if(isset($_POST['data']))
{
   $database = $_POST['database'];
   
   echo $database;
   
}

?>
