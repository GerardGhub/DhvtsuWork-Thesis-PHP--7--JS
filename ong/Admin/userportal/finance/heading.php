    <div class="row" >
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="../item_images/Userspics/<?php echo $_SESSION['sess_user_image']; ?>" height="160" width="167"></center>
		<hr>
		<!--a class="btn btn-success" href=" #change_pic.php">Change Profile Picture</a-->
      </div>
		<div class="col-md-5" style="background-color:grsay; border-top-color: black;">
			<hr>
			<p style="color:black; ">Personal Info</p>
				<?php
			$query = $conn->query("select * from ongusers where id = '$session_id'");
			$row = $query->fetch();
			$id = $row['id'];
				//$user_image = $row['user_image'];
			?>
			<hr>
			<p style="color:black;">Name:<?php echo $row['fname']." ".$row['lastname']; ?><span class="margin-p"> </span>Gender:<?php echo $row['gender']; ?></p>
			<hr>
			<p>Address:<?php echo $row['address']; ?></p>
			<hr>
		</div>
      <div class="col-md-5">
			<form method="post" action="post.php">
						<textarea name="content" placeholder="Share your Story Here" style="background-color:grey; color:white;"required></textarea>
						<br>
						<hr>
						<button class="btn btn-success" style="font-size:17px;"><i class="icon-share"></i> Share </button>
			</form>
      </div>
    </div> 