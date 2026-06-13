<?php

function template_header(){
    echo <<< EOT
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="Assets/Images/Logo.webp"
                        alt="Green Park Internation School" class="logo-img"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileSidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="career.php">Career</a></li>
                                <li><a class="dropdown-item" href="our-purpose.php">Our Purpose</a></li>
                                <li><a class="dropdown-item" href="trust-management.php">Trust & Management</a></li>
                                <li><a class="dropdown-item" href="correspondent-message.php">Correspondent Message</a>
                                </li>
                                <li><a class="dropdown-item" href="principal-message.php">Principal Message</a></li>
                                <li><a class="dropdown-item" href="academic-co-ordinator.php">Academic Co-ordinator</a>
                                </li>
                                <li><a class="dropdown-item" href="school-admin.php">School Admin</a></li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="academics.php">Academics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="facilities.php">Facilities</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admission
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admission.php">Admission Procedure</a></li>
                                <li><a class="dropdown-item" href="admission-form.php">Admission Form</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="container my-4">
                            <div class="icon-box d-flex align-items-center p-3 rounded">

                                <!-- Icon Box -->
                                <div class="icon d-flex align-items-center justify-content-center rounded me-3">
                                    <i class="bi bi-telephone fs-4"></i>
                                </div>

                                <!-- Text Content -->
                                <div>
                                    <p class=" detail mb-1 text-muted fw-semibold"><a href="tel:+919965501123"
                                            class="text-white">+91
                                            9965501123</a></p>
                                    <h6 class="mb-0 fw-bold text-white">For Admission</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Mobile Sidebar -->
        <div class="offcanvas offcanvas-end d-lg-none" id="mobileSidebar">

            <div class="offcanvas-header">
                <h5 class="text-white">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav">

                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="correspondent-message.php">Correspondent Message</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="principal-message.php">Principal Message</a></li>
                    <li class="nav-item"><a class="nav-link" href="academic-co-ordinator.php">Academic Co-ordinator
                            Message</a></li>
                    <li class="nav-item"><a class="nav-link" href="co-ordinator.php">Co-ordinator Message</a></li>
                    <li class="nav-item"><a class="nav-link" href="school-admin.php">School Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="academics.php">Academics</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="admission.php">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                </ul>
            </div>

    </header>
    EOT;
}

function template_footer(){
    echo <<< EOT
    <footer class="footer-section text-white pt-5 pb-4">
        <div class="container">
            <div class="row">

                <!-- Column 1 (Logo + About) -->
                <div class="col-lg-5 footer-col-1">

                    <!-- Logo -->
                    <img src="Assets/Images/Footer-logo.webp" alt="logo" class="footer-logo mb-3">

                    <p class="text-light">
                        Core teaching blends classroom learning, sports, extracurricular activities, social and cultural
                        events, ensuring holistic student growth, development, and overall progress
                    </p>



                </div>

                <!-- Column 2 (Quick Links) -->
                <div class="col-lg-4 footer-col-2">
                    <h5 class="mb-3">Quick Links</h5>

                    <ul class="list-unstyled footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="academics.php">Academics</a></li>
                        <li><a href="facilities.php">Facilities</a></li>
                        <li><a href="admission.php">Admission</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3 (Text + Social) -->
                <div class="col-lg-3 footer-col-3">
                    <h5 class="">Enquiries</h5>

                    <p class="enq"><i class="bi bi-telephone me-2"></i><a href="tel:+91 9965501123"
                            class="text-white">+91 9965501123</a></p>

                    <p class="enq"><i class="bi bi-envelope me-2"></i><a href="mailto:info@jayapriyavidyalaya.com"
                            class="text-white">info@jayapriyavidyalaya.com</a> </p>
                    <p class="enq"><i class="bi bi-envelope me-2"></i><a href="mailto:admissions@jayapriyavidyalaya.com"
                            class="text-white">admissions@jayapriyavidyalaya.com</a> </p>
                    <p class="enq"><i class="bi bi-envelope me-2"></i><a href="mailto:greenparkcbseschool@gmail.com"
                            class="text-white">greenparkcbseschool@gmail.com</a> </p>
                    <h5 class="fw-bold mt-5 fu">
                        Follow us
                    </h5>

                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/greenparkedu" class="facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/jayapriyagroup_85/" class="instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCYUbz4F6xoHZlQkXbqo2l4A" class="youtube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://t.me/jayapriyagroup" class="telegram">
                            <i class="bi bi-telegram"></i>
                        </a>
                    </div>


                </div>

            </div>
            <div class="footer-bt text-white text-center">
                <p>&copy; 2026 Green Park International School.</p>
            </div>
        </div>
    </footer>
    EOT;
}