<?php include "other/dbcon.php"; ?>


<?php

if($_SERVER['REQUEST_METHOD']=='GET')
{
    $compName = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    $ip = $_SERVER["REMOTE_ADDR"];

    $sql="INSERT INTO `onlyvisit` (`sl`, `comp`, `ip`, `date_and_time`) VALUES (NULL, '$compName', '$ip', current_timestamp())";
    
    $result=mysqli_query($conn,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="icon" type="image" href="/assets/img/sc.ico">
  <title>Suvendu Chowdhury</title>
  <link rel="icon" type="image" href="/assets/img/sc.ico">
  <meta content="I am Suvendu Chowdhury and I am a passionate Python coder, but who has a good command in Javascript, JQuery,Servlets and JSP, Spring Framework, MongoDB Also I am a student and an enthusiastic techie." name="description">
  <meta content="I am Suvendu Chowdhury and I am a passionate Python coder, but who has a good command in Javascript, JQuery,Servlets and JSP, Spring Framework, MongoDB Also I am a student and an enthusiastic techie." name="keywords">

  <!-- Favicons -->
  <link
    href="https://scontent.fccu31-1.fna.fbcdn.net/v/t39.30808-6/246785639_206881338216501_5896698526592944398_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=rplM5LVGHYAAX-p0Vn3&tn=bjXQtzcJERlD20vK&_nc_ht=scontent.fccu31-1.fna&oh=00_AfB4Z-Vw8fD52Nio_QH24BFTM1PpjVt6KT_AfagiGtfi1A&oe=63D30DF6"
    rel="icon">

  <link
    href="https://scontent.fccu31-1.fna.fbcdn.net/v/t39.30808-6/246785639_206881338216501_5896698526592944398_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=rplM5LVGHYAAX-p0Vn3&tn=bjXQtzcJERlD20vK&_nc_ht=scontent.fccu31-1.fna&oh=00_AfB4Z-Vw8fD52Nio_QH24BFTM1PpjVt6KT_AfagiGtfi1A&oe=63D30DF6"
    rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="icon" type="image" href="/assets/img/sc.ico">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/suv.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Suvendu Chowdhury</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/SuvenduChowdh12" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100066839088426" class="facebook"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/suvenduc696/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/suvenduc789" class="google-plus"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/suvendu-chowdhury-ab6141244/?originalSubdomain=in" class="linkedin"><i
              class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>

          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Projects</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Suvendu Chowdhury</h1>
      <p>I'm <span class="typed"
          data-typed-items="Student, Backend Developer, Programmer, Photographer, Designer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I am a passionate <b>Python</b> coder, but who has a good command in <b>Javascript, 
            JQuery,Servlets and JSP, Spring Framework, 
            MongoDB</b> Also I am a student and an enthusiastic techie.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/suv.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Backend Developer.</h3>
            <p class="fst-italic">
              Fun Fact: I torture my Laptop for 24x7
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>19 Oct 2002</span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 8697757110</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>WhatsApp number:</strong> <span>+91 8697757110</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kolkata, India</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree of study:</strong><span>Bsc Computer Science
                      Honours</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email-1:</strong> <span>suvenduc696@gmail.com</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email-2:</strong> <span>suvendu.chok@gmail.com</span>
                  </li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> -->
                </ul>
              </div>
            </div>
            <p>
              I am a student of under graduate form Maharaja Manindra Chandra 
              College College in Kolkata, West Bengal I
              am a coder
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>I am a student of under graduate form Maharaja Manindra Chandra College College in Kolkata, West Bengal.I’m currently learning <b>Full Stack Web Development</b> and <b>Data
              Structure & Algorithm</b> and <u>machine learning and ai</u></p>
        </div>

        <div class="row no-gutters">
        <?php
               $sql="SELECT * FROM `onlyvisit`";
               $result=mysqli_query($conn,$sql);
               
               $numV=mysqli_num_rows($result);
          ?>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $numV; ?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Profile Visitors</strong></p>
            </div>
          </div>
          <?php
               $sql="SELECT * FROM `projects`";
               $result=mysqli_query($conn,$sql);
               
               $numP=mysqli_num_rows($result);
          ?>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $numP; ?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Number of Projects</strong></p>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <!-- <h3 align="left">🛠️ Languages and Frameworks 🛠️</h3>
        <p align="left">
          <img src="https://skillicons.dev/icons?i=cpp,c,java,python,php,js,django,react,bootstrap" />
        </p>
        <h3 align="left">🛠️ Databases 🛠️</h3>
        <p align="left">
          <img src="https://skillicons.dev/icons?i=mysql,mongodb,firebase" />
        </p> -->





        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">C++ <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Advanced Java <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Django <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">React <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Html/css <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <a href="resume/Suvendu.pdf" class="m-auto md:ml-0 portfolio-link bg-primary-gray text-primary-white mt-4" download="Suvendu_Chowdhury_CV">
          <div class="btn btn-outline-secondary">
              <img src="assets/img/pdf-icon.svg" alt="pdf-icon" class="w-6" height="50">
              Download My Resume
            </div>
          </a>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            
            <h3 class="resume-title">West Bengal Board Of Secondary Education </h3>
            <div class="resume-item pb-0">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">(WBBSE) - 78%</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Baranagar Narendranath Vidyamandir, Kolkata, West Bengal</h6>
                </div>
              </div>
            </div>
            <h3 class="resume-title">West Bengal Board of Higher Secondary Examination</h3>
            <div class="resume-item pb-0">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">(WBCHSE) - 84%</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Baranagar Narendranath Vidyamandir, Kolkata, West Bengal</h6>
               
                </div>
              </div>
            </div>   
        
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="resume-title">BSc Computer Science Honours</h3>
            <div class="resume-item pb-0">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">University of Calcutta</h5>
                  <h6 class="card-subtitle mb-2 text-muted">2020 - Present</h6>
                  <p class="card-text">Maharaja Manindra Chandra College, College in Kolkata, West Bengal</p>
                  
                </div>
              </div>
            </div> 
      
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Projects</h2>       
        </div> 

          <div class="row" data-aos-delay="100" data-aos="fade-up">
            <?php
                  $sql="SELECT * FROM `projects`";
                  $result=mysqli_query($conn,$sql);
                  
                  $num=mysqli_num_rows($result);
                  // echo $num;
                  $text="Just Text";

                  for($i=0;$i<$num;$i++){
                    $row=mysqli_fetch_assoc($result);

                      echo '<div class="col-sm-4" >
                      <div class="card m-2 ">
                      <h3>'.$row['pname'].'</h3>
                          <img src="'.$row['imgProject'].'" alt="" class="card-img-top" height="200px">
                          <div class="card-footer my-3 mx-2"><small class="text-muted">'.$row['paragraph'].'</small></div>
                          ';
                          if ($row['git']!=''){
                            echo '<a href="'.$row['git'].'" class="btn btn-danger my-3 mx-2">Git repo</a>';
                            
                          }

                          if($row['live']!=''){
                            echo '<a href="'.$row['live'].'" class="btn btn-primary  mx-2">Live demo</a>';
                          }                         

                      echo '</div>
                      </div>';


                  }
            ?>
     
            
        </div>
        
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>48 kali krishna tagore road kolkata - 700035.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>suvenduc696@gmail.com /<br> suvendu.chok@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 8697757110</p>
              </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.137801351351!2d88.35723961429613!3d22.648650235884077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89d063f3302bf%3A0xcf758866f63b16ec!2s48%2C%20Kali%20Krishna%20Tagore%20Rd%2C%20Alambazar%2C%20Ashokgarh%2C%20Kolkata%2C%20West%20Bengal%20700035!5e0!3m2!1sen!2sin!4v1674472475074!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;"  allowfullscreen ></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch ">

          <div class="php-email-form">

        
        
<!-- 
          <form action="index.php/#contact" method="get" >
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <input class="text-center btn btn-primary" type="submit" value="Send Message">
    
            </form>
          </div> -->

        </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <!-- &copy; Copyright <strong><span>iPortfolio</span></strong> -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Creater <a href="https://www.linkedin.com/in/suvendu-chowdhury-ab6141244/">Suvendu Chowdhury</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>