<?php
require_once '../includes/dbconfig.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];
$address = $_POST['address'];
$filename = $_FILES["file"]["name"];
	$uploadDir = '../image/'; 
	$filePath = $uploadDir . $filename;

//uploading into image folder
	 $file = $_FILES['file'];
	 $filetmp = $_FILES['file']['tmp_name'];
	 $filename = $_FILES["file"]["name"];
	 $filetype = $_FILES["file"]["type"];
	 $filesize = $_FILES["file"]["size"];
	 $fileError = $_FILES['file']['error'];
	 $fileext = explode('.', $filename);
	 $fileActualext = strtolower(end($fileext));

	 $allowed = array('jpg','jpeg','png');

	 if (in_array($fileActualext, $allowed)) {
	 	if ($fileError === 0) {
	 		if ($filesize <1000000) {
	 			$fileNameNew = $filename.".".$fileActualext;
	 			$filedest = '../images/'.$fileNameNew;
	 			


	 			move_uploaded_file($filetmp, $filedest);
	 			
	 		}else{
	 			echo "file too big";
	 		}
	 	}else{
	 		echo "There was an error uploading your file";
	 	}
	 }else {
	 	echo "You cannot upload files of this type";
	 }

}


$query = mysqli_query($connect, "INSERT INTO customers (cname,cemail,cphone,cbirthday,image,cpassword,address) VALUES ( '$name',, '$email', '$phone',  '$birthday','$filePath',md5('$password') ,'$address')");





?>