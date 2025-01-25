<?php
$con = mysqli_connect('localhost','u958031529_Urlwebwala','u958031529_Urlwebwala','Guddu@122812');

if(isset($_POST['submit'])){
    
    //Get form data
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subjecta = $_POST['subject'];
    $message = $_POST['message'];
    
    //Email address validation and display error message
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
    if (!preg_match($email_exp, $email)) {
        echo '<br><span style="color:red;">The Email address you entered is not valid.</span>';
        exit;
    }
    $to = "mail.Urlwebwala@gmail.com";  //recipient email address
    $subject = 'Internship New From by '.$name;  //Subject of the email

    //Message content to send in an email
    $message = "Name : ".$name."\r\n Email : ".$email."\r\n Phone : ".$phone."\r\n Message : ".$message."\r\n Subject : ".$subject;
    // $message = name;
    
    //Email headers
    $headers = "From: Urlwebwala"."\r\n";
    // $headers = "CC: someone@example.com";
    $headers .= "Reply-To:".$email."\r\n";
    
    //Send email 
    mail($to, $subject, $message, $headers);
    $insert = mysqli_query($con,"INSERT INTO `internship` (`name`,`email`,`phone`,`subject`,`message`) VALUES('$name','$email','$phone','$subjecta','$message')");
   
    if($insert){
        header('Location: success.php');
    
    }
           
}
 
?>


<?php include('header.php');?>

   <div class="tp-offcanvas-wrapper">
      <div class="tp-offcanvas white-bg">
         <div class="offc-top-pattern">
            <img src="assets/img/hero/nav-parrten-top.png" alt="">
         </div>
         <div class="tp-offcanvas__top tp-border-bottom pb-30 mb-30">
            <div class="tp-offcanvas-close">
               <span><i class="fal fa-times"></i></span>
            </div>
            <!--<div class="tp-offcanvas__logo mb-50">-->
            <!--   <a href="index-2.html"><img src="assets/img/logo/black-logo1.svg" alt="sticky-logo"></a>-->
            <!--</div>-->
            <p>we believe that every customer deserves a quality experience and we're committed to delivering just that.</p>
            <div class="tp-offcanvas__social">
               <span> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></span>
               <span> <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></span>
               <span> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></span>
               <span> <a href="https://www.linkedin.com/in/"><i class="fab fa-linkedin "></i></a></span>
            </div>
         </div>
         <div class="tp-offcanvas__widget mb-40 d-none d-xl-block">
            <h3 class="tp-footer__widget-title mb-35">
               Get In Touch
            </h3>
            <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20  mb-30">
               <span class="icon mr-20"><img src="assets/img/icons/ofp-phone.png" alt=""></span>
               <span>
                  <span class="d-block mb-0">Phone number</span>
                  <b><a href="tel:+917600302430> Call Us: +91 7600-302-430 </a></b>
               </span>
            </div>

            <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
               <span class="icon mr-20"><img src="assets/img/icons/ofc-mail-icon.png" alt=""></span>
               <span>
                  <span class="d-block mb-0">Email address</span>
                  <a href="mailto:mail.Urlwebwala@gmail.com"> mail.Urlwebwala@gmail.com </a></b>
               </span>
            </div>
            <div class="tp-offcanvas-cta d-flex align-items-center pb-20  mb-30">
               <span class="icon mr-20"><img src="assets/img/icons/ofc-locaiton.png" alt=""></span>
               <span>
                   <span class="d-block mb-0">C 512 Dev Aurum, Anand Nagar Cross Road, Prahlad Nagar, Ahmedabad - 380015.</span>
                  
               </span>
            </div>
         </div>
         <div class="tp-mobile-menu">
         </div>
         <div class="tp-offcanvas__bottom mt-80 d-none d-lg-block">
            <p>Our team applies its wide ranging in
               experience to determining.</p>
            <div class="tp-offcanvas-btn-wrapper">
               <a href="contact.html" class="tp-common-btn">get in touch
                  <span>
                     <i class="fal fa-long-arrow-right"></i>
                     <i class="fal fa-long-arrow-right"></i>
                  </span>
               </a>
            </div>
         </div>

         <div class="offc-bottom-pattern">
            <img src="assets/img/hero/nav-parrten-botoom.png" alt="">
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- back to top start  -->
   <a href="#main-wrapper" id="tp-backto-top" class="tp-back-to-top show">
      <span>
         <i class="fal fa-angle-double-up"></i>
      </span>
  </a>
      
   <!-- off canvas area  -->
   <main>
      <!-- breadcrumb area start -->
      <!--<div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="assets/img/breadcrumb/breadcrumb-bg.png">-->
      <!--   <div class="container">-->
      <!--      <div class="row">-->
      <!--         <div class="col-xxl-12">-->
      <!--            <div class="breadcrumb__content p-relative z-index-1">-->
      <!--               <div class="breadcrumb__list mb-10">-->
      <!--                  <span><a href="index.php">Home</a></span>-->
      <!--                  <span class="dvdr dvdr-line"></span>-->
      <!--                  <span class="tp-bc-acive-menu">Apply</span>-->
      <!--               </div>-->
      <!--            </div>-->
      <!--         </div>-->
      <!--      </div>-->
      <!--   </div>-->
      <!--</div>-->
      <!-- breadcrumb area end -->

     
      <div class="it-cta-area law-cta-area about-me-cta-area pt-120 pb-85 theme-bg" data-background="assets/img/cta/sv-detials-cta-bg.png" style="background-image: url(_assets/img/cta/sv-detials-cta-bg.html);">
         <div class="container">
            <div class="row align-items-center">
            
               <div class="col-xl-6">
                  <div class="mb-30">
                     <div class="it-cta__title wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                        <div class="section-title-wraper">
                           <div class="tp-section">
                              <div class="pb-40"><img src="assets/img/icons/red-what-icon.png" alt=""></div>
                              <h2 class="tp-section__title text-black text-capitalize mb-25">Path for Success.</h2>
                        
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6" >
                  <div class="it-cta-form wow tpfadeUp" data-wow-delay=".4s">
                     <form action="" method="POST">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-user"></i></span>
                                 <input type="text" name="name" placeholder="Full name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-envelope-open"></i></span>
                                 <input type="email"  name="email" placeholder="Email address" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-phone"></i></span>
                                 <input type="text" name="phone" placeholder="Phone" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="input-item">
                                 <span><i class="fas fa-code"></i></span>
                                 <input type="text" name="subject" placeholder="technology (Ex: PHP, Node.js)" required>
                              </div>
                           </div>
                          
                           <div class="col-12">
                              <div class="input-item-textarea">
                                 <span><i class="fas fa-pen"></i></span>
                                 <textarea name="message" placeholder="Message"></textarea>
                              </div>
                              <button name="submit" type="submit" class="it-cta-form-submit border-0">Submit</button>
                           </div>

                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
   <?php include('footer.php');?>