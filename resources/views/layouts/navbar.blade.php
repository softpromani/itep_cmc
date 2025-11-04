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
                        <a class="nav-link dropdown-toggle {{ Request::is('mandatory') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#regulations">Regulations</a></li>
                            <li><a class="dropdown-item" href="#syllabus">Syllabus</a></li>
                            <li><a class="dropdown-item" href="#ncte">NCTE</a></li>
                            <li><a class="dropdown-item {{ Request::is('mandatory') ? 'active' : '' }}" href="{{ route('mandatory.index') }}">Mandatory Disclosures</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
