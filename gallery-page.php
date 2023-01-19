<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>BeFit Gallery</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gallery page with latest photos from the gym">
    <meta name="application-name" content="BeFit">

    <meta property="og:title" content="Be Fit" />
    <meta property="og:type" content="gym" />

    <meta name="keywords" content="galley, gym, workout, photos, machines" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body class="home-page-body">
    <header>
        <?php
        include_once "header.php";
        ?>
    </header>

    <!-- Container for the image gallery -->
    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="img/gymBenchesImg.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="img/gymDumbellsImg.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="img/putekite.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="img/puteki2.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">5 / 5</div>
            <img src="img/mashini.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="img/sila.jpg" style="width:100%">
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="img/gymBenchesImg.jpg" style="width:100%" onclick="currentSlide(1)" alt="Gym Benches">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/gymDumbellsImg.jpg" style="width:100%" onclick="currentSlide(2)" alt="Gym Dumbells">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/putekite.jpg" style="width:100%" onclick="currentSlide(3)" alt="Treadmills">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/puteki2.jpg" style="width:100%" onclick="currentSlide(4)" alt="Treadmills2">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/mashini.jpg" style="width:100%" onclick="currentSlide(5)" alt="Gym machines">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/sila.jpg" style="width:100%" onclick="currentSlide(6)" alt="Power">
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>
<footer class="footer">All rights reserved (c) 2021 Vasil Simeonov.</footer>

</html>