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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="image\owlpadhkoo.png" alt="Logo" width="120" height="80"
                    class="d-inline-block align-text-top">
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






      <!-- Contact -->


<section class="pb-5" style="background-image: url('image/banner.jpg');">

    <div class="py-5">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <?php
                require("donate.php");
                if (isset($_POST["contact"])) {
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $message = $_POST["message"];

                    $q = "INSERT INTO `contact_db`(`username`, `email`, `phone`, `message`) VALUES ('$username','$email','$phone','$message')";

                    $query_run = mysqli_query($con, $q);

                    if($query_run){
                        echo "success";
                        header("location: index.php");
                    } else{
                        echo "failed";
                    }

                    
    
                }
               ?>   
               
               
               <form action="donate.php" method="post">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                           <input class="form-control " placeholder="Name" name="name" type="text">
                        </div>
                         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                           <input class="form-control" placeholder="Email" name="email" type="Email">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                           <input class="form-control" placeholder="Phone Number" name="phone_nu" type="text">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                           <textarea class="textarea" name="message" placeholder="Message">Message</textarea>
                        </div>
                        
               <button class="btn send-btn">Contact</button>
                     </form>
               </div>
            </div>
         </div>

</section>

      <!-- contact end -->





      
    <!-- Footer/Contact -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-md-left">
            <div class="row text-md-left">
                <div  class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">About</h5>
                    <p><span><a href="https://padhaakoo.com/" class="text-warning" style="text-decoration: none;"><i
                                    class="fa fa-home" aria-hidden="true"></i> Padhaakoo.com</a></span> Services has
                        been serving A proper education sets people up to grow personally, professionally, and socially.
                        It can awaken joy, curiosity and a deep desire to solve problems and help others. Plus, teaching
                        a student can inspire them to pursue leadership roles and positively impact those around them.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Services</h5>
                    <p>
                        <a href="about.php" class="text-white" style="text-decoration: none;">About</a>
                    </p>
                    <p>
                        <a href="donateform.php" class="text-white" style="text-decoration: none;"><i class="fa fa-gift"
                                aria-hidden="true"></i> Donation</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Help And Support</h5>
                    <p>
                        <a href="https://padhaakoo.com/" class="text-white" style="text-decoration: none;"><i
                                class="fa fa-home" aria-hidden="true"></i> Padhaakoo.com</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <a href="about.php" class="text-white" style="text-decoration: none;">About Us</a>
                    </p>
                    <p>
                        <a href="contact.php" class="text-white" style="text-decoration: none;"><i
                                class="fa fa-phone mr-3" aria-hidden="true"></i> +91 9704107806</a>
                    </p>
                    <p>
                        <a href="samkas125@gmail.com" class="text-white" style="text-decoration: none;"><i
                                class="fa fa-envelope mr-3" aria-hidden="true"></i> samkas125@gmail.com</a>
                    </p>
                </div>
            </div>
            <hr class="mb-4" />
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright &#xa9; All Rights reserved by :
                        <span style="text-decoration: none;">
                            <strong class='text-warning'> Samatva N Kasat</strong>
                        </span>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyle list-inline">
                            <li class="list-inline-item">
                                <a href="" class="btn-floating btn-sm text-white " style="font-size: 23px;"> <i
                                        class="fab fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i
                                        class="fab fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i
                                        class="fab fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>