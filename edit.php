<?php
    include('config.php');
?>

<?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM `users` WHERE `id`=$id";
    //$sql1 = "SELECT * FROM `student_details` WHERE `id`=$id";

    $result = mysqli_query($conn,$sql);
   // $result1 = mysqli_query($conn,$sql1);
    
    $row = $result->fetch_assoc();
    //$row1 = $result1->fetch_assoc();
    
    $username = $row['username'];
    $email = $row['email'];
    $gender = $row['gender'];
    $city = $row['city'];
    //$branch = $row1['branch'];
    //$years = $row1['year'];
?>

<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['male'];
        $city = $_POST['city'];
        
        //$branch = $_POST['branch'];
        //$years = $_POST['year'];
        $sql = "UPDATE `users` SET username='$username',email='$email',gender='$gender',city='$city' WHERE id='$id'";
        //$sql1 = "UPDATE `student_details` SET branch='$branch',year='$years' WHERE id='$id'";
        if(mysqli_query($conn,$sql) ){
            echo "Data updated successfully...";
        }
        else echo "Updation failed...";
        //mysqli_query($conn,$sql1);
    }
    

?>
<?php

    if($city=="Dehradun"){
        echo "selected";
    }
?>


<html>
    <head>
        <title>HTML Forms</title>
    </head>
    <body>
        <form method="post" action="edit.php?id=<?php echo "$id"?>">
           username<input type="text" name="username" value=<?php echo "$username" ?> placeholder = "Enter name" required/><br>
            Email <input type="email" name="email" value=<?php echo "$email" ?> placeholder = "Enter email" required/><br>
            gender male<input type="radio" name="male" value="male"  required />
                    female<input type="radio" name="male" value="female"  required /><br>
            Select City <select name="city" value=<?php echo "$city" ?> required>
                <option value="Delhi"> <?php if($city=="Delhi"){echo "selected";} ?>Delhi</option>
                <option value="Meerut"> <?php if($city=="Delhi"){echo "selected";} ?>Meerut</option>
                <option value="Kolkata"> <?php if($city=="Delhi"){echo "selected";} ?>Kolkata</option>
                <option value="Mumbai"> <?php if($city=="Delhi"){echo "selected";} ?>Mumbai</option>
                <option value="Dehradun"> <?php if($city=="Delhi"){echo "selected";} ?>Dehradun</option>
                <option value="Ambala"> <?php if($city=="Delhi"){echo "selected";} ?>Ambala</option>
                <option value="Chennai"> <?php if($city=="Delhi"){echo "selected";} ?>Chennai</option>
                <option value="Surat"> <?php if($city=="Delhi"){echo "selected";} ?>Surat</option>
                <option value="Jaipur"> <?php if($city=="Delhi"){echo "selected";} ?>Jaipur</option>
                <option value="Manipur"> <?php if($city=="Delhi"){echo "selected";} ?>Manipur</option>
            </select><br>
            branch <input type="text" name="branch" placeholder = "Enter branch" required/><br>
            year <input type="number" name="year" placeholder= "Enter year of admission" required/><br>
            <br><input type="submit" name="submit" value="Update">
        
             </form>
        
    </body>

    

</html>