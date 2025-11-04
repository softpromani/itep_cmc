<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
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
    @include('layouts.topbar')

      <nav class="navbar navbar-expand-lg sticky-top">
    @include('layouts.navbar')

      </nav>

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('includes.scripts')
</body>
</html>
