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
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
input[type=text],input[type=tel],input[type=email]{
  width: 75%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  /* resize: vertical; */
}

.form-control{
  width: 75%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

} 
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #7952b3;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  width:100%;
}

/* input[type=submit]:hover {
  background-color: #ffe484;
} */


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin:auto;
  width:70%;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75{
  float: left;
  width: 75%;
  margin-top: 6px;
  border-radius: 4px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.center {
  text-align: center;
  border: 3px solid orange;
}

</style>
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
       <form  method="POST" action="add.php">
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

                    <!-- <div class="row">
                         <div class="col-25">
                            <label for="branch">branch</label>
                          </div>
                          <div class="col-75">
                          <select id="branch" class="form-control" name="branch">
                            <option value:"0">Branch</option>
                            <option value="cse" >B-tech(cse)</option>
                            <option  value="mechanical">B-tech(mech)</option>
                            <option  value="civil">B-tech(civil)</option>
                            <option value="it">B-tech(it)</option>
                            <option value="electronics" >B-tech(electronics)</option>
                            <option  value="elecrical">B-tech(electrical)</option>
                          </select>   
                          </div>
                    </div>

                    <div class="row">
                         <div class="col-25">
                            <label for="year">Year</label>
                          </div>
                          <div class="col-75">
                          <select id="year" class="form-control" name="year">
                            <option value:"0">Year</option>
                            <option value="2010" >2010</option>
                            <option  value="2012">2012</option>
                            <option  value="2014">2014</option>
                            <option value="2016">2016</option>
                          </select>   
                          </div>
                    </div> -->

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
                    
                      <input type="submit" name="submit" id ="register" value="Submit">
                    
                    
                    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
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
                      //  echo "<th>branch</th>";
                      //  echo "<th>year</th>";
                   echo "</tr>";
               while($row = mysqli_fetch_array($result)){
                   echo "<tr>";
                      //  echo "<td>" . $row['id'] . "</td>";
                       echo "<td>" . $row['username'] . "</td>";
                       echo "<td>" . $row['email'] . "</td>";
                       echo "<td>" . $row['gender'] . "</td>";
                       echo "<td>" . $row['city'] . "</td>";
                      //  echo "<td>" . $row['branch'] . "</td>";
                      //  echo "<td>" . $row['year'] . "</td>";
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
</body>
</html>