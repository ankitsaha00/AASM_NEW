<?php 
require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();
if(isset($_POST['Submit']))
{
  $plantsName=$_POST['Name'];
  $Details=$_POST['Detalis'];
  $Img_Name=$_FILES['PlantImage']['name'];
  $Img_TmpName=$_FILES['PlantImage']['tmp_name'];
  $type="Arometic";
  $Location="../Document/plants/".$Img_Name;
  date_default_timezone_set("Asia/Kolkata");
	$date=date("d-m-Y");
	$time=date("H:i:s a");
  if(move_uploaded_file($Img_TmpName,$Location))
  {
  	$sql="INSERT INTO `plants`(`Plant_Name`, `information`, `Image_Location`, `Type`, `Date`, `Time`) VALUES ('$plantsName','$Details','$Img_Name','$type','$date','$time')";
     if($server->insert($sql))
     {
     	echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>' Plants Add Successfully Completed'
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
	                            'message'=>'Plants Details Upload Faild, Please Try Again !'
	                        ]
	                        );

     }
  }
}

if(isset($_POST['delete']))
{
	$sl=$_POST['id'];
	$Name=$_POST['name'];
	$sql="DELETE FROM `plants` WHERE `SL`='$sl'";
	if($server->insert($sql))
	{
		unlink("../Document/plants/".$Name);
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Event Image Delete Successfully Completed'
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