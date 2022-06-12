<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="admin.css">
  <title>Admin Panel</title>
</head>
<body>
<header class="navbar-bg">
        <?php include 'adminnavbar.php';  ?>
    </header>
  <div class="container-fluid py-5">

  <div class="container">
      <!-- DATA TABLE -->
      <h2 class="title-5 mb-5 text-center">Manage Your Aids</h2>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 table-hover">
                                <thead class="bg-dark">
                                    <tr>
                                        <th class="text-light">Sr#</th>
                                        <th class="text-light">Title</th>
                                        <th class="text-light">Category</th>
                                        <th class="text-light">Job Type</th>
                                        <th class="text-light">Salary</th>
                                        <th class="text-light">Location</th>
                                        <th class="text-light">Qualification</th>
                                        <th class="text-light">Experience</th>
                                        <th class="text-light">Total Seats</th>
                                        <th class="text-light">Details</th>
                                        <th class="text-light">Apply Upto</th>
                                        <th class="text-light">Web Link</th>
                                        <th class="text-light">Image</th>
                                        <th class="text-light">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'connection.php';
                                        $sql = "SELECT * FROM aiddetails";
                                        $result = mysqli_query($conn, $sql);
                                        $sno = 0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $sno = $sno + 1;
                                            $id = $row['id'];
                                            $title = $row['title'];
                                            $category = $row['aid_category'];
                                            $job_type = $row['job_type'];
                                            $salary = $row['salary'];
                                            $location = $row['location'];
                                            $qualification = $row['qualification'];
                                            $experience = $row['experience'];
                                            $total_seats = $row['total_seats'];
                                            $details = $row['details'];
                                            $apply_upto = $row['apply_upto'];
                                            $web_link = $row['web_link'];
                                            $image = $row['image_name'];
                                            echo '  <tr class="tr-shadow">
                                                        <td class="fw-bold align-middle">'. $sno . '</th>
                                                        <td><a class="text-success text-decoration-none font-weight-bold" 
                                                            href="/summrahproject/aidopen.php?aidid=' . $id . '">'.$title.'</a></td>
                                                            <td>'.$category.'</td>
                                                            <td>'.$job_type.'</td>
                                                            <td><span class="badge badge-pill bg-secondary text-light px-3 py-2">'
                                                            .$salary.'</span></td>
                                                        
                                                            <td>'.$location.'</td>
                                                            <td>'.$qualification.'</td>
                                                            <td>'.$experience.'</td>
                                                            <td>'.$total_seats.'</td>
                                                        <td class="desc">'.substr($details,0,20).'</td>
                                                        <td>'.$apply_upto.'</td>
                                                        <td>'.$web_link.'</td>
                                                        <td>'.$image.'</td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <button class="item edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                 <a href="edititem.php?aid_id='.$id.'">
                                                                 <i class="bi bi-pencil"></i></a>
                                                                </button>
                                                                <button class="item mt-2 bg-danger" data-placement="top" title="Delete"
                                                                data-toggle="tooltip">
                                                                    <a href="deleteitem.php?aid_id='.$id.'" class="text-light">
                                                                    <i class="bi bi-trash"></i></a>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="spacer"></tr>';
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                                
                        </div>
                        <!-- END DATA TABLE -->
  </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
