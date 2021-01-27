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

select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$firstname = $lastname = $email = $contact = $cities = $course = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = test_input($_POST["name"]);
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["contact"]);
  $cities = test_input($_POST["cities"]);
  $course = test_input($_POST["course"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div>
       <form  method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="container">
            <div class="row">
               <div class="col-sm-7">
                    <h1>Registration<h1>

                    <p>Fill up the form with correct values.<p>

                    <hr class="mb-6">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name" required> 


                    <!-- <label for="lastname">Last Name</label>
                    <input class="form-control" type="text" name="lastname" required> -->

                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="xyz@gmail.com" required>

                    <!-- <label for="contact">Contact</label>
                    <input class="form-control" type="text" name="contact" required> -->
                    <label for="phone">Contact</label>
                    <input class="form-control" type="tel" id="phone" name="phone"  placeholder="+91-2453698710" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="10">

                    <label for="cities">Choose your city from the list:</label>
                    <select id="cities" class="form-control" name="cities">
                         <option value:"0">City</option>
                        <option value="Dehradun" >Dehradun</option>
                        <option  value="roorkee">roorkee</option>
                        <option  value="haridwar">haridwar</option>
                        <option value="rishikesh">rishikesh</option>
                    </select>
                    
                    
                        <label for="course">Choose your course:</label>
                        <select id="course" class="form-control" name="course">
                            
                            <option value="B-tech(cse)">B-tech(cse)</option>
                            <option value="B-tech(civil)">B-tech(civil)</option>
                            <option value="B-tech(mechanical)">B-tech(mechanical)</option>
                            <option value="B-tech(it)">B-tech(it)</option>
                        </select>
                         
                            <!-- <input type="checkbox" name="interest" value="reading">
                            <label for="vehicle1">reading</label><br>
                            <input type="checkbox" name="interest" value="writing">
                            <label for="vehicle2"> writing</label><br>
                            <input type="checkbox" name="interest" value="watching movies" checked>
                            <label for="vehicle3">watching movies</label><br> -->
                            <h1>Interests</h1>
                            <input type="checkbox" class="check" name="interest" value="reading" id="check1" >
                            <label class="layout" for="check1">reading</label>
  
                            <input type="checkbox" class="check"  name="interest" value="writing" id="check2" >
                             <label class="layout" for="check2">writing</label>
                                                
                            <input type="checkbox" class="check" name="interest" value="watching movies" id="check3" >
                            <label class="layout" for="check3">sports</label> 
                            
                            <input type="checkbox" class="check" name="interest" value="coding" id="check3" >
                            <label class="layout" for="check3">coding</label> 

                            <input type="checkbox" class="check" name="interest" value="singing" id="check3" >
                            <label class="layout" for="check3">singing</label> 

                            <input type="checkbox" class="check" name="interest" value="dancing" id="check3" >
                            <label class="layout" for="check3">dancing</label> 
                    <hr class="mb-6">
                    <input type="submit" name="create" value="Submit" onclick="myFunction()">
                    
                </div>
              </div>
          </div>
       </form>
    </div>
    <script>
        // $("input:checkbox").click(function() {
        // var bol = $("input:checkbox:checked").length >= 2;     
        // $("input:checkbox").not(":checked").attr("disabled",bol);
        // });
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
            <th>course</th?
            </tr>
            <tr>
            <td> $name </td>
            <td> $email </td>
            <td> $phone </td>
            <td>$cities </td>
            <td>$course </td>
            </tr>
            </table>"
?>

  
</body>
</html>