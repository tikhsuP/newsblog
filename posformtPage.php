<!DOCTYPE html>
<html>
<head>
	<title>postformpage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>What,when,where | postform</title>
	<link 
</head>
<body>
	<fieldset>
<legend>POST</legend>
<form action="http://www.example.com/comments.php" method="post">
<label for="username">Req date:</label>
<input type="date" name="depart" required/>
<p>Please select genre :
 <br />
 <input type="checkbox" name="service" value="Catg1"  /> 
 <input type="checkbox" name="service" value="Catg2"  /> 
 <input type="checkbox" name="service" value="Catg3"  /> 
 <input type="checkbox" name="service" value="Catg4"  /> 
 <input type="checkbox" name="service" value="Catg5"  /> 
 <input type="checkbox" name="service" value="Catg6"  /> 
 <input type="checkbox" name="service" value="Catg7"  /> 
 <input type="checkbox" name="service" value="Catg8"  /> 
 <input type="checkbox" name="service" value="Catg9"  /> 
 
 
</p>

<p>Upload your image: </p>
<input type="file" name="image" placeholder="Upload image..." required/><br />

<p>Article</p>
 <input name="post" required></input>

 
</fieldset>
<input type="submit" value="Submit" />

</form>

</body>
</html>