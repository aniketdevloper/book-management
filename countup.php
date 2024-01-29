<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image\owlpadhkoo.png" type="image/x-icon">
    </link>
    <title>Book Donation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather');

        @import url('https://fonts.googleapis.com/css2?family=Poppins');

       

        .counter-wrapper {
            background: url(image/success.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-column-gap: 1.5rem;
            padding: 10rem 9%;
            margin-top: 5rem;
            position: relative;
        }

        .counter-wrapper::before {
            position: absolute;
            content: '';
            content: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .counter {
            text-align: center;
            color: #ddd;
            z-index: 2;
            position: relative;
        }

        .counter::before {
            position: absolute;
            content: '';
            bottom: -2rem;
            left: 50%;
            width: 20%;
            height: .2rem;
            background: #4DB7FE;
            border-radius: .5rem;
            -webkit-border-radius: .5rem;
            -moz-border-radius: .5rem;
            -ms-border-radius: .5rem;
            -o-border-radius: .5rem;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
        }

        .counter .count {
            font-size: 5rem;
            margin-bottom: 1rem;
            color: white;
        }

        .counter p {
            font-size: 1.4rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        @media (max-width: 991px) {
            html {
                font-size: 55%;
            }
        }

        @media (max-width: 768px) {
            .counter-wrapper {
                grid-template-columns: repeat(2, 1fr);
                grid-row-gap: 8rem;
            }
        }

        @media (max-width: 450px) {
            html {
                font-size: 50%;
            }

            .counter-wrapper {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    
        <div class="counter-wrapper">
            <div class="counter">
                <h1 class="count" data-target="2278">0</h1>
                <p>Collected</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="5000">0</h1>
                <p>distribution</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="3906">0</h1>
                <p>Happy Faces</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="12">0+</h1>
                <p>Drives</p>
            </div>
        </div>
    <script src="countup.js"></script>


</body>

</html>