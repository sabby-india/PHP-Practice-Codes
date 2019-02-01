<?php
$target_dir = "/uploads";
$target_file = $target_dir.basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imagefileytpe = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//check if image file is image
if(isset($_POST["submit"]))
{
	echo $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
	if($check != false){
		echo "File is an image-".$check["mime"].".";
		$uploadOk = 1;
	}
	else
	{
		echo "fiLE IS NOT AN IMAGE";
		$uploadOk = 0;
	}
}

?>