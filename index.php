<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include '_dbconnect.php';
$name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `hireme` (`id`,`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message',current_timestamp());";
     if($conn->query($sql) == true){
       
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Protfolio</title>

    <!-- Css Link/File  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/skin-color/color-1.css" />
    <!-- Style Switcher -->
    <link rel="stylesheet" href="css/skin-color/color-1.css" class="alternate-style" title="color-1" />
    <link rel="stylesheet" href="css/skin-color/color-2.css" class="alternate-style" title="color-2" disabled />
    <link rel="stylesheet" href="css/skin-color/color-3.css" class="alternate-style" title="color-3" disabled />
    <link rel="stylesheet" href="css/skin-color/color-4.css" class="alternate-style" title="color-4" disabled />
    <link rel="stylesheet" href="css/skin-color/color-5.css" class="alternate-style" title="color-5" disabled />
    <link rel="stylesheet" href="css/style-switcher.css" />
</head>

<body>

    <div class="main-container">
        <div class="aside">
            <div class="logo">
                <a href="#"> <span>T</span>hakur</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li>
                    <a href="#home" class="active"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="#about"> <i class="fa fa-user"></i> About </a>
                </li>
                <li>
                    <a href="#services"> <i class="fa fa-list"></i>Service </a>
                </li>
                <li>
                    <a href="#portfolio"> <i class="fa fa-briefcase"></i> portfolio </a>
                </li>
                <li>
                    <a href="#contact"> <i class="fa fa-comments"></i> Contact</a>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <section class="home active section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">
                                Hey! My name is <span class="name">Man Mohan Singh</span>
                            </h3>
                            <h3 class="my-profession">
                                I' m a <span class="typing"> Web designer</span>
                            </h3>
                            <p>
                                Self-motivated and hardworking fresher seeking for an
                                opportunity to work in a challenging environment to prove my
                                skills and utilize my knowledge intelligence in the growth of
                                the organization.
                            </p>
                            <a href="https://drive.google.com/drive/u/0/folders/1-Jg091700hrhLL_p20fZrW_4eOCozRv3"
                                class="btn">Download Resume</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="/portfolio/Image/It's Me.jpeg" style="height: 400px; width: 300px"
                                alt="Man Mohan Singh" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>Hello <span>Everyone</span></h3>
                                    <p>
                                        My name is Man Mohan Singh. I'm an B.tech student at IIITN
                                        Computer Science Department. I was born and raised in
                                        Reabareli, Uttter Pradesh.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>18 Oct 2003</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>19</span></p>
                                        </div>

                                        <div class="info-item padd-15">
                                            <p>
                                                Website :
                                                <span>Youtube:
                                                    <a href="https://www.youtube.com/channel/UCusljizWA6Gw_nAAFBzB4AQ"
                                                        style="color: blue">
                                                        Click Me</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>manmohansingh8422@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree : <span>Bachelor of Technology</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone: <span>+91 8433376122</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City: <span>Raebareli,Utter Pradesh</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">

                                            <a href="#contact" data-section-index="1" class="btn hire-me">Hire Me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 96%"></div>
                                                <div class="skill-percent">95%</div>
                                            </div>
                                        </div>

                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 87%"></div>
                                                <div class="skill-percent">87%</div>
                                            </div>
                                        </div>

                                        <div class="skill-item padd-15">
                                            <h5>Javascript</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 79%"></div>
                                                <div class="skill-percent">79%</div>
                                            </div>
                                        </div>

                                        <div class="skill-item padd-15">
                                            <h5>React</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 69%"></div>
                                                <div class="skill-percent">69%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shodow-dark">

                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2020 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">
                                                        Bachlor in Computer Science
                                                    </h4>
                                                    <p class="timeline-text">
                                                        Bachelor of Technology(B.tech) in Indian Institute
                                                        of Information Technology, Nagpur - IIITN
                                                        <a href="https://iiitn.ac.in/" style="color: blue">
                                                            Visit
                                                        </a>
                                                        with the CGPA 6.5. I have core knowledge about
                                                        C/C++ Language. And also I have knowledge about
                                                        Java and Python Language.
                                                    </p>
                                                </div>


                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2020
                                                    </h3>
                                                    <h4 class="timeline-title">Intermediate</h4>
                                                    <p class="timeline-text">
                                                        Intermediate in Gopal Saraswati Vidya Mandir
                                                        Senior Secondary School
                                                        <a href="http://www.gopalsvm.org/" style="color: blue">
                                                            Visit
                                                        </a>
                                                        Raebareli with the Percentage(%) 61.
                                                    </p>
                                                </div>


                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2018
                                                    </h3>
                                                    <h4 class="timeline-title">High School</h4>
                                                    <p class="timeline-text">
                                                        High School in Gopal Saraswati Vidya Mandir Senior
                                                        Secondary School<a href="http://www.gopalsvm.org/"
                                                            style="color: blue">
                                                            Visit
                                                        </a>
                                                        Raebareli with the Percentage(%) 60.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="experience padd-15">
                    <h3 class="title">Experience</h3>
                    <div class="row">
                      <div class="timeline-box padd-15">
                        <div class="timeline shodow-dark">
                          <!-- timeline! items  
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i> 2012 - 2017
                            </h3>
                            <h4 class="timeline-title">
                              Bachler in Computer Science
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Voluptatibus, dolorem aperiam veritatis
                              quisquam officiis culpa natus hic consectetur!
                              Atque nisi adipisci quae blanditiis cum aperiam,
                              reiciendis similique nihil exercitationem maiores
                              nostrum, eaque ipsum quas assumenda omnis minus
                              fugiat? Vero non iusto assumenda deleniti eos nemo
                              ad est doloremque omnis nisi.
                            </p>
                          </div>

                          <!-- timeline! items  
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i> 2012 - 2017
                            </h3>
                            <h4 class="timeline-title">
                              Bachler in Computer Science
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Voluptatibus, dolorem aperiam veritatis
                              quisquam officiis culpa natus hic consectetur!
                              Atque nisi adipisci quae blanditiis cum aperiam,
                              reiciendis similique nihil exercitationem maiores
                              nostrum, eaque ipsum quas assumenda omnis minus
                              fugiat? Vero non iusto assumenda deleniti eos nemo
                              ad est doloremque omnis nisi.
                            </p>
                          </div>

                          <!-- timeline! items  
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i> 2012 - 2017
                            </h3>
                            <h4 class="timeline-title">
                              Bachler in Computer Science
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Voluptatibus, dolorem aperiam veritatis
                              quisquam officiis culpa natus hic consectetur!
                              Atque nisi adipisci quae blanditiis cum aperiam,
                              reiciendis similique nihil exercitationem maiores
                              nostrum, eaque ipsum quas assumenda omnis minus
                              fugiat? Vero non iusto assumenda deleniti eos nemo
                              ad est doloremque omnis nisi.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="service section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>Graphic Design</h4>
                                <p>I have knowledge about Graphic Design both UI and UX.</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <h4>Web Development</h4>
                                <p>
                                    I have decent knowledge about web development both back-end
                                    and front-end.
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Machine Learning</h4>
                                <p>Now I'm currently working on Machine learning Project.</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>Bloging</h4>
                                <p>
                                    My blogs are based on photography, Wrting, and Treveling.
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Coding</h4>
                                <p>I have core knowledge about C/C++.</p>
                            </div>
                        </div>

                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Marketing</h4>
                                <p>
                                    I have Some knowledge about Stock marketing and still
                                    Exploring.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="portfolio section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                            <h2>My Last Projects:</h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="/portfolio/Image/abcde.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="  /portfolio/Image/abcde.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="/portfolio/Image/thumbnail.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="/portfolio/Image/thumbnail.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="/portfolio/Image/abcde.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="/portfolio/Image/abcde.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have You Any Question</h3>
                    <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
                    <div class="row">

                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h4>Call Us On</h4>
                            <p>+91 8433376122</p>
                        </div>

                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <h4>Home</h4>
                            <p>Raebareli-229001</p>
                        </div>

                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h4>Email</h4>
                            <p>
                                <a href="mailto:manmohansingh8422@gmail.com" style="color: rgb(103, 103, 243)">Email
                                    Me</a>
                            </p>
                        </div>

                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa-brands fa-linkedin" style="color: rgb(228, 31, 71); font-size: 30px"></i>
                            </div>
                            <h4>Linkdin</h4>
                            <p>
                                <a href="https://www.linkedin.com/in/man-mohan-singh-3639a3216/"
                                    style="color: rgb(66, 57, 241)">Visit Me</a>
                            </p>
                        </div>

                    </div>
                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">
                        I 'M VERY RESPOSIVE TO MESSAGES
                    </h4>

                    <form action="index.php" method="post">
                        <div class="row">
                            <div class="contact-form padd-15">
                                <div class="row">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" class="form-control"
                                                placeholder="Subject" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <button type="submit" class="btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <div class="style-switcher">
                <div class="style-switcher-toggler s-icon">
                    <i class="fas fa-cog fa-spin"> </i>
                </div>
                <div class="day-night s-icon">
                    <i class="fas"> </i>
                </div>
                <h4>Theme Colors</h4>
                <div class="colors">
                    <span class="color-1" onclick="setActiveStyle('color-1')"> </span>
                    <span class="color-2" onclick="setActiveStyle('color-2')"> </span>
                    <span class="color-3" onclick="setActiveStyle('color-3')"> </span>
                    <span class="color-4" onclick="setActiveStyle('color-4')"> </span>
                    <span class="color-5" onclick="setActiveStyle('color-5')"> </span>
                </div>
            </div>
            <!-- Style Switcher End -->
        </div>
    </div>

    <!-- Javascript (js) Link/File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="/portfolio/js/script.js"></script>
    <script src="/portfolio/js/style-switcher.js"></script>
</body>

</html>