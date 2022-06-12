<?php
include 'connection.php';
$alert = false;
$error = false;
$method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            //Insert into products
            $title = $_POST['title']; 
            $category = $_POST['category']; 
            $job_type = $_POST['job_type']; 
            $salary = $_POST['salary']; 
            $location = $_POST['location']; 
            $qualification = $_POST['qualification']; 
            $experience = $_POST['experience']; 
            $total_seats = $_POST['total_seats']; 
            $details = $_POST['details']; 
            $details = str_replace("<", "&lt;", $details);
            $details = str_replace(">", "&gt;", $details); 
            $apply_upto = $_POST['apply_upto']; 
            $web_link = $_POST['web_link']; 
            $image = $_POST['image'];
            
            $sql= "INSERT INTO `aiddetails` (`aid_category`, `title`, `job_type`, `salary`, `Location`, `qualification`, `experience`, `total_seats`, `details`, `apply_upto`, `web_link`, `image_name`) VALUES ('$category', '$title', '$job_type', '$salary', '$location', '$qualification', '$experience', '$total_seats', '$details', '$apply_upto', '$web_link', '$image')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $alert = true;
                } else {
                    $error = true;
                }
            
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
  <title>Admin Panel</title>
</head>
<body>
<header class="navbar-bg">
        <?php include 'adminnavbar.php';  ?>
    </header>
  <div class="container-fluid py-5">
    <!-- alert message -->
    <?php
      if ($alert) {
          echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Product Added Successfully!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      } if($error) {
          echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Uploading Product Failed!</strong>Please check all fields!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      }                        
    ?>
    <!-- end alert message -->
    <div class="container col-lg-6 col-md-6 col-12 px-5">
      <h2 class="text-center mb-5">Add New Product</h2>
    <form method="post">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="d-flex">
        <div class="mb-3 col-lg-6 col-md-6 col-12">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="mb-3 col-lg-6 col-md-6 col-12">
          <label for="job_type" class="form-label">Job Type</label>
          <input type="text" class="form-control" id="job_type" name="job_type" required>
        </div>
      </div>
      <div class="d-flex">
        <div class="mb-3 col-lg-6 col-md-6 col-12">
          <label for="salary" class="form-label">Salary</label>
          <input type="text" class="form-control" id="salary" name="salary" required>
        </div>
        <div class="mb-3 col-lg-6 col-md-6 col-12">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" id="location" name="location" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="qualification" class="form-label">Qualification</label>
        <input type="text" class="form-control" id="qualification" name="qualification" required>
      </div>
      <div class="d-flex">
        <div class="mb-3 col-lg-6 col-md-6 col-12">
          <label for="experience" class="form-label">Experience</label>
          <input type="text" class="form-control" id="experience" name="experience" required>
        </div>
        <div class="mb-3 col-lg-6 col-md-6 col-12">
          <label for="total_seats" class="form-label">Total Seats</label>
          <input type="text" class="form-control" id="total_seats" name="total_seats" required>
        </div>
      </diV>
      <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <input type="text" class="form-control" id="details" name="details" required>
      </div>
      <div class="mb-3">
        <label for="apply_upto" class="form-label">Apply Upto</label>
        <input type="date" class="form-control" id="apply_upto" name="apply_upto" required>
      </div>
      <div class="mb-3">
        <label for="web_link" class="form-label">Web Link</label>
        <input type="text" class="form-control" id="web_link" name="web_link" required>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
