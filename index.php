 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BEI BORA - Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="styles.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
 
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- AOS Library for scroll animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
  <div class="container"> <a class="navbar-brand" href="#"> <img src="asset/img/bei-bora-logo.jpg" alt="BEI BORA Logo" width="120"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon text-dark"></span> </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="#home">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#products">Products</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#about">About</a> </li>
        <!--<li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>-->
        <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a> </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero d-flex align-items-center justify-content-center text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3 text-white mb-4 animate__animated animate__fadeInDown">Welcome to BEI BORA</h1>
        <p class="lead text-white mb-4 animate__animated animate__fadeInDown">Your trusted partner for quality foodstuffs and household items.</p>
        <a href="#products" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Explore Products</a> </div>
    </div>
  </div>
</section>

<!-- Products Section -->
<section id="products" class="products text-center py-5">
  <div class="container">
    <h2 class="display-4 mb-5 animate__animated animate__fadeIn">Our Products</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/img/product1.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">OILS AND FATS</h5>
            <p class="card-text">Edible Oils, Fats, Margarine...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#productModal">Explore Products</a> </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/img/product2.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">COMMODITIES</h5>
            <p class="card-text">Rice, Flour, Pasta...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#productModal-2">Explore Products </a> </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/img/product3.webp" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">CLEANING AND LAUNDRY</h5>
            <p class="card-text">Bar Soaps, Detergents...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#productModal-3">Explore Products</a> </div>
        </div>
      </div>
		
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/img/product4.jpg" class="card-img-top" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">DAIRY</h5>
            <p class="card-text">Milk, Yoghurt, Ghee...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#productModal-4">Explore Products</a> </div>
        </div>
      </div>
		
		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/img/product5.jpg" class="card-img-top" alt="Product 5">
          <div class="card-body">
            <h5 class="card-title">BEVARAGES</h5>
            <p class="card-text">Juice, Tea, Coffee...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#productModal-5">Explore Products</a> </div>
        </div>
      </div>
		
		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/img/product6.jpg" class="card-img-top" alt="Product 6">
          <div class="card-body">
            <h5 class="card-title">HEALTHCARE &amp; HYGIENE</h5>
            <p class="card-text">Diapers, Toothpaste...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#productModal-6">Explore Products</a> </div>
        </div>
      </div>
      <!-- Add more product cards here --> 
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about py-5">
  <div class="container">
    <h2 class="display-4 text-center mb-5 animate__animated animate__fadeIn">About Us</h2>
    <div class="row">
      <div class="col-lg-12">
        <p class="lead text-center animate__animated animate__fadeIn">Since it's establishment, BEI BORA DISTRIBUTORS is a leading distributor specializing in foodstuffs and household products across Kenya. Over the years, we have built a strong reputation as a trusted supplier, known for our commitment to quality and reliability.
          
          Our core activity involves supplying a wide range of foodstuffs and household products throughout the country. We partner with wholesalers, retailers, and various organizations to ensure that our products reach every corner of Kenya efficiently.
          
          In addition to our own in-house brand, BEI BORA®, we also offer an extensive selection of international brands upon request. Our goal is to provide our clients with a comprehensive assortment of high-quality products to meet their diverse needs.
          
          At BEI BORA DISTRIBUTORS, we are dedicated to excellence in service and product delivery, striving to exceed expectations and support the everyday needs of our customers.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why order from us section -->
<section id="mission-visio" class="mission-vision py-5">
  <div class="container">
    <h2 class="display-4 text-center mb-5 animate__animated animate__fadeIn">WHY ORDER FROM BEI BORA?</h2>
    <div class="col-lg-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <p class="card-text lead text-center animate__animated animate__fadeIn">With over 10 years of experience in foodstuffs and household product distribution, our team at BEI BORA DISTRIBUTORS is highly trained and skilled, dedicated to meeting the diverse needs of our customers.
            
            We are equipped with the infrastructure necessary to exceed customer expectations in quality, variety, availability, reliability, and speed. Our robust system ensures that we deliver superior products and service, consistently meeting and surpassing the demands of our clients.</p>
        </div>
      </div>
    </div>
  </div>
</section>
	
	<!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="stats-card">
                        <div class="number">10+</div>
                        <div class="label">Years of Experience</div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="stats-card">
                        <div class="number">500+</div>
                        <div class="label">Products Available</div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="stats-card">
                        <div class="number">1,000+</div>
                        <div class="label">Satisfied Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0"> <img src="asset/img/testimonial-image.jpg" alt="Testimonial Image" class="img-fluid rounded"> </div>
      <div class="col-lg-6">
        <h2 class="display-4 text-center mb-5 animate__animated animate__fadeIn">What Our Customers Say</h2>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner"> 
            <!-- Testimonial 1 -->
            <div class="carousel-item active">
              <div class="card text-center shadow-sm animate__animated animate__fadeIn">
                <div class="card-body"> <img src="asset/img/user.png" class="rounded-circle mb-3" alt="Customer 1">
                  <p class="lead">"BEI BORA has been our go-to supplier for years. Their products are top-notch and their customer service is outstanding!"</p>
                  <p class="font-italic">- Mercy, Shop Attendant</p>
                </div>
              </div>    
            </div>
            <!-- Testimonial 2 -->
            <div class="carousel-item">
              <div class="card text-center shadow-sm animate__animated animate__fadeIn">
                <div class="card-body"> <img src="asset/img/user.png" class="rounded-circle mb-3" alt="Customer 2">
                  <p class="lead">"Great experience working with BEI BORA. They always deliver on time and exceed our expectations!"</p>
                  <p class="font-italic">- Sarah, Business Woman</p>
                </div>
              </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="carousel-item">
              <div class="card text-center shadow-sm animate__animated animate__fadeIn">
                <div class="card-body"> <img src="asset/img/user.png" class="rounded-circle mb-3" alt="Customer 3">
                  <p class="lead">"Highly recommend BEI BORA for anyone looking for quality products and reliable service."</p>
                  <p class="font-italic">- Kariuki, Business Person</p>
                </div>
              </div>
            </div>
            <!-- Add more testimonials here as needed --> 
          </div>
          <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission and Vision Section -->
<section id="mission-vision" class="mission-vision py-5">
  <div class="container">
    <h2 class="display-4 text-center mb-5 animate__animated animate__fadeIn">Mission and Vision</h2>
    <div class="row"> 
      
      <!-- Mission Card -->
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title text-center mb-3">Mission</h3>
            <p class="card-text lead text-center animate__animated animate__fadeIn">To deliver a wide range of high-quality foodstuffs and household products across Kenya with unmatched efficiency and reliability.We strive to build lasting partnerships with wholesalers, retailers, and organizations, ensuring that our comprehensive assortment of products meets the evolving needs of our customers. Through our dedication to superior service and continuous improvement, we aim to exceed expectations and support the daily needs of communities throughout the country.</p>
          </div>
        </div>
      </div>
      
      <!-- Vision Card -->
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title text-center mb-3">Vision</h3>
            <p class="card-text lead text-center animate__animated animate__fadeIn">To be Kenya's premier distributor of foodstuffs and household products, renowned for our unwavering commitment to quality, innovation, and reliability. We envision a future where BEI BORA DISTRIBUTORS is synonymous with excellence, bridging the gap between diverse needs and exceptional products, while enriching the lives of every Kenyan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQs Section -->
<section id="faqs" class="faqs py-5">
  <div class="container">
    <h2 class="display-4 text-center mb-5 animate__animated animate__fadeIn">Frequently Asked Questions</h2>
    <div class="accordion" id="accordionFAQs"> 
      
      <!-- FAQ Item 1 -->
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Question 1: What payment methods do you accept? </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQs">
          <div class="card-body text-black-50"> Answer: We accept MPESA payments for security and efficiency </div>
        </div>
      </div>
      
      <!-- FAQ Item 2 -->
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Question 2: What is your return policy? </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQs">
          <div class="card-body text-black-50"> Answer: Our return policy allows for returns within 30 days of purchase. Please refer to our Returns page for more details. </div>
        </div>
      </div>
      
      <!-- FAQ Item 3 -->
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Question 3: How can I contact customer support? </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQs">
          <div class="card-body text-black-50"> Answer: You can reach our customer support team via email at info@beibora.com or by calling +254 718 005 867 </div>
        </div>
      </div>
      
      <!-- Add more FAQ items as needed --> 
      
    </div>
  </div>
</section>

<!-- Blog Section -->
<section id="blog" class="blog py-5">
  <div class="container">
    <h2 class="display-4 text-center mb-5 animate__animated animate__fadeIn">Latest from Our Blog</h2>
    <div class="row">
		
		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/blogs/9375520.png" class="card-img-top" alt="Product 2">
          <div class="card-body blog-text">
            <h5 class="card-title">The Heart of Our Commitment</h5>
            <p class="card-text small text-black-50">At BEI BORA DISTRIBUTORS, quality isn't just a promise; it's our guiding principle...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#blogModal-1">Read More</a> </div>
        </div>
		</div>
		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/blogs/1568482.png" class="card-img-top" alt="Product 2">
          <div class="card-body blog-text">
            <h5 class="card-title">Meeting the Evolving Needs of Kenyans</h5>
            <p class="card-text small text-black-50">In today’s rapidly changing market, innovation is essential for staying relevant and meeting the diverse needs of consumers...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#blogModal-2">Read More</a> </div>
        </div>
		</div>
		<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
        <div class="card shadow-sm product-ov"> <img src="asset/blogs/1269668624.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body blog-text">
            <h5 class="card-title">Building Lasting Partnerships</h5>
            <p class="card-text small text-black-50">At BEI BORA DISTRIBUTORS, we believe that strong relationships are the backbone of our success...</p>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#blogModal-3">Read More</a> </div>
        </div>
		</div>

    </div>
  </div>
</section>

<section class="signup-section" id="signup">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5">
      <div class="col-md-10 col-lg-8 mx-auto text-center"> <i class="far fa-paper-plane fa-2x mb-2 custom-icon"></i>
        <h2 class="mb-5 custom-signupheader">Subscribe to receive updates!</h2>
        <!-- * * * * * * * * * * * * * * *--> 
        <!-- * * SB Forms Contact Form * *--> 
        <!-- * * * * * * * * * * * * * * *--> 
        <!-- This form is pre-integrated with SB Forms.--> 
        <!-- To make this form functional, sign up at--> 
        <!-- https://startbootstrap.com/solution/contact-forms--> 
        <!-- to get an API token!-->
        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
          <!-- Email address input-->
          <div class="row input-group-newsletter">
            <div class="col">
              <input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" />
            </div>
            <div class="col-auto">
              <button class="btn btn-primary" id="submitButton" type="submit">Notify Me!</button>
            </div>
          </div>
          <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
          <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
          <!-- Submit success message--> 
          <!----> 
          <!-- This is what your users will see when the form--> 
          <!-- has successfully submitted
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Subscription successful!</div>
                                <br />
                            </div>
                        </div>--> 
          <!-- Submit error message--> 
          <!----> 
          <!-- This is what your users will see when there is--> 
          <!-- an error submitting the form
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>-->
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Contact-->
<section class="contact-section custom-contbg">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5">
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100 rounded">
          <div class="card-body text-center"> <i class="fas fa-map-marked-alt mb-2 custom-icon"></i>
            <h4 class="text-uppercase m-0">Address</h4>
            <hr class="my-4 mx-auto rounded" />
            <div class="small text-black-50 contact-mail"><a href="https://maps.app.goo.gl/nnC5X4FHiRdWXm2j9" target="_blank">Adjacent to Jacaranda Roundabout, Spine Road, Kayole, NRB, -1.287990, 36.905274</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100 rounded">
          <div class="card-body text-center"> <i class="fas fa-envelope mb-2 custom-icon"></i>
            <h4 class="text-uppercase m-0">Email</h4>
            <hr class="my-4 mx-auto rounded" />
            <div class="small text-black-50 contact-mail"><a href="#!">info@beibora.com</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100 rounded">
          <div class="card-body text-center"> <i class="fas fa-mobile-alt mb-2 custom-icon"></i>
            <h4 class="text-uppercase m-0">Phone</h4>
            <hr class="my-4 mx-auto rounded" />
            <div class="small text-black-50 contact-mail"><a href="tel:+254 714 285 993">+254 714 285 993</a> | <a href="tel:+254 718 005 867">+254 718 005 867</a></div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </div>
</section>

<!-- Footer -->
<footer class="text-white py-4">
  <div class="container text-center">
    <ul class="list-inline mb-3 footer-social">
      <li class="list-inline-item"> <a href="#"><img src="asset/img/icons8-linkedin-48.png" alt="LinkedIn"></a> </li>
      <li class="list-inline-item"> <a href="#"><img src="asset/img/icons8-facebook-48.png" alt="Facebook"></a> </li>
      <li class="list-inline-item"> <a href="#"><img src="asset/img/icons8-x-48.png" alt="Twitter"></a> </li>
      <li class="list-inline-item"> <a href="#"><img src="asset/img/icons8-instagram-48.png" alt="Instagram"></a> </li>
    </ul>
    <p>&copy; 2024 BEI BORA. All rights reserved.</p>
  </div>
  
  <!--modals-->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">OILS AND FATS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_a'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
				
				
              <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_a/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!--MODAL SECTION B-->

	<div class="modal fade" id="productModal-2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">COMMODITIES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_b'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_b/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
	
	<!--MODAL SECTION C-->
  
  <div class="modal fade" id="productModal-3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-3">CLEANING AND LAUNDRY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_c'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_c/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
		<!--MODAL SECTION D-->
  
  <div class="modal fade" id="productModal-4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-4">DAIRY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_d'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_d/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
	<!--MODAL SECTION E-->
  
  <div class="modal fade" id="productModal-5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-4">BEVERAGES</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_e'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_e/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
		<!--MODAL SECTION F-->
  
  <div class="modal fade" id="productModal-6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="productModalLabel-4">HEALTHCARE AND HYGIENE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
            <div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'asset/products/section_f'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/products/section_f/<?php echo $filenameWithExtension;?>" class="card-img-top" alt="<?php echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"><?php echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
		<!--BLOG MODAL SECTION 1-->
	
		<div class="modal fade" id="blogModal-1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">The Heart of Our Commitment: Quality in Every Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
     		<div class="modal-body">
				
               <div class="col-lg-3 col-md-6 mb-3 blog-image" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/blogs/9375520.png" class="card-img-top" alt="Commitment">
                 
                </div>
              </div>
				<div class="blog-text-c">
					<p class="card-text lead">At BEI BORA DISTRIBUTORS, quality isn't just a promise; it's our guiding principle. As Kenya's premier distributor of Fast-Moving Consumer Goods (FMCGs), we understand that our customers rely on us for products that meet their everyday needs. This commitment to quality sets us apart and drives everything we do.</p>
					
							<p class="card-text lead"><strong>Our Quality Assurance Process</strong>Quality assurance is at the core of our operations. We implement a rigorous testing and selection process to ensure that every product in our portfolio meets high standards of quality. From the initial sourcing of goods to the final delivery, we carefully evaluate each product, assessing its durability, safety, and overall performance.</p>
							<p class="card-text lead">We work closely with our suppliers, conducting regular audits and inspections to guarantee that they adhere to our stringent quality criteria. This collaboration allows us to maintain a diverse and reliable product range that our customers can trust.
							</p>
						
							<p class="card-text lead"><strong>Importance of Quality in FMCGs:</strong>In the fast-paced world of FMCGs, quality is paramount. Consumers expect products that are not only effective but also safe and reliable. When customers choose our products, they are investing in their daily needs, and we take this responsibility seriously.
							<br>
							Quality impacts customer satisfaction and loyalty. When our customers know they can depend on us, they are more likely to return, creating a lasting relationship built on trust. We strive to provide products that meet and exceed these expectations, enriching the lives of those we serve.</p>
						
						
						<p></p>

					
				</div> 
          	
				
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	</div>
			
			<!--BLOG MODAL SECTION 2-->
	
		<div class="modal fade" id="blogModal-2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">Innovation in FMCGs: Meeting the Evolving Needs of Kenyans</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
     		<div class="modal-body">
				
               <div class="col-lg-3 col-md-6 mb-3 blog-image" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/blogs/1568482.png" class="card-img-top" alt="Commitment">
                 
                </div>
              </div>
				<div class="blog-text-c">
					<p class="card-text lead">In today’s rapidly changing market, innovation is essential for staying relevant and meeting the diverse needs of consumers. At BEI BORA DISTRIBUTORS, we are committed to not just keeping pace but leading the way in the Fast-Moving Consumer Goods (FMCG) sector. Our focus on innovation ensures that we provide products that align with the evolving preferences and lifestyles of Kenyans.</p>
					
					<p class="card-text lead"><strong>Emerging Trends in FMCGs</strong>The FMCG landscape is dynamic, influenced by various factors such as technology, consumer behavior, and global trends. Some key trends currently shaping the market include Sustainable Packaging, Health-Conscious Products and Technology Integration</p>

					</p>

					<p class="card-text lead"><strong>Our Innovative Approach:</strong>At BEI BORA DISTRIBUTORS, innovation isn’t just about products; it’s about how we operate and serve our partners. We continuously explore new ways to enhance our offerings and improve efficiency. Here’s how we do it: Collaborative Product Development, Investment in Research and Development and Training and Support for Partners.
					<br>
					Innovation is at the heart of our mission at BEI BORA DISTRIBUTORS. By embracing emerging trends and continuously improving our offerings, we aim to bridge the gap between diverse needs and exceptional products. As we move forward, we remain committed to enriching the lives of Kenyans with innovative solutions that cater to their evolving preferences. Together, let’s embrace a future where quality and innovation go hand in hand.</p>
						
						

					
				</div> 
          	
				
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	</div>
  
	<!--BLOG MODAL SECTION 3-->
	
		<div class="modal fade" id="blogModal-3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title text-dark" id="productModalLabel">Building Lasting Partnerships: The BEI BORA DISTRIBUTORS Approach</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> 
          
          <!-- Product details form or content -->
          <div class="container">
     		<div class="modal-body">
				
               <div class="col-lg-3 col-md-6 mb-3 blog-image" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="asset/blogs/1269668624.jpg" class="card-img-top" alt="Commitment">
                 
                </div>
              </div>
				<div class="blog-text-c">
					<p class="card-text lead">At BEI BORA DISTRIBUTORS, we believe that strong relationships are the backbone of our success. As Kenya’s premier distributor of Fast-Moving Consumer Goods (FMCGs), our commitment to building lasting partnerships with wholesalers, retailers, and organizations is integral to our mission. These collaborations not only enhance our service offerings but also support the growth of communities across the country.</p><br>
					<p class="card-text lead"><strong>Training and Resources: </strong>  We offer training programs that equip our partners with the knowledge and skills they need to effectively market and sell our products. By sharing best practices, we empower them to succeed.</p>
					
					<p class="card-text lead"><strong>Responsive Communication:</strong>Open and transparent communication is key to our partnerships. We prioritize regular check-ins and feedback sessions to ensure that we address any challenges and celebrate successes together.</p>

					

					<p class="card-text lead"><strong>Community Engagement</strong>Our commitment to building partnerships extends to the communities we serve. We believe in corporate social responsibility and actively engage in initiatives that benefit society. Whether it’s supporting local charities, participating in community events, or promoting sustainable practices, we strive to make a positive impact.
					<br>
					At BEI BORA DISTRIBUTORS, we understand that our success is intertwined with that of our partners and the communities we serve. By fostering lasting relationships built on trust, support, and collaboration, we can navigate the challenges of the FMCG market together. As we look to the future, we remain committed to nurturing these partnerships, enriching the lives of Kenyans, and contributing to the growth and development of our nation. Together, we can achieve excellence and create a brighter future for all.</p>
						
						

					
				</div> 
          	
				
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	</div>
  
</footer>

	
<!-- Bootstrap and custom JavaScript libraries --> 
<script src="scripts.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<!-- AOS Library for scroll animations --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 
	
	
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
        // Initialize AOS for scroll animations
        AOS.init({
            duration: 1000,
            once: true // Only once animation on scroll
        });
    </script> 
<!-- Initialize Bootstrap Carousel --> 
<script>
        $(document).ready(function(){
            $('#testimonialCarousel').carousel();
        });
    </script>
</body>
</html>
