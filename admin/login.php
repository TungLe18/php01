<?php

session_start();



//lỗi Undefined  cần include:



include_once('../config/connect.php');
if(isset($_POST['sbm'])){
	
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];


	$sql = "SELECT * FROM user WHERE user_mail = '$mail' AND user_pass = '$pass' ";
	//thực thi


	//mysqli   mysqli   mysqli   mysqli   mysqli   mysqli   mysqli   mysqli   mysqli   mysqli   
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);


	if ($row > 0) {
	
		//khoi tao
		$_SESSION['mail'] = $mail;
		$_SESSION['pass'] = $pass;

		//dieu huong

		header('location: index.php');



	} else {
		
		$error = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
	}
	



	//isset = tồn tại


	//khi test
	// if($mail == 'vietpro.edu.vn@gmail.com' && $pass == '123456'){	
	// 	header('location:admin.php');
	// }
	// else{
	// 	$error = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
	// }
}
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vietpro Mobile Shop - Administrator</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>



<div class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Vietpro Mobile Shop - Administrator</div>
			<div class="panel-body">
				
				<?php if(isset($error)){echo $error;}?>
				
				<form role="form" method="post">
					<fieldset>
						<div class="form-group">
							<input required class="form-control" placeholder="E-mail" name="mail" type="email" autofocus>
						</div>
						<div class="form-group">
							<input required class="form-control" placeholder="Mật khẩu" name="pass" type="password" value="">
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
							</label>
						</div>
						<button name="sbm" type="submit" class="btn btn-primary">Đăng nhập</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div><!-- /.col-->
</div><!-- /.row -->	
</body>

</html>
