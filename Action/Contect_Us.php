<?php 
require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();

 if(isset($_POST['submit']))
 {
      $Name=$_POST['name'];
		$Email=$_POST['email'];
		$Number=$_POST['number'];
		$Subject=$_POST['subject'];
		$Message=$_POST['message'];
		date_default_timezone_set("Asia/Kolkata");
		$date=date("d-m-Y");
		$time=date("H:i:s a");

		$sql="INSERT INTO `contact`(`Name`, `Email`, `PhNo`, `Subject`, `Msg`,`Date`,`Time`)VALUES('$Name','$Email','$Number','$Subject','$Message','$date','$time')";
   if($server->insert($sql))
	{
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Your Message Send Successfully Completed'
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
 
 if(isset($_POST['delete']))
 {
 	$id=$_POST['id'];
 	$sql="DELETE FROM contact WHERE  `SL`=$id";
 	$result=$server->insert($sql);
 	if($result)
 	{
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Your Message Delete Successfully Completed'
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