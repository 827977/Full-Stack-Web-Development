<html>
    <head>
        <title>Form Data on Table</title>
    </head>
    <body>
        <form method="post" action="index.php">
            Name<input type="text" name="name" placeholder="enter your name"/><br>
            E-mail<input type="email" name="mail" placeholder="enter your email"/><br>
            Contact No.<input type="contact" name="contact" /><br>
            City<Select name="city">
                <option value="1"> Dehradun</option>
                <option value="2"> Delhi</option>
                <option value="3"> Chandigarh</option>
                <option value="4"> Mumbai</option>
                <option value="5"> Kolkata</option>
                <option value="6"> Other</option>
                </Select><br>
            Course<input type="text" name="course"/><br>
            Intrest<input type="radio"  name="I1"/>Sport
		    <input type="radio"  name="I2"/>Program
            <input type="radio" name="I3"/>Reading
			<input type="radio" name="I4"/>Dance
            <input type="radio" name="I5"/>Singing<br>
            <input type="button" value="submit"/>
        </form>

        <?php 
            $nm= $_POST['name'];
            $ml= $_POST['mail'];
            $ct= $_POST['contact'];
            $cty= $_POST['city'];
            $crse= $_POST['course'];
           

            echo "$nm $ml";
        ?>
    </body>
</html>