<?php
 $login = false;
 $showError = false;
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'includes/connection.php';
  $email = $_POST['email'];
  $password = $_POST['password'];
   $sql = "SELECT * FROM users WHERE email = '$email'";

  $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $myquery = "SELECT $id FROM users WHERE password = '$password'";
            $myres = mysqli_query($conn, $myquery);
            $num2 = mysqli_num_rows($myres);
          if ($num2 > 0){ 
              $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['email'] = $email;
              $_SESSION['id'] = $id;
              $_SESSION['name'] = $row['firstname'] . " " . $row['lastname'];
              header("location: /summrahproject/index.php");
          } 
          else{
              $showError = "Please enter correct password";
          }
      }
    } 
    else{
        $showError = "Please enter correct email";
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
    <title>Document</title>
</head>
<body>
    <h2 class="fw-bold text-center mt-4">JobClues</h2>
    <div class="col-lg-5 col-md-5 col-12 mx-auto mt-5 p-5 border rounded border-success">
        <form action="" method="post">
          <div>
            <h3 class="text-center">
              LOGIN
            </h3>
          </div>
          <?php
            if($login){
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> You are logged in
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div> ';
              }
              if($showError){
              echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error!</strong> '. $showError.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div> ';
              }
          ?>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="pasword" class="form-label">Password</label>
              <input type="password" class="form-control" id="pasword" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>