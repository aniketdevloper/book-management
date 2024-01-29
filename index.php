<?php
session_start();

?>
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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-69TC4G7VHD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-69TC4G7VHD');
    </script>
    <style>
        .responsive {
            width: 100%;
            height: auto;
        }

        .abtimg {
            border-radius: 50%;
        }
    </style>
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
                        <a class="nav-link active" href="donateform.php">Donate Books</a>
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
                    <li class="nav-item">
                        <a class="nav-link active" href="trivia.php">Trivia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 
    Cousrasal slide
 -->
    <section class="gallerybg">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image\pexels-markus-spiske-105857.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Old books, you know well, are books of the world's youth, </p>
                        <p> and new books are the fruits of its age.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image\pexels-photo-694740.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>“It&#x27;s easier to take than to give. It&#x27;s nobler to give than to take. The thrill of
                            taking lasts a day. The thrill of giving lasts a lifetime.</p>
                        <p>Joan Marques</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image\pexels-photo-3827820.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>“Change will not come if we wait for some other person or some other time. We are the ones
                            we&#x27;ve been waiting for. We are the change that we seek.</p>
                        <p>President Barack Obama</p>
                    </div>
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

    </section>

   

    <!-- aboutuspage -->

    <section class="abouttitle">
        <div class="py-5">
            <h3 class="text-center">About us</h3>
            <hr class="abouthr" />
        </div>
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid aboutimg abtimg" src="image\about1.jpg" alt="about" />
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="display-6 text-center">MISSION</h3>
                    <hr class="abouthr" />
                    <p class="py-4">Reuse old books and make them reach places where deprived kids - especially girl
                        child, juvenile kids dont have an opportunity. Our mission is to launch donation and
                        distribution centers in all Major cities and make sure books reach everywhere - from cities to
                        mountains of Sikkim or remote villages of Himalayas or every other village which is deprived of
                        good libraries.</p>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="display-6 text-center">VISION</h3>
                    <hr class="abouthr" />
                    <p class="py-4">Circulate the books, place them into public libraries, encourage donation , reuse
                        and make the best possible use of resources. People in cities either have no time or no means to
                        send those books to remote villages. <span><a href="contact.php" style="text-decoration: none; color: #81256c; font-weight: 500;">
                                <i class="fa fa-home" aria-hidden="true"></i> Padhaakoo.com</a></span> wishes to collect
                        the books, ship them to various parts of the country.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid aboutimg abtimg pt-3" src="image\about2.jpg" alt="about" />
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid abtimg aboutimg" src="image\about3.jpg" alt="about" />
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="display-6 text-center">ACHIEVEMENTS</h3>
                    <hr class="abouthr" />
                    <p class="py-4">Connecting households with Government libraries, poor schools, orphanages and
                        juvenile homes. Distributing Science and technology books in girls schools as there are very few
                        girls in STEM compared to boys.</p>
                </div>
            </div>


            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="abouttitle">
                                <h4>How we works</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                            <div class="about-box">
                                <p> Please contact us if you want to donate the books. We have donations centre where
                                    books can be dropped off, we have a team of volunteers who would sort them out and
                                    make sure the books reaches the
                                    right destination. If you are a seeker, please download our excel file of available
                                    books and let us know which ones
                                    you will need and we will send them to you or you can come to our centre and pick
                                    and choose what you would like.
                                </p>
                                <p>Donation and distribution centers are open to public on Saturdays and Sundays from
                                    10am - 6pm. We still would request you to make an appointment to make sure your
                                    experience is seamless.</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                            <div class="about-box">
                                <figure><img src="image/about.png" alt="img" /></figure>
                            </div>
                        </div>
                    </div>
                    <div class="row border mt-4">
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                            <div class="about-box">
                                <p>We have pick up facility. Please write or call us and let us know what kind of books you want to be collected. Email and phone number We use economical courier service to send books to schools, libraries, orphanage and juvenile homes. </p>
                                <p>We are in need of funds to take care of shipping costs so feel free to donate.</p>

                                <p>Here is the link to make donation.</p>
                                <a href="donateform.php">Donate</a>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                            <div class="about-box">
                                <figure><img src="image/book-1.jpg" alt="img" /></figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section>
 <!-- countup -->
 <?php
    require("countup.php");

    ?>

    <!-- Services -->

    <section class="Books pt-5 ">

        <div class="abouttitle">
            <h2>Services</h2>
        </div>


        <!-- our books -->

        <div class="Books">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="titlepage">
                            <p><span><a href="https://padhaakoo.com/" style="text-decoration: none; color: #81256c; font-weight: 500;">
                                        <i class="fa fa-home" aria-hidden="true"></i> Padhaakoo.com</a></span> Services has
                                been serving A proper education sets people up to grow personally, professionally, and socially.
                                It can awaken joy, curiosity and a deep desire to solve problems and help others. Plus, teaching
                                a student can inspire them to pursue leadership roles and positively impact those around them.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row box responsive">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <div class="book-box">
                            <figure>
                                <img class="rounded-5" src="image/book-1.jpg" alt="img" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="book-box">
                            <figure><img class="rounded-5" src="image/book-2.jpg" alt="img" /></figure>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <div class="book-box">
                            <figure><img class="rounded-5" src="image/book-1.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pb-5">
                            <div class="read-more">
                                <a href="about.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- service -->





    <!-- Book Gallery -->

    <section class="gallerybg">
        <div class="py-5">
            <h3 class="text-center">Books Gallery</h3>
            <hr class="abouthr" />
        </div>

        <!-- Search bar -->


        <div class="container-fluid py-3">
            <form action="bookgalerry.php" required method="GET">
                <div class="input-group mb-3" style="width:70%;">
                    <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>" class="form-control rounded-2" placeholder="Search Books" autocomplete="off"></input>
                    <button type="submit" class="btn btn-outline send-btn my-2 my-sm-0"><i class="fa fa-search pr-3" aria-hidden="true"></i> Search</button>


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

                            <div class="card mx-auto" style="width:200px; height:300px;">

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


    <!-- Donatation Form -->
    <!-- <section class="pb-5 formbg" style="background-image: url('image/formbg.jpg');">
        <div class="py-5">
            <h2 class="text-center">Book Donation</h2>
        </div>
        <div class="containtbox">
            <div class="m-auto contact-box">

                <?php
                if (isset($_SESSION['status']) && $_SESSION != "") {

                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?> 

                <form action="donate.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label class="mb-2">Name</label>
                        <input type="text" placeholder="Book Name" name="book_name" required autocomplete="off" class="form-control field rounded-4" />
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">Author</label>
                        <input type="text" name="book_author" placeholder="Book Author" required autocomplete="off" class="field form-control  rounded-4" />
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">Language</label>
                        <select class="form-control field  rounded-4" name="book_language" required>
                            <option selected>Book Language</option>
                            <option>English</option>
                            <option>Hindi</option>
                            <option>Marathi</option>
                            <option>Spanish</option>
                            <option>German</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">Category</label>
                        <select class="form-control field rounded-4" name="book_category" required>
                            <option selected>Book Category</option>
                            <option>Classic</option>
                            <option>Children</option>
                            <option>Music</option>
                            <option>Poetry</option>
                            <option>short</option>
                            <option>stories</option>
                            <option>Biographies</option>
                            <option>AutoBiographies</option>
                            <option> Novels</option>
                            <option>Puzzles</option>
                            <option> Mystery</option>
                            <option>Horror</option>
                            <option>stories</option>
                            <option>Encyclopedia</option>
                            <option>Subject</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>Math</option>
                            <option>History</option>
                            <option>Map</option>
                            <option>Other...</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">City</label>
                        <select class="form-control field rounded-4" name="book_city" required>
                            <option selected>City</option>
                            <option>Indore</option>
                            <option>Hyderabad</option>
                            <option>Other...</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label mb-2">Image</label>
                        <input class="form-control field rounded-4" type="file" name="book_image" required>
                    </div>
                    <div class="input-container form-group mb-3">
                        <label class="mb-2">Description</label>
                        <textarea class="form-control field rounded-4" id="checklen" required name="book_description" placeholder="Enter Book Description." rows="8"></textarea>
                        <span class="counter-box">
                            <span id=text-count>1</span>/150
                        </span>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="submit" value="submit" name="submit">Donate Book</button>
                    </div>
                </form>
            </div>
        </div>
    </section> -->


    <!-- Excell Table -->


    <section class="availablebg">
        <div class="py-5">
            <h3 class="text-center">Available Books</h3>
            <hr class="abouthr" />
        </div>


        <div class="container-fluid py-3">
            <div class="row pt-3">
                <div class="col-lg-12 col-md-12 col-12 mb-3">
                    <div class="my-3">
                        <form action="exportexcel.php" method="post">
                            <button type="exportexcel" value="exportexcel" class="btn btn-primary btn-lg">Available
                                Books in Excel</button>
                        </form>
                    </div>

                    <!-- Data Table -->
                    <div class="table-responsive">

                        <?php


                        require 'donate.php';

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
                                            <td>
                                                <?php echo $row["book_name"]; ?>
                                            </td>
                                            <td><?php echo $row["book_author"]; ?></td>
                                            <td>
                                                <?php echo $row["book_language"]; ?>
                                            </td>
                                            <td><?php echo $row["book_category"]; ?></td>
                                            <td>
                                                <?php echo $row["book_city"]; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo 'uploadimg/' . $row["book_image"]; ?>" width="100px" height="100px" alt="book_image" />
                                            </td>
                                            <td class="text-center">
                                                <?php echo $row["book_description"]; ?>
                                            </td>

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



    <!-- Google Map -->

    <div class="container-fluid contactbg pt-3">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d800.23264382177!2d78.36488342848256!3d17.432439723534536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9379b3289cb3%3A0x1d5c6d1b52a3f527!2sAccelero%20Corporation!5e0!3m2!1sen!2sin!4v1696586826572!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>



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