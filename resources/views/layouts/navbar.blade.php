    <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
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
                            <li><a class="dropdown-item" href="https://lnmu.ac.in/syllabus-4-year-course-cbsc" target="_blank">Programme Structure</a></li>
                            <li><a class="dropdown-item" href="https://lnmu.ac.in/academic-calendar" target="_blank">Curriculum</a></li>
                            <li><a class="dropdown-item" href="https://cmclnmu.ac.in/self-finance-ug-courses" target="_blank">Specializations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://cmclnmu.ac.in/information-bulletin-admission" target="_blank">Admission</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Facilities
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/college-library" target="_blank">Library</a>
                            </li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/"
                                    target="blank">Laboratories</a></li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/college-infrastructure" target="_blank">Seminar Hall</a></li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/" target="blank">Student
                                    Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('files/Details of ITEP faculty members (1).pdf') }}"
                            target="_blank">Faculty</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('mandatory') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/regulation" target="_blank">Regulations</a></li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/examination" target="_blank">Syllabus</a></li>
                            <li><a class="dropdown-item" href="https://www.cmclnmu.ac.in/" target="_blank">NCTE</a></li>
                            <li><a class="dropdown-item {{ Request::is('mandatory') ? 'active' : '' }}" href="{{ route('mandatory.index') }}">Mandatory Disclosures</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.cmclnmu.ac.in/" target="_blank">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
