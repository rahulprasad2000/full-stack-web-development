<?php
   require_once('config.php');

?>
<?php
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('config.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['cities'];
    // $branch = $_POST['branch'];
    // $year = $_POST['year'];

    $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    $result=mysqli_query($conn, $sql);
    if($result){
      $showAlert=true;
      header('location:details.php');
    }
      else{
        echo "there was an error";
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
  if($showAlert)
  {
    echo '<div class="alert alert-success" role="alert">
      Successfully inserted!
  </div>';
  }
?>
<div class="container">
       <form action="add.php" method="POST" >
                  <div class="center">
                    <h1>Registration<h1>
                    <p>Fill up the form with correct values.<p>
                   </div>
                    <div class="row">
                         <div class="col-25">
                           <label for="name">Name</label>
                          </div>
                          <div class="col-75">
                             <input class="form-control" id="username" type="text" name="username" placeholder="Name.." required>  
                          </div>
                    </div>

                    <div class="row">
                         <div class="col-25">
                            <label for="email">Email</label>
                          </div>
                          <div class="col-75">
                            <input class="form-control" id="email" type="email" name="email" placeholder="xyz@gmail.com.." required>  
                          </div>
                    </div>

                    

                    <div class="row">
                         <div class="col-25">
                             <label for="gender">Gender</label>
                          </div>
                          <div class="col-75">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label><br>
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>
                          </div>
                    </div>

                    <div class="row">
                         <div class="col-25">
                            <label for="cities">Choose your city from the list</label>
                          </div>
                          <div class="col-75">
                          <select id="cities" class="form-control" name="cities">
                            <option value:"0">City</option>
                            <option value="Dehradun" >Dehradun</option>
                            <option  value="roorkee">roorkee</option>
                            <option  value="haridwar">haridwar</option>
                            <option value="rishikesh">rishikesh</option>
                            <option value="shimla" >shimla</option>
                            <option  value="manali">manali</option>
                            <option  value="saharanpur">saharanpur</option>
                            <option value="shamli">shamli</option>
                            <option  value="moradabad">moradabad</option>
                            <option value="meerut">meerut</option>
                          </select> 
                          </div>
                    </div>

                   
                    <hr class="mb-6">
                    
                      <input type="submit" name="submit" id ="register" value="Submit" onclick="myFunction()">
                    
                    
                    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    
</body>
</html>