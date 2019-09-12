<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<style type="text/css">
	body{background: #eee url();}
	html,body{
	    position: relative;
	    height: 100%;
	}

	.login-container{
	    position: relative;
	    width: 300px;
	    margin: 80px auto;
	    padding: 20px 40px 40px;
	    text-align: center;
	    background: #fff;
	    border: 1px solid #ccc;
	}

	#output{
	    position: absolute;
	    width: 300px;
	    top: -75px;
	    left: 0;
	    color: #fff;
	}

	#output.alert-success{
	    background: rgb(25, 204, 25);
	}

	#output.alert-danger{
	    background: rgb(228, 105, 105);
	}

	.login-container::before,.login-container::after{
	    content: "";
	    position: absolute;
	    width: 100%;height: 100%;
	    top: 3.5px;left: 0;
	    background: #fff;
	    z-index: -1;
	    -webkit-transform: rotateZ(4deg);
	    -moz-transform: rotateZ(4deg);
	    -ms-transform: rotateZ(4deg);
	    border: 1px solid #ccc;
	}

	.login-container::after{
	    top: 5px;
	    z-index: -2;
	    -webkit-transform: rotateZ(-2deg);
	    -moz-transform: rotateZ(-2deg);
	    -ms-transform: rotateZ(-2deg);
	}

	.avatar{
	    width: 100px;height: 100px;
	    margin: 10px auto 30px;
	    border-radius: 100%;
	    border: 2px solid #aaa;
	    background-size: cover;
	}

	.form-box input{
	    width: 100%;
	    padding: 10px;
	    text-align: center;
	    height:40px;
	    border: 1px solid #ccc;;
	    background: #fafafa;
	    transition:0.2s ease-in-out;
	}

	.form-box input:focus{
	    outline: 0;
	    background: #eee;
	}

	.form-box input[type="text"]{
	    border-radius: 5px 5px 0 0;
	}

	.form-box input[type="password"]{
	    border-radius: 0 0 5px 5px;
	    border-top: 0;
	}

	.form-box button.login, .form-box button.continue{
	    margin-top:15px;
	    padding: 10px 20px;
	}

	.animated {
	  -webkit-animation-duration: 1s;
	  animation-duration: 1s;
	  -webkit-animation-fill-mode: both;
	  animation-fill-mode: both;
	}

	@-webkit-keyframes fadeInUp {
	  0% {
	    opacity: 0;
	    -webkit-transform: translateY(20px);
	    transform: translateY(20px);
	  }
	  100% {
	    opacity: 1;
	    -webkit-transform: translateY(0);
	    transform: translateY(0);
	  }
	}

	@keyframes fadeInUp {
	  0% {
	    opacity: 0;
	    -webkit-transform: translateY(20px);
	    -ms-transform: translateY(20px);
	    transform: translateY(20px);
	  }
	  100% {
	    opacity: 1;
	    -webkit-transform: translateY(0);
	    -ms-transform: translateY(0);
	    transform: translateY(0);
	  }
	}

	.fadeInUp {
	  -webkit-animation-name: fadeInUp;
	  animation-name: fadeInUp;
	}
	</style>
</head>
<body>

<div class="container">
	<div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
        <form method="POST" action="">
            <input name="username" type="text" placeholder="username">
            <input name="password" type="password" placeholder="password">
            <button class="btn btn-info btn-block login" type="submit">Login</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>
<?php
require_once __DIR__. "/../load.php";
require_once __DIR__. "/session.php";

/* Check Session, if was login this will redirect to home.php */

$session = new session;
$session->go = "home.php";
$session->login();
if(@$_POST['username']){
	
	$login = $db->login($_POST['username'],$_POST['password']);
	if($login){
		echo '<script>alert("Login Succesfuly")</script>';
		@$_SESSION[md5('id_admin')] = $login['0'];
	} else {
		echo '<script>alert("Login Failed")</script>';
	}

}
?>
