<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image\owlpadhkoo.png" type="image/x-icon">
    </link>
    <title>Book Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,100&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="image\Padhaakoowl.png" alt="Logo" width="120" height="80" class="d-inline-block align-text-top">
            </div>
            <div class="navbar-brand">
                <a href="https://padhaakoo.com/">
                    <span class="text-center logo d-inline-block align-text-top text-warning" sty>Padhaakoo.com</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="donateform.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="bookgalerry.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ourbook.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="booktable.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Excell Table -->


    <section class="availablebg">
        <div class="py-5">
            <h3 class="text-center">Available Book</h3>
            <hr class="abouthr" />
        </div>


        <div class="container-fluid py-3">
            <div class="row pt-3">
                <div class="col-lg-12 col-md-12 col-12 mb-3">
                    <div class="my-3">
                        <form action="exportexcel.php" method="post">
                            <button type="exportexcel" value="exportexcel" class="btn btn-primary btn-lg">Available Books in Excel</button>
                        </form>
                    </div>

                    <!-- Data Table -->
                    <div class="table-responsive">

                        <?php
                        $con = mysqli_connect('localhost', 'u860718961_books', '@cceleroC12');

                        mysqli_select_db($con, 'u860718961_bookdocuments');

                        $query = "SELECT * FROM book_db";
                        $query_run = mysqli_query($con, $query);

                        ?>



                        <table class="table table-dark table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-warning">Book Name</th>
                                    <th class="text-warning">Book Author</th>
                                    <th class="text-warning">Book Language</th>
                                    <th class="text-warning">Book Category</th>
                                    <th class="text-warning">Book City</th>
                                    <th class="text-warning">Book Image</th>
                                    <th class="text-warning text-center">Book Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>

                                <tr>
                                    <td><?php echo $row["book_name"]; ?></td>
                                    <td><?php echo $row["book_author"]; ?></td>
                                    <td><?php echo $row["book_language"]; ?></td>
                                    <td><?php echo $row["book_category"]; ?></td>
                                    <td><?php echo $row["book_city"]; ?></td>
                                    <td>
                                        <img src="<?php echo 'uploadimg/' . $row["book_image"]; ?>" width="100px"
                                            height="100px" alt="book_image" />
                                    </td>
                                    <td class="text-center"><?php echo $row["book_description"]; ?></td>
                                </tr>

                                <?php
                                    }
                                } else {
                                ?>
                                <tr>
                                    <td>No Record</td>
                                </tr>
                                <?php

                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



 <!-- Footer -->
    
    <?php
require("footer.php");

?>
<!-- footer ends -->
</body>

</html>



