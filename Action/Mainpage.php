<?php 
require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();
if(isset($_POST['Submit']))
{
	$ImgTitle=$_POST['ImageTitle'];
  $Img_Name=base64_encode($_FILES['EventImage']['name']);
  $Img_TmpName=$_FILES['EventImage']['tmp_name'];
  $Location="../Document/MainSlider/".$Img_Name;
  date_default_timezone_set("Asia/Kolkata");
	$date=date("d-m-Y");
	$time=date("H:i:s a");
  if(move_uploaded_file($Img_TmpName,$Location))
  {
  	$sql="INSERT INTO `mainslider`(`ImageTitle`, `Image_Name`, `Date`, `Time`) VALUES ('$ImgTitle','$Img_Name','$date','$time')";
     if($server->insert($sql))
     {
     	echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>' Main  Picture Insert Successfully '
	                        ]
	                        ); 
     }
     else
     {
        echo json_encode(
	                        [
	                            'status'=>false,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Image Upload Faild, Please Try Again !'
	                        ]
	                        );

     }
  }
}

if(isset($_POST['delete']))
{
	$id=$_POST['id'];
	$Img_Name=$_POST['name'];
   $sql="DELETE FROM `mainslider`  WHERE `SL`='$id'";
   if($server->insert($sql))
   {
		unlink("../Document/MainSlider/".$Img_Name);
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Main Slider Image Delete  Completed'
	                        ]
	                        );  
	}
	else
	{
		echo json_encode(
	                        [
	                            'status'=>false,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Technical Error, Please Try Again !'
	                        ]
	                        );
	}
}
?>