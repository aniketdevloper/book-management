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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,100&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-69TC4G7VHD"></script>
</head>
<style>
    .container {
        position: relative;
        width: 1160px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        transform-style: preserve-3d;
        perspective: 500px;
        margin: auto;
    }

    .container .box {
        position: relative;
        width: 250px;
        height: 300px;
        background: #000;
        transition: 1.0s;
        transform-style: preserve-3d;
        overflow: hidden;
        margin-right: 15px;
        margin-top: 45px;
    }

    .container:hover .box {
        transform: rotateY(25deg);
    }

    .container .box:hover~.box {
        transform: rotateY(-25deg);
    }

    .container .box:hover {
        transform: rotateY(0deg) scale(1.25);
        z-index: 1;
        box-shadow: 0 25px 40px rgba(0, 0, 0, 0.5);
    }

    .container .box .imgBx {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .container .box .imgBx:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, #f00, #000);
        z-index: 1;
        opacity: 0;
        transition: 0.5s;
        mix-blend-mode: multiply;
    }

    .container .box:hover .imgBx:before {
        opacity: 0.5;
    }

    .container .box .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container .box .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        padding: 20px;
        align-items: flex-end;
        box-sizing: border-box;
    }

    .container .box .content h2 {
        color: #fff;
        transition: 0.5s;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-size: 20px;
        transform: translateY(200px);
        transition-delay: 0.3s;
    }

    .container .box:hover .content h2 {
        transform: translateY(0px);
    }

    .container .box .content p {
        color: #fff;
        transition: 0.5s;
        font-size: 14px;
        transform: translateY(200px);
        transition-delay: 0.4s;
    }

    .container .box:hover .content p {
        transform: translateY(0px);
    }

    h6.day {
        text-align: right;
        padding-right: 2rem;
    }
</style>

<body>


    <!-- Book drive section -->
    <h2 class="text-center mt-5">Books Donation Drive</h2>
    <h6 class="day mb-4">- November 4, 2023 (Hyderabad)</h6>
    <div class="container">
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive01.jpeg">
            </div>
            <div class="content">
                <div>
                    <p>With so many books to choose from, you will have the hard part of deciding which one to donate.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive02.jpeg">
            </div>
            <div class="content">
                <div>
                    <p>You can share your love of reading with the underprivileged. Don&#39;t just buy a book; donate one.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive03.jpeg">
            </div>
            <div class="content">
                <div>
                    <p>Books are gifts that keep on giving. Give the gift of literacy today.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive04.jpeg">
            </div>
            <div class="content">
                <div>
                    <p>The best way to spread kindness is by giving books. It’s like a one-stop shop for happiness
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h2>Glimpse of some of our books received by free IIT coaching centre run by Sevalaya, Chennai - smiles are priceless! Thank you for giving us this opportunity!</h2>
    </div>

    <div class="container">
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive07.jpeg">
            </div>
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive05.jpeg">
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive06.jpeg">
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive08.jpeg">
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive17.jpeg">
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive18.jpeg">
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive19.jpeg">
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="image/bookdrive/bookdrive20.jpeg">
            </div>
        </div>
    </div>


</body>

</html>



<!--  -->