<html>
	<head>
		<title>Form-Table</title>
		<style>
			table{
				border: 2px solid black;
				border-collapse: collapse; 
			}
			th,tr,td{
				border: 1px dotted black;
				padding: 10px;
			}
		</style>
		<script>
			function formValidate(){
				var y = document.forms["FORM"]["contact"].value;
				if (y.length!=10) {
					alert("length must be 10");
					return false;
					}
				var le =document.getElementsByTagName("input");
				var c=0;
				for(var i=0;i<le.length;++i){
					if(le[i].type=="checkbox" && le[i].checked==true)
					{
						c++;
					}
				}
				if(c<3 || c>5)
					{alert("At least 3 interests and at max 5 interests");return false;}
					return true;
			}
		</script>
	</head>
	<body>
		<form method="Post" action="ft.php" onsubmit=" return formValidate()" name="FORM">
			Name<input type="text" name="name" placeholder = "Enter name" required/>
			Email<input type="email" name="email" placeholder = "Enter email" required/>
			Contact<input type="contact" name="contact" required />
			City<select name="city">
                <option value="Delhi">Delhi</option>
                <option value="Meerut">Meerut</option>
                <option value="Kolkata">Kolkata</option>
					</select>
			Course<input type="text" name="Course" placeholder="Enter the course" required/>
			Interests:
				Programming <input type="checkbox" name="interest[]" value="Programming"/>
				Sports <input type="checkbox" name="interest[]" value="Sports"/>
				Reading <input type="checkbox" name="interest[]" value="Reading"/>
				Games <input type="checkbox" name="interest[]" value="Games"/>
				Singing <input type="checkbox" name="interest[]" value="singing"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>

<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$course = $_POST['Course'];
	$interest = $_POST['interest'];
	echo " 
	<table>
	<tr>
		<th>Name</th>
		<th>E-Mail</th>
		<th>Contact</th>
		<th>City</th>
		<th>Course</th>
		<th colspan='3'>Intrests</th>
	</tr>
	<tr>
		<td>$name</td>
		<td>$email</td>
		<td>$contact</td>
		<td>$city</td>
		<td>$course</td>
		<td>$interest[0]</td>
		<td>$interest[1]</td>
		<td>$interest[2]</td>
	</tr>
	</table>
		";
}
?>