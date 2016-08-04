<?php

session_start();


$string = "_Generated_Image_DataToURL";
$region = "";

//Neck
if(isset($_POST['Delete_Neck'])){
	if($_POST['Delete_Neck'] == "Delete Neck"){

		$region = $folder = "Neck";
		$region .= $string;

		$path = $_SESSION['fullPath'];

		$regionFolder = $path ."/".$folder."/".$region.".png";

		if(file_exists($regionFolder)){
			unlink($regionFolder);
		}
	
		unset($_SESSION['embroidery_neck_details']);

		unset($_SESSION['new_embroidery_neck']);

		unset($_SESSION['embroidery_neck']);

		unset($_SESSION['total_neck_text_charge']);

		unset($_SESSION['total_neck_logo_charge']);

		unset($_SESSION['subtotal_charge_neck']);

		unset($_POST['Delete_Neck']);

		header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	}
}else{
	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
}

// Center

if(isset($_POST['Delete_Center'])){
	if($_POST['Delete_Center'] == "Delete Center"){

		$region = $folder = "Center";
		$region .= $string;

		$path = $_SESSION['fullPath'];

		$regionFolder = $path ."/".$folder."/".$region.".png";


		if(file_exists($regionFolder)){
			unlink($regionFolder);
		}		

		unset($_SESSION['embroidery_center_details']);

		unset($_SESSION['new_embroidery_center']);

		unlink(realpath($_SESSION['embroidery_center']));

		unset($_SESSION['embroidery_center']);

		unset($_SESSION['total_center_text_charge']);

		unset($_SESSION['total_center_logo_charge']);

		unset($_SESSION['subtotal_charge_center']);

		unset($_POST['Delete_Center']);

		header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	}
}else{
	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
}


// Shoulder

if(isset($_POST['Delete_Shoulder'])){
	if($_POST['Delete_Shoulder'] == "Delete Shoulder"){

		$region = $folder = "Shoulder";
		$region .= $string;

		$path = $_SESSION['fullPath'];

		$regionFolder = $path ."/".$folder."/".$region.".png";


		if(file_exists($regionFolder)){
			unlink($regionFolder);
		}		

		unset($_SESSION['embroidery_shoulder_details']);

		unset($_SESSION['new_embroidery_shoulder']);

		unlink($_SESSION['embroidery_shoulder']);

		unset($_SESSION['embroidery_shoulder']);

		unset($_SESSION['total_shoulder_text_charge']);

		unset($_SESSION['total_shoulder_logo_charge']);

		unset($_SESSION['subtotal_charge_shoulder']);

		unset($_POST['Delete_shoulder']);

		header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	}
}else{
	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
}



// Hip

if(isset($_POST['Delete_Hip'])){
	if($_POST['Delete_Hip'] == "Delete Hip"){

		$region = $folder = "Hip";
		$region .= $string;

		$path = $_SESSION['fullPath'];

		$regionFolder = $path ."/".$folder."/".$region.".png";


		if(file_exists($regionFolder)){
			unlink($regionFolder);
		}		

		unset($_SESSION['embroidery_hip_details']);

		unset($_SESSION['new_embroidery_hip']);

		unlink(realpath($_SESSION['embroidery_hip']));

		unset($_SESSION['embroidery_hip']);

		unset($_SESSION['total_hip_text_charge']);

		unset($_SESSION['total_hip_logo_charge']);

		unset($_SESSION['subtotal_charge_hip']);

		unset($_POST['Delete_hip']);

		header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	}
}else{
	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
}


?>