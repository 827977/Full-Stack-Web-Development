<?php
    include('config.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);

   // $sql1 = "SELECT * FROM `student_details`";
    //$result1 = mysqli_query($conn,$sql1);
    if($result -> num_rows > 0 ){
?>
    <table border = 1px>
        <thead>
        
        <tr>
            <th> username</th >
            <th>email</th>
            <th>gender</th>
            <th>city</th>
            
            
            <th>Update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
       // while($row=$result -> fetch_array()){
        while($row=$result -> fetch_assoc()){?>
        <tr>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['city'] ?></td>
           
            
            <td><a href="edit.php?id=<?php echo $row['id']?>">
            <input type="button" value="Edit"></a></td>
            <td><a href="delete.php?id=<?php echo $row['id']?>">
			<input type="button" value="Delete"></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
 <?php   }
?>
<html>
    <head>
        <title>User Details</title>
    </head>
    <body>
        
    </body>

</html>