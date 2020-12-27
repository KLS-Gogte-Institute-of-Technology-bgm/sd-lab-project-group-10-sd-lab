<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Medicamp Responsive Bootstrap Template">
<meta name="keywords" content="Pixel">
<meta name="author" content="rkwebdesigns">
<!-- Site Title   -->
<title>Medicamp - Responsive Bootstrap Template</title>
<!-- Fav Icons   -->
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
<!-- Fonts Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,800italic,800,600italic,600,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- animate Effect -->
<link href="css/animate.css" rel="stylesheet">
<!-- Main CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<header id="header" class="head">
  <div class="top-header">
     <div class="container">
       <div class="row ">
         <ul class="contact-detail2 col-sm-6 pull-left">
           <li> <a href="#" target="_blank"><i class="fa fa-mobile"></i>Call US +(91) 9908761210</a> </li>
           <li> <a href="#" target="_blank"><i class="fa fa-envelope-o"></i> medicamp@gmail.com</a> </li>
         </ul>
         <div class="social-links col-sm-6 pull-right">
           <ul class="social-icons pull-right">
             <li> <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> </li>
             <li> <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> </li>
             <li> <a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a> </li>
             <li> <a href="http://dribble.com/" target="_blank"><i class="fa fa-skype"></i></a> </li>
             <li> <a href="http://pinterest.com" target="_blank"><i class="fa fa-dribbble"></i></a> </li>
           </ul>
         </div>
       </div>
     </div>
    </div>
  <nav class="navbar navbar-default navbar-menu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index1.php">
          <div class="logo-text"><span><samp>M</samp>Medi</span>camp</div>
          <!-- <img src="images/logo.png" alt="logo"> -->
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index1.php">Home</a></li>
          <li><a href="aboutus.php">About us </a></li>
          <li><a href="services.php">Services </a></li>

          <li class="active"><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
</header>
<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <h2>Contact us</h2>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Current Page:</li>
            <li><a href="index1.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="section16" class="section16">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <div class="single-location">
          <div class="loc-icon">
            <i class="fa fa-phone fa-2x"></i>
          </div>
          <span class="loc-content">+(91)9908761210</span>
          <span class="loc-content">+(91)6749034278</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-location">
          <div class="loc-icon">
            <i class="fa fa-envelope fa-2x"></i>
          </div>
          <span class="loc-content">medicamp@gmail.com</span>
          <span class="loc-content">info@example.net</span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="single-location">
          <div class="loc-icon">
            <i class="fa fa-map-marker fa-2x"></i>
          </div>
          <span class="loc-content">42/2, New Road, Mumbai</span>
          <span class="loc-content">New Road, Mt 3256</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <form id="contact" role="form">
          <!-- successfully -->
          <p class="success alert alert-success"><i class="fa fa-check"></i> Your message has been sent successfully. </p>
          <!-- unsuccessfully -->
          <p class="error alert alert-danger"><i class="fa fa-times"></i> E-mail must be valid and message must be longer than 1 character. </p>
          <div class="control-group form-group">
            <div class="controls">
              <input  class="form-control" id="cf-name" type="text" name="cf-name" placeholder="NAME">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <input class="form-control" id="cf-email" type="email" name="cf-email" placeholder="EMAIL">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
             <input class="form-control" id="cf-subject" type="text" name="cf-subject" placeholder="SUBJECT">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <textarea class="form-control custom-control" id="cf-message" rows="4" name="cf-message" placeholder="HOW CAN I HELP? "></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" id="cf-submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
      <div class="col-md-6 col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4515050296823!2d85.30938781439113!3d27.70334258279361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2snp!4v1469920087323" width="800" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section id="footer-top" class="footer-top">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-lg-3">
        <div class="footer-top-box">
          <h4>About Us</h4>
          <p>We improve the well-being of patients and communities by delivering innovative, compassionate, patient- and family-centered health care, enriched by education, science, and technology.</p>
        </div>
        <div class="footer-top-box">
          <h4>Office Hour</h4>
          <b>Mon-Fri :</b> 09am to 06pm<br/>
          <b>Tues-Wed :</b> Special Appointment
        </div>
      </div>
      <div class="col-md-3 col-lg-3">
        <div class="footer-top-box">
          <h4>Tags</h4>
          <div class="tag"><a href="#">Acupuncture</a></div>
          <div class="tag"><a href="#">Mammography</a></div>
          <div class="tag"><a href="#">Neonatology</a></div>
          <div class="tag"><a href="#">Diabetes Education</a></div>
          <div class="tag"><a href="#">Geriatrics</a></div>
          <div class="tag"><a href="#">Kidneys</a></div>
        </div>
      </div>
      <div class="col-md-3 col-lg-3">
        <div class="footer-top-box">
          <h4>Contact us</h4>
          <p><b>Location : 42/2</b> New road, KTM<br/>
            <b>Mob: </b> +9849494875<br/>
            <b>Mail: </b> medicamp@gmail.com </p>
        </div>
        <div class="footer-top-box">
          <h4>Subscribe</h4>
          <div class="cs-form">
            <form action="#" method="post">
              <div class="input-holder">
                <input type="email" placeholder="Enter Valid Email Address">
                <label> <i class="fa fa-location-arrow fa-2x"></i>
                  <input class="submit-bgcolor" type="submit" value="submit">
                </label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="footer-bottom" class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-9">
        <div class="copyright">Copyright &copy; 2016. All Rights Reserved</div>
      </div>
      <div class="col-lg-3">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
