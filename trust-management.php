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
    <link rel="stylesheet" href="Assets/CSS/trust-management-responsive.css">
</head>

<body>
    <?=template_header()?>
    <main>
        <section class="trust-banner container-fluid text-center">
            <h2>Trust & Management</h2>
        </section>
        <section class="trust-1">
            <div class="container py-4" data-aos="fade-right" data-aos-delay="150">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="circle-wrapper">
                                <img src="Assets/Images/trust-1.webp">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <h3 class="trust-box-title">About the Trust (APJ Abdul Kalam Educational Trust)</h3>
                            <p>The APJ Abdul Kalam Educational Trust was established with the noble objective of
                                promoting education as a powerful tool for social transformation. Inspired by the vision
                                and ideals of Dr. A.P.J. Abdul Kalam, the trust is committed to nurturing young minds
                                through accessible, quality education.</p>
                            <p>The trust focuses on creating institutions that emphasize knowledge, values, innovation,
                                and leadership. It aims to bridge the educational gap in rural and developing regions by
                                providing modern infrastructure, skilled faculty, and student-centric learning systems.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4" data-aos="fade-left" data-aos-delay="200">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h3 class="trust-box-title">Leadership Overview</h3>
                            <p>Green Park International School is guided by a visionary and committed leadership team
                                that strives to deliver excellence in education. The management ensures a perfect
                                balance between academic rigor, value-based learning, and holistic development.</p>
                            <p>With a clear focus on innovation, discipline, and student success, the leadership team
                                continuously works towards creating a progressive learning environment. Their collective
                                experience and dedication play a crucial role in shaping the institution into a centre
                                of excellence.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="circle-wrapper">
                                <img src="Assets/Images/trust-2.webp">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container py-4" data-aos="fade-right" data-aos-delay="200">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="circle-wrapper">
                                <img src="Assets/Images/trust-3.webp">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <h3 class="trust-box-title">Leadership Philosophy</h3>
                            <p>The leadership philosophy of Green Park International School is centered on nurturing
                                excellence through innovation, discipline, and values. The institution believes in
                                creating a student-focused environment where learning is meaningful, engaging, and
                                future-oriented.</p>
                            <p>The management adopts a collaborative approach, encouraging teamwork among educators,
                                students, and parents. Emphasis is placed on continuous improvement, adaptability, and
                                the integration of modern educational practices. The ultimate goal is to develop
                                responsible, confident, and compassionate individuals who are equipped to contribute
                                positively to society and succeed in a rapidly evolving world.
                            </p>
                        </div>
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