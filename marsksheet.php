<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="Form_2.php" name="Form1" id="Form1">
		<p><label>Name: </label><input type="text" name="name" required></p>
		<p><label>Email: </label><input type="Email" name="email" required></p>
		<p><label>Password: </label><input type="Password" name="pass" required></p>
		<p><label>Contact: </label><input type="number" name="cont" required></p>
		<p><label>Address: </label><textarea cols="20" rows="5" name="addr" required></textarea></p>
		<p><label>Nationality: </label>
			<select name="nat">
				<option selected> Pakistan</option>
				<option>China</option>
				<option>Nigaria</option>
				<option>yuganda</option>
				<option>Canada</option>
				<option>USA</option>
			</select>
		</p>
		<p><label>Gender: </label>
		<input type="radio" name="gen" value="Male" checked/> Male
		<input type="radio" name="gen" value="female" checked/> female</p>
		<p><input type="submit" name="btn1" value="submit"></p>

		
	</form>


</body>
s</html>