<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Register Here</h1>
	<hr/>

	<form action="handle-register.php" method="post">

	<p>Enter Name : <input type="text" id="name" name="name" />
	</p>

	<p>Enter Email : <input type="email" id="email" name="email" />
	</p>

	<p>Enter Password : <input type="password" id="password" name="password" />
	</p>

	<p>Enter Mobile <input type="number" id="mobile" name="mobile" />
	</p>

	<p>Country Select: 
		<select name="country" id="country">

				<option value="">select</option>
				<option value="USA">USA</option>
				<option value="India">India</option>
				<option value="Africa">Africa</option>
				<option value="Australia">Australia</option>
		</select>
	</p>

	<p>Choose Gender: 
		<input type="radio" id="gender" name="gender"  value="male" />Male
		<input type="radio" id="gender" name="gender" value="female" />Female
		<input type="radio" id="gender" name="gender" value="other"/>Other
	</p>


		<p><input type="submit" id="submit" name="submit" value="Register" />

</form>

</body>
</html>