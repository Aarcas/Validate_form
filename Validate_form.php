<html>
		<head>
		<title> Valid </title>
		
		</head>
	
	<body>
		<h2 > Code is Running</h2>
		<br/>
		<br/>
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="user" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="mail" /></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="website" /></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name="comment" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
				<input type="radio" name="gender" value="male" checked> Male
				<input type="radio" name="gender" value="female"> Female
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"/></td>
			</tr>
		</table>
		</form>
		
		<?php
		
		if ($_SERVER['REQUEST_METHOD']=='POST')
		{
			$name		= validate($_POST['user']);
			$mail		= validate($_POST['mail']);
			$website	= validate($_POST['website']);
			$comment	= validate($_POST['comment']);
			@$gender		= validate($_POST['gender']);
			
			echo "Name: ".$name."<br/>";
			echo "E-mail: ".$mail."<br/>";
			echo "Website: ".$website."<br/>";
			echo "Comment: ".$comment."<br/>";
			echo "Gender: ".@$gender;
		}
		function validate($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		?>
	</body>

</html>
