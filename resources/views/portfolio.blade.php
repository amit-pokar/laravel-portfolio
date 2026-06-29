@extends('layouts.resume')

@section('title', 'Resume - Start Bootstrap Theme')

@section('content')
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('startbootstrap/assets/img/profile.jpg') }}" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#certifications">Certifications</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Clarence
                        <span class="text-primary">Taylor</span>
                    </h1>
                    <div class="subheading mb-5">
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                    </div>
                    <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Colorado Boulder</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.23</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">James Buchanan High School</h3>
                            <div class="subheading mb-3">Technology Magnet Program</div>
                            <p>GPA: 3.56</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>

                    <div class="subheading mb-3">Technical Expertise</div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <h3 class="mb-2">Full-Stack Development</h3>
                            <p class="mb-3">Building responsive, scalable applications with modern tools and clear architecture.</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Frontend & Backend</span>
                                    <span class="text-primary fw-bold">92%</span>
                                </div>
                                <div class="progress" style="height: 0.6rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 92%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>System Architecture</span>
                                    <span class="text-primary fw-bold">88%</span>
                                </div>
                                <div class="progress" style="height: 0.6rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 88%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Database Design</span>
                                    <span class="text-primary fw-bold">85%</span>
                                </div>
                                <div class="progress" style="height: 0.6rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <h3 class="mb-2">Strategic Leadership</h3>
                            <p class="mb-3">Management and business acumen with a strong focus on strategic thinking, team alignment, and long-term growth.</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Project Management</span>
                                    <span class="text-primary fw-bold">94%</span>
                                </div>
                                <div class="progress" style="height: 0.6rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 94%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Team Coordination</span>
                                    <span class="text-primary fw-bold">86%</span>
                                </div>
                                <div class="progress" style="height: 0.6rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 86%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Strategic Planning</span>
                                    <span class="text-primary fw-bold">82%</span>
                                </div>
                                <div class="progress" style="height: 0.6rem;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 82%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subheading mb-3 mt-4">Core Technologies</div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-php-plain me-2 fs-6"></i>PHP
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-laravel-plain me-2 fs-6"></i>Laravel
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-mysql-plain me-2 fs-6"></i>MySQL
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-azuresqldatabase-plain me-2 fs-6"></i>MSSQL
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-javascript-plain me-2 fs-6"></i>JavaScript
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-react-original me-2 fs-6"></i>React
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-html5-plain me-2 fs-6"></i>HTML5
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-css3-plain me-2 fs-6"></i>CSS3
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-nodejs-plain me-2 fs-6"></i>Node.js
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-amazonwebservices-plain me-2 fs-6"></i>AWS
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-redis-plain me-2 fs-6"></i>Redis
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-docker-plain me-2 fs-6"></i>Docker
                        </span>
                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
                            <i class="devicon-git-plain me-2 fs-6"></i>Git
                        </span>
                        <!-- AJAX -->
<span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
    <i class="fas fa-sync-alt me-2 fs-6"></i>AJAX
</span>

<!-- Bootstrap -->
<span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
    <i class="devicon-bootstrap-plain me-2 fs-6"></i>Bootstrap
</span>

<!-- jQuery -->
<span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
    <i class="devicon-jquery-plain me-2 fs-6"></i>jQuery
</span>

<!-- Redux -->
<span class="badge bg-light text-primary rounded-pill px-3 py-2 border border-primary border-2 d-inline-flex align-items-center">
    <i class="devicon-redux-original me-2 fs-6"></i>Redux
</span>
                    </div>

                    <div class="subheading mb-3 mt-5">Highlights</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                            8 years of experience delivering digital products and strategic solutions.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                            Strong coordination across design, engineering, and business teams.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check text-primary"></i></span>
                            Recognized for combining technical depth with thoughtful user experience.
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                    <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Certifications-->
            <section class="resume-section" id="certifications">
                <div class="resume-section-content">
                    <h2 class="mb-5">Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Google Analytics Certified Developer
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Mobile Web Specialist - Google Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2009
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2008
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - James Buchanan High School - Hackathon 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Place - James Buchanan High School - Hackathon 2005
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
@endsection
