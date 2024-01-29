<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image\owlpadhkoo.png" type="image/x-icon">
    </link>
    <title>Book Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </link>
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,100&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #231667 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        /* text-fill-color: transparent; */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
    }


    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    .txtsiz {
        font-size: 50px;
    }
</style>

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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    <!-- Book Gallery -->

    <section class="gallerybg">
        <div class="py-5">
            <h3 class="text-center">Books Gallery</h3>
            <hr class="abouthr" />
        </div>

        <!-- Search bar -->


        <div class="container py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="animate-charcter txtsiz">NOTE :</h3>
                        <p class="animate-charcter">*If you are looking for specific category of books such as subject books for competitive exams, motivational, philosophical,  fiction or any other kind , please write to us and we can try to send you at your door steps</p>
                    </div>
                </div>
            </div>
            <form action="" required method="GET">
                <div class="input-group mb-3" ">
                    <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>" class="form-control rounded-2" placeholder="Search Books" autocomplete="off"><button type="submit" class="btn btn-outline send-btn my-2 my-sm-0"><i class="fa fa-search pr-3" aria-hidden="true"></i> Search</button></input>

                </div>
            </form>
            <div class="row pt-3">

                <?php
                require 'donate.php';

                if (isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM book_db WHERE CONCAT(book_name,book_author,book_language,book_category,book_city) LIKE'%$filtervalues%' ";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $items) {
                ?>

                            <div class="col-lg-3 col-md-3 col-6 mb-3 mt-3">

                                <div class="card mx-auto">
                                    <img src="uploadimg/<?php echo $items['book_image']; ?>" width="200px" height="300px" class="card-img-top my-1 px-2" alt="services">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $items['book_name'] ?>
                                        </h5>
                                        <h6 class="card-title text-primary"><?php echo $items['book_author'] ?></h6>
                                        <p class="card-text">
                                            <?php echo $items['book_description'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    } else {
                        echo 'No Record Found';
                    }
                }
                ?>

            </div>
        </div>



        <!-- Books Images  -->

        <div class="container-fluid py-3">
            <div class="row pt-3">
                <div class="col-lg-12 col-md-12 col-12 mb-3">
                    <div class="my-3">
                        <form action="exportexcel.php" method="post">
                            <button type="exportexcel" value="exportexcel" class="btn btn-primary btn-lg">Available
                                Books in Excel</button>
                        </form>
                    </div>
                </div>
                <?php
                require 'donate.php';

                $query = "SELECT * FROM book_db";
                $query_run = mysqli_query($con, $query);

                $check_book = mysqli_num_rows($query_run) > 0;


                if ($check_book) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>
                        <div class="col-lg-3 col-md-6 col-12 mb-3 mt-3">

                            <div class="card" style="width:200px; height:300px;">

                                <img class="card-img" src="uploadimg/<?php echo $row['book_image']; ?>" alt="Card image" style="width:200px; height:300px;">
                            </div>

                        </div>
                <?php

                    }
                } else {
                    echo 'No Record Found';
                }
                ?>

            </div>
        </div>
    </section>


    <!-- Footer -->

    <?php
    require("footer.php");

    ?>
    <!-- footer ends -->





    <!-- js script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(function() {
            $("#checklen").keyup(function(event) {
                $("#text-count").text($(this).val().length);
                var x = $(this).val().length;

                if (x > 150) {
                    $(this).css({
                        "border-color": "red"
                    });
                } else {
                    $(this).css({
                        "border-color": "#ccc"
                    });
                }

            });
        });
    </script>
</body>

</html>