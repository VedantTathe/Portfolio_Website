<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/c8a0e865fe.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="first_div">
        <div class="second_div">
            <div class="third_div">
                <!-- Navbar and Hero Page -->
                <div id="hero_page">
                    <nav id="navbar">
                        <div>
                            <img src="./images/logo.jpg" alt="">
                            <div id="logo_text">
                                <h1 style="color: orangered;">V</h1>
                                <h1 style="margin-left: -.5rem;">edant</h1>
                                <h1 style="color: orangered;">&nbsp;T</h1>
                                <h1 style="margin-left: -.5rem;">athe</h1>
                            </div>

                        </div>
                        <div id="menu">
                            <ul id="menubar">
                                <i class="fa-solid fa-xmark" onclick="menuClose()"></i>
                                <div id="nav_links">

                                    <li class="nav_links"><a href="#hero_page">Home</a></li>
                                    <li class="nav_links"><a href="#about_page">About</a></li>
                                    <li class="nav_links"><a href="#services_page">Services</a></li>
                                    <li class="nav_links"><a href="#projects_page">Projects</a></li>
                                    <li class="nav_links"><a href="#contacts_page">Contact</a></li>

                                </div>
                            </ul>
                            <i class="fa-solid fa-bars" onclick="menuOpen()"></i>
                        </div>
                    </nav>

                    <?php
                    // session_start();
                    if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                        $msg = $_SESSION["msg"];
                        $name = $_SESSION["name"];
                        $email = $_SESSION["email"];
                        $message = $_SESSION["message"];


                        echo '<div id="contact_alert"><div id="contact_alert_msg"><strong>'.$name.'</strong> Your '.$msg.'</div><button id="contact_msg_button"><i class="fa-solid fa-xmark"></i></button></div>';
                        session_unset();
                    }
                    ?>


                    <div class="hero_img_div">
                        <img id="hero_img" src="./images/WhatsApp Image 2023-06-24 at 12.59.32.jpg" alt="">
                    </div>
                    <div class="hero_text_div">

                        <div class="row_hero">
                            <div id="hero_text" class="hero_col_1">
                                <p>Web Developer</p>
                                <h1>Hi, I`m <div class="name" id="myname">Vedant </div> <br>Tathe From India</h1>
                                <div class="hero_symbols">
                                    <a href="https://github.com/VedantTathe/"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://youtube.com/@vedant_tathe"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://twitter.com/vedant_tathe_07"><i
                                            class="fa-brands fa-square-twitter"></i></a>
                                    <a href="https://www.instagram.com/vedant_tathe_07/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/vedant-tathe-04b5a2262/"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <!-- <div class="outer_div_hero_symbols">
    

</div> -->
                            <div class="hero_col_2">
                                <!-- <img id="hero_img2" src="./images/WhatsApp Image 2023-06-24 at 12.59.32.jpg" alt=""> -->
                                <div>
                                    <img id="hero_img2"
                                        src="./images/sketch_profile-fotor-bg-remover-20230622193238.jpg" alt="">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- hide loader and slider
                <div id="intro">
                    <div id="intro_div">
                        <div id="text_div">
                            <div class="text_div">
                                <h1 class="text">Welcome</h1>
                            </div>
                            <div class="text_div">
                                <h1 class="text">Your Site is Loading</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="slider"></div> -->

                <!-- About Section -->
                <div id="about_page">
                    <div class="container">
                        <div class="row">
                            <div class="about_col_1">
                                <img id="about_img" src="./images/WhatsApp Image 2023-06-24 at 12.59.32.jpg" alt="">
                            </div>
                            <div class="about_col_2">
                                <h1>About Me</h1>
                                <p id="about">
                                    Hi, I`am Vedant Tathe. Currently studying in final year Government Polytechnic,
                                    Amravati. Learning various skills like Web Development, Software and Android
                                    Application Development.
                                </p>


                                <div class="about_menu">
                                    <h3 class="tab_links active_link" id="skills" onclick="tabClick('skills')">Skills
                                    </h3>
                                    <h3 class="tab_links" id="education" onclick="tabClick('education')">
                                        Education
                                    </h3>
                                </div>



                                <div class="tab_content active_tab" id="skills_tab">

                                    <div class=".skills_outer">

                                        <div class="tab_arrange">

                                            <div>
                                                <ul>
                                                    <li><span>C, C++</span><br>
                                                        <progress value="95" max="100"></progress>
                                                        <br>
                                                    </li>
                                                    <li><span>JAVA</span><br><progress value="90" max="100"></progress>
                                                        <br>
                                                    </li>
                                                    <li><span>HTML, CSS</span><br><progress value="95"
                                                            max="100"></progress>
                                                        <br>
                                                    </li>
                                                    <li><span>JAVASCIPT</span><br>
                                                        <progress value="85" max="100"></progress>
                                                        <br>
                                                    </li>
                                                </ul>

                                            </div>

                                            <div class="more_skills">
                                                <ul>
                                                    <li><span>SERVLETS & JSP</span><br><progress value="85"
                                                            max="100"></progress>
                                                        <br>
                                                    </li>
                                                    <li>
                                                        <span>BASIC NODEJS, EXPRESSJS</span><br>
                                                        <progress value="75" max="100"></progress>
                                                        <br>
                                                    </li>
                                                    <li><span>BASIC MONGODB</span><br><progress value="75"
                                                            max="100"></progress>
                                                        <br>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="subtitle">
                                            <button class="subdown" id="btn1" onclick="displayMoreSkills(true)">See
                                                More</button>
                                            <button class="subdown" id="btn1-alt" onclick="displayMoreSkills(false)">See
                                                Less</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab_content  " id="education_tab">

                                    <ul>
                                        <li><span>Diploma in Computer Engineering</span><br>College: Government
                                            Polytechnic,
                                            Amravati <br>Start Year: 2021 <br>End Year: 2024<br>Percentage: (1st Year)
                                            92%
                                            and
                                            2nd Year </li>
                                        <li><span>SSC</span><br>School: Saraswati Vidyalaya, Amravati<br>Percentage:
                                            98.40%
                                        </li>
                                    </ul>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Section-->
                <div class="services" id="services_page">
                    <div class="container">
                        <div class="subtitle">
                            <h1>My Services</h1>
                        </div>

                        <div class="service_box" id="idservice_box">
                            <div>
                                <h1>Website Development</h1>
                                <p style="font-family: 'calibri';">I have good knowlege of HTML, CSS, JAVASCIPT and
                                    SERVLETS, JSP. Now Exploring new Programing Languages Like REACT JS and for backend
                                    NODE, EXPRESS JS, MONGODB </p>
                                temporibus debitis libero! Debitis sequi ab mollitia optio delectus?</p>
                            </div>
                            <div>
                                <h1>App Development</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi molestias laboriosam
                                    temporibus debitis libero! Debitis sequi ab mollitia optio delectus?</p>
                            </div>
                            <div>
                                <h1>Sofware Development</h1>
                                <p style="font-family: 'calibri';">I am also learning Software Development and learnt
                                    various languages like VB.NET and JAVA SWING for developing a software</p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Projects -->
                <div class="project_section" id="projects_page">
                    <div class="container">
                        <h1 class="subtitle" style="color: orange;">My Projects</h1>
                        <div class="projects" id="idprojects">
                            <div class="projects_box">
                                <img src="./images/project1.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://vedanttathe.infinityfreeapp.com">Portfolio Website</a></h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                            <div class="projects_box">
                                <img src="./images/project4.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link" id="project4btn">
                                    <h3><a>Vedant's Electrohub</a></h3>
                                </div>
                                <!-- ****************************************************************** -->
                            </div>
                            <div id="project4">
                                <span id="project4-close"><i class="fa fa-close"></i></span>
                                <iframe
                                    src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:7091089862686097408"
                                    height="400" width="500" frameborder="0" allowfullscreen=""
                                    title="Embedded post"></iframe>
                            </div>
                            <div class="projects_box">
                                <img src="./images/project2.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://hostingerclonevgt.netlify.app">Hostinger Clone</a></h3>
                                </div>

                            </div>

                            <div class="projects_box projects_box_hide">
                                <img src="./images/project3.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://websiteloaderanimations.netlify.app/">Wesite Loader Ani..</a>
                                    </h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                            <div class="projects_box projects_box_hide">
                                <img src="./images/KeepNote.png" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://keepnotevgt.netlify.app">Keep Note</a></h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                            <div class="projects_box projects_box_hide">
                                <img src="./images/jokesbyme.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://jokesbyme.netlify.app">Random Jokes</a></h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                            <div class="projects_box projects_box_hide">
                                <img src="./images/lightonoff.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://lightonoffjs.netlify.app">Light ON OFF</a></h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                            <div class="projects_box projects_box_hide">
                                <img src="./images/temp_conv.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://tempratureconvertorvgt.netlify.app">Temprature Convertor</a>
                                    </h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                            <div class="projects_box projects_box_hide">
                                <img src="./images/website_counter.jpg" alt="">
                                <!-- ********************************************** -->
                                <div class="projects_link">
                                    <h3><a href="https://websitecounters.netlify.app/">Website Counters</a></h3>
                                </div>

                                <!-- ****************************************************************** -->
                            </div>
                        </div>
                        <div class="subtitle">
                            <button class="subdown" id="btn2" onclick="displayMoreProjects(true)">See More</button>
                            <button class="subdown" id="btn2-alt" onclick="displayMoreProjects(false)">See Less</button>

                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div id="contacts_page">
                    <div class="container">
                        <div class="row">
                            <div class="contact_left">
                                <h1 class="contactme" style="color: orange;">Contact Me</h1>

                                <p><a
                                        href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSPFrFFVwmLxKMHvrtjtlccwRcDMSjFLWLFDBPBdhbxMkFttsvwJPFDhldHPNzQTDTqvLJNq"><i
                                            class="fa-solid fa-paper-plane"></i></a>tathevedant70@gmail.com</p>
                                <p><i class="fa-solid fa-phone"></i>9112877202</p>

                                <div class="symbols">

                                    <a href="https://github.com/VedantTathe/"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://youtube.com/@vedant_tathe"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://twitter.com/vedant_tathe_07"><i
                                            class="fa-brands fa-square-twitter"></i></a>
                                    <a href="https://www.instagram.com/vedant_tathe_07/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/vedant-tathe-04b5a2262/"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>

                                <a href="./images/Vedant_Tathe_Resume.pdf" download><button name="download_resume"
                                        download id="resume">Download Resume</button></a>
                            </div>
                            <div class="contact_right">
                                <form action="./contact.php" method="post">
                                    <input class="form" type="text" name="Name" id="name" placeholder="Your Name"
                                        required autocomplete="off">
                                    <input class="form" type="email" name="Email" id="email" placeholder="Your Email"
                                        required>
                                    <textarea class="form" name="Message" id="message" rows="6"
                                        placeholder="Your Message" autocomplete="off"></textarea>

                                    <div> <button class="form" type="submit" name="Button" id="button">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright Section -->
                <div class="copyright_sec">
                    <p id="copyright"> Copyright <i class="fa-solid fa-copyright"></i> Vedant. Developed By <span
                            id="copyrightsec_name" class="name">Vedant Tathe</span></p>
                </div>
            </div>

        </div>

    </div>



    <script src="./js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./gsap.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script> -->



</body>

</html>