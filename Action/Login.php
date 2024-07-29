<?php
 require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();

if(isset($_POST['submit']))
{
  $username=$_POST['UserName'];
  $Password=$_POST['password'];

 $sql="SELECT * FROM `login` WHERE `Userid`='$username'";
 if($data=$server->single_row_fetch($sql))
  {
	    if($data['Password']==$Password)
	    {
	      $_SESSION['admin_id']=$data['Id'];
	      $_SESSION['admin_Name']=$data['AdminName'];
	       echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>true,
	                            'reload'=>false,
	                            'url'=>'Dashboard/index.php',
	                            'message'=>'Login Successfully'
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
	                            'message'=>'Invalid Password, Please Try Again !'
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
	                            'message'=>' Username Not Found'
	                        ]
	                        );	
	}
 }

if(isset($_POST['logout']))
{
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_Name']);
    session_destroy();

     echo json_encode(
                        [
                            'status'=>true,
                            'redirect'=>true,
                            'reload'=>false,
                            'url'=>'../../index.php',
                            'message'=>'Logout Successfully'
                        ]
                        );
}
?>