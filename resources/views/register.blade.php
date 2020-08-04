<!DOCTYPE html>
<html>
	<head>
		<title> Sekolah Koding </title>
		<meta charset="UTF-8">
	</head>

	<body>

		<h1> Buat Account Baru! <br> </h1>
		<h2> Sign Up Form <br> </h2>

		<form method="POST" action="/welcome">
            @csrf
			<label for="first"> First Name: </label>
			<br> <br>
			<input type="text" name="firstname" id="first">
			<br> <br>
			<label for="last"> Last Name: </label>
			<br> <br>
			<input type="text" name = "lastname" id="last">
			<br> <br>
			<label> Gender: </label> <br>
			<input type="radio" name="gender" value="M" checked>Male <br>
			<input type="radio" name="gender" value="F">Female <br>
			<input type="radio" name="gender" value="O">Other <br>
			<br> 
			<label> Nationality: </label> 
			<br> <br>
			<select>
				<option name="national" value="1">Indonesian</option>
				<option name="national" value="2">Singaporean</option>
				<option name="national" value="3">Malaysian</option>
				<option name="national" value="4">Arabian</option>
			</select>
			<br> <br>
			<label> Language Spoken: </label> 
			<br> <br>
			<input type="checkbox" name="language" value="1">Bahasa Indonesia <br>
			<input type="checkbox" name="language" value="2">English <br>
			<input type="checkbox" name="language" value="0">Other <br>
			<br> <br>
			<label> Bio: </label> 
			<br> <br>
			<textarea name="bio" cols="50" rows="5"> </textarea>
			<br> 
			<input type="submit" value="Sign Up" </a> >
		</form>

	</body>
</html>

