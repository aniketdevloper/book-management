<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image\owlpadhkoo.png" type="image/x-icon">
    </link>
    <title>Book Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/mail.css">
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

    <div class="container my-5 justify-content center">
        <div class="formBox">
            <h3>Contact Us</h3>
            <p class="my-3 font-italic">You will hear from us at the earliest!</p>
            <form action="sendmail.php" method="post" autocomplete="off">

                <label for="name">Your Name</label>
                <input type="text" name="name" placeholder="Your Name">

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">

                <label for="message">Message</label>
                <textarea name="message" placeholder="Message"></textarea>

                <input type="submit" value="Submit">

            </form>
            <h4 class="my-5 font-italic">You can also contact us at <a href="tel:+91 9704107806">+91 9704107806</a></h4>
        </div>

    </div> 


    <!-- <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact -->
    <!-- <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Name" name="name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Email" name="email" type="Email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Phone Number" name="phone_nu" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Subject" name="subject" type="text">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" name="message" placeholder="Message">Message</textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div> -->
    <!-- end Contact -->

</body>

</html>