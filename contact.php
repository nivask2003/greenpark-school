<?php include 'function.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Park International School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/Images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"
        integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Assets/CSS/contact-responsive.css">
</head>

<body>
   <?=template_header()?>

    <main>
        <!-- BANNER -->
        <section class="contact-banner text-center container-fluid">
            <h2>Contact Us</h2>
        </section>

        <!-- CONTACT SECTION -->
        <section class="contact-1" aria-labelledby="contact-main-heading">
            <div class="container">
                <div class="row g-5 align-items-start">

                    <!-- LEFT COLUMN -->
                    <div class="col-lg-5 contact-left" data-aos="fade-right">
                        <h2 class="get-in-touch" id="contact-main-heading">Get in Touch</h2>
                        <p class="section-tagline">
                            We'd love to hear from you. Reach out for admissions, general enquiries,
                            or just to learn more about Green Park International School.
                        </p>

                        <!-- Info Box 1 — Phone -->
                        <div class="contact-info-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="ci-icon" aria-hidden="true"><i class="bi bi-telephone-fill"></i></div>
                            <div class="ci-text">
                                <h6>Call Us</h6>
                                <p><a href="tel:+919965501123">+91 9965501123</a><br>Mon – Sat, 8:00 AM – 5:30 PM</p>
                            </div>
                        </div>

                        <!-- Info Box 2 — Email -->
                        <div class="contact-info-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="ci-icon" aria-hidden="true"><i class="bi bi-envelope-fill"></i></div>
                            <div class="ci-text">
                                <h6>Email Us</h6>
                                <p><a href="mailto:info@jayapriyavidyalaya.com">info@jayapriyavidyalaya.com</a><br></p>
                                <p><a href="mailto:admissions@jayapriyavidyalaya.com">admissions@jayapriyavidyalaya.com</a><br></p>
                                <p><a href="mailto:greenparkcbseschool@gmail.com">greenparkcbseschool@gmail.com</a><br>We reply within one working day.</p>
                            </div>
                        </div>

                        <!-- Info Box 3 — Address -->
                        <div class="contact-info-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="ci-icon" aria-hidden="true"><i class="bi bi-geo-alt-fill"></i></div>
                            <div class="ci-text">
                                <h6>Visit Us</h6>
                                <p>Trichy - Chennai National Highways,<br>Eluthur Village, Tittagudi Taluk, Cuddalore District - 606303<br> Tamil Nadu, India</p>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN — FORM -->
                    <div class="col-lg-7" data-aos="fade-left">
                        <iframe aria-label='CONTACT FORM' frameborder="0" style="height:1200px;width:99%;border:none;" src='https://forms.zohopublic.in/jayapriyagroupofinstitutions1/form/CONTACTFORM/formperma/uB30_WUjy2yeJgkV_KnLfon2OilVAzd2tQtSE4tyBt4' >
</iframe>
                    </div>

                </div>
            </div>
        </section>

        <!-- MAP SECTION -->
        <section class="contact-2" aria-labelledby="map-heading">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62516.504278385655!2d79.269199!3d11.67445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bab4e1795657c2b%3A0x53560ffc237b1c6a!2sGREEN%20PARK%20Educational%20institutions!5e0!3m2!1sen!2sin!4v1776082133973!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

 <?=template_footer()?>
    <button id="scrollTopBtn" title="Go to top">
        <i class="bi bi-arrow-up"></i>
    </button>
    <a href="https://wa.me/919965501123" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">

        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="Assets/JS/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="Assets/JS/popmodel.js"></script>
    <script src="Assets/JS/aos.js"></script>
    <script src="Assets/JS/scrolltoup.js"></script>
    <script src="Assets/JS/header-fix.js"></script>

</body>

</html>