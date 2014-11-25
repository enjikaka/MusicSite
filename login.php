<?php
	$title="Login";
	include("incl/header.php");
?>

<div id="content">
	<h1><?php echo($title); ?></h1>
	<hr>
	<fieldset>
		<legend>Type username and password</legend>
		<form action="login.php" method="post" name="frmLogin" >
			<label for="txtUserName">Name</label><br>
			<input type="text" name="txtUserName" id="txtUserName" placeholder="Type your username!" autofocus required>
			<br>
			<label for="txtPassWord">Password</label><br>
			<input type="password" name="txtPassWord" id="txtPassWord" placeholder="Type your password!" required>
			<br>
			<button type="submit" name="btnLogin" id="btnLogin">Login</button>
			<button type="reset" name="btnReset" id="btnReset">Reset</button>
		</form>
	</fieldset>
</div>

<?php include("incl/footer.php");