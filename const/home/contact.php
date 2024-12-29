  <?php
  include "header.php";
  ?>
<?php
include "../connection.php";

if(isset($_POST['submit']))
{
    $name=$_POST['user'];
    $email=$_POST['email'];
    $phone=$_POST['Phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $sub=$_POST['sub'];
    $message=$_POST['message'];

    $sql ="INSERT INTO `cont`(`name`, `email`,`Phone`,`address`,`city`,`zip`,`sub`,`message`) VALUES ('$name','$email','$phone','$address','$city','$zip','$sub','$message')";
    $result=mysqli_query($conn,$sql);
    
     if($result){ 
       
    echo"<script>alert('Message Send Success');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
   
}

 
?> 
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Rajiv Nagar, Mysore, India</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+91 8904178621</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>ascontractor@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="contact.php" method="POST" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="user"  placeholder="Name" required pattern="[a-zA-Z][a-zA-Z ]{2,}" >
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email"  placeholder="Your Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
                                        <p class="help-block text-danger"></p>
                                    </div>

                                   
                                       <label class="la">Category : </label>
                                    <select name="sub" class="options">
                                    <option value="None">None</option>   
                                   <option value="Building Construction">Building Construction</option>
                                   <option value="House Renovation">House Renovation</option>
                                   <option value="Architecture Design">Architecture Design</option>
                                   <option value="Interior Design">Interior Design</option>
                                   <option value="Fixing & Support">Fixing & Support</option>
                                   <option value="Painting">Painting</option>
                                    </select>
                                        <p class="help-block text-danger"></p>
                                
                                    <style>
                                        .options{
                                            background:#03f27;
                                            color:#000;
                                        }
                                        .la{
                                            color:#fff;
                                        }
                                        </style>
                                    
                                 

                                    <div class="control-group">
                                        <input type="tel" class="form-control"  name="Phone" placeholder="Phone"  required minlength="10" maxlength="10">
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="control-group">
                                        <input type="text" class="form-control"  name="address"  placeholder="Address" required   pattern="[a-zA-Z][a-zA-Z ]{2,}">
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="control-group">
                                        <input type="text" class="form-control"  name="city"  placeholder="City" required  pattern="[a-zA-Z][a-zA-Z ]{2,}" >
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="control-group">
                                        <input type="zip" class="form-control"  name="zip"  placeholder="PinCode/ZipCode" required  minlength="5" maxlength="10">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                   
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required pattern="[a-zA-Z][a-zA-Z ]{2,}"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" name="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->

<?php 
  include "footer.php";
?>

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
