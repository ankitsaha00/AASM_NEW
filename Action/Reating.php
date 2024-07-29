<?php 
require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 require_once("../OOP_CLASS/sending_mail/PHPMailerAutoload.php");
 require_once ("../OOP_CLASS/sending_mail/class.phpmailer.php");
 $server=new Main_Class();

if(isset($_POST['submit']))
{
	$name=$_POST['FullName'];
	$Email=$_POST['Email'];
	$Rating=$_POST['rating'];
	$Message=$_POST['message'];
    date_default_timezone_set("Asia/Kolkata");
	$date=date("d-m-Y");
	$time=date("H:i:s a");
	$msg='<style>
@import url("https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap");
html,body {
    font-family: "Raleway", sans-serif;  
}
.thankyou-page ._header {
    background: #fee028;
    padding: 100px 30px;
    text-align: center;
    background: #fee028 url(https://codexcourier.com/images/main_page.jpg) center/cover no-repeat;
}
.thankyou-page ._header .logo {
    max-width: 200px;
    margin: 0 auto 50px;
}
.thankyou-page ._header .logo img {
    width: 100%;
}
.thankyou-page ._header h1 {
    font-size: 65px;
    font-weight: 800;
    color: white;
    margin: 0;
}
.thankyou-page ._body {
    margin: -70px 0 30px;
}
.thankyou-page ._body ._box {
    margin: auto;
    max-width: 80%;
    padding: 50px;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
}
.thankyou-page ._body ._box h2 {
    font-size: 32px;
    font-weight: 600;
    color: #4ab74a;
}
.thankyou-page ._footer {
    text-align: center;
    padding: 50px 30px;
}

.thankyou-page ._footer .btn {
    background: #4ab74a;
    color: white;
    border: 0;
    font-size: 14px;
    font-weight: 600;
    border-radius: 0;
    letter-spacing: 0.8px;
    padding: 20px 33px;
    text-transform: uppercase;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="thankyou-page">
    <div class="_header">
        
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
                <strong>Hey,</strong>'.$name.'
            </h2>
            <p>
               Thank You For Sending A Valuable FeedBack 
            </p>
        </div>
    </div>
</div>';
$Subject="AASM(Raiganj University)";
	$sql="INSERT INTO `feedback`(`Name`, `Email`, `Reating`,`Message`, `Date`, `Time`) VALUES ('$name','$Email','$Rating','$Message','$date','$time')";
	if($server->insert($sql))
	{
      send_email($Email,$Subject,$msg);
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Your Valuable Review Send Successfully'
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
	$del="DELETE  FROM `feedback` WHERE `SL`='$id'";
	if($server->insert($del))
	{
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>' FeedBack Delete Successfully Completed'
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