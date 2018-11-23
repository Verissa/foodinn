<?php
require_once '../includes/dbconfig.php';
$cuisine = $_POST['cuisine'];
$productimage = $_POST['file'];
$filename = $_FILES["file"]["name"];
$uploadDir = '../images/'; 
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
	 			print_r($filename);
	 			print_r($fileNameNew);
	 			print_r($fileActualext);
	 			print_r($filedest);


	 			move_uploaded_file($filetmp, $filedest);
	 			header("Location:../pages/addimage.php?uploadsuccess");
	 		}else{
	 			echo "file too big";
	 		}
	 	}else{
	 		echo "There was an error uploading your file";
	 	}
	 }else {
	 	echo "You cannot upload files of this type";
	 }

function insertImage($filePath)
	{
		$result1 = mysqli_query($connect,"INSERT INTO products (product_cat,product_brand, product_title,product_price,product_desc,product_image,product_keywords)
		VALUES ('$productcat', '$productbrand','$productname','$productprice','$productdescription','$filePath','$productkeywords')");
		return $result1;
	
}
$query = mysqli_query($connect, "INSERT INTO cusine (cuisine_image) VALUES ('$filePath') WHERE `cuisine_name`=`$cuisine`");

?>
