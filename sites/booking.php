<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Azul Agave Family Mexican Cuisine</title>
    <link rel="stylesheet" href="../assets/css/booking.css">
    <link rel="stylesheet" href="../assets/css/layouts/nav.css">
    <link rel="stylesheet" href="../assets/css/layouts/footer.css">
    <link rel="stylesheet" href="../assets/css/layouts/scroll-top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
    <?php require('../assets/layouts/nav.php') ?>
        <div class="banner">
            <div class="title">
                <h1>BOOKING</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, error!</p>
            </div>
            <div class="slider-banner">
                <section class="banner-slider"></section>
            </div>
        </div>
        <!-- Banner -->
    </header>
    <!-- Main -->
    <main>
        <div class="card">
            <h2>Book your order now!</h2>
            <p>You can make your reservation by means of a call so you can agree on a more efficient way. Call!</p>
            <div class="call">
                <div>
                    <p>Outdoor Seating:</p>
                    <button><a href="tel:845-534-2006">845-534-2006</a></button>
                </div>
                <div>
                    <p>Pick up order:</p>
                    <button><a href="tel:845-534-2361">845-534-2361</a></button>
                </div>
            </div>
        </div>
    </main>

    <?php require('../assets/layouts/footer.php') ?>
    <?php require('../assets/layouts/scroll-top.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/booking.js"></script>
    <script src="../assets/js/layouts/scroll-top.js"></script>
</body>
</html>