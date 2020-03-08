<?php
if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'png', 'jpeg');
	if (in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			 if ($fileSize < 500000){
				 $fileNameNew = uniqid('', true).".".$fileActualExt;
				 $fileDestination = 'uploads/'.$fileNameNew;
				 move_uploaded_file($fileTmpName, $fileDestination);
				 header ("Location: my-account.php?uploadsuccess");
			 }
			 else{
				 echo "Your file is too big.";
			 }
		}
		else{
			echo "There was an Error uploading your file..";
		}
	}
	else{
		echo "Wrong file type.";
	}
}
