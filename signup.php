<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'includes/connection.php';
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $cnic = $_POST['cnic'];
  $password = $_POST['password'];
  $country = $_POST['country'];
 
  $existSql = "SELECT * FROM `users` WHERE email = '$email' OR cnic = '$cnic";
   $result = mysqli_query($conn, $existSql);
   $numExistRows = mysqli_num_rows($result);
   if($numExistRows > 0){
       $showError = "User Already Exists";
   }
   elseif ($firstname == "" || $lastname == "" || $email == "" || $password == "" || $gender =="" || $dob == "" || $cnic == "" || $country == "") {
       $showError = "Please check all fields!";
   }else{
          //  $hash = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `gender`, `dob`, `cnic`, `address`, `password`) VALUES 
          ('$firstname', '$lastname', '$email', '$gender', '$dob', '$cnic', '$country', '$password')";
           $result = mysqli_query($conn, $sql);
           if ($result){
               $showAlert = true;
           }
       header("Location: /summrahproject/login.php?signupsuccess=true");
   }
  $conn->close();
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
    <title>Document</title>
    <style>
      /* .signup-form{
		background-color: #111 !important;
	} */
    </style>
</head>
<body>
    <h2 class="fw-bold text-center mt-4">JobClues</h2>
    <div class="col-lg-5 col-md-5 col-12 mx-auto my-5 p-5 border rounded border-success signup-form">
        <form action="" method="post">
        <div>
            <h3 class="text-center">
              SignUp
            </h3>
          </div>
          <div>
          <?php
              if($showAlert){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> Your account is now created and you can login.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  }
                  if($showError){
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error!</strong> '. $showError.'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                  }
          ?>
          </div>
          <div class="mb-3">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3 d-flex">
            <div>
              <label for="gender" class="form-label">Gender</label><br>
              <select name="gender" id="gender" class="p-2 border rounded">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="others">Others</option>
              </select>
            </div>
            <div class="ms-5">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control p-2" id="dob" name="dob">
            </div>
            </div>
            <div class="mb-3">
              <label for="cnic" class="form-label">CNIC </label>
              <input type="number" class="form-control" id="cnic" name="cnic" maxlength="13">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
              <label for="country" class="form-label">Country</label>
              <input type="text" class="form-control" id="country" name="country">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <input type="reset" class="btn btn-primary" name="reset" value="Reset">
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>