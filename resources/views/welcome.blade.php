<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEP Programme - C.M. College Darbhanga</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --accent-color: #ffc107;
            --dark-color: #212529;
            --light-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Top Bar */
        .top-bar {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .top-bar a:hover {
            color: var(--accent-color);
        }

        /* Header */
        .main-header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
        }

        .college-logo {
            max-height: 100px;
        }

        .college-title h1 {
            color: var(--dark-color);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .college-title p {
            color: var(--secondary-color);
            font-size: 14px;
            margin: 0;
        }

        /* Navigation */
        .navbar {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 0;
        }

        .navbar-nav .nav-link {
            color: white !important;
            padding: 15px 20px !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: var(--accent-color) !important;
        }

        .dropdown-menu {
            background: #2a5298;
            border: none;
            border-radius: 0;
        }

        .dropdown-item {
            color: white !important;
            padding: 10px 20px;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--accent-color) !important;
        }

        /* Hero Slider */
        .hero-slider {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .hero-slider .carousel-item {
            height: 500px;
        }

        .hero-slider .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(30, 60, 114, 0.8) 0%, rgba(42, 82, 152, 0.6) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-content h2 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .btn-custom {
            background: var(--accent-color);
            color: var(--dark-color);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-custom:hover {
            background: #ffb300;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
        }

        /* Quick Info Section */
        .quick-info {
            background: white;
            padding: 60px 0;
        }

        .info-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .info-card i {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .info-card h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* About ITEP Section */
        .about-itep {
            background: var(--light-bg);
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 38px;
            font-weight: 700;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .about-content {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .about-content p {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .about-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Programme Highlights */
        .programme-highlights {
            padding: 80px 0;
            background: white;
        }

        .highlight-card {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .highlight-card:hover {
            border-color: var(--primary-color);
            box-shadow: 0 10px 30px rgba(13, 110, 253, 0.1);
            transform: translateY(-5px);
        }

        .highlight-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), #0a58ca);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 32px;
        }

        .highlight-card h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .highlight-card p {
            font-size: 15px;
            color: var(--secondary-color);
        }

        /* Principal's Message */
        .principals-message {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 80px 0;
        }

        .message-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .principal-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid white;
            margin: 0 auto 30px;
        }

        .principal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .message-card h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .message-card h5 {
            font-size: 18px;
            color: var(--accent-color);
            margin-bottom: 30px;
        }

        .message-card p {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        /* Admission Info */
        .admission-info {
            background: var(--light-bg);
            padding: 80px 0;
        }

        .admission-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .admission-card h4 {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .admission-details {
            list-style: none;
            padding: 0;
        }

        .admission-details li {
            padding: 15px 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
        }

        .admission-details li:last-child {
            border-bottom: none;
        }

        .admission-details strong {
            color: var(--dark-color);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 0 20px;
        }

        .footer h5 {
            color: var(--accent-color);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer ul li a:hover {
            color: var(--accent-color);
        }

        .footer-bottom {
            background: #111;
            padding: 20px 0;
            margin-top: 40px;
        }

        .social-links a {
            color: white;
            font-size: 20px;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--accent-color);
        }

        /* Quick Links Badge */
        .quick-links-section {
            background: white;
            padding: 40px 0;
            border-top: 3px solid var(--primary-color);
        }

        .quick-link-badge {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            margin: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .quick-link-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h2 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .college-title h1 {
                font-size: 20px;
            }

            .section-title h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <i class="fas fa-phone"></i> Contact: <a href="mailto:info@cmclnmu.ac.in"
                        class="__cf_email__">info@cmclnmu.ac.in</a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#"><i class="fas fa-user"></i> Student Portal</a>
                    <a href="#"><i class="fas fa-sign-in-alt"></i> Faculty Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('images/college-logo.png') }}" alt="College Logo" class="college-logo">
                </div>
                <div class="col-md-10">
                    <div class="college-title">
                        <h1>Integrated Teacher Education Programme (ITEP)</h1>
                        <p>Chandradhari Mithila College (Arts & Commerce), Darbhanga</p>
                        <p>Constituent College of L.N. Mithila University, Darbhanga (Bihar)</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/about-college"
                                    target="blank">About College</a></li>
                            <li><a class="dropdown-item" href="#about-itep">About ITEP</a></li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/vision-mission"
                                    target="blank">Vision & Mission</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Programme
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#programme-structure">Programme Structure</a></li>
                            <li><a class="dropdown-item" href="#curriculum">Curriculum</a></li>
                            <li><a class="dropdown-item" href="#specializations">Specializations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admission">Admission</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Facilities
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/college-library">Library</a>
                            </li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/"
                                    target="blank">Laboratories</a></li>
                            <li><a class="dropdown-item" href="#seminar-hall">Seminar Hall</a></li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/" target="blank">Student
                                    Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('files/Details of ITEP faculty members (1).pdf') }}"
                            target="_blank">Faculty</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#regulations">Regulations</a></li>
                            <li><a class="dropdown-item" href="#syllabus">Syllabus</a></li>
                            <li><a class="dropdown-item" href="#ncte">NCTE</a></li>
                            <li><a class="dropdown-item" href="#mandatory-disclosure">Mandatory Disclosures</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Slider -->
    <section class="hero-slider">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/campus-1.jpg') }}" alt="Campus View">
                    <div class="hero-overlay">
                        <div class="hero-content">
                            <h2>Shape the Future of Education</h2>
                            <p>Four-Year Integrated B.A. B.Ed. & B.Com. B.Ed. Programme</p>
                            {{-- <a href="#admission" class="btn-custom">Apply Now for 2026-27</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/campus-2.jpg') }}" alt="Library">
                    <div class="hero-overlay">
                        <div class="hero-content">
                            <h2>Excellence in Teacher Education</h2>
                            <p>Aligned with National Education Policy (NEP) 2020</p>
                            <a href="#about-itep" class="btn-custom">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/campus-3.jpg') }}" alt="Students">
                    <div class="hero-overlay">
                        <div class="hero-content">
                            <h2>Legacy of 86 Years</h2>
                            <p>Pride of Mithila Since 1938</p>
                            <a href="#about-college" class="btn-custom">Our Heritage</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- Quick Info Section -->
    <section class="quick-info">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="info-card">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>4 Years</h3>
                        <p>Integrated Programme Duration</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <i class="fas fa-users"></i>
                        <h3>150 Seats</h3>
                        <p>Total Intake (3 Units)</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <i class="fas fa-book"></i>
                        <h3>8 Specializations</h3>
                        <p>Dual Major Options</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <i class="fas fa-certificate"></i>
                        <h3>B++ Grade</h3>
                        <p>NAAC Accredited (2025)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="quick-links-section">
        <div class="container text-center">
            <a href="#" class="quick-link-badge"><i class="fas fa-file-alt"></i> Admission Form</a>
            <a href="#" class="quick-link-badge"><i class="fas fa-calendar-alt"></i> Academic Calendar</a>
            <a href="#" class="quick-link-badge"><i class="fas fa-download"></i> Prospectus</a>
            <a href="#" class="quick-link-badge"><i class="fas fa-book-open"></i> Syllabus</a>
            <a href="#" class="quick-link-badge"><i class="fas fa-info-circle"></i> Fee Structure</a>
            <a href="#" class="quick-link-badge"><i class="fas fa-file-pdf"></i> NCTE Documents</a>
        </div>
    </section>

    <!-- About ITEP Section -->
    <section class="about-itep" id="about-itep">
        <div class="container">
            <div class="section-title">
                <h2>About ITEP Programme</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div class="about-image">
                        <img src="{{ asset('images/principal1.jpeg') }}" alt="ITEP Programme">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <p>
                            C. M. College (Arts and Commerce), Darbhanga, envisions introducing the Four-Year Integrated
                            Teacher Education Programme (ITEP) in alignment with the National Education Policy (NEP)
                            2020. The programme aims to nurture a generation of passionate, motivated, and
                            professionally competent teachers who are well-equipped to design and deliver
                            developmentally appropriate learning experiences for students across various stages of
                            school education.
                        </p>
                        <p>
                            The college seeks to ensure that prospective teachers receive the highest quality education
                            encompassing content mastery, pedagogical innovation, ethical grounding, and hands-on
                            practice. As highlighted in NEP 2020, teacher education is a cornerstone in shaping future
                            generations. It requires a multidisciplinary approach integrating subject expertise,
                            pedagogical proficiency, values, and reflective practice under expert mentorship.
                        </p>
                        <p>
                            In this spirit, C. M. College aspires to prepare teachers deeply rooted in Indian values,
                            languages, and knowledge systems, including local and tribal traditions, while remaining
                            attuned to global advancements in education and pedagogy.
                        </p>

                        <p>
                            In accordance with NEP 2020 (Paras 5.22 and 15.5), the ITEP will embody the
                            multidisciplinary vision of teacher preparation. By 2026-27, the college aims to offer the
                            four-year integrated B.Ed. programme as a dual-major holistic degree—combining Education
                            with a specialized subject such as Economics, History, Political Science, Geography,
                            English, Hindi, Urdu and Commerce. The curriculum will not only emphasize innovative
                            pedagogy but also include foundations in psychology, sociology, history, science, early
                            childhood care and education, foundational literacy and numeracy, and knowledge of India’s
                            heritage, ethos, and art traditions.

                            Through this initiative, C. M. College (Arts and Commerce), Darbhanga seeks to emerge as a
                            centre of excellence in teacher education, contributing to the national goal of creating
                            well-qualified, value-oriented, and future-ready educators.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programme Highlights -->
    <section class="programme-highlights">
        <div class="container">
            <div class="section-title">
                <h2>Programme Highlights</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h4>Dual Major Degree</h4>
                        <p>Combine Education with specializations in Economics, History, Political Science, Geography,
                            English, Hindi, Urdu, or Commerce</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Innovative Pedagogy</h4>
                        <p>Learn modern teaching methodologies, educational psychology, and technology-integrated
                            instruction</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>Practical Training</h4>
                        <p>Extensive practice teaching in 10+ affiliated schools with expert mentorship and guidance</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h4>Cultural Integration</h4>
                        <p>Deep understanding of Indian heritage, ethos, art traditions, and knowledge systems</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h4>Holistic Development</h4>
                        <p>Focus on content mastery, pedagogical skills, ethical values, and reflective practice</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>NEP 2020 Aligned</h4>
                        <p>Fully compliant with National Education Policy guidelines for teacher education</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal's Message -->
    <section class="principals-message">
        <div class="container">
            <div class="section-title">
                <h2 style="color: white;">From Principal's Desk</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="message-card">
                        <div class="principal-image">
                            <img src="{{ asset('images/principal1.jpeg') }}" alt="Principal">
                        </div>
                        <div class="text-center">
                            <h3>Dr. Mushtaque Ahmad</h3>
                            <h5>Principal, C.M. College Darbhanga</h5>
                        </div>
                        <p>
                            It gives me immense pleasure to announce that C. M. College (Arts and Commerce), Darbhanga,
                            is planning to introduce the Four-Year Integrated B.A. B.Ed. and B.Com. B.Ed. Programmes
                            from the academic session 2026–27. This significant academic initiative marks a new
                            milestone in our college's journey toward academic excellence and nation-building through
                            quality teacher education.
                        </p>
                        <p>
                            The Integrated Teacher Education Programme (ITEP) aims to equip aspiring teachers with a
                            blend of disciplinary knowledge, pedagogical skills, and ethical values. Students opting for
                            this course will receive a comprehensive education that combines deep subject understanding
                            with modern teaching methodologies, educational psychology, and the rich cultural heritage
                            of India.At the College, our experienced faculty, learner-friendly environment, and commitment to excellence will ensure that every student emerges as a confident, competent, and compassionate educator, ready to contribute meaningfully to school education and beyond.
                        </p>
                        <p>
                            I warmly welcome all students who aspire to pursue a career in teaching to join this
                            innovative and career-oriented programme. Together, let us embrace this new beginning and
                            uphold the values of knowledge, integrity, and service that define C. M. College.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Information -->
    <section class="admission-info" id="admission">
        <div class="container">
            <div class="section-title">
                <h2>Admission Information</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="admission-card">
                        <h4><i class="fas fa-info-circle"></i> Programme Details</h4>
                        <ul class="admission-details">
                            <li>
                                <span><strong>Programme Name:</strong></span>
                                <span>Integrated Teacher Education Programme (ITEP)</span>
                            </li>
                            <li>
                                <span><strong>Degree:</strong></span>
                                <span>B.A. B.Ed. / B.Com. B.Ed.</span>
                            </li>
                            <li>
                                <span><strong>Duration:</strong></span>
                                <span>4 Years (8 Semesters)</span>
                            </li>
                            <li>
                                <span><strong>Mode:</strong></span>
                                <span>Face to Face</span>
                            </li>
                            <li>
                                <span><strong>Total Intake:</strong></span>
                                <span>150 Students (3 Units × 50)</span>
                            </li>
                            <li>
                                <span><strong>Session Starts:</strong></span>
                                <span>2026-27</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="admission-card">
                        <h4><i class="fas fa-book"></i> Specialization Options</h4>
                        <ul class="admission-details">
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> Economics</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> History</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> Political Science</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> Geography</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> English</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> Hindi</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> Urdu</span>
                            </li>
                            <li>
                                <span><i class="fas fa-check-circle text-success"></i> Commerce</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="admission-card">
                        <h4><i class="fas fa-university"></i> About C.M. College</h4>
                        <p>
                            Chandradhari Mithila Mahavidyalaya, Darbhanga (Bihar), considered the Pride of Mithila is
                            one of the ancient seats of learning not only in Bihar but in the entire country. As a
                            premier institution, the College was established in 1938 and it subsequently became a
                            constituent unit of Lalit Narayan Mithila University.
                        </p>
                        <p>
                            The College is now entering its eighty-sixth year since its inception. It has been
                            accredited with B++ by NAAC in 2025. The college has excellent infrastructure including a
                            library with over 109,000 books, modern laboratories, seminar halls, sports facilities,
                            hostels, and a spacious campus divided by the river Bagmati.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infrastructure Highlights -->
    <section class="programme-highlights" style="background: var(--light-bg);">
        <div class="container">
            <div class="section-title">
                <h2>World-Class Infrastructure</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <a href="https://www.cmclnmu.ac.in/college-library">
                            <h4>Library</h4>
                        </a>
                        <p>109,000+ books, 10 journals, 15 periodicals, 300 encyclopedias with 120-seat reading room</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <a href="https://www.cmclnmu.ac.in/" target="blank">
                            <h4>Practice Schools</h4>
                        </a>
                        <p>10+ affiliated schools for practical teaching training and internship programs</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <a href="https://www.cmclnmu.ac.in/" target="blank">
                            <h4>Laboratories</h4>
                        </a>
                        <p>Well-equipped science labs, computer labs, and educational technology centers</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <a href="https://www.cmclnmu.ac.in/sports-games" target="blank">
                            <h4>Sports Facilities</h4>
                        </a>
                        <p>Tennis, Basketball, Football, Cricket, Volleyball, Swimming Pool, and more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Information</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Quilaghat, Darbhanga - 846004, Bihar</li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@cmclnmu.ac.in"
                                class="__cf_email__">info@cmclnmu.ac.in</a></li>
                        <li><i class="fas fa-globe"></i> www.cmclnmu.ac.in</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#about-itep">About ITEP</a></li>
                        <li><a href="#admission">Admission Process</a></li>
                        <li><a href="{{ asset('files/Details of ITEP faculty members (1).pdf') }}"
                                target="blank">Faculty Members</a></li>
                        <li><a href="#facilities">Facilities</a></li>
                        <li><a href="#ncte">NCTE Recognition</a></li>
                        <li><a href="#mandatory-disclosure">Mandatory Disclosures</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Important Links</h5>
                    <ul>
                        <li><a href="https://cmclnmu.ac.in" target="_blank">Main College Website</a></li>
                        <li><a href="https://lnmu.ac.in" target="_blank">L.N. Mithila University</a></li>
                        <li><a href="https://ncte.gov.in" target="_blank">NCTE</a></li>
                        <li><a href="https://education.gov.in" target="_blank">Ministry of Education</a></li>
                        <li><a href="#">Student Portal</a></li>
                        <li><a href="#">Alumni Network</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2025 C.M. College Darbhanga - ITEP Programme. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add active class to nav items on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section[id]');

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>

</body>

</html>
