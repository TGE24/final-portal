<!DOCTYPE html>
<html>
<head>
	<title>Upload Image To Database</title>
	<style type="text/css">
		.gallery img{
			width : 20%;
			height: auto;
			border-radius: 5px;
			cursor: pointer;
			transition: .3s;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="upfrm">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				Select Image File To Upload:
				<input type="file" name="file">
				<input type="submit" name="submit" value="Upload">				
			</form>
		</div>	
			<div class="gallery">
				<h2>Uploaded Images</h2>
				<?php
				include 'init.php';

				$query = $db -> query("SELECT * FROM images ORDER BY uploadedon  DESC");
				if ($query->num_rows > 0) {
					while ($row = $query -> fetch_assoc()) {
						$imageURL = 'uploads/'.$row['name'];
						?>
							<img src="<?php echo $imageURL; ?>"/>
						<?php
					}
				}else{
				?>
					<p>No Image(s) Found...</p>
				<?php } ?>
				</div
			</div>


	</div>
</body>
</html>