@extends('cv.layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>HA DUC PHUC</h1>
            <p>I'm <span class="typed" data-typed-items="Developer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>I am a PHP developer with 4 years of experience. I have expertise in HTML, CSS, Symfony, ReactJS, NodeJS, JavaScript/jQuery and frameworks such as Laravel, Eccube, and WordPress.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset('assets/assets_web/img/profile-img.JPEG') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>PHP Developer</h3>
                        <p class="fst-italic">
                            I am a skilled developer with experience in various programming languages and frameworks. I have a strong passion for technology and enjoy taking on challenging projects. My experience in web development has allowed me to develop a strong understanding of the principles of web development and the ability to create complex web applications.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>26-09-1994</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span><a href="http://www.smartptech.top">smartptech.top</a></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>0396971094</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Ha noi, VietNam</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ now()->year - 1994 }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>University</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>email:</strong>
                                        <span>hdphuc94@gmail.com</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            In the future, I aspire to become a tech leader and lead development teams to create innovative and successful products. I am confident in my ability to guide and mentor others and am dedicated to continued learning and growth.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Through self-learning and participation in practical projects, I have developed the following skills</p>
                </div>

                <div class="row skills-content">
                    @foreach ($skills as $skill)
                        <div class="col-lg-6" data-aos="fade-up">   
                            <div class="progress">
                                <span class="skill">{{ $skill['name'] }} <i class="val">{{ $skill['process'] }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill['process'] }}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>I also aspire to become a Techleader in the future, with the ability to lead development teams, make strategic decisions and develop products, while guiding and training other team members. I believe that with effort and a progressive mindset, I can achieve these goals.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Vietnam National University of Agriculture</h4>
                            <h5>2012 - 2018</h5>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">WORK EXPERIENCE</h3>
                        <div class="resume-item">
                            <h4>PHP Developer, RELIPA Co., Ltd. </h4>
                            <h5>05/2021 - Present</h5>
                            <p><em>Happy Cars project </em></p>
                            <ul>
                                <li>built an auction management page using HTML, CSS, JS, PHP, MySQL, Laravel, and Line API.</li>
                                <li>Set up server environment on AWS EC2-Ubuntu, S3, and RDS. </li>
                                <li>Collaborated with another developer to develop car management features and send Line messages through API.</li>
                            </ul>
                            <p><em>FRD-Vtiger project </em></p>
                            <ul>
                                <li>modified CRM Vtiger for attendance and payroll features using HTML, CSS, JS, PHP, MySQL, CRM Vtiger, ReactJS, and NodeJS.</li>
                                <li>Worked with another developer to develop attendance features using ReactJS and Redis to store data. </li>
                            </ul>
                            <p><em>Gakken EC-CUBE project </em></p>
                            <ul>
                                <li>modified EC-CUBE CMS based on client requests, reviewed code, and merged changes using HTML, CSS, JS, PHP, MySQL, EC-CUBE, Symfony, and AWS S3.</li>
                                <li>Developed code based on tasks assigned on Git, adhered to client coding conventions, and made deep changes to EC-CUBE based on specific requirements (purchase flow EC-CUBE). </li>
                                <li>Trained new developers on the team and developed unit tests for each task after completing the code logic.</li>
                            </ul>
                            <p><em>Dream Compass project </em></p>
                            <ul>
                                <li>developed an event, seminar, and QA information management system using HTML, CSS, JS, PHP, MySQL, Laravel, and Stripe payment library.</li>
                                <li>Collaborated with a team of three developers to develop management functions, interface design, and GitFlow implementation. </li>
                            </ul>
                            <p><em>Regraffiti (Auragram, Grind-stone) project </em></p>
                            <ul>
                                <li>used WordPress to create a payment plan page, integrated Laravel to manage user information in the mobile app using HTML, CSS, JS, PHP, MySQL, WordPress, Laravel, and Stripe payment library.</li>
                                <li>Edited the payment interface, developed API documentation, and sent user information updates from third-party updates. </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>KEYSKY CO., LTD | PHP Developer</h4>
                            <h5>10/2018 - 04/2021</h5>
                            <p><em>Built WordPress interfaces using HTML5, CSS3, JavaScript/Jquery/Ajax, and PHP.</em></p>
                            <ul>
                                <li>Developed websites with features such as e-commerce, news, landing pages, and introductions.</li>
                                <li>Utilized popular plugins including Woocommerce, Advanced Custom Fields, Contact Form 7, etc.</li>
                                <li>Utilized Google Map API to create a taxi distance calculator website.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

    </main><!-- End #main -->
@endsection
