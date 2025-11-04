@extends('layouts.master')

@section('title', 'Home')

@section('content')
 <!-- Main Header -->
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
@endsection
