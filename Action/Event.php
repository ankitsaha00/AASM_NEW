<?php 
require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();
if(isset($_POST['Submit']))
{
  $Event_Title=$_POST['Event_Title'];
  $Img_Name=$_FILES['EventImage']['name'];
  $Img_TmpName=$_FILES['EventImage']['tmp_name'];
  $Location="../Document/Events/".$Img_Name;
  date_default_timezone_set("Asia/Kolkata");
	$date=date("d-m-Y");
	$time=date("H:i:s a");
  if(move_uploaded_file($Img_TmpName,$Location))
  {
  	$sql="INSERT INTO `events`(`Event_Title`, `Image_Location`, `Date`, `Time`) VALUES ('$Event_Title','$Img_Name','$date','$time')";
     if($server->insert($sql))
     {
     	echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>' Event  Picture Successfully Added'
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
	                            'message'=>'Notice Upload Faild, Please Try Again !'
	                        ]
	                        );

     }
  }
}

if(isset($_POST['delete']))
{
	$sl=$_POST['id'];
	$Name=$_POST['name'];
	$sql="DELETE FROM `events` WHERE `SL`='$sl'";
	if($server->insert($sql))
	{
		unlink("../Document/Events/".$Name);
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