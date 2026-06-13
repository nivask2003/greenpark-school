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
    <link rel="stylesheet" href="Assets/CSS/responsive-our-purpose.css">
</head>

<body>
    <?=template_header()?>
    <main>
        <section class="purpose-banner container-fluid text-center">
            <h2>Our Purpose</h2>
        </section>
        <section class="purpose-1 container py-5">
            <h2 class="title text-center" data-aos="fade-up">Our Core <span class="highlight">Mission and Vision</span>
            </h2>
            <div class="timeline mt-5">

                <div class="timeline-item left" data-aos="fade-right" data-aos-delay="100">
                    <div class="content">
                        <h3>Our Vision</h3>
                        <p>To create a nurturing educational environment that promotes the holistic development of
                            students by empowering their Head, Heart, and Hand, enabling them to become responsible
                            global citizens.</p>
                        <img src="Assets/Images/vission-img.webp" alt="vision-img">
                    </div>
                </div>
                <div class="timeline-item right mission" data-aos="fade-left" data-aos-delay="200">
                    <div class="content">
                        <h3>Our Mission</h3>
                        <p>Our mission is to provide a dynamic and inclusive learning ecosystem that:
                        </p>
                        <ul>
                            <li>Enhances communication and interpersonal skills</li>
                            <li>Strengthens academic excellence and performance</li>
                            <li>Develops values, discipline, and life skills</li>
                            <li>Encourages creativity, innovation, and critical thinking</li>
                            <li>Prepares students to achieve excellence at district, state, and national levels</li>

                        </ul>
                        <img src="Assets/Images/mission-img.webp" alt="mission-img">
                    </div>
                </div>
                <div class="timeline-item left" data-aos="fade-right" data-aos-delay="100">
                    <div class="content">
                        <h3>Educational Philosophy</h3>
                        <p>Green Park International School shapes character, intellect, and life skills through balanced
                            academics, activities, and values. Inspired by Vivekananda, it fosters independent,
                            responsible lifelong learners.</p>
                        <img src="Assets/Images/education-img.webp" alt="education-img">
                    </div>
                </div>
                <div class="timeline-item right core" data-aos="fade-left" data-aos-delay="200">
                    <div class="content">
                        <h3>Core Objectives</h3>
                        <ul>
                            <li>To foster holistic development encompassing intellectual, emotional, and physical growth</li>
                            <li>To instill strong moral values and ethical responsibility</li>
                            <li>To encourage analytical thinking, inquiry, and innovation</li>
                            <li>To maintain high standards in teaching, learning, and student behaviour</li>
                            <li>To create a joyful and student-friendly learning environment</li>
                            <li>To prepare students for future challenges through skill-based education</li>

                        </ul>
                        <img src="Assets/Images/core-img.webp" alt="core-img">
                    </div>
                </div>
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