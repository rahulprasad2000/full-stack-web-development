<?php
  include('config.php');
?>
<?php
 $sql = "SELECT * FROM users";
 if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){
         echo "<table>";
             echo "<tr>";
                //  echo "<th>id</th>";
                 echo "<th>username</th>";
                 echo "<th>email</th>";
                 echo "<th>gender</th>";
                 echo "<th>city</th>";
                 echo "<th>Edit</th>";
                  echo "<th>Delete</th>";
             echo "</tr>";
         while($row = mysqli_fetch_array($result)){
             echo "<tr>";
                //  echo "<td>" . $row['id'] . "</td>";
                 echo "<td>" . $row['username'] . "</td>";
                 echo "<td>" . $row['email'] . "</td>";
                 echo "<td>" . $row['gender'] . "</td>";
                 echo "<td>" . $row['city'] . "</td>";
                 echo"<td><a href=\"edit.php?id=". $row['id']."\"><button class='btn' >Edit</button></a></td>";
                 echo "<td><a href=\"delete.php?id=". $row['id']."\"><button class='btn' >Delete</button></a></td>";
             echo "</tr>";
         }
         echo "</table>";
         // Free result set
         mysqli_free_result($result);
     } else{
         echo "No records matching your query were found.";
     }
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
</body>
</html>