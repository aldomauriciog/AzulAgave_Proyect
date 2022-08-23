<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Azul Agave Family Mexican Cuisine</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/layouts/nav.css">
    <link rel="stylesheet" href="assets/css/layouts/footer.css">
    <link rel="stylesheet" href="assets/css/layouts/scroll-top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html"><img src="assets/img/main/LOGO VERSION BLANCO.png" alt=""></a>
            </div>
            <div class="links">
                <a href="index.html"><li>HOME</li></a>
                <a href="menu/"><li>MENU</li></a>
                <a href="catering/"><li>CATERING</li></a>
                <a href="gallery/"><li>GALLERY</li></a>
                <a href="about/"><li>ABOUT</li></a>
                <a href="contact.php"><li>CONTACT</li></a>
                <a href="booking/"><li>BOOKING</li></a>
            </div>
            <div class="social">
                <a href="https://www.facebook.com/AzulAgaveCornwall/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/azulagavecornwall/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
        <div class="nav-ipad">
            <div class="nav-ipad-top">
                <div class="social">
                    <a href="https://www.facebook.com/AzulAgaveCornwall/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span>@AzulAgaveCornwall</span></a>
                    <a href="https://www.instagram.com/azulagavecornwall/" target="_blank"><i class="fa-brands fa-instagram"></i><span>@azulagavecornwall</span></a>
                </div>
            </div>
            <div class="nav-ipad-bot">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/main/LOGO VERSION BLANCO.png" alt=""></a>
                </div>
                <div class="links">
                    <a href="index.html"><li>HOME</li></a>
                    <a href="menu/"><li>MENU</li></a>
                    <a href="catering/"><li>CATERING</li></a>
                    <a href="gallery/"><li>GALLERY</li></a>
                    <a href="about/"><li>ABOUT</li></a>
                    <a href="contact.php"><li>CONTACT</li></a>
                    <a href="booking/"><li>BOOKING</li></a>
                </div>
            </div>
            <!-- <h1>Soy la navegación del iPad</h1> -->
        </div>
        <div class="nav-phone">
            <div class="nav-stick">
                <div class="logo">
                    <a href="index.html"></a>
                </div>
                <div class="open">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="nav-body">
                <div class="links">
                    <a href="index.html"><li>HOME</li></a>
                    <a href="menu/"><li>MENU</li></a>
                    <a href="catering/"><li>CATERING</li></a>
                    <a href="gallery/"><li>GALLERY</li></a>
                    <a href="about/"><li>ABOUT</li></a>
                    <a href="contact.php"><li>CONTACT</li></a>
                    <a href="booking/"><li>BOOKING</li></a>
                    <!-- <div class="icon">
                        <img src="assets/img/main/LOGO VERSION BLANCO.png" alt="">
                    </div> -->
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/AzulAgaveCornwall/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/azulagavecornwall/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
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
            <div class="sub">
                <h2>Contact us!</h2>
            </div>
            <hr>
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
            <div class="sub">
                <h2>Write a message</h2>
            </div>
            <hr>
            <form action="phpmailer.php" method="post" id="formulario">
                <div>
                    <!-- <p>Name</p> -->
                    <input type="text" name="name" id="name" autocomplete="off" placeholder="Name:"/>
                    <span class="spanName"></span>
                </div>
                <div>
                    <div>
                        <!-- <p>Email</p> -->
                        <input type="email" name="email" id="email" autocomplete="off" placeholder="Email:"/>
                        <span class="spanEmail"></span>
                    </div>
                    <div>
                        <!-- <p>Phone</p> -->
                        <input type="number" name="phone" id="phone" autocomplete="off" placeholder="Phone:"/>
                        <span class="spanPhone"></span>
                    </div>
                </div>
                <div>
                    <p>Subject:</p>
                    <select name="subject">
                        <option>Comment</option>
                        <option>Sugerency</option>
                        <option>Reclaimed</option>
                        <option>Other</option>
                    </select>
                </div>
                <div>
                    <!-- <p>Message</p> -->
                    <textarea name="message" id="msg" cols="30" rows="10" placeholder="Message ..."></textarea>
                    <span class="spanMessage"></span>
                </div>
                <div class="btn">
                    <input type="submit" value="Send Message">
                </div>
            </form>
        </div>
    </main>

    <section class="ubi">
        <div class="presentation">
        </div>
        <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.7066155958114!2d-74.03855828425498!3d41.445587200347504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd2d5c069e1731%3A0xac357d15ffb5f46f!2s2576%20Rte%209W%2C%20Cornwall%2C%20NY%2012518%2C%20EE.%20UU.!5e0!3m2!1ses!2spe!4v1657674264173!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="f-info">
                <img src="assets/img/main/LOGO VERSION BLANCO.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, minima deserunt odit nobis adipisci quod.</p>
            </div><hr>
            <div class="f-contact">
                <h4>Contact Us</h4>
                <p>Email: </p>
                    <a href="mailto:azulagavecornwall@gmail.com">azulagavecornwall@gmail.com</a>
                <p>Adderss: </p>
                    <span>2576 Route 9W Cornwall, NY</span>
            </div><hr>
            <div class="f-booking">
                <h4>Booking</h4>
                <p>Catering orders:</p>
                <a href="tel: 1-845-534-2006">1-845-534-2006</a>
                <p>Pick up order</p>
                <a href="tel: 1-845-534-2006">1-845-534-2006</a>
            </div><hr>
            <div class="f-social">
                <h4>Follow Us</h4>
                <div>
                    <a href="https://www.facebook.com/AzulAgaveCornwall/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span>@AzulAgaveCornwall</span></a>
                    <a href="https://www.instagram.com/azulagavecornwall/" target="_blank"><i class="fa-brands fa-instagram"></i><span>@azulagavecornwall</span></a>
                </div>
            </div>
        </div>
        <div class="copy">
            <span>©2020 by Azul Agave Family Mexican Cuisine. | Developed by Aldo Jahaziel Mauricio Gonzales.</span>
        </div>        
    </footer>

    <a href="#" class="scroll-top" title="Ir arriba">
        <i class="fa fa-angle-up"></i>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/layouts/scroll-top.js"></script>
</body>
</html>