<html>
	<head>
		<title>FormDataIntoDatabase</title>
	</head>
	<body>
		<table>
			<form method="POST" action="Form_Database.php">
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" required?/></td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td><input type="email" name="email" required?/></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="radio" name="gender" required?/>Male</td>
					<td><input type="radio" name="gender" required?/>Female</td>
				</tr>
				<tr>
					<td>City: </td>
					<td>
					<select name="city">
						<option value="" disabled selected>Choose option</option>
						<option value="Agra">Agra</option>
						<option value="Bareily">Bareily</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Dehradun">Dehradun</option>
						<option value="Delhi">Delhi</option>
						<option value="Gurgaon">Gurgaon</option>
						<option value="Ghaziabaad">Ghaziabaad</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Surat">Surat</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Branch: </td>
					<td><input type="text" name="branch" required?/></td>
				</tr>
				<tr>
					<td>Year: </td>
					<td><input type="text" name="year" required?/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" required?/></td>
				</tr>
			</form>
		</table>
	</body>
</htm>

<?php
if(isset($_POST['submit'])){
	$user= $_POST['username'];
	$email= $_POST['email'];
	$gender= $_POST['gender'];
	$city= $_POST['city'];
	$branch= $_POST['branch'];
	$year= $_POST['year'];
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'formass');
$q= "Insert Into USER(username,email,gender,city)values('$user','$email','$gender','$city')";
mysqli_query($conn,$q);
$q1="Select * from User";
$l=mysqli_query($conn,$q1);
$n = mysqli_num_rows($l);
echo "
	<table>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Gender</th>
			<th>City</th>
		</tr>
	</table>";
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($l);
	echo "
	<table>
		<tr>
			<td>$row[id]</td>
			<td>$row[username]</td>
			<td>$row[email]</td>
			<td>$row[gender]</td>
			<td>$row[city]</td>
		<tr>
	</table>
";
}
mysqli_close($conn);
}
?>