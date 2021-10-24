								<?php 

								if(isset($_POST['cname'])){
									
								$cname = $_POST['cname'];
								$cprice = $_POST['cprice'];	
								$ccapacity = $_POST['ccapacity'];
								
								
								$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], SPTHM."upload/" . $_FILES["image"]["name"]);
                                $location = $_FILES["image"]["name"];
								
								$Data = array(
									'category_name' => $cname,
									'category_price' => $cprice,
									'category_capacity' => $ccapacity,
									'category_image' => $location
									);
									
								$categoryadd = $spconn->insert('tb_category',$Data);
								
								if($categoryadd){
									$aspmember->RedirectToURL('?page=category');
								}
							   
								$response = $aspmember->GetErrorMessage();
								echo $response;
								
								}else{$aspmember->RedirectToURL('./');}

								?>