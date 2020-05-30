<!-- 

 * @Author: Your name
 * @Date:   2020-04-22 18:56:31
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-28 03:12:57
 -->
  <!--contact form -->
 <section class="contact py-5" id="contact">
        <div class="container">
            <div class="header-alfa py-lg-5 py-4 text-center" data-aos="slide-up" data-aos-duration="2000">
                <h3 class="tittle mb-lg-3 mb-3"> Get In Touch</h3>
            </div>
            <div class="contact-form mx-auto text-left">
                <form name="contactform" id="contactform" method="post" action="#" onsubmit="return(validate());" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="slide-up" data-aos-duration="3000">
                                <label>Name *</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="slide-up" data-aos-duration="2000">
                                <label>Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="email">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="slide-up" data-aos-duration="3000">
                                <label>Phone No. *</label>
                                <input type="text" class="form-control" id="phone" placeholder="" name="phone">
                            </div>
                        </div>

                    </div>

                    <div class="form-group mb-5" data-aos="slide-up" data-aos-duration="2000">
                        <label>Leave Us A Message !</label>
                        <textarea name="message" class="form-control" id="iq" placeholder=""></textarea>
                    </div>
                    <div class="contact-page" data-aos="slide-up" data-aos-duration="3000">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>

                    <?php               
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
     
 $name = $_POST["name"];
 $email = $_POST["email"];
 $phone=$_POST["phone"];
 $message = $_POST["message"];
 
 
 
  ini_set("sendmail_from", "--------------@gmail.com");  
   
   $to = "ekotiterencetercy@gmail.com";// receiver address  
   $subject = "Message Form My Contact Form";  
   $message = "Name Is :".$name.", "."Email Is : ".$email."Phone Number is:".$phone. ",  Message is: ".$message;  
   
   $header = "From:------------@gmail.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   } 
    
    
    
}
 
 

 
   
?>

                </form>
            </div>

    </section>
    <!-- //contact -->


    <!-- footer -->
    <footer class="footer py-sm-5 py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="contact_grid_left">
                <ul class="list-unstyled row text-left">
                    <li class="col-lg-4 adress-info">
                        <div class="row">
                            <div class="col-md-3 text-lg-center adress-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="col-md-9 text-left" data-aos="slide-up" data-aos-duration="2000">
                                <h6>Location</h6>
                                <p>Quick Solution
                                    <br>Buea-Molyko </p>
                            </div>
                        </div>
                    </li>

                    <li class="col-lg-4 adress-info">
                        <div class="row">
                            <div class="col-md-3 text-lg-center adress-icon">
                                <span class="fa fa-envelope-open-o"></span>
                            </div>
                            <div class="col-md-9 text-left" data-aos="slide-up" data-aos-duration="3000">
                                <h6>Email</h6>
                                <a href="mailto:ekotiterencetercy@gmail.com">ekotiterencetercy@gmail.com</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 adress-info">
                        <div class="row">
                            <div class="col-md-3 text-lg-center adress-icon">
                                <span class="fa fa-mobile"></span>
                            </div>
                            <div class="col-md-9 text-left" data-aos="slide-up" data-aos-duration="2000">
                                <h6>Ring Us </h6>
                                <p>
                                    (+237) 673-981-919
                                </p>
                                <p>(+237) 665-762-776</p>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="logo-2 text-center mt-4" data-aos="slide-up" data-aos-duration="3000">
                <h2><a class="logo" href="index.html">Quick Solution</a></h2>
            </div>
            <!-- social icons footer -->
            <div class="mobl-footer text-center mt-4" data-aos="slide-up" data-aos-duration="3000">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-dribbble"></span>
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#">
                            <span class="fa fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- copyright -->
            <p class="copy-right-grids text-li text-center my-sm-4 my-4" data-aos="slide-up" data-aos-duration="3000">© 2020. All Rights Reserved | Powered by
                <a href="#"> Quick Works </a>
            </p>
            <div class="top_move text-center" data-aos="slide-up" data-aos-duration="2000">
                <a href="#home" class="move-top"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
            </div>
            <!-- //copyright -->
        </div>
    </footer>
    </div>
    <!-- footer -->
    <!---->




    <!-- js -->
    <script type="text/javascript " src="js/jquery-2.2.3.min.js "></script>
    <script type="text/javascript " src="js/bootstrap.js "></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->
    <!-- requried-jsfiles-for owl -->
    <!-- testimonials -->
    <script src="js/owl.carousel.js "></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo2 ").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });


        });
    </script>

    <!-- //requried-jsfiles-for owl -->
    <!-- //testimonials -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js "></script>
    <script src="js/easing.js "></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll ").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->


    <!-- smooth scrolling js -->
    <script src="js/SmoothScroll.min.js "></script>
    <!-- //smooth scrolling js -->