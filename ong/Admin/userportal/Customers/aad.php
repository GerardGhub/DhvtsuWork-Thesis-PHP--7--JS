<!DOCTYPE html>
<html>
<head>
<title>How to Download File using PHP/MySQLi</title>
</head>
<body>
	<marquee><h2>Sample Images s! hahahaha</h2></marquee>
	<center>
	<table border="10" cellpadding="34" cellspacing="20">
		<thead>
			<th>File Location</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php
			include('conn.php');
			
			$query=mysqli_query($conn,"select * from officepresident");
			while($row=mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $row['item_image']; ?></td>
						<td><a href="download.php?file=../item_images/<?php echo urlencode($row['item_image']); ?>">Download</a></td>
					</tr>
				<?php
			}
		?>
		
		
					<!--<php<center><img src='../item_images/".$query2['item_image']."' style='width:778px;height:990px;' /></center>?php>-->
		
		</tbody>
	</table>
	</center>
</body>
</html>