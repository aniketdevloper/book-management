<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image\owlpadhkoo.png" type="image/x-icon">
    </link>
    <title>Book Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,100&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .gpayimg {
        width: 100px;
        border: none;
        border-radius: 50%;
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

    <!-- Donate Form -->


    <section class="pb-5 pt-5 formbg">
        <div class="py-5">
            <h2 class="text-green text-center font-weight-bold" style="font-size: 40px;">Donate</h2>
        </div>
        <div class="container">
            <p>Every book collector knows the thrill of stumbling upon a hidden gem in a dusty old bookstore or a forgotten box at a garage sale. My journey began with that magical moment when I found my first treasure—a weathered copy of a classic novel- Where the Wild Things Are" by Maurice Sendak (1963). From that day forward, I was hooked. Collecting books became not just a hobby but a way of life.</p>
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="abouttitle">
                                <h4>Donation Related Queries</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row border mt-4">
                        <div class="row pt-3">
                            <div class="col-lg-6 col-md-6 col-12 my-5">
                                <h3 class="display-6 text-center">Positive Impact</h3>
                                <hr class="abouthr" />
                                <p class="py-4">
                                    Please contact us at <a href="mailto: samkas125@gmail.com"> samkas125@gmail.com</a> or call at <span class="my-5 font-italic">You can also contact us at <a href="tel:+91 9704107806">+91 9704107806</a></span> you have books to give away or if you know any organization/individuals where they would be put up to the best use.<br /><span>We can always use funds to take care of packing/dispatching expenses, so be generous and here is our google pay <a href="tel:+91 9704107806">+91 9704107806</a> and whatsapp the confirmation. Any amount would be okay. We will send you receipt and also share the pictures of our next dispatch.</span><br /><span>Thank you for joining us in this journey of spreading joy through books!</span>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 my-auto">
                                <img class="img-fluid gpayimg" src="image/gpay2.png" alt="about" />
                                <img class="img-fluid gpayimg" src="image/paytm.png" alt="about" />
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

    <!-- js script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>