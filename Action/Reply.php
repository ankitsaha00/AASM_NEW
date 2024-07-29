<?php 
 require_once("../OOP_CLASS/function/function.php");
 require_once("../OOP_CLASS/sending_mail/PHPMailerAutoload.php");
 require_once ("../OOP_CLASS/sending_mail/class.phpmailer.php");
if(isset($_POST['submit']))
{
	$Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Subject=$_POST['Subject'];
    $Msg=$_POST['msg'];
    if(send_email($Email,$Subject,$Msg))
    {
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Your Reply  Send Successfully'
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