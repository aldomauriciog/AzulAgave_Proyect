<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Azul Agave Family Mexican Cuisine</title>
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/layouts/nav.css">
    <link rel="stylesheet" href="../assets/css/layouts/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
    <?php require('../assets/layouts/nav.php') ?>
        <div class="banner">
            <div class="title">
                <h1>CONTACT</h1>
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
        <div class="info">
            <div>
                <img src="../assets/img/LOGO VERSION NEGRO.png" alt="LOGO">
            </div>
            <div class="desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolores at, doloribus ea dignissimos dolorem, voluptates ipsum sunt nihil animi ipsa nobis, temporibus iure excepturi!</p>
                <p>Thank you very much</p><br>
                <p><b>Address: </b>2576 Route 9W Cornwall, NY</p>
            </div><br><br>
            <div class="booking">
                <a href="../booking/">RESERVA UNA CITA AQUÍ</a>
            </div>
        </div>
        <div class="contact">
            <form action="phpmailer.php" method="post">
                <div>
                    <p>Name:</p>
                    <input type="text" name="name" id="name" autocomplete="off"/>
                </div>
                <div>
                    <div>
                        <p>Email:</p>
                        <input type="email" name="email" id="" autocomplete="off"/>
                    </div>
                    <div>
                        <p>Phone:</p>
                        <input type="number" name="phone" id="" autocomplete="off"/>
                    </div>
                </div>
                <div>
                    <p>Asunto:</p>
                    <select name="subject" id="" value="Asunto">
                        <option value="">Comentario</option>
                    </select>
                </div>
                <div>
                    <p>Mensaje:</p>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Deje su mensaje aqui ..."></textarea>
                </div>
                <div>
                    <input type="submit" value="Send Message">
                </div>
            </form>
        </div>
    </main>

    <?php require('../assets/layouts/footer.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/contact.js"></script>
</body>
</html>