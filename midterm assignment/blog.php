<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<h1 align="center">Write Blog</h1>
	<hr>
</head>
<body>
	<div align="center">   
				<td colspan="2"><a href="myBlogIndex.php"><button>Home</button></a></td>
				<td colspan="2"><a href="blog.php"><button>Blog</button></a></td>
				<td colspan="2"><a href="home.php"><button>Logout</button></a></td>
		<hr>
	</div>
	<form action="" method="POST">
		<div class="row">
		<div class="column" align="left">
			<table border="1px">
				<tr>
					<td> Title </td>
					<td colspan="4">
						<input type="text" name="title">
					</td>
				</tr>
				<tr>
					<td> Write your Blog here </td>
					<td colspan="4">
						<input type="text" name="blog">
					</td>
				</tr>
			</table>
			<input type="submit" name="post" value="Post">
		</div>	
	</div>
	<div class="row">
		<div class="column" align="left">
			<h2><p style='color:blue;text-align: left;'>Nepal Tragedy</p></h2>
			<h3>14th March,2018 , Saif Hossain </h3>
			<h4>Bangladeshi plane U.S. Bangla crashed in Nepal International
			Airport.There are 67 people are dead in this plane crashed.. <a href="blog.php">[see more..]</a></h4>
		</div>
	</div>
	<div class="row">
		<div class="column" align="left">
			<h2><p style='color:blue;text-align: left;'><?php if(isset($_POST['title'])){ echo $_POST['title'];} ?></p></h2>
			<h3>14th March,2018 , Saif Hossain </h3>
			<h4><?php if(isset($_POST['blog'])){ echo $_POST['blog'];} ?><a href="blog.php">[see more..]</a></h4>
		</div>
	</div>

</form>

</body>
</html>

