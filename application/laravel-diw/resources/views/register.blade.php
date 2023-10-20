<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h3>Sign Up Form</h3>

	<form action="/welcome" method="get">
		<label for="firstName" class="form-label">First Name:</label><br>
		<input type="text" name="firstName" class="form-control" required><br><br>
		<label for="lastName" class="form-label">Last Name:</label><br>
		<input type="text" name="lastName" required><br><br>
		<label>Gender:</label><br>
		<input type="radio" name="gender" value="male" required>Male<br>
		<input type="radio" name="gender" value="female" required>Female<br>
		<input type="radio" name="gender" value="other" required>Other<br><br>
		<label>Nationality:</label><br>
		<select name="nationality" required>
			<option value="name"></option>
			<option value="1">Indonesian</option>
			<option value="2">American</option>
			<option value="3">African</option>
			<option value="4">Malaysian</option>
			<option value="5">Other</option>
		</select><br><br>
		<label>Language Spoken:</label><br>
		<input type="checkbox" name="language">Bahasa Indonesia<br>
		<input type="checkbox" name="language">English<br>
		<input type="checkbox" name="language">Other<br><br>

		<label>Bio:</label><br>
		<textarea name="biodata" rows="10" cols="30"></textarea><br><br>
		<input type="submit" value="Sign Up">

	</form>

</body>
</html>