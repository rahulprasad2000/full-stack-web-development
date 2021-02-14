<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
    USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Enter your Username" required><br>
    E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Enter your E-mail" required><br>
    GENDER <input type="text" name="gender" value=<?php echo "$gender" ?> placeholder="Enter your Gender" required><br>
    Select City <select name="city">
        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="roorkee" <?php if($city=="roorkee"){echo "selected";}?>>roorkee</option>
        <option value="haridwar" <?php if($city=="haridwar"){echo "selected";}?>>haridwar</option>
        <option value="rishikesh" <?php if($city=="rishikesh"){echo "selected";}?>>rishikesh</option>
        <option value="shimla" <?php if($city=="shimla"){echo "selected";}?>>shimla</option>
        <option value="manali" <?php if($city=="manali"){echo "selected";}?>>manali</option>
        <option value="saharanpur" <?php if($city=="saharanpur"){echo "selected";}?>>saharanpur</option>
        <option value="shamli" <?php if($city=="shamli"){echo "selected";}?>>shamli</option>
        <option value="moradabad" <?php if($city=="moradabad"){echo "selected";}?>>moradabad</option>
        <option value="meerut" <?php if($city=="meerut"){echo "selected";}?>>meerut</option>
    </select><br>
    <input type="submit" name="update" value="Update">
</form>
</body>
</html>