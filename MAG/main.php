<!DOCTYPE html>
<html lang="en">
<?php require_once('common/header.php'); ?>
<!-- Animate.css for smooth entrance effects -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
    .testimonial-item {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        padding-bottom: 25px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box;
        /* Ensures padding is included in the height calculation */
    }

    .testimonial-content {
        margin-top: auto;
        /* Push content to the bottom of the container */
    }

    .stars {
        display: flex;
        margin-bottom: 10px;
        /* Space between stars and the description */
    }

    .stars i {
        color: #ffcc00;
        /* Color for stars */
        margin-right: 5px;
        /* Space between stars */
    }

    /* Add padding-bottom to ensure consistent height */
    .testimonial-item-padding {
        padding-bottom: 60px;
        /* Adjust this value as needed to match the tallest testimonial */
    }

    .testimonial-item:hover {
        transform: translateY(-10px);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }

    #readm {
        background-color: #009688 !important;
        color: rgb(208, 219, 218) !important;
        border-radius: 50px;
        transition: 0.4s;
        animation-delay: 1.1s;
        text-decoration: none;
        display: inline-block;
        padding: 10px 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
        /* Outer shadow */
    }

    #readm:hover {
        background-color: #00695C !important;
        /* Lighter shade of #00695C */
        color: rgb(181, 221, 218) !important;
        /* Darker shadow on hover */
    }

    #readm:active {
        transform: scale(0.95);
        /* Slightly shrink on click */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3) !important;
        /* Maintain consistent shadow color on click */
    }

    .title:hover {
        color: rgb(4, 126, 112) !important;
    }
</style>

<body class="mb-0 pb-0">
    <?php require_once('common/navbar.php'); ?>
    <!-- Hero Start -->
    <div class="container-fluid hero-header position-relative "
        style="background: url('img/graduates-throwing-graduation-hats-up-sky_43157-2038.avif') center center / cover no-repeat; padding-top:13rem; padding-bottom:8rem; overflow: hidden;">

        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: rgba(0,0,0,0.3); z-index: 1; ">
        </div>


        <div class="container position-relative " style="z-index: 2;">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-header-inner animated fadeInUp"
                        style="animation-duration: 1.2s; background: rgba(178,223,219,0.4); padding: 2rem; border-radius: 30px; border-bottom: 6px solid #009688;">

                        <p class="fs-4 text-dark mb-3 animate__animated animate__fadeInDown"
                            style="animation-delay: 0.5s; color: #ffffff">
                            <span style="color: #ffffff;"></span>WELCOME TO </span><span style="color:rgb(2, 116, 104); font-size: 1.1em;">MAG</span>
                        </p>

                        <h1 class="display-1 mb-4 animate__animated animate__fadeInLeft"
                            style="font-size:45px; animation-delay: 0.8s; color:rgb(2, 128, 115);">
                            Your Academic Journey Starts Here!
                        </h1>

                        <a id="readm" href="#about-section" class="btn py-3 px-5 animate__animated animate__fadeInUp">
                            Learn More
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero End -->


    <!-- About Satrt -->
    <div id="about-section" class="container-fluid about py-5 pb-0 mb-0">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-xl-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <img src="img/Screenshot 2025-04-29 080326.png" class="img-fluid h-100 wow zoomIn" data-wow-delay="0.1s" alt="">
                        </div>
                        <div class="col-6">
                            <img src="img/Screenshot 2025-04-29 080147.png" class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s" alt="">
                            <img src="img/Screenshot 2025-04-29 071056.png" class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fs-5 text-uppercase text-primary">About MyAcademicGuide</p>
                    <h1 class="display-5 pb-4 m-0">Your Guide to a Successful Academic Future</h1>
                    <p class="pb-4">At MyAcademicGuide, we focus on helping students make informed decisions about their academic paths. From personalized course recommendations to managing your semester schedules, we're here to guide you every step of the way.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="ps-3 d-flex align-items-center justify-content-start">
                                <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span>
                                <div class="ms-4">
                                    <h5>Our Vision</h5>
                                    <p>To empower students with the knowledge and tools they need to make the best academic decisions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ps-3 d-flex align-items-center justify-content-start">
                                <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-flag text-dark fa-4x mb-5 pb-2"></i></span>
                                <div class="ms-4">
                                    <h5>Our Mission</h5>
                                    <p>Helping students navigate their academic journey with smart, data-driven advice for their future success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->
            <div class="container-fluid text-center py-5 wow fadeIn rounded-3 shadow-sm" data-wow-delay="0.1s"
                style="background-color: rgba(0, 150, 136, 0.1); border: 2px solid rgba(0, 150, 136, 0.3); max-width: 1200px; margin: 30px auto 0;">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-2">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="background: rgba(0, 150, 136, 0.2); width: 100px; height: 100px;">
                            <i class="fa fa-graduation-cap fa-3x text-dark"></i>
                        </div>
                    </div>
                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="mb-2" style="font-weight: bold; color: #004d40;">Guiding You to Achieve Your Academic Goals</h1>
                    </div>
                    <div class="col-lg-3">
                        <a id="readm" href="" class="btn btn-outline-dark py-3 px-5 rounded-pill" style="background-color: #009688; color: #ffffff; border: none;">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Activities Start -->
            <div class="container-fluid activities pt-5 pb-5">
                <div class="container pt-5 pb-5">
                    <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <p class="fs-5 text-uppercase text-primary">Key Features</p>
                        <h1 class="display-3" style="font-size: 2.2em;">Explore MyAcademicGuide's Features</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-graduation-cap fa-4x text-dark"></i>
                                <div class="ms-4">
                                    <h4>Course Recommendations</h4>
                                    <p style="color:black">Get personalized course recommendations based on your academic interests and career goals.</p>
                                    <a href="#goals" class="btn btn-primary px-3 animate__animated animate__fadeInUp">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-calendar-check fa-4x text-dark"></i>
                                <div class="ms-4">
                                    <h4>Semester Scheduling</h4>
                                    <p style="color:black">Organize and customize your semesters to align with your academic plan and lifestyle.</p>
                                    <a href="#goals" class="btn btn-primary px-3 animate__animated animate__fadeInUp">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-users fa-4x text-dark"></i>
                                <div class="ms-4">
                                    <h4>Peer Advisor Network</h4>
                                    <p style="color:black">Connect with peer advisors who can provide insights and advice about courses, professors, and campus life.</p>
                                    <a href="#goals" class="btn btn-primary px-3 animate__animated animate__fadeInUp">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-chart-line fa-4x text-dark"></i>
                                <div class="ms-4">
                                    <h4>Academic Progress Tracker</h4>
                                    <p style="color:black">Track your academic progress and ensure you meet all the necessary requirements for graduation.</p>
                                    <a href="#goals" class="btn btn-primary px-3 animate__animated animate__fadeInUp">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-project-diagram fa-4x text-dark"></i>
                                <div class="ms-4">
                                    <h4>Smart Plan of Study</h4>
                                    <p style="color:black">Access a clear and intelligent plan of study that outlines all academic requirements.</p>
                                    <a href="#goals" class="btn btn-primary px-3 animate__animated animate__fadeInUp">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-cogs fa-4x text-dark"></i>
                                <div class="ms-4">
                                    <h4>Customizable Study Plans</h4>
                                    <p style="color:black">Create a personalized study plan that matches your academic objectives and interests.</p>
                                    <a href="#goals" class="btn btn-primary px-3 animate__animated animate__fadeInUp">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activities Start -->
            <!-- Sermon Start -->
            <div id="goals" class="container-fluid sermon py-5 pt-3">
                <div class="container py-5 pt-0">
                    <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <p class="fs-5 text-uppercase text-primary">Goals</p>
                        <h1 class="display-3" style="font-size:2.8em">Join The MA<span style="color:#009688">G</span> Community</h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-6 col-xl-4">
                            <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                                <div class="overflow-hidden p-4 pb-0" style="width: 100%; max-width: 500px; height: 300px;">
                                    <img src="img/Screenshot 2025-04-29 072418.png" alt=""
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover;">
                                </div>
                                <div class="p-4">
                                    <a href="" class="d-inline-block h4 lh-sm mb-3 title" style="color:#009688">Dynamic POS Generator</a>
                                    <p class="mb-0">Automatically creates a personalized plan of study by forecasting upcoming semester courses based on completed subjects, helping students visualize their academic path in real time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="sermon-item wow fadeIn" data-wow-delay="0.3s">
                                <div class="overflow-hidden p-4 pb-0" style="width: 100%; max-width: 500px; height: 300px;">
                                    <img src="img/Screenshot 2025-04-29 074801.png" alt=""
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover;">
                                </div>
                                <div class="p-4">
                                    <a href="" class="d-inline-block h4 lh-sm mb-3 title" style="color:#009688">Customized POS Builder</a>
                                    <p class="mb-0">Enables students to select preferred courses for upcoming semesters, after which the system intelligently outlines all future terms, predicting graduation year and semester with clarity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="sermon-item wow fadeIn" data-wow-delay="0.5s">
                                <div class="overflow-hidden p-4 pb-0" style="width: 100%; max-width: 500px; height: 300px;">
                                    <img src="img/Screenshot 2025-04-29 070823.png" alt=""
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover;">
                                </div>
                                <div class="p-4">
                                    <a href="" class="d-inline-block h4 lh-sm mb-3 title" style="color:#009688">Smart Scheduling Tool</a>
                                    <p class="mb-0">Empowers students to design optimal weekly schedules by setting personal preferences like breaks or avoiding specific instructors, ensuring a flexible and efficient academic plan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sermon End -->
            <!-- Team Start -->
            <div class="container-fluid team py-5 pt-0">
                <div class="container py-5 pt-0">
                    <div class="row g-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 d-flex flex-column">
                            <div class="team-item wow fadeIn flex-grow-1 text-center" data-wow-delay="0.1s">
                                <h1>About MA<span style="color: #009688;">G</span> Team</h1>
                                <h5 class="fw-normal fst-italic text-primary mb-4">Meet the brilliant minds behind MAG</h5>
                                <p class="mb-4">Our project has been passionately developed by a dedicated team combining expertise in backend, frontend, and supervision, ensuring high standards and innovative solutions throughout the journey. Together, we built the <span style="color: #009688;">MAG</span> website to a professional level.</p>
                                <div class="team-icon d-flex align-items-center pb-4 mb-4 border-bottom border-primary">
                                </div>
                            </div>
                            <div class="row g-4 mt-auto justify-content-center text-center">
                                <div class="col-md-4 d-flex">
                                    <div class="team-item wow zoomIn flex-grow-1" data-wow-delay="0.2s">
                                        <img src="img/WhatsApp Image 2025-05-18 at 05.37.53_429d0e92.jpg" class="img-fluid w-100" alt="">
                                        <div class="team-content text-dark text-center py-3">
                                            <div class="team-content-inner">
                                                <h5 class="mb-0">Doaa Khashab</h5>
                                                <p class="text-dark">Communication Engineer - Backend Developer Of MAG</p>
                                                <div class="team-icon d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-lg-square"
                                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=doaakhashab32@gmail.com"
                                                        target="_blank">
                                                        <i class="fas fa-envelope" style="font-size: 1.3em;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="team-item wow zoomIn flex-grow-1" data-wow-delay="0.4s">
                                        <img src="img/WhatsApp Image 2025-05-18 at 04.55.46_f1a5b723.jpg" class="img-fluid w-100" alt="">
                                        <div class="team-content text-dark text-center py-3">
                                            <div class="team-content-inner">
                                                <h5 class="mb-0">Ali Sleiman</h5>
                                                <p class="text-dark">Computer Engineer - Frontend Developer Of MAG</p>
                                                <div class="team-icon d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-lg-square"
                                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=sleimana181@gmail.com"
                                                        target="_blank">
                                                        <i class="fas fa-envelope" style="font-size: 1.3em;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Testimonial Start -->
            <div class="container-fluid testimonial py-5 pt-0">
                <div class="container py-5 pt-0">
                    <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <p class="fs-5 text-uppercase text-primary">Opinions on MA<span style="color:#009688;">G</span> Website</p>
                        <h1 class="display-3" style="font-size:2.6em;">What Others Think About MA<span style="color:#009688;">G</span></h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item">
                            <div class="d-flex mb-3">
                                <div class="position-relative">
                                    <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -35px;">
                                        <i class="fa fa-quote-left text-white"></i> <!-- Quote icon with white color -->
                                    </div>
                                </div>
                                <div class="ps-3 my-auto ">
                                    <h5 class="mb-0">Professor Fatima Khalil</h5>
                                    <p class="m-0">Academic Advisor</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">"The MAG website has been an excellent resource for my students, making it easier for them to navigate course materials and stay updated on deadlines. It is very user-friendly and informative."</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex mb-3">
                                <div class="position-relative">
                                    <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -35px;">
                                        <i class="fa fa-quote-left text-white"></i> <!-- Quote icon with white color -->
                                    </div>
                                </div>
                                <div class="ps-3 my-auto ">
                                    <h5 class="mb-0">Nour Sheitly</h5>
                                    <p class="m-0">Student</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">"As a student, I find the MAG website extremely helpful in keeping track of my courses through their dynamic plan of study. The clean design makes it easy to use & their scheduling tool save my time in doing my schedules!"</p>
                            </div>
                        </div>
                        <!-- New Student Added -->
                        <div class="testimonial-item">
                            <div class="d-flex mb-3">
                                <div class="position-relative">
                                    <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -35px;">
                                        <i class="fa fa-quote-left text-white"></i> <!-- Quote icon with white color -->
                                    </div>
                                </div>
                                <div class="ps-3 my-auto ">
                                    <h5 class="mb-0">Katia Hammoud</h5>
                                    <p class="m-0">Student</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">"MAG is an essential tool for me as a student. It's straightforward, intuitive, and everything is organized in a way that helps me stay on top of my academic life! Also it give me a push to go ahead."</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex mb-3">
                                <div class="position-relative">
                                    <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -35px;">
                                        <i class="fa fa-quote-left text-white"></i> <!-- Quote icon with white color -->
                                    </div>
                                </div>
                                <div class="ps-3 my-auto ">
                                    <h5 class="mb-0">Hussein Attieh</h5>
                                    <p class="m-0">IT Specialist</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">"From a technical standpoint, the MAG website is well-optimized and runs smoothly. It provides the necessary tools for students and faculty to stay engaged without any lag or technical issues."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <?php require_once('common/footer.php'); ?>
    <?php require_once('common/script.php'); ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>


    <script>
        window.addEventListener('scroll', function() {
            const heroHeader = document.querySelector('.hero-header');
            const scrollPosition = window.scrollY;
            const windowHeight = window.innerHeight;
            const fadeStart = windowHeight / 5; // Start fading after scrolling halfway down the viewport
            const fadeEnd = windowHeight * 1; // Fully faded after scrolling 1.5 times the viewport height

            // Calculate opacity based on scroll position
            if (scrollPosition >= fadeStart && scrollPosition <= fadeEnd) {
                heroHeader.style.opacity = 1 - (scrollPosition - fadeStart) / (fadeEnd - fadeStart);
            } else if (scrollPosition < fadeStart) {
                heroHeader.style.opacity = 1; // Fully visible before fade starts
            } else {
                heroHeader.style.opacity = 0; // Fully hidden after fade ends
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            const testimonialItems = document.querySelectorAll('.testimonial-item');
            let maxHeight = 0;

            // Loop through all items to find the tallest one
            testimonialItems.forEach(item => {
                const itemHeight = item.offsetHeight;
                if (itemHeight > maxHeight) {
                    maxHeight = itemHeight;
                }
            });

            // Apply the max height to all items
            testimonialItems.forEach(item => {
                item.style.height = `${maxHeight}px`;
                item.classList.add('testimonial-item-padding'); // Add padding class
            });
        });
    </script>
</body>

</html>