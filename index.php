<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'bkheil01@louisville.edu'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE HTML>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome to Brett Heil's Webpage</title>

        <!-- CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">

        <!-- Custom styles CSS -->
        <link href="assets/css/style.css" rel="stylesheet" media="screen">

        <script src="assets/js/modernizr.custom.js"></script>

    </head>
    <body>

        <!-- Preloader -->

        <div id="preloader">
            <div id="status"></div>
        </div>

        <!-- Home start -->

        <section id="home" class="pfblock-image screen-height">
            <div class="home-overlay"></div>
            <div class="intro">
                <div class="start">Hello, my name is Brett Heil and I am currently studying</div>
                <h1>Computer Information Systems</h1>
                <div class="start">with a concentration in Web Development</div>
                <div class="start">at the University of Louisville</div>
            </div>

            <a href="#services">
                <div class="scroll-down">
                    <span>
                        <i class="fa fa-angle-down fa-2x"></i>
                    </span>
                </div>
            </a>

        </section>

        <!-- Home end -->
        <!-- Navigation start -->

        <header class="header">

            <nav class="navbar navbar-custom" role="navigation">

                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Brett Heil</a>
                    </div>

                    <div class="collapse navbar-collapse" id="custom-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Works</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                </div><!-- .container -->

            </nav>

        </header>

        <!-- Navigation end -->
        <!-- Services start -->

        <section id="services" class="pfblock pfblock-gray">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="pfblock-header wow fadeInUp">
                            <h2 class="pfblock-title">What I am studying</h2>
                            <div class="pfblock-line"></div>
                            <div class="pfblock-subtitle">
                                This is a brief overview of the skills that I am aquiring as I obtain my degree.
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-3">

                        <div class="iconbox wow slideInLeft">
                            <div class="iconbox-icon">
                                <span class="icon-magic-wand"></span>
                            </div>
                            <div class="iconbox-text">
                                <h3 class="iconbox-title">Web Design</h3>
                                <div class="iconbox-desc">
                                    I have accomplished several novice Web Development assignments.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="iconbox wow slideInLeft">
                            <div class="iconbox-icon">
                                <span class="icon-puzzle"></span>
                            </div>
                            <div class="iconbox-text">
                                <h3 class="iconbox-title">Web Programming</h3>
                                <div class="iconbox-desc">
                                    I have had experience with C#, JavaScript, jQuery, BootStrap, Angular.js and MVC.NET
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="iconbox wow slideInRight">
                            <div class="iconbox-icon">
                                <span class="fa fa-database"></span>
                            </div>
                            <div class="iconbox-text">
                                <h3 class="iconbox-title">Database Design</h3>
                                <div class="iconbox-desc">
                                    I am experienced in Querying databases, creating stored procedures and triggers with relationship database models using Microsoft SQL Server Management Studio.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="iconbox wow slideInRight">
                            <div class="iconbox-icon">
                                <span class="icon-question"></span>
                            </div>
                            <div class="iconbox-text">
                                <h3 class="iconbox-title">Consultation</h3>
                                <div class="iconbox-desc">
                                    I have had experience in consultation in order to build and analyze a company's online business processes.
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- .row -->
            </div><!-- .container -->
        </section>

        <!-- Services end -->
        <!-- Portfolio start -->

        <section id="portfolio" class="pfblock">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="pfblock-header wow fadeInUp">
                            <h2 class="pfblock-title">My works</h2>
                            <div class="pfblock-line"></div>
                            <div class="pfblock-subtitle">
                                Here is where I showcase some of the depth of knowledge I have regarding different web programming languages.
                            </div>
                        </div>

                    </div>

                </div><!-- .row -->


                <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4">

                        <a href="http://bkheil01.github.io/Homework5/">
                            <div class="grid wow zoomIn">
                                <figure class="effect-bubba">
                                    <img src="assets/images/rsz_angularjs.png" alt="img01" />
                                    <figcaption>
                                        <h2>Angular<span>.js</span></h2>
                                        <p>From an Angular tutorial</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">

                        <a href="http://bkheil01.github.io/Assignment6Part1/">
                            <div class="grid wow zoomIn">
                                <figure class="effect-bubba">
                                    <img src="assets/images/rsz_jquery_logo1.jpg" alt="img01" />
                                    <figcaption>
                                        <h2>j<span>Query</span></h2>
                                        <p>Creates a filterable, sortable list from a JSON file using jQuery, BootStrap and Angular.js</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">

                        <a href="http://assignment9.azurewebsites.net/Blog">
                            <div class="grid wow zoomIn">
                                <figure class="effect-bubba">
                                    <img src="assets/images/microsoft.jpg" alt="img01" />
                                    <figcaption>
                                        <h2>ASP.NET <span>MVC</span></h2>
                                        <p>An updatable blog site using MVC3</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">

                        <a href="https://github.com/bkheil01/Assignment6Part1">
                            <div class="grid wow zoomIn">
                                <figure class="effect-bubba">
                                    <img src="assets/images/rsz_angularjs.png" alt="img01" />
                                    <figcaption>
                                        <h2>GitHub</h2>
                                        <p>My GitHub repository for the above Angular.js site</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">

                        <a href="https://github.com/bkheil01/Homework5">
                            <div class="grid wow zoomIn">
                                <figure class="effect-bubba">
                                    <img src="assets/images/rsz_jquery_logo1.jpg" alt="img01" />
                                    <figcaption>
                                        <h2>GitHub</h2>
                                        <p>My GitHub repository for the above jQuery site</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">

                        <a href="http://bkheil01.github.io/Assignment9/">
                            <div class="grid wow zoomIn">
                                <figure class="effect-bubba">
                                    <img src="assets/images/microsoft.jpg" alt="img01" />
                                    <figcaption>
                                        <h2>GitHub</h2>
                                        <p>My GitHub repository for the above ASP.NET site</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                </div>


            </div><!-- .contaier -->

        </section>

        <!-- Portfolio end -->
        <!-- Skills start -->

        <section class="pfblock pfblock-gray" id="skills">

            <div class="container">

                <div class="row skills">

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">My Skills</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
                        <h3 class="text-center">Programming</h3>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
                        <h3 class="text-center">Design</h3>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">100</span>
                        </span>
                        <h3 class="text-center">Communication</h3>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
                        <h3 class="text-center">Teamwork</h3>
                    </div>

                </div><!--End row -->

            </div>

        </section>

        <!-- Skills end -->
        <!-- CallToAction start -->

        <section class="calltoaction">
            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <h2 class="wow slideInRight" data-wow-delay=".1s">ARE YOU READY TO START?</h2>
                        <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                            I'm available for freelance projects.
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                        <a href="#contact" class="btn btn-lg">Hire Me</a>
                    </div>

                </div><!-- .row -->
            </div><!-- .container -->
        </section>

        <!-- CallToAction end -->
        <!-- Testimonials start -->
        <!--<!--<!--<section id="testimonials" class="pfblock pfblock-gray">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="pfblock-header wow fadeInUp">
                            <h2 class="pfblock-title">What my clients say</h2>
                            <div class="pfblock-line"></div>
                            <div class="pfblock-subtitle">
                                No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
                            </div>
                        </div>

                    </div>

                </div><!-- .row -->
        <!--<div class="row">

        <div id="cbp-qtrotator" class="cbp-qtrotator">
            <div class="cbp-qtcontent">
                <img src="assets/images/client-1.jpg" alt="client-1" />
                <blockquote>
                  <p>Work with John was a pleasure. He understood exactly what I wanted and created an awesome site for my company.</p>
                  <footer>Pino Caruso</footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <img src="assets/images/client-2.jpg" alt="client-2" />
                <blockquote>
                  <p>I'm really happy with the results. Get 100% satisfaction is difficult but Alex got it without problems.</p>
                  <footer>Jane Doe</footer>
                </blockquote>
            </div>

        </div>

        </div><!-- .row -->
        <!--</div> .row
        </section>-->
        <!-- Testimonial end -->
        <!-- Contact start -->
        <section id="contact" class="pfblock">
            <div class="container">
                <div class="row">
                    
<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
</div><!-- .row -->
            </div><!-- .container -->
        </section>
        <!-- Contact end -->
        <!-- Footer start -->

        <footer id="footer">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">

                        <ul class="social-links">
                            <li><a href="https://github.com/bkheil01" class="wow fadeInUp"><i class="fa fa-github"></i></a></li>
                        </ul>

                        <p class="heart">
                            Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Nottingham
                        </p>
                        <p class="copyright">
                            © 2015 John Doe | Images: <a href="https://unsplash.com/">Unsplash</a> & <a href="http://zoomwalls.com/">Zoomwalls</a>
                        </p>

                    </div>

                </div><!-- .row -->
            </div><!-- .container -->
        </footer>

        <!-- Footer end -->
        <!-- Scroll to top -->

        <div class="scroll-up">
            <a href="#home"><i class="fa fa-angle-up"></i></a>
        </div>

        <!-- Scroll to top end-->
        <!-- Javascript files -->

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/imagesloaded.pkgd.js"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/smoothscroll.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.easypiechart.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.cbpQTRotator.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="jquery-2.1.0.min.js"></script>
        <script src="app.js"></script>

    </body>
</html>
