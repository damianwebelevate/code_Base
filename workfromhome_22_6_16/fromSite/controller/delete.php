<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>
<?php
require dirname(__FILE__).'/sessionStart.php';

var_dump($_POST);
// if(file_exists($_SESSION['neckFilePath'])){
// 	unlink($_SESSION['neckFilePath']);
// }else{
// 	unlink($_SESSION['neckFilePath']);
// }

$string = "_Generated_Image_DataToURL";
$region = "";

//Neck
if(!empty($_POST['Delete_Neck'])){
	if($_POST['Delete_Neck'] == "Delete Neck"){


		if(file_exists($_SESSION['neckFilePath'])){
			unlink($_SESSION['neckFilePath']);
		}else{
			unlink($_SESSION['neckFilePath']);
		}
	
		unset($_SESSION['embroidery_neck_details']);

		unset($_SESSION['new_embroidery_neck']);

		unset($_SESSION['embroidery_neck']);

		unset($_SESSION['total_neck_text_charge']);

		unset($_SESSION['total_neck_logo_charge']);

		unset($_SESSION['subtotal_charge_neck']);

		unset($_POST['Delete_Neck']);

		unset($_SESSION['neckFilePath']);

		echo json_encode(array("Deleted"=>"Deleted"));

	}
}else{

}

// Center

if(!empty($_POST['Delete_Center'])){
	if($_POST['Delete_Center'] == "Delete Center"){

		if(file_exists($_SESSION['centerFilePath'])){
			unlink($_SESSION['centerFilePath']);
		}else{
			unlink($_SESSION['centerFilePath']);
		}

		unset($_SESSION['embroidery_center_details']);

		unset($_SESSION['new_embroidery_center']);

		unset($_SESSION['embroidery_center']);

		unset($_SESSION['total_center_text_charge']);

		unset($_SESSION['total_center_logo_charge']);

		unset($_SESSION['subtotal_charge_center']);

		unset($_POST['Delete_Center']);

		unset($_SESSION['centerFilePath']);

		echo json_encode(array("Deleted"=>"Deleted"));

	}
}else{

}


// Shoulder

if(!empty($_POST['Delete_Shoulder'])){
	if($_POST['Delete_Shoulder'] == "Delete Shoulder"){

		if(file_exists($_SESSION['shoulderFilePath'])){
			unlink($_SESSION['shoulderFilePath']);
		}else{
			unlink($_SESSION['shoulderFilePath']);
		}

	
		unset($_SESSION['embroidery_shoulder_details']);

		unset($_SESSION['new_embroidery_shoulder']);

		unset($_SESSION['embroidery_shoulder']);

		unset($_SESSION['total_shoulder_text_charge']);

		unset($_SESSION['total_shoulder_logo_charge']);

		unset($_SESSION['subtotal_charge_shoulder']);

		unset($_POST['Delete_shoulder']);

		unset($_SESSION['shoulderFilePath']);

		echo json_encode(array("Deleted"=>"Deleted"));
	}
}else{

}



// Hip

if(!empty($_POST['Delete_Hip'])){
	if($_POST['Delete_Hip'] == "Delete Hip"){

		if(file_exists($_SESSION['hipFilePath'])){
			unlink($_SESSION['hipFilePath']);
		}else{
			unlink($_SESSION['hipFilePath']);
		}
	
		unset($_SESSION['embroidery_hip_details']);

		unset($_SESSION['new_embroidery_hip']);

		unset($_SESSION['embroidery_hip']);

		unset($_SESSION['total_hip_text_charge']);

		unset($_SESSION['total_hip_logo_charge']);

		unset($_SESSION['subtotal_charge_hip']);

		unset($_POST['Delete_hip']);

		unset($_SESSION['hipFilePath']);

		echo json_encode(array("Deleted"=>"Deleted"));
	}
}else{

}



?>