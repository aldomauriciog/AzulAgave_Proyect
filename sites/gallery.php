<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Azul Agave Family Mexican Cuisine</title>
    <link rel="stylesheet" href="../assets/css/gallery.css">
    <link rel="stylesheet" href="../assets/css/layouts/nav.css">
    <link rel="stylesheet" href="../assets/css/layouts/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
    <?php require('../assets/layouts/nav.php') ?>
        <div class="banner">
            <div class="title">
                <h1>GALLERY</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, error!</p>
            </div>
            <div class="slider-banner">
                <section class="banner-slider"></section>
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <div class="gallery">
                <div class="image"><span><img src="../assets/img/gallery/img1.jpg" alt=""></span></div>
                <div class="image"><span><img src="../assets/img/gallery/img2.jpg" alt=""></span></div>
                <div class="image"><span><img src="../assets/img/gallery/img3.jpg" alt=""></span></div>
                <div class="image"><span><img src="../assets/img/gallery/img4.jpg" alt=""></span></div>
                <div class="image"><span><img src="../assets/img/gallery/img5.jpg" alt=""></span></div>
                <div class="image"><span><img src="../assets/img/gallery/img6.jpg" alt=""></span></div>
                <div class="image"><span><img src="../assets/img/gallery/img7.jpg" alt=""></span></div>
            </div>
        </div>
        <div class="preview-box">
            <div class="img-box">
                <div class="slide prev">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </div>
                <div class="slide next">
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </div>
                <img src="" alt="">
                <p></p>
            </div> 
        </div>
        <div class="details">
            <div class="display">
                <span class="title">
                    Imagen <p class="current-img"></p>
                    de <p class="total-img"></p>
                </span>
                <span class="icon fa-solid fa-circle-xmark"></span>
            </div>
        </div>
        <div class="shadow">
        </div>
    </main>
    
    <?php require('../assets/layouts/footer.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/gallery.js"></script>
</body>
</html>