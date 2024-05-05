<!DOCTYPE html>
<html>

<head>
    <title>Aspireas400</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
                href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Aspireas400</a>
            <div class="w3-right w3-hide-small">
                <a href="#Home" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
                <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
                <a href="#courses" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Courses</a>
                <a href="#batches" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Traning Schedule</a>
                <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
                <a href="https://aspireas400.com/login.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"
                    onclick="openNewWindow()"><i class="fa fa-user"></i></a>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#Home" class="w3-bar-item w3-button">Home</a>
            <a href="#work" class="w3-bar-item w3-button">About Us</a>
            <a href="#courses" class="w3-bar-item w3-button">Courses</a>
            <a href="#batches" class="w3-bar-item w3-button">Traning Schedule</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact Us</a>
            <a href="https://aspireas400.com//login.php" class="w3-bar-item w3-button">Account</i></a>
        </div>
    </div>

    function openNewWindow() {
    header("Location: login.php");
    }

    <!----Container----------->

    <div class="container" style="width: 100%; height: 50%; display: block;margin-top: 16px;padding-left: -10px;"
        id="Home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="images/fi1.png" alt="Los Angeles" style="width:100%;min-height:350px;max-height:600px;">
                    <div class="carousel-caption">
                        <h4>Online Training at Anytime from Anywhere</h4>
                        <p></p>

                    </div>
                </div>

                <div class="item">
                    <img src="images/fi2.png" alt="Chicago" style="width:100%;min-height:350px;max-height:600px;">
                    <div class="carousel-caption">
                        <h4>Online Training at Anytime from Anywhere</h4>
                        <p></p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/fi3.png" alt="New York" style="width:100%;min-height:350px;max-height:600px;">
                    <div class="carousel-caption">
                        <h4>Online Training at Anytime from Anywhere</h4>
                        <p></p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="w3-container" style="position:relative">
        <i class="fa-brands fa-whatsapp"></i>
        <a style="position: fixed;
    bottom: 20px; 
    right: 20px; 
    background-color: green;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    z-index: 999; " href="https://wa.me/+918910663162" title="Book Now" target="_blank">
            <i class="fa fa-whatsapp" style="font-size:48px;color:white"></i> </a>
        <div class="bootstrap-styles" id="work">
        </div>


        <div class="container-fluid bg-grey">
            <div class="container py-5">
                <h2 class="tittle">Welcome To Aspireas400</h2>
                <hr>
                <div class="row">
                    <div class="w3-col m6 w3-padding-large  w3-hide-small">
                        <div class="col-sm-12  col-md-6 col-xs-12">
                            <img class="img-fluid lazy entered loaded" class="w3-round w3-image w3-opacity-min"
                                src="images/head.png">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xs-12">
                        <div>
                            <h4 class="font-weight-bold" class="w3-col m6 w3-padding-large">About Us</h4>
                            <p class="text-justify">
                                The Aspireas400 Training Center has been a leading institution in providing
                                comprehensive training for IT professionals in IBM i, iSeries, and AS/400 technologies.
                                With a rich history spanning several years, our commitment to excellence and innovation
                                has positioned us as a trusted resource for individuals seeking expertise in various
                                aspects of these powerful and enduring computing platforms.
                                <br></br>
                                Our core focus lies in empowering IT professionals with the skills and knowledge
                                necessary to excel in the dynamic world of IBM i, iSeries, and AS/400 technologies. We
                                offer a diverse range of courses that cover key areas such as Computer Operations,
                                System Administration, System Security, and Programming in RPG, ILE COBOL400, and
                                Control Language. These courses are carefully designed to cater to the evolving needs of
                                the industry and equip our students with practical, hands-on experience.
                                <br></br>
                                One of the distinguishing features of our training programs is our commitment to
                                accessibility. Recognizing the global nature of the IT industry, we have embraced the
                                digital era by offering our training courses exclusively online and in a live format.
                                This allows professionals from around the world to access our high-quality training
                                sessions, benefit from expert guidance, and enhance their skills without geographical
                                constraints.
                                <br></br>
                                The Aspireas400 Training Center takes pride in its team of experienced and certified
                                instructors who bring a wealth of industry knowledge and practical insights to the
                                virtual classroom. Our instructors are dedicated to providing personalized attention,
                                fostering an interactive learning environment, and ensuring that each participant gains
                                a deep understanding of the subject matter. Through a combination of lectures,
                                demonstrations, and hands-on exercises, our courses are designed to be engaging and
                                effective.
                                <br></br>
                                Whether you are an IT professional looking to broaden your skill set, a recent graduate
                                seeking specialized training, or an organization aiming to upskill your workforce, The
                                Aspireas400 Training Center is committed to meeting your unique training needs. Our
                                courses cater to individuals at various skill levels, from beginners to experienced
                                professionals, ensuring that everyone can find the right program to advance their
                                careers.
                                <br></br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="service" class="container-fluid py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2 class="tittle">Our Platform Features</h2>
                            <div class="brand_border">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </div>
                            <p></p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row features-box ">
                    <!--START SINGLE SERVICE AREA-->
                    <div style="display: flex-wrap; justify-content: space-around;margin-top:20px;margin-left:15px">
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#WorldClassFaculty"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/World-Class-Faculty.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/World-Class-Faculty.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">World-Class Faculty</h4>
                                    <p>Learn from the accomplished teachers with an in-depth understanding of the
                                        subject.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#CuttingEdgeCurriculum"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Cutting-Edge-Curriculum.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Cutting-Edge-Curriculum.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Cutting Edge Curriculum</h4>
                                    <p>Educate yourself with the top-notch study material designed by the EXPERTS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#LiveClasses"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Live-Classes.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Live-Classes.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Live Training</h4>
                                    <p>Learn concepts, practice questions &amp; get your doubts cleared instantly in the
                                        LIVE Classes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex-wrap; justify-content: space-around;margin-top:20px ;margin-left:15px">
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#StudentDiscussionForum"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Student-Discussion-Forum.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Student-Discussion-Forum.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Student Discussion Forum</h4>
                                    <p>Get access to 24*7 Live Discussion group with batchmates &amp; faculties. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#QuizAssignments"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Quiz-&amp;-Assignments.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Quiz-&amp;-Assignments.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Quiz &amp; Assignments</h4>
                                    <p>Practice chapter-wise Quizzes &amp; solve Assignments to learn and revise
                                        concepts.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#VideoLectures"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Video-Lectures.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Video-Lectures.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Video Lectures</h4>
                                    <p>Learn through high-quality &amp; easy to understand video lectures. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex-wrap; justify-content: space-around;margin-top:20px;margin-left:15px">
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal" data-target="#E-books"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/E-books.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/E-books.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">E-books</h4>
                                    <p>Get Important topics &amp; formulas for last-minute revision in the PDF format.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#AlertNotification"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/notification.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/notification.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Alert &amp; Notification</h4>
                                    <p>Stay up to date &amp; get notified every time the course content is updated. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#TrustedContent"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Trusted Content.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Trusted Content.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Trusted Content</h4>
                                    <p>Learn from the comprehensive &amp; interactive course content. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        style="display: flex-wrap; justify-content: space-around;margin-top:20px;margin-bottom:10px;;margin-left:15px">
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#AffordableFeeStructure"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Affordable-Fee-Structure.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Affordable-Fee-Structure.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Affordable Fee Structure</h4>
                                    <p>Learn from the best in the industry with an affordable payment plan. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#OfflineVideolectures"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Online-&amp;-Offline-Video-lectures.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Online-&amp;-Offline-Video-lectures.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Online &amp; Offline Video lectures</h4>
                                    <p>Learn even when you are offline through our in-app video lectures. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12 card-style" data-toggle="modal"
                            data-target="#LearnAnytimeAnywhere"
                            style="width: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="single_service hvr-curl-top-right">
                                <div class="single_service-left">
                                    <div class="icon">
                                        <img class="img-icon lazy entered loaded"
                                            data-src="https://ayasa.spayee.com/s/pages/assets/images/Learn-Anytime-Anywhere.png"
                                            data-ll-status="loaded"
                                            src="https://ayasa.spayee.com/s/pages/assets/images/Learn-Anytime-Anywhere.png">
                                    </div>
                                </div>
                                <div class="single_service-body">
                                    <h4 class="single_service-heading">Learn Anytime Anywhere</h4>
                                    <p>Learn at your own pace through our easy to navigate Responsive Website. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/END SERVICE AREA-->


        <!-- Container -->

        <div class="w3-row-padding w3-center w3-padding-64" id="batches">
            <h1 style=" text-decoration: underline;">Training Schedule for AS/400 Development</h1>
            </br>
            <h4>
                <h3> <strong style=" text-decoration: underline;">Weekdays:</strong></h3>
                </br>
                <h4 style=" padding-right: 10px;">Morning Session: 7:00 AM - 9:00 AM</h4>
                <h4> Evening Session: 9:00 PM - 11:00 PM</h4>

                <h3> <strong style=" text-decoration: underline;">Weekend:</strong></h3>

                <h4>Session: 10:00 AM - 12:00 PM</h4>
                </br>
                <h3> Join our AS/400 Development Training at a time that suits your schedule. Whether you're an early
                    riser
                    or a night owl, we've got you covered! Explore the world of AS/400 development during our convenient
                    weekday and weekend sessions. Enroll now and shape your future in the world of technology.</h3>
            </h4>
        </div>

        <!-- Pricing Row -->
        <div class="w3-row-padding w3-center w3-padding-64" id="courses">
            <h2>Courses</h2>
            <p>Choose a Courses plan that fits your needs.</p><br>
            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                        <p class="w3-xlarge">IBM AS/400</p>
                    </li>
                    <li class="w3-padding-16"><b>Course Duration 4 week</b> </li>
                    <li class="w3-padding-16"><b>OS/400 System Concepts & Architecture</b></li>
                    <li class="w3-padding-16"><b>DB2/400 (DDS Interface)</li>
                    <li class="w3-padding-16"><b>CL/400: CL Control Programming</b></li>
                    <li class="w3-padding-16"><b>RPGLE Programming</b></li>
                    <li class="w3-padding-16"><b>ILE Concept(Integrated Language Environment)</b></li>
                    <li class="w3-padding-16"><b>COBOL400</b></li>

                    <li class="w3-theme-l5 w3-padding-24">
                        <button onclick="document.getElementById('id01').style.display='block'"
                            class="w3-button w3-green w3-large" class="w3-button w3-teal w3-padding-large"><i
                                class="fa fa-check"></i> Sign Up
                            Courses</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme-l2">
                        <p class="w3-xlarge">Java On AS400</p>
                    </li>
                    <li class="w3-padding-16"><b>Course Time</b> 3 week</li>
                    <li class="w3-padding-16"><b>Set up Java on AS/400</b></li>
                    <li class="w3-padding-16"><b>Set up Remote AWT</b></li>
                    <li class="w3-padding-16"><b>Create a Java application for your AS/400</b></li>
                    <li class="w3-padding-16"><b>Java and AS/400 resources</b></li>
                    <li class="w3-padding-16"><b>AS/400-speciﬁc Java education</b></li>
                    <li class="w3-padding-16"><b>General Java education</b></li>

                    <li class="w3-theme-l5 w3-padding-24">
                        <button onclick="document.getElementById('id02').style.display='block'"
                            class="w3-button w3-green w3-large" class="w3-button w3-teal w3-padding-large"><i
                                class="fa fa-check"></i> Sign Up Courses</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                        <p class="w3-xlarge">Python On AS400</p>
                    </li>
                    <li class="w3-padding-16"><b>Course Time</b> 3 week</li>
                    <li class="w3-padding-16"><b>Introduction to Python for IBM i</b></li>
                    <li class="w3-padding-16"><b>A little about Python</b></li>
                    <li class="w3-padding-16"><b>IDE(Integrated development environment)</b></li>
                    <li class="w3-padding-16"><b>Syntax 101(Variables,Strings,Functions,Control Structures)</b></li>
                    <li class="w3-padding-16"><b>Database</b></li>
                    <li class="w3-padding-16"><b>Command Line</b></li>
                    <li class="w3-theme-l5 w3-padding-24">
                        <button onclick="document.getElementById('id03').style.display='block'"
                            class="w3-button w3-green w3-large" class="w3-button w3-teal w3-padding-large"><i
                                class="fa fa-check"></i> Sign Up Courses</button>
                    </li>
                </ul>
            </div>

            <br>
            <div class="w3-row w3-border">
                <div class="w3-half w3-container">
                    <ul class="w3-ul w3-border w3-hover-shadow">
                        <li class="w3-theme">
                            <p class="w3-xlarge">SAP</p>
                        </li>
                        <li class="w3-padding-16"><b>Course Duration 4 week</b> </li>
                        <li class="w3-padding-16"><b>Introduction to SAP</b></li>
                        <li class="w3-padding-16"><b>Modularization Techniques</li>
                        <li class="w3-padding-16"><b>Selection Screen Design</b></li>
                        <li class="w3-padding-16"><b>ALV (ABAP List Viewer)</b></li>
                        <li class="w3-padding-16"><b>Cross Applications</b></li>
                        <li class="w3-padding-16"><b>SAP Scripts</b></li>
                        <li class="w3-padding-16"><b>BAPI</b></li>
                        <li class="w3-theme-l5 w3-padding-24">
                            <button onclick="document.getElementById('id04').style.display='block'"
                                class="w3-button w3-green w3-large" class="w3-button w3-teal w3-padding-large"><i
                                    class="fa fa-check"></i> Sign Up
                                Courses</button>
                        </li>
                    </ul>
                </div>
                <div class="w3-half w3-container">
                    <ul class="w3-ul w3-border w3-hover-shadow">
                        <li class="w3-theme">
                            <p class="w3-xlarge">Matlab</p>
                        </li>
                        <li class="w3-padding-16"><b>Course Duration 4 week</b> </li>
                        <li class="w3-padding-16"><b>Matrix (Array Design)</b></li>
                        <li class="w3-padding-16"><b>Graphics</li>
                        <li class="w3-padding-16"><b>Symbolic Calculation</b></li>
                        <li class="w3-padding-16"><b>Publishing Report</b></li>
                        <li class="w3-padding-16"><b>Operators</b></li>
                        <li class="w3-padding-16"><b>GUI (Graphical User Interface)</b></li>
                        <li class="w3-padding-16"><b>Introduction Of image Processing</b></li>
                        <li class="w3-theme-l5 w3-padding-24">
                            <button onclick="document.getElementById('id05').style.display='block'"
                                class="w3-button w3-green w3-large" class="w3-button w3-teal w3-padding-large"><i
                                    class="fa fa-check"></i> Sign Up
                                Courses</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <?php
    // Define variables and initialize with empty values
    $course = $name = $email = $phone = $message = "";
    $course_err = $name_err = $email_err = $phone_err = $message_err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
            $name_err = "Please enter your name.";
        } else {
            $name = test_input($_POST["name"]);
        }
        // Validate email
        if (empty($_POST["email"])) {
            $email_err = "Please enter your email.";
        } else {
            $email = test_input($_POST["email"]);
            // Check if email address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Invalid email format.";
            }
        }
        // Validate message
        if (empty($_POST["message"])) {
            $message_err = "Please enter your message.";
        } else {
            $message = test_input($_POST["message"]);
        }
        // Validate phone
        if (empty($_POST["phone"])) {
            $phone_err = "Please enter your message.";
        } else {
            $phone = test_input($_POST["phone"]);
        }
        // Validate course
        if (empty($_POST["course"])) {
            $course_err = "Please enter your message.";
        } else {
            $course = test_input($_POST["course"]);
        }
        // If all fields are filled, you can proceed further
        if (empty($name_err) && empty($phone_err)) {
            $servername = "srv1111.hstgr.io:3306";
            $database = "u925226643_contacts";
            $username = "u925226643_contacts";
            $password = "Contact7865";
            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO contact (name, email, phone,message,course) VALUES (' $name', '$email','$phone', '$message','$course')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Name: $name\nEmail: $email\nPhone: $phone');</script>";

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }

    // Function to sanitize user input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
        <div class="w3-row">
            <div class="w3-col m5">
                <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>

                <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Bharat (India)</p>
                <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 89106 63162</p>
                <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  training@aspireas400.com
                </p>
                <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  info@aspireas400.com</p>
            </div>
            <div class="w3-col m7">
                <h4 class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"><b>Contact Me</b></h4>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="w3-section">
                        <label>Name</label>
                        <input class="w3-input w3-border" type="text" id="name" name="name" required>
                    </div>
                    <div class="w3-section">
                        <label>Phone</label>
                        <input class="w3-input w3-border" type="text" id="phone" name="phone" required>
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input w3-border" type="text" id="email" name="email" required>
                    </div>
                    <div class="w3-section">
                        <label>Message</label>
                        <input class="w3-input w3-border" type="text" id="message" name="message" required>
                    </div>
                    <div class="w3-section">
                        <label>course</label>
                        <input class="w3-input w3-border" type="text" id="course" name="course" required>
                    </div>
                    <button type="submit" name="submit" value="Submit"
                        class="w3-button w3-block w3-black w3-margin-bottom">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
        <h4>Follow Us</h4>
        <a href="https://www.facebook.com/people/Aspireas400-Training-Center/61555851421691/" target="_blank"
            class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i
                class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/Aspireas400" target="_blank" class="w3-button w3-large w3-teal"
            href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/@Aspireas400TrainingCenter" target="_blank" class="w3-button w3-large w3-teal"
            href="javascript:void(0)" title="YouTube +"><i class="fa fa-youtube-play"></i></a>
        <a href="https://www.instagram.com/aspireas400/" target="_blank" class="w3-button w3-large w3-teal"
            href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
        <a href="http://www.linkedin.com/in/aspireas-training-center-5193602b0" target="_blank"
            class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i
                class="fa fa-linkedin"></i></a>
        <p>Powered by <a href="https://www.aspireas400.com/" target="_blank">Aspireas400</a></p>

        <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
            <a class="w3-button w3-theme" href="https://www.aspireas400.com/"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
    </footer>

    <script>
        // Script for side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "300px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }

        // Close side navigation
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>


    <!---MODAL---->

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="w3-section">
                    <label><b>Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name"
                        id="name" required>
                    <label><b>Phone / Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="phone" placeholder="Enter Phone / Email"
                        name="phone" id="phone" required>
                    <label><b>Course</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" id="course" name="course" value="AS400">
                    <b></b>
                    <button type="submit" name="submit" value="Submit"
                        onclick="downloadFileIBMR();  downloadFileIBMC(); "
                        class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id01').style.display='none'" type="button"
                    class="w3-button w3-red">Cancel</button>
            </div>

        </div>
    </div>
    <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id02').style.display='none'"
                    class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="w3-section">
                    <label><b>Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name"
                        id="name" required>
                    <label><b>Phone / Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="phone" placeholder="Enter Phone / Email"
                        name="phone" id="phone" required>
                    <label><b>Course</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" id="course" name="course" value="JAVA">
                    <b></b>
                    <button type="submit" name="submit" value="Submit" onclick="downloadFileJava()"
                        class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id02').style.display='none'" type="button"
                    class="w3-button w3-red">Cancel</button>
            </div>

        </div>
    </div>
    <div id="id03" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id03').style.display='none'"
                    class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="w3-section">
                    <label><b>Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name"
                        id="name" required>
                    <label><b>Phone / Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="phone" placeholder="Enter Phone / Email"
                        id="phone" name="phone" required>
                    <label><b>Course</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" id="course" name="course"
                        value="PYTHON">
                    <b></b>
                    <a href="gst.pdf" download>
                        <button type="submit" name="submit" value="Submit" onclick="downloadFilePython()"
                            class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                    </a>
                </div>
            </form>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id03').style.display='none'" type="button"
                    class="w3-button w3-red">Cancel</button>
            </div>

        </div>
    </div>

    <div id="id04" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id04').style.display='none'"
                    class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="w3-section">
                    <label><b>Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name"
                        id="name" required>
                    <label><b>Phone / Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="phone" placeholder="Enter Phone / Email"
                        name="phone" id="phone" required>
                    <label><b>Course</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" id="course" name="course" value="SAP">
                    <b></b>
                    <button type="submit" name="submit" value="Submit" onclick="downloadFileSAP()"
                        class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id04').style.display='none'" type="button"
                    class="w3-button w3-red">Cancel</button>
            </div>

        </div>
    </div>

    <div id="id05" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id05').style.display='none'"
                    class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="w3-section">
                    <label><b>Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name"
                        id="name" required>
                    <label><b>Phone / Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="phone" placeholder="Enter Phone / Email"
                        name="phone" id="phone" required>
                    <label><b>Course</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" id="course" name="course" value="Matlab">
                    <b></b>
                    <button type="submit" name="submit" value="Submit" onclick="downloadFileMatlab()"
                        class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id05').style.display='none'" type="button"
                    class="w3-button w3-red">Cancel</button>
            </div>

        </div>
    </div>

    <script>
        function downloadFilePython() {
            // Replace 'path/to/your/file.ext' with the actual path to your file
            var filePath = 'PythonOnIBMAS400Development_CourseContent.pdf';

            // Create an invisible <a> element
            var link = document.createElement('a');

            // Set the href attribute to the file path
            link.href = filePath;

            // Set the download attribute with the desired file name
            link.download = 'Python On IBM AS 400 Development_Course Content.pdf';

            // Append the <a> element to the document
            document.body.appendChild(link);

            // Trigger a click event on the <a> element
            link.click();

            // Remove the <a> element from the document
            document.body.removeChild(link);
        }
    </script>
    <script>
        function downloadFileJava() {
            // Replace 'path/to/your/file.ext' with the actual path to your file
            var filePath = 'Java On IBM AS 400 Development_Course Content.pdf';

            // Create an invisible <a> element
            var link = document.createElement('a');

            // Set the href attribute to the file path
            link.href = filePath;

            // Set the download attribute with the desired file name
            link.download = 'Java On IBM AS 400 Development_Course Content.pdf';

            // Append the <a> element to the document
            document.body.appendChild(link);

            // Trigger a click event on the <a> element
            link.click();

            // Remove the <a> element from the document
            document.body.removeChild(link);
        }
    </script>
    <script>
        function downloadFileIBMC() {
            // Replace 'path/to/your/file.ext' with the actual path to your file
            var filePath = 'IBM AS 400 Development_COBOL400_Course Content.pdf';

            // Create an invisible <a> element
            var link = document.createElement('a');

            // Set the href attribute to the file path
            link.href = filePath;

            // Set the download attribute with the desired file name
            link.download = 'IBM AS 400 Development_COBOL400_Course Content.pdf';

            // Append the <a> element to the document
            document.body.appendChild(link);

            // Trigger a click event on the <a> element
            link.click();

            // Remove the <a> element from the document
            document.body.removeChild(link);
        }
    </script>
    <script>
        function downloadFileIBMR() {
            // Replace 'path/to/your/file.ext' with the actual path to your file
            var filePath = 'IBM AS 400 Development_RPGLE_Course Content-1.pdf';

            // Create an invisible <a> element
            var link = document.createElement('a');

            // Set the href attribute to the file path
            link.href = filePath;

            // Set the download attribute with the desired file name
            link.download = 'IBM AS 400 Development_RPGLE_Course Content-1.pdf';

            // Append the <a> element to the document
            document.body.appendChild(link);

            // Trigger a click event on the <a> element
            link.click();

            // Remove the <a> element from the document
            document.body.removeChild(link);
        }
    </script>

<script>
        function downloadFileSAP() {
            // Replace 'path/to/your/file.ext' with the actual path to your file
            var filePath = 'SAP Syllabus.pdf';

            // Create an invisible <a> element
            var link = document.createElement('a');

            // Set the href attribute to the file path
            link.href = filePath;

            // Set the download attribute with the desired file name
            link.download =  'SAP Syllabus.pdf';

            // Append the <a> element to the document
            document.body.appendChild(link);

            // Trigger a click event on the <a> element
            link.click();

            // Remove the <a> element from the document
            document.body.removeChild(link);
        }
    </script>

<script>
        function downloadFileMatlab() {
            // Replace 'path/to/your/file.ext' with the actual path to your file
            var filePath = 'MatLab Syllabus.pdf';

            // Create an invisible <a> element
            var link = document.createElement('a');

            // Set the href attribute to the file path
            link.href = filePath;

            // Set the download attribute with the desired file name
            link.download = 'MatLab Syllabus.pdf';

            // Append the <a> element to the document
            document.body.appendChild(link);

            // Trigger a click event on the <a> element
            link.click();

            // Remove the <a> element from the document
            document.body.removeChild(link);
        }
    </script>



    <div class="modal fade" id="OfflineVideolectures" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">OfflineVideolectures Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the OfflineVideolectures.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LearnAnytimeAnywhere" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Learn Anytime Anywhere</h4>
                </div>
                <div class="modal-body">
                    <p>Learn at your own pace through our easy to navigate Responsive Website.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="AffordableFeeStructure" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Affordable Fee Structure</h4>
                </div>
                <div class="modal-body">
                    <p>Join our comprehensive AS/400 Development Training program at an affordable fee of Rs. 20,000.
                        Unlock the skills and knowledge needed for a successful career in AS/400 development. Your
                        investment in education paves the way for valuable expertise and career opportunities. Enroll
                        now and embark on a journey of professional growth!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LearnAnytimeAnywhere" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="OfflineVideolectures" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">OfflineVideolectures Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the OfflineVideolectures.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LearnAnytimeAnywhere" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="OfflineVideolectures" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">OfflineVideolectures Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the OfflineVideolectures.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LearnAnytimeAnywhere" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="OfflineVideolectures" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">OfflineVideolectures Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the OfflineVideolectures.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LearnAnytimeAnywhere" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="OfflineVideolectures" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">OfflineVideolectures Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the OfflineVideolectures.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LearnAnytimeAnywhere" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="OfflineVideolectures" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">OfflineVideolectures Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the OfflineVideolectures.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="LiveClasses" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Live Training</h4>
                </div>
                <div class="modal-body">
                    <p>Dive into the interactive and real-time learning experience offered through our Live Classes
                        feature.
                        Engage directly with instructors and classmates, ask questions, and participate in discussions
                        in real-time.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>