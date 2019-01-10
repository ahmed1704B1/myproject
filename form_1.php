<!DOCTYPE html>
<html>
<head>
	<title>Form 1</title>
</head>
<body>

<form method="get" action="form_2.php" name="form" id="form">
<p><label>Name                                                                                                             : </label> <input type="text" name="name" required></p>
<p><label>Email: </label> <input type="email" name="email" required></p>
<p><label>password: </label> <input type="password" name="pass" required></p>
<p><label>Contect: </label> <input type="number" name="addr" required></p>
<p><label>Nationality: </label> <input type="text" name="name" required>
<SELECT name="nat">
<option>choose</option>
<option selected="pakistan"></option>
<option>USA</option>

</SELECT></p>
<p><label>Gender</label>
<input type="radio" name="gen" value="male" checked/> male
<input type="radio" name="gen" value="Female">
</p>
<p><input type="submit" name="btn1" value="submit"></p>	





</form>
</body>
</html>
