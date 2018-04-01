<?php
include '../init.php';
$statusMsg = '';


$targetDir = "../uploads/";
$filename = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $filename;
$fileType =  pathinfo($targetFilePath,PATHINFO_EXTENSION);

	if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
			//formats to upload
		$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
		if (in_array($fileType, $allowTypes)) {
			//upload to server
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
				//Insert Imaage FIle Name Int Database
				$insert = $link -> query("INSERT into images (name, uploadedon) VALUES ('".$filename."', NOW())");
				if ($insert) {
					$statusMsg = "The File ".$filename." has been uploaded successfully.";
				} else {
					$statusMsg = "File upload failed, please Try Again.";
					}
				} else {
					$statusMsg = "Sorry, there was an error uploading your file";
					}
				} else {
					$statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF are allowed to upload.";
				}
			} else {
				$statusMsg = 'Please select a File to upload';
			}

//Display Status Msg
			echo "$statusMsg";
?>