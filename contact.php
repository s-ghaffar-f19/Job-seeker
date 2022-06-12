<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="css/breakpoints.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>Contact us</title>
    <style>
       
    </style>
</head>

<body>
<header>
        <?php
            include 'includes/navbar.php';
        ?>
</header>
    <div class="m-5 mb-0">
        <h1 style="margin-left:15vw">Contact us</h1>
        <hr />
    </div>

    <div class="container-fluid d-flex justify-content-center row">
        <!----------- Feedback Form  ---------->
        <div class="col-sm-7 m-5">
            <form>
                <div class="col col-7 mb-3 m-auto">
                    <label  for="name">Name:</label>
                    <input type="text" class="form-control rounded" name="name" id="name" />
                </div>
                <div class="col col-7 mb-3 m-auto">
                    <label  for="email">Email:</label>
                    <input type="email" class="form-control rounded" name="email" id="email" />
                </div>
                <div class="col col-7 mb-3 m-auto">
                    <label  for="address">Address:</label>
                    <input type="text" class="form-control rounded" name="address" id="address" />
                </div>
                <div class="col col-7 mb-3 m-auto">
                    <label  for="phnNum">Phone #:</label>
                    <input type="number" class="form-control rounded" id="phnNum" name="phnNum" />
                </div>
                <div class="col col-7 mb-5 m-auto">
                    <label  for="message">Message:</label>
                    <textarea name="message" class="form-control rounded" id="message" cols="25"
                        rows="10"></textarea>
                </div>
                <div class="mb-2 text-center">
                    <button type="button" class="col-3 btn btn-warning font-weight-bold pl-5 pr-5 pt-2 pb-2">
                        Submit
                    </button>
                    <input type="submit" class="col-3 btn btn-warning font-weight-bold pl-5 pr-5 pt-2 pb-2" value="Clear">
                </div>
            </form>
        </div>

        <!--------- Contact Info --------->

        <div class="col-sm-3 vl">
            <div class="mt-5">
                <div>
                <h6 class="text-primary"> CONTACT INFORMATION</h6>
                <p class="mt-2 txt-justify">We love hearing from our customers. You can email us with any question.
                    We will respond back to you email as quickly as possible within a span of 24 - 48 Working
                    Hours</p>
                </div>

                <h6 class="">EMail us:</h6>
                <p>
                    <i>
                        <small>
                            <a href="mailto:summrahghaffar@gmail.com" class="text-decoration-none">
                                summrahghaffar@gmail.com</a><br />
                            <a href="mailto:sanamhanif999@gmail.com" class="text-decoration-none ">
                            sanamhanif999@gmail.com@gmail.com</a>
                            <a href="mailto:chzeeshan3@gmail.com" class="text-decoration-none ">
                            chzeeshan3@gmail.com@gmail.com</a>
                        </small>
                    </i>
                </p>

                <h6>UAN:</h6>
                <p>
                    <small>
                        <a href="callto:090078601" class="text-decoration-none text-dark">+92 9 00 78601</a><br />
                        <a href="callto:090078601" class="text-decoration-none text-dark">+92 9 00 78601</a><br />
                        <a href="callto:090076967 class="text-decoration-none text-dark">+92 9 00 79601</a>
                    </small>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
</body>

</html>