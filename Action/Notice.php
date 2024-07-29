<?php 
 require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();

 if(isset($_POST['Submit']))
{
	$Notice_Name=$_POST['Notice_Title'];
	$Animation=$_POST['Animation'];
	date_default_timezone_set("Asia/Kolkata");
	$date=date("d-m-Y");
	$time=date("H:i:s a");
	$File_Name=$_FILES['Notice']['name'];
	$TempName=$_FILES['Notice']['tmp_name'];
	$location="../Document/Total_Notice/".$File_Name;
	if(move_uploaded_file($TempName,$location))
	{
		$sql="INSERT INTO `notice`(`Notice_Title`, `Notice_Location`,`Show_new`,`Date`, `Time`)
		 VALUES ('$Notice_Name','$File_Name','$Animation','$date','$time')";
		 if($server->insert($sql))
		 {
		 	echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Your Notice Add Successfully Completed'
	                        ]
	                        );  
		 }
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

if(isset($_POST['delete']))
{
	$id=$_POST['id'];
	$Name=$_POST['name'];
	$sql="DELETE FROM  `notice` WHERE `SL`='$id'";
	if($server->insert($sql))
	{
		unlink("../Document/Total_Notice/".$Name);
		echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Notice Delete Successfully Completed'
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

if(isset($_POST['action']))
{
    $id=$_POST['id'];
    $status=$_POST['value'];
    $sql="UPDATE `notice` SET `Show_new`='$status' WHERE `SL`='$id'";
    if($server->insert($sql))
    {
    	echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Notice Animation Status Update  Successfully Completed'
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