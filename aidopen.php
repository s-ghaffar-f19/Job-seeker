<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>JobClues</title>
</head>
<body>
    <header>
      <?php
        include 'includes/navbar.php';
      ?>
    </header>
    <section>
        <div class="container my-5 col-lg-9 position-relative">
            <?php
            include 'includes/connection.php';
                // if (GET['aidid']) {
                    $id = $_GET['aidid'];
                    $sql = "SELECT * FROM `aiddetails` WHERE id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $title = $row['title'];
                    $cat = $row['aid_category'];
                    $type = $row['job_type'];
                    $location = $row['location'];
                    $details = $row['details'];
                    $qualification = $row['qualification'];
                    $experience = $row['experience'];
                    $total_seats = $row['total_seats'];
                    $apply_upto = $row['apply_upto'];
                    $salary = $row['salary'];
                    $web_link = $row['web_link'];
                    $image = $row['image_name'];
                    $post_date = $row['timestamp'];
                    echo'<h3 class="card-title text-success">'.$title.'</h3>
                    
                    <div class="mx-1 d-flex card-flex">
                    <div>
                    <h6 class="text-primary">Job Type: ' . $type . '</h6>
                    <h6 class="badge bg-secondary card-salary-open">Salary: ' . $salary . 'PKR/-</h6>
                    
                    <h6 class="mx-1">Location: ' . $location . '</h6>
                    <h6 class="mx-1">Total Seats: '.$total_seats.'</h6>
                    <h6 class="mx-1">Qualifiction: '.$qualification.'</h6>
                    <h6 class="mx-1">Experince: '.$experience.'</h6>
                    <p class="card-text card-details mx-1">'. $details .'</p>
                    <button type="button" class="btn btn-dark mx-1"><a target="_blank" class="text-light text-decoration-none" 
                      href="'. $web_link .'">Go to Site</a></button>
                      </div>
                      <div class="px-4">
                        <img src="img/'.$image.'" width="450px" alt="'.$title.'" />
                      </div>
                      </div>';
                // }

            ?>
        </div>
    </section>

    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>