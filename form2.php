<?php
    include('config.php');
?>

<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['male'];
        $city = $_POST['city'];
        $branch = $_POST['branch'];
        $years = $_POST['year'];

        $sql = "INSERT INTO `users` (username,email,gender,city) VALUES ('$user','$email','$gender','$city')";
        $sql1 = "INSERT INTO `student_details` (username,branch,year) VALUES ('$user','$branch','$years')";
        mysqli_query($conn,$sql);
        mysqli_query($conn,$sql1);
    }
    else{
        echo "Please click submit button to submit data";
    }

?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
    <body>
        <form method="post" action="form2.php">
           username<input type="text" name="username" placeholder = "Enter name" required/><br>
            Email <input type="email" name="email" placeholder = "Enter email" required/><br>
            gender male<input type="radio" name="male" value="male"  required />
                    female<input type="radio" name="male" value="female"  required /><br>
            Select City <select name="city" required>
                <option value="Delhi">Delhi</option>
                <option value="Meerut">Meerut</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Dehradun">Dehradun</option>
                <option value="Ambala">Ambala</option>
                <option value="Chennai">Chennai</option>
                <option value="Surat">Surat</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Manipur">Manipur</option>
            </select><br>
            branch <input type="text" name="branch" placeholder = "Enter branch" required/><br>
            year <input type="number" name="year" placeholder= "Enter year of admission" required/><br>
            <br><input type="submit" name="submit" value="submit">
        
             </form>
        
    </body>

    

</html>