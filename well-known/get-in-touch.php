<?php include("header.php"); ?>

        <div class="hero-banner hero-style-9" style="background-image: url('assets/images/bg/bg1.jpg'); background-size: cover; background-position: center;">
            <!--<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.7);"></div>-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6"><br>
                        <div class="banner-content">
                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000" style="color:white">Mentoria Overseas  <br> <span class="color-secondary" style="color:white">Education</span></h1>
                            <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000" style="color:white">Perfect partner for your study abroad dreams</p>
                            <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                <a href="contact-us" class="edu-btn">Contact Us <i class="icon-4"></i></a>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <span></span>
                                </li>
                                <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <span data-depth="2.5"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-form-box registration-form">
                            <h3 class="title">Get Started Today!</h3>
                            <p>Fill out the form below to book a FREE consultation with one of our experts</p>
    <form method="POST" action="">
        <div class="form-group">
            <input type="text" name="full_name" id="full-name" placeholder="Full name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" name="contact_number" id="contact-number" placeholder="Contact Number" required>
        </div>
        <div class="form-group">
            <input type="text" name="city" id="city" placeholder="City" required>
        </div>
        <div class="form-group">
            <input type="text" name="study_destination" id="study-destination" placeholder="Preferred Study Destination" required>
        </div>
        <div class="form-group">
            <button type="submit" class="edu-btn btn-medium">Submit Enquiry <i class="icon-4"></i></button>
        </div>
    </form>
</div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-8">
                    <img src="assets/images/about/h-1-shape-01.png" alt="Shape">
                </li>
            </ul>
        </div>
      
<?php
include("admin/modal.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $contactNumber = htmlspecialchars($_POST['contact_number']);
    $city = htmlspecialchars($_POST['city']);
    $studyDestination = htmlspecialchars($_POST['study_destination']);
    
    $to = "uzair.broomling@gmail.com";
    $subject = "New Enquiry Submission from mentoria overseas";
    $message = "
        <h2>Enquiry Details</h2>
        <p><strong>Full Name:</strong> $fullName</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Contact Number:</strong> $contactNumber</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>Preferred Study Destination:</strong> $studyDestination</p>
    ";
    
    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo '<script type="text/javascript">';
        echo 'swal({
                title: "Wow!",
                text: "Details have been submitted Successfully. Thank you!",
                type: "success"
            })';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'swal({
                title: "Oops!",
                text: "Something went wrong. Please try again.",
                type: "error"
            })';
        echo '</script>';
    }
}
?>


       
        <br><br><br><br>
         <div class="edu-about-area about-style-3" style="margin-top:-50px">
            <div class="container">
                <div class="row g-5 align-items-center">
                    
                    
                    <div class="col-lg-6">
                        <div class="edu-faq-gallery">
                            <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                <img src="assets/images/banner/flag-boy.webp" alt="Faq Images">
                            </div>
                            <ul class="shape-group">
                                
                                <li class="shape-3">
                                    <img src="assets/images/faq/shape-34.png" alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                <span class="pre-title black">Mentoria Overseas Education</span>
                                <h2 class="title"> Perfect partner for your study abroad dreams</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                                    <p class="black" align="justify">At Mentoria Overseas Education, we specialize in guiding students toward fulfilling their dreams of studying abroad. From university selection to securing scholarships and work permits, our expert counselors are dedicated to providing personalized support every step of the way.</p>
                                    <ul class="features-list">
                                        <li>Student-Centric Approach</li>
                                        <li>Diversity and Inclusion</li>
                                        <li>Continuous Improvement</li>
                                    </ul><br>
                                    <a href="about-us" class="edu-btn btn-medium btn-gradient header-btn" style="width:150px">Learn More <i class="icon-4"></i></a>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5">
                    <img class="rotateit" src="assets/images/about/shape-13.png" alt="Shape">
                </li>
                <li class="shape-6">
                    <span></span>
                </li>
            </ul>
        </div>

        <div class="edu-faq-area faq-style-1">
            <div class="container">
                <div class="row g-5 row--45">
                    <div class="col-lg-6">
                        <div class="edu-faq-gallery">
                            <div class="row g-5">
                                <img src="assets/images/banner/girl-1.webp">
                            </div>
                            <ul class="shape-group">
                                
                                <li class="shape-1 scene shape-dark" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="assets/images/faq/dark-shape-02.png" alt="Shape Images">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="assets/images/faq/shape-03.png" alt="Shape Images">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="assets/images/faq/shape-04.png" alt="Shape Images">
                                </li>
                                <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="assets/images/faq/shape-05.png" alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-faq-content">
                            <div class="section-title section-left">
                                <h2 class="title">Why Choose Mentoria?</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <div class="faq-accordion" id="faq-accordion">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                Personalized Counselling
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>We provide one-on-one counselling tailored to your academic and career goals</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                Expert Guidance
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>With years of experience, our team helps you choose the best universities, courses, and countries based on your profile</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                Scholarship Assistance
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>We assist in identifying scholarship opportunities to make your education more affordable</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
                                                Comprehensive Services
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>From visa assistance to pre-departure preparations, we ensure you are fully prepared for your journey abroad</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">
                                                Success-Based Pricing Model
                                            </button>
                                        </h5>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                            <div class="accordion-body">
                                                <p>For students, we offer success-based pricing, helping you secure scholarships for free education and living expenses in Italy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="assets/images/about/shape-02.png" alt="Shape Images">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span data-depth="-2.2"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
                   <p class="black" align="justify"><br><br>
                       <b>How We Can Help You</b><br>
                       
<b>University & Course Selection:</b> Choose the right program and university based on your preferences, career goals, and budget.<br>
<b>Application Support:</b> We help with applications, essays, and Statements of Purpose, ensuring you stand out in the admissions process.<br>
<b>Visa Assistance:</b> Get step-by-step guidance through the visa application process.<br>
<b>Post-Admission Support:</b> From accommodation arrangements to post-arrival services, we’re with you till the end.

                       </p> 
                    
                    
                </div>
            </div>
        </div>


        <div class="home-one-cta-two cta-area-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="home-one-cta edu-cta-box bg-image">
                            <div class="inner">
                                <div class="content text-md-end">
                                    <span class="subtitle">Get In Touch:</span>
                                    <h3 class="title"><a href="mailto:support@mentoriaoverseas.com">support@mentoriaoverseas.com</a></h3>
                                </div>
                                <div class="sparator">
                                    <span>or</span>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Call Us Via:</span>
                                    <h3 class="title"><a href="tel:+918669988111">+91-8669988111</a></h3>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-01 scene">
                                    <img data-depth="2" src="assets/images/cta/shape-06.png" alt="shape">
                                </li>
                                <li class="shape-02 scene">
                                    <img data-depth="-2" src="assets/images/cta/shape-12.png" alt="shape">
                                </li>
                                <li class="shape-03 scene">
                                    <img data-depth="-3" src="assets/images/cta/shape-04.png" alt="shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
       <div class="testimonial-area-2 section-gap-large">
            <div class="container edublink-animated-shape">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Testimonials</span>
                            <h2 class="title">What Our Students <br> Have To Say</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/data/google.png" alt="Logo"></div>
                                    <p>l had the best experience. The instructor was very knowledgeable and provided a lot of useful information. Best consulting company for abroad study</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        
                                    </div>
                                    <div class="info">
                                        <h5 class="title">vedant ugale</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/data/google.png" alt="Logo"></div>
                                    <p>Excellent guidance with well verse mentors to help you achieve the goal of studying aborad.
Very thankful to Mentoria for all the help and guidance.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Toshni Bhamare</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/data/google.png" alt="Logo"></div>
                                    <p>Best study abroad consulting company . proper guidance for each and everything
Hat’s off to the knowledge of the team</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Motivation Ltd</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/data/google.png" alt="Logo"></div>
                                    <p>The guidance given by the officials was very helpful and the process for all the work was very smooth. Very helpful and cooperative firm.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        
                                    </div>
                                    <div class="info">
                                        <h5 class="title">PRANAV GAIKWAD</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="content">
                                    <div class="logo"><img src="assets/data/google.png" alt="Logo"></div>
                                    <p>Metoria Education,one of the best education consulting organization, having caring & supportive team.Their valuable guidance helps students to take right decision & make their dream true</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb">
                                        
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Tejashri Tikhe</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="swiper-pagination"></div>
                <ul class="shape-group">
                    <li class="shape-1 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                        <img data-depth="1.4" src="assets/images/about/shape-30.png" alt="Shape">
                    </li>
                    <li class="shape-2 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                        <img data-depth="-1.4" src="assets/images/about/shape-25.png" alt="Shape">
                    </li>
                </ul>
            </div>
            <ul class="shape-group">
                <li class="shape-3" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img class="d-block-shape-light" data-depth="2" src="assets/images/others/map-shape-3.png" alt="Shape">
                    <img class="d-none-shape-dark" data-depth="2" src="assets/images/others/dark-map-2-shape-3.png" alt="Shape">
                </li>
            </ul>
           <center><a href="https://www.google.com/search?q=mentoria+overseas+education&sca_esv=570917586&sxsrf=AM9HkKl8L_7O5YHkqpawoPbKevf6mJFROg%3A1696492415112&ei=f2seZdG7BtmhhwO4haD4Aw&oq=men&gs_lp=Egxnd3Mtd2l6LXNlcnAiA21lbioCCAAyBxAjGIoFGCcyBxAjGIoFGCcyDhAuGIoFGMcBGK8BGJECMggQABiKBRiRAjINEAAYgAQYsQMYgwEYCjILEAAYgAQYsQMYgwEyDhAuGIAEGLEDGMcBGNEDMgsQABiABBixAxiDATIIEAAYgAQYsQMyCxAAGIoFGLEDGIMBSO0iUM0KWM0OcAF4AZABAJgB_AGgAdYEqgEFMC4yLjG4AQHIAQD4AQHCAgoQABhHGNYEGLADwgIKEAAYigUYsAMYQ8ICBxAuGIoFGEPCAgsQLhiKBRixAxiDAcICBxAAGIoFGEPiAwQYACBBiAYBkAYK&sclient=gws-wiz-serp#lrd=0x3bddeb3bdfe96549:0x5ed8fd791c19e9d5,1,,,," class="edu-btn btn-medium btn-gradient header-btn" style="width:150px">Browse More <i class="icon-4"></i></a></center>
        </div>
         
        
       
        <?php include("footer.php"); ?>
        