<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
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
// define variables and set to empty values
$name = $lastname = $email = $phone = $cities = $course = $interest = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = test_input($_POST["name"]);
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $cities = test_input($_POST["cities"]);
  $course = test_input($_POST["course"]);
  $interest=test_input($_POST["interest"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


  <div class="container">
       <form  method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <div class="center">
                    <h1>Registration<h1>
                    <p>Fill up the form with correct values.<p>
                   </div>
                    <div class="row">
                         <div class="col-25">
                           <label for="name">Name</label>
                          </div>
                          <div class="col-75">
                             <input class="form-control" type="text" name="name" placeholder="Name.." required>  
                          </div>
                    </div>

                    <div class="row">
                         <div class="col-25">
                            <label for="email">Email</label>
                          </div>
                          <div class="col-75">
                            <input class="form-control" type="email" name="email" placeholder="xyz@gmail.com.." required>  
                          </div>
                    </div>

                    <div class="row">
                         <div class="col-25">
                             <label for="phone">Contact</label>
                          </div>
                          <div class="col-75">
                             <input class="form-control" type="tel" id="phone" name="phone"  placeholder="+91-2453698710.." maxlength="10">
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
                          </select> 
                          </div>
                    </div>

                    
                    <div class="row">
                         <div class="col-25">
                            <label for="course">Choose your course</label>
                          </div>
                          <div class="col-75">
                            <select id="course" class="form-control" name="course">
                              <option value="B-tech(cse)">B-tech(cse)</option>
                              <option value="B-tech(civil)">B-tech(civil)</option>
                              <option value="B-tech(mechanical)">B-tech(mechanical)</option>
                              <option value="B-tech(it)">B-tech(it)</option>
                            </select>
                          </div>
                    </div>

                    <div class="row">
                         <div class="col-25">
                            <label for="interest">Interest</label>
                          </div>
                          <div class="col-75">
                            <label class="layout" for="check1">reading</label>
                            <input type="checkbox" class="check" name="interest" value="reading" id="check1" >
                            
                            <label class="layout" for="check2">writing</label>
                            <input type="checkbox" class="check"  name="interest" value="writing" id="check2" >

                            <label class="layout" for="check3">sports</label>                     
                            <input type="checkbox" class="check" name="interest" value="sports" id="check3" >
                            
                            <label class="layout" for="check3">coding</label>
                            <input type="checkbox" class="check" name="interest" value="coding" id="check3" > 

                            <label class="layout" for="check3">singing</label> 
                            <input type="checkbox" class="check" name="interest" value="singing" id="check3" >
                            
                            <label class="layout" for="check3">dancing</label>
                            <input type="checkbox" class="check" name="interest" value="dancing" id="check3" > 
                          </div>
                    </div>
                   
                    <hr class="mb-6">
                    
                      <input type="submit" name="create" value="Submit" onclick="myFunction()">
                    
                    
                    </form>
    </div>
 


    
                   
                    
                    
                        
                       
                         
                            
                            
                    
                    
                
     

    <script>
        var checks = document.querySelectorAll(".check");
            var max = 5;
            for (var i = 0; i < checks.length; i++)
              checks[i].onclick = selectiveCheck;
            function selectiveCheck (event) {
              var checkedChecks = document.querySelectorAll(".check:checked");
              if (checkedChecks.length >= max + 1)
                return false;
            }
    </script>
    

    <?php
            echo "<table>
            <tr>
            <th>Name</th>
            <th>email</th>
            <th>contact</th>
            <th>cities</th>
            <th>course</th>
            <th>interest</th>
            </tr>
            <tr>
            <td> $name </td>
            <td> $email </td>
            <td> $phone </td>
            <td>$cities </td>
            <td>$course </td>
            <td>$interest</td>
            </tr>
            </table>"
   ?>

  
</body>
</html>