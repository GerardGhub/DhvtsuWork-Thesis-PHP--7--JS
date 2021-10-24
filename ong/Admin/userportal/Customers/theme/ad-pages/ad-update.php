<?PHP

if(isset($_POST['category_id']))
{
  	$id = $_POST['category_id'];
	$cname = $_POST['cname'];
	$cprice = $_POST['cprice'];
	$ccapacity = $_POST['ccapacity'];
	
	
								$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
                                move_uploaded_file($_FILES["image"]["tmp_name"], SPTHM."upload/" . $_FILES["image"]["name"]);
                                $location = $_FILES["image"]["name"];
						

	$updateData = array(
		'category_name' => $cname,
		'category_price' => $cprice,
		'category_capacity' => $ccapacity,
		'category_image' => $location
		);
	
	$spconn->where('category_id',$id);
	$categoryupdate = $spconn->update('tb_category',$updateData);
	
	if($categoryupdate){
			$aspmember->RedirectToURL('?page=category');
			}
   
	$response = $aspmember->GetErrorMessage();
	echo $response;
}

?>
