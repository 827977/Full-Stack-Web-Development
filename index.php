<html>
    <head>
        <title> Information </title>
        <style>
            table{
                border: 1px solid black;
                border-collapse: collapse;
            }
            th,td{
                border: 1px dotted red;
                padding:15px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="form.php">
            Name <input type="text" name="name" placeholder = "Enter name" required/><br>
            Email <input type="email" name="email" placeholder = "Enter email" required/><br>
            Contact Number <input type="contact" name="contact" required /><br>
            Select City <select name="city">
                <option value="Delhi">Delhi</option>
                <option value="Meerut">Meerut</option>
                <option value="Kolkata">Kolkata</option>
            </select><br>
            Course <input type="text" name="Course" placeholder="Enter the course" required/><br>
            Interests: <br>
            Programming <input type="checkbox" name="int1" value="Programming"/>
            Sports <input type="checkbox" name="int2" value="Sports"/>
            Reading <input type="checkbox" name="int3" value="Reading"/>
            Games <input type="checkbox" name="int4" value="Games"/>
            <br><input type="submit" name="formSubmit" value="Click to Submit">
        </form>
        
    </body>
<?php
    if($_POST['formSubmit']== "Click to Submit")
    {
        if(empty($_POST['int1'])||empty($_POST['int2'])||empty($_POST['int3'])||empty($_POST['int4']))
            echo "--";
        $varname=$_POST['name'];
        $varemail=$_POST['email'];
        $varcontact_no=$_POST['contact'];
        $varcity=$_POST['city'];
        $varcourse=$_POST['Course'];
        $varint1=$_POST['int1'];
        $varint2=$_POST['int2'];
        $varint3=$_POST['int3'];
        $varint4=$_POST['int4'];
        
        $errorMessage = "";
    }
?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>City</th>
        <th>Course</th>
        <th  colspan="4">Interest</th>
    </tr>
    <tr>
        <td><?php echo "$varname"; ?></td>
        <td><?php echo "$varemail"; ?></td>
        <td><?php echo "$varcontact_no"; ?></td>
        <td><?php echo "$varcity"; ?></td>
        <td><?php echo "$varcourse"; ?></td>
       <?php if(empty($_POST['int1'])||empty($_POST['int2'])||empty($_POST['int3'])||empty($_POST['int4']))
            echo "--"; ?>
        <td><?php echo "$varint1" ; ?></td>
        <td><?php echo "$varint2"; ?></td>
        <td><?php echo "$varint3"; ?></td>
        <td><?php echo "$varint4"; ?></td>
    </tr>
</table>
</html>
