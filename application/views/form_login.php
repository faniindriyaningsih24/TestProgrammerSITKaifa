<html>
<head>
	<title>LOGIN || USER</title>
	<!--  -->
</head>
<body><br>
	<div id="box-title">
		<h3 align="center">USER LOGIN</h3>
	</div>
	<div id="box-form"><br>
		<form action="<?php echo site_url('/login/aksi_login');?>" method="POST" align="center">
				<input type="text" name="txt_user" placeholder="Enter Your Username" size="30"><br><br>
				<input type="password" name="txt_pass" placeholder="Enter Your Password"><br><br>
				<input type="submit" name="btn_login" value="LOGIN">
		</form>
	</div>

    <div>
    	<center><strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights reserved.</center>
    </div>
</body>
</html>