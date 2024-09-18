<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday Shikha!</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

<!-- Slider Section -->
<section id="home" class="hero-slider">
    <div class="slider">
        <div>
            <video src="images/vecteezy_happy-birthday-greeting-background-in-3d-animation-format_3321329.mp4" autoplay muted loop></video>
        </div>
    </div>
    <div class="hero-content">
        <h1>Shikha</h1>
        
    </div>
</section>


    <?php include 'footer.php'; ?>

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: false,
                fade: true,
                speed: 100
            });
        });
    </script>
</body>
</html>
