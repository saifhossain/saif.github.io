<?php
if(isset($_GET["error"])){
	echo "<span style='color:red;'>".$_GET["error"]."</span>";
}
?>
<h1 align="center">Welcome to my Blog</h1>
<hr>
<div style='width:400px; margin:150px auto;'>
	<form action="SigninCheck.php" method="POST">
		<h1>Sign In </h1>
		<hr>
		<table border="1px">
			<tr> 
				<td>Email</td>
				<td colspan="2"><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td colspan="2"><input type="password" name="password" /></td>
			</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="Login" /></td>
			</tr>
		</table>
		Or<a href="signup.php"> Sign up</a> here

	</form>
</div>