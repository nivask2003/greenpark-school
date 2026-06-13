<?php include 'function.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Green Park International School</title>
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
    <link rel="stylesheet" href="Assets/CSS/gallery-responsive.css">
</head>

<body>
   <?=template_header()?>
    <main>
        <section class="gallery-banner text-center container-fluid">
            <h2>Gallery</h2>
        </section>
        <section class="gallery-1 container py-5">
            <div class="filter-buttons">
                <button class="active" data-filter="all">All</button>
                <button data-filter="events">Events</button>
                <button data-filter="campus">Campus</button>
                <button data-filter="awards">Awards</button>
                <button data-filter="activities">Activities</button>
                <button data-filter="orphanage">Orphanage Visit</button>
                <button data-filter="camp">Camp</button>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-1.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-57.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-56.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-54.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-45.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-11.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-47.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-21.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-55.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-53.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-48.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-51.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-50.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-49.webp" alt="">
                </div>
                <div class="gallery-item orphanage">
                    <img src="Assets/Images/Gallery-41.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-12.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-22.webp" alt="">
                </div>
                <div class="gallery-item orphanage">
                    <img src="Assets/Images/Gallery-42.webp" alt="">
                </div>
                <div class="gallery-item camp">
                    <img src="Assets/Images/Gallery-52.webp" alt="">
                </div>
                <div class="gallery-item camp">
                    <img src="Assets/Images/Gallery-46.webp" alt="">
                </div>
                <div class="gallery-item campus">
                    <img src="Assets/Images/Gallery-3.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-13.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-23.webp" alt="">
                </div>
                <div class="gallery-item orphanage">
                    <img src="Assets/Images/Gallery-43.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-4.webp" alt="">
                </div>
                <div class="gallery-item orphanage">
                    <img src="Assets/Images/Gallery-40.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-14.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-24.webp" alt="">
                </div>
                <div class="gallery-item orphanage">
                    <img src="Assets/Images/Gallery-44.webp" alt="">
                </div>
                <div class="gallery-item campus">
                    <img src="Assets/Images/Gallery-15.webp" alt="">
                </div>
                <div class="gallery-item events">
                    <img src="Assets/Images/Gallery-6.webp" alt="">
                </div>
				                <div class="gallery-item campus">
                    <img src="Assets/Images/Gallery-16.webp" alt="">
                </div>
                <div class="gallery-item awards">
                    <img src="Assets/Images/Gallery-7.webp" alt="">
                </div>
                <div class="gallery-item campus">
                    <img src="Assets/Images/Gallery-17.webp" alt="">
                </div>
                <div class="gallery-item campus">
                    <img src="Assets/Images/Gallery-18.webp" alt="">
                </div>
                <div class="gallery-item awards">
                    <img src="Assets/Images/Gallery-9.webp" alt="">
                </div>
                <div class="gallery-item campus">
                    <img src="Assets/Images/Gallery-19.webp" alt="">
                </div>
                <div class="gallery-item awards">
                    <img src="Assets/Images/Gallery-10.webp" alt="">
                </div>
                <div class="gallery-item activities">
                    <img src="Assets/Images/Gallery-20.webp" alt="">
                </div>
				<div class="gallery-item awards">
                    <img src="Assets/Images/gallery-25.webp" alt="">
                </div>
				<div class="gallery-item awards">
                    <img src="Assets/Images/gallery-26.webp" alt="">
                </div>
				<div class="gallery-item awards">
                    <img src="Assets/Images/gallery-27.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-28.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-29.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-30.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-31.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-32.webp" alt="">
                </div>
				 <div class="gallery-item activities">
                    <img src="Assets/Images/gallery-33.webp" alt="">
                </div>
				 <div class="gallery-item activities">
                    <img src="Assets/Images/gallery-34.webp" alt="">
                </div>
				<div class="gallery-item activities">
                    <img src="Assets/Images/gallery-35.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-36.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-37.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-38.webp" alt="">
                </div>
				<div class="gallery-item events">
                    <img src="Assets/Images/gallery-39.webp" alt="">
                </div>
            </div>
        </section>
        <div id="imagePopup" class="image-popup">
            <span class="close-btn">&times;</span>
            <span class="nav-btn prev">&#10094;</span>
            <img src="" alt="" class="popup-img" id="popupImage">
            <span class="nav-btn next">&#10095;</span>
        </div>
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
    <script src="Assets/JS/gallery-filter.js"></script>
    <script src="Assets/JS/gallery-popup.js"></script>
    <script src="Assets/JS/header-fix.js"></script>

</body>

</html>