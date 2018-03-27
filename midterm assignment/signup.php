<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<a href="home.php"><p style='color:blue;text-align:center;'>Home</a>
	

<?php 


	if(isset($_POST['submit'])){

	$name= $_POST['name'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	



		$passlen = strlen($pass);
	if($passlen<=4)
	{
	$message['pass']= "<p style='color:red; text-align:center;'>Password is too short</p";
	}
	if(empty($name)){
	$message['name']= "<p style='color:red; text-align:center;'>Name can not be empty</p>";
	}	
	if(empty($pass)){
	$message['pass']= "<p style='color:red; text-align:center;'>Password can not be empty</p>";
	}
	if(empty($cpass)){
	$message['cpass']= "<p style='color:red; text-align:center;'>Password can not be empty</p>";
	}
	
	
	if($passlen>=15){
	$message['pass']= "<p style='color:red; text-align:center;'>Password is too long</p>";
	}
	if(empty($email)){
	$message['email']=	"<p style='color:red; text-align:center;'>email can not be empty</p>";
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$message['email']= "<p style='color:red; text-align:center;'>invalid email</p>";
	}
	if(empty($gender)){
		$message['gender']="<p style='color:red; text-align:center;'>gender can not be empty</p>";
	
	}
	if(empty($phone)){
	$message['phone']= "<p style='color:red; text-align:center;'>Phone number can not be empty</p>";
	}
}
?>

<div class="res" align="center">


	<form action="" method="POST">
		<h1>Sign Up</h1>
	<hr>
	<table>
	<tr>
		<td><b>Name</b></td>
		<td><input name="name" type="text" /></td>
	</tr>
	
	<tr>
		<td> </td>
		<td><?php 

			if(isset($message['name'])){

			echo $message['name'];
			}
			?></td>
	</tr>
	
	
	

	
	<tr><td><b>Gender</b></td>
		<td><input type="radio" name="gender"  value="male" id="male">Male <input type="radio" name="gender"  value="female" id="female">Female  <span id="msgg" ></span></td>
		
		<tr>
		<td> </td>
		<td><?php 

			if(isset($message['gender'])){

			echo $message['gender'];
			}
			?></td>
	</tr>
	
	
	<tr>
			<td><b>Password</b></td>
			<td><input name="pass" type="password" /></td>
	</tr>
	<tr>
			<td></td>
			<td><?php 

				if(isset($message['pass'])){
				echo $message['pass'];
				}	
			?></td>
	</tr>
	<tr>
			<td><b>Confirm Password</b></td>
			<td><input name="cpass" type="password" /></td>
	</tr>
	<tr>
			<td></td>
			<td><?php 

				if(isset($message['cpass'])){
				echo $message['cpass'];
				}	
			?></td>
	</tr>
	
	<tr>
			<td><b>Email</b></td>
			<td><input name="email" type="text" /></td>

	</tr>
	<tr>
			<td></td>
			<td><?php 

				if(isset($message['email'])){
				echo $message['email'];
				}
			?></td>
	</tr>
	<tr>
			<td><b>Phone</b></td>
			<td><input name="phone" type="text" /></td>

	</tr>
	<tr>
			<td></td>
			<td><?php 

				if(isset($message['phone'])){
				echo $message['phone'];
				}
			?></td>
	</tr>
	
	<tr><td><b>Birthday</b></td>
	<td style=""><select name="day" id="day"><option value="day">Day</option>
			<option value="1">01</option>
			<option value="2">02</option>
			<option value="3">03</option>
			<option value="4">04</option>
			<option value="5">05</option>
			<option value="6">06</option>
			<option value="7">07</option>
			<option value="8">08</option>
			<option value="9">09</option>
			<option value="10">10</option>
			<option value="10">11</option>
			<option value="10">12</option>
			<option value="10">13</option>
			<option value="10">14</option>
			<option value="10">15</option>
			<option value="10">16</option>
			<option value="10">17</option>
			<option value="10">18</option>
			<option value="10">19</option>
			<option value="10">20</option>
			<option value="10">21</option>
			<option value="10">22</option>
			<option value="10">23</option>
			<option value="10">24</option>
			<option value="10">25</option>
			<option value="10">26</option>
			<option value="10">27</option>
			<option value="10">28</option>
			<option value="10">29</option>
			<option value="10">30</option>
			<option value="10">31</option>
			</select>
			<select name="month" id="month"><option value="month">Month</option>
			<option value="">January</option>
			<option value="">February</option>
			<option value="">March</option>
			<option value="">May</option>
			<option value="">June</option>
			<option value="">July</option>
			<option value="">August</option>
			<option value="">September</option>
			<option value="">October</option>
            <option value="">November</option>
			<option value="">December</option>
			
			</select>
			<select name="year" id="year" ><option value="year">Year</option>
			<option value="">1984</option>
			<option value="">1985</option>
			<option value="">1986</option>
			<option value="">1987</option>
			<option value="">1988</option>
			<option value="">1989</option>
			<option value="">1990</option>
			<option value="">1991</option>
			<option value="">1992</option>
			<option value="">1993</option>
			<option value="">1994</option>
			<option value="">1995</option>
			<option value="">1996</option>
			<option value="">1997</option>
			<option value="">1998</option>
			<option value="">1999</option>
			<option value="">2000</option>
			<option value="">2001</option>
			</select>
			<span id="msgd" ></span>
			</td>
	</tr>
	<tr>
	<td><input name="submit" type="submit" /></td>
	</tr>




	</table>
	 Or <a href="login.php"> Login </a> here


</form>

</div>

</body>
</html>