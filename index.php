<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phoneNo=$_POST['phoneNo'];
$message=$_POST['message'];
$query="insert into  contactForm(fname,lname,email,phoneNo,message) values(?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssss',$fname,$lname,$email,$phoneNo,$message);
$stmt->execute();
echo"<script>alert('Message Sent');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oduduabasi Isong</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<!--===========  Header ============= -->
<?php
include('includes/header.php');
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Oduduabasi Isong</h1>
      <p>I'm a <span class="typed" data-typed-items="Web Developer, Crypto Trader, Computer Engineer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p>
            I'm Oduduabasi Effiong Isong, a well trained web developer, crypto trader, and computer engineer. I develop both static and dynamic web site, 
            I buy, sell and trade all kinds of cryptocurrencies, and I repair laptop computers. I'm highly self motivated, taken interest in research and new discovery
            </p>
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> kellywizzyisong@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> (+234) 8026527977</l>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Uyo, Akwa Ibom State, Nigeria</li>
                </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row">
        <div class="col-lg-4 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Web Development</a></h4>
            <p class="description">I design and build web sites</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-spanner"></i></div>
            <h4 class="title"><a href="">Computer Engineer</a></h4>
            <p class="description">I repair all kinds of laptop computers</p>
          </div>
          <div class="col-lg-4 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Cryptocurrencies Trading</a></h4>
            <p class="description"> I trade both long and short term spot trading</p>
          </div>
        </div>
        <p>Continuous learning for the betterment and improvement of myself, to see that I give in my very best to any task being given to me, with a great sense of team-work.</p>

        <div class="mx-auto">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr >
            <th scope="col">Skills</th>
            <th scope="col">Tools</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>HTML5, CSS3</td>
            <td>GIT/GITHUB</td>

          </tr>
          <tr>
            <td>BOOTSTRAP</td>
            <td>BINANCE</td>
          </tr>
          <tr>
            <td>SPOT TRADING</td>
            <td>TRADING VIEW</td>
          </tr>
          <tr>
            <td>PHP</td>
            <td>BLOCKCHAIN</td>
          </tr>
          <tr>
            <td>MySQL</td>
            <td>VS CODE</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3 class="text-center">Get In Touch</h3>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>kellywizzyisong@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2348026527977</p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your First Name</label>
                  <input type="text" name="fname" class="form-control" id="fname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Last Name</label>
                  <input type="text" name="lname" class="form-control" id="lname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
              </div>
              
              <div class="form-group">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              <div class="form-group">
                <label for="name">Phone Number</label>
                <input type="text" class="form-control" name="phoneNo" id="phoneNo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('includes/footer.php');
  ?>
  <!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>