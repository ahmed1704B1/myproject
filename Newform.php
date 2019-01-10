<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<body>

	<div class="container">
	<div class="row">
	<div>
	<h1> GET INFO</h1>
	</div>
		
	</div>	
		
	<div class="row">
	<div class="col-lg-4">
	<form method="post">
	
	<p><label class=" label label-info">Your name: </label>
	<input type="text" name="name" class="form-control" placeholder="name" required>
	</p>	
<br/>

<p><label class=" label label-info">Your Hobbies: </label>
	<input type="checkbox" name="Hobb[]" class="form-control" style="height: 22px; " value="Crecket"/>Crecket
	<input type="checkbox" name="Hobb[]" class="form-control" style="height: 22px;" value="Playing Cards"/>Playing Crds
	<input type="checkbox" name="Hobb[]" class="form-control" style="height: 22px;" value="kch nai"/>kch nai
	</p>
	
	
<p><label>Fav color: </label> <input name="name" required>
<SELECT name="col">
<option>choose</option>
<option selected="Pink"></option>
<option>blue</option>
<option>Red</option>
<option>Green</option>
</SELECT></p>
	
	<p><input type="submit" name="btn1" value="submit"></p>		
	</form>

				
	</div>
			

	</div>

	</div>

</body>
</html>

