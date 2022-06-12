<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobClues</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <header>
      <?php
        include 'includes/navbar.php';
      ?>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src='img/wp3592845-job-wallpapers.jpg'
                alt='img' class="d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src='img/R.jpg'
                alt='img' class="d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src='img/slide3.jpg'
                alt='img' class="d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src='img/job.jpg'
                alt='img' class="d-block w-100 carousel-img" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Job Cards -->
      <div class="container my-5 py-5">
        <div class="d-flex align-items-center justify-content-between mb-5">
        <div>
          <h1>Job Details</h1>
        </div>
        <div class="text-end">
          <form action="" method="post">
            <button name="all" class="btn btn-primary px-4 mx-1">All</button>
            <button name="government" class="btn btn-success mx-1">Government</button>
            <button name="private" class="btn btn-danger mx-1">Private</button>
          </form>
      </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php 
        include 'includes/connection.php';
        function filterAids($filter_cat){
          include 'includes/connection.php';
         $sql = "$filter_cat"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $title = $row['title'];
          $cat = $row['aid_category'];
          $type = $row['job_type'];
          $location = $row['location'];
          $details = $row['details'];
          $qualification = $row['qualification'];
          $salary = $row['salary'];
          $web_link = $row['web_link'];
          $post_date = $row['timestamp'];
          
          echo '<div class="col">
                <div class="card p-3">
                  <div class="card-body">
                    <h4 class="card-title"><a class="text-success text-decoration-none fw-bold" href="aidopen.php?aidid=' 
                    . $id . '">' . $title . '</a></h4>
                    <div class="mx-1 d-flex card-flex">
                    <h6 class="text-primary">' . $type . '</h6>
                    <h6 class="badge bg-secondary position-absolute card-salary">' . $salary . 'PKR/-</h6>
                    </div>
                    <h6 class="mx-1">' . $location . '</h6>
                    <h6 class="mx-1">'.$qualification.'</h6>
                    <p class="card-text card-details mx-1">'. substr("$details",0,150) .'</p>
                    <button type="button" class="btn btn-dark mx-1"><a target="_blank" class="text-light text-decoration-none" 
                      href="'. $web_link .'">Go to Site</a></button>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">'. $post_date .'</small>
                  </div>
                </div>
                </div>';
        }

         }
         if(isset($_POST['all'])){
          echo filterAids("SELECT * FROM `aiddetails`");
        }
         else if(isset($_POST['government'])){
          echo filterAids("SELECT * FROM `aiddetails` WHERE aid_category = 'government'");
        }
        else if(isset($_POST['private'])){
          echo filterAids("SELECT * FROM `aiddetails` WHERE aid_category = 'private'");
        } else{
        filterAids("SELECT * FROM `aiddetails`");
        }
        ?>
        
        </div>
      </div>




    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>