<!-- 

 * @Author: Your name
 * @Date:   2020-04-22 20:18:11
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-29 05:07:15
-->
<!DOCTYPE html>
<html lang="en">

    <head>
    <?php
include ('connect.php');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Quick solution | Home :: </title>
    <meta name="keywords" content="Quick solution a Responsive web template, Bootstrap Web Templates,
     Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web 
    design" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link href="css/main.css" rel='stylesheet' type='text/css' /> 
    <!-- ?v=<?php echo time(); ?> -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<!-- this style is included here because my main css cache is refusing to load -->
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');
    :root {
    --primary-color: #3a4052;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Open Sans', sans-serif;
    line-height: 1.5;
}




.showcase {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    padding: 0 20px;
}

.video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: var(--primary-color) url('./https://traversymedia.com/downloads/cover.jpg') no-repeat center center/cover;
}

.video-container video {
    min-width: 100%;
    min-height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    object-fit: cover;
}

.video-container:after {
    content: '';
    z-index: 1;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
}

.content {
    z-index: 2;
}

.btn {
    display: inline-block;
    padding: 10px 30px;
    background: var(--primary-color);
    color: #fff;
    border-radius: 5px;
    border: solid #fff 1px;
    margin-top: 25px;
    opacity: 0.7;
}

.btn:hover {
    transform: scale(0.98);
}
/* new css */

ul#menu {
    position: fixed;
    top: 4%;
    width: 3em;
    height: 3em;
    margin: 0;
    /* padding: 0 1em; */
    background: #151e253d;
    color: #ffffff;
    z-index: 99;
    right: 2%;
}

ul#menu>li {
    float: left;
    list-style-type: none;
    position: relative;
    width: 100%;
}

ul#menu label {
    position: relative;
    display: block;
    padding: 0 18px 0 12px;
    line-height: 3em;
    transition: background 0.3s;
    cursor: pointer;
}
ul#menu input {
    display: none
}
ul#menu input:checked~ul.submenu {
    max-height: 360px;
    transition: max-height 0.5s ease-in;
}
/*style for the second level menu*/

ul.submenu {
    max-height: 0;
    padding: 0;
    overflow: hidden;
    list-style-type: none;
    background: #f7f7f7;
    transition: max-height 0.5s ease-out;
    position: absolute;
    min-width: 11em;
    right: 0;
    border-radius: 4px;
    box-shadow: 0 1px 8px rgba(20, 21, 21, 0.37);
}

ul.submenu li a {
    display: block;
    padding: 12px;
    color: #141d24;
    text-decoration: none;
    transition: background .3s;
    text-align: center;
    font-size: 0.9em;
    font-weight: 600;
}

ul.submenu li a:hover {
    background: teal;
}

.teal{
    color:teal;
}
.mainLink{
    text-decoration:none;
}
        </style>
    </head>
   
    <ul id="menu">
        <li>
            <input id="check02" type="checkbox" name="menu" />
            <label for="check02"><span class="fas fa-bars" aria-hidden="true"></span></label>
            <ul class="submenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="sign.php">Category</a></li>
                <li><a href="sign.php" >Join</a></li>
                <li><a href="signin.php" >Log In</a></li>
                <li><a href="signin.php" >Post A Job</a></li>
                <li><a href="404.PHP">FAQ'S</a></li>
                <!-- <li><a href="#contact" class="scroll"></a></li> -->
                
            </ul>
        </li>
    </ul>
    <section class="showcase">
        <div class="video-container">
            <video src="https://traversymedia.com/downloads/video.mov" autoplay muted loop></video>
        </div>
        <div class="content">
            <h1><span class="teal">QUICK</span> WORKS</h1>
            <h3>Find Jobs Everywhere, Anytime</h3>
            <a href="sign.php" class="btn">Get started</a>
        </div>
    </section>
    <!-- 
first grid line -->
    <div class="jumbotron">
        <div class="container">

            <h2 class="teal">Popular Professional Service</h2>
            <div class="row justify-content-between">
                <div class="col-4 shadow-lg p-3 mb-5 ">
                <a href="web design.php"><img src="assets/cabler.jpg" class="img-fluid  rounded" alt="Responsive image"></a>
                    <div class=" ">
                        <h4><a href="web design.php">Moblie & Web Dev</a> </h4>
                    </div>
                </div>
                <div class="col-4 shadow-lg p-3 mb-5">
                <a href="web design.php"> <img src="assets/electricity.jpg" class="img-fluid rounded" alt="Responsive image"></a>
                    <div class=" ">
                        <h4><a href="web design.php">Electrical</a></h4>
                    </div>
                </div>
                <div class="col-4 shadow-lg p-3 mb-5 ">
                <a href="web design.php"><img src="assets/camera.jpg" class="img-fluid rounded" alt="Responsive image"></a>
                    <div class=" ">
                        <h4><a href="web design.php">Plumbing</a></h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4 shadow-lg p-3 mb-5 ">
                <a href="web design.php"> <img src="assets/computers.jpg" class="img-fluid rounded" alt="Responsive image"></a>
                    <div class=" ">
                        <h4><a href="web design.php">Products</a></h4>
                    </div>
                </div>
                <div class="col-4 shadow-lg p-3 mb-5 ">
                <a href="web design.php"> <img src="assets/fry cook.jpg" class="img-fluid rounded" alt="Responsive image"></a>
                    <div class=" ">
                        <h4><a href="web design.php">Repairs</a></h4>
                    </div>
                </div>
                <div class="col-4 shadow-lg p-3 mb-5">
                <a href="web design.php"><img src="assets/satelite.jpg" class="img-fluid rounded" alt="Responsive image"></a>
                    <div class=" ">
                        <h4><a href="web design.php">Digital</a></h4>
                    </div>
                </div>

            </div><br>
            <p>Don't see what you're looking for? <a href="#">see all categories!</a></p>
        </div>
    </div>



    <!--//end of row -->
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="teal">Get Work Done Faster On Quick Solution With Confidence</h3>
                <h5 class=""> <i class="fas fa-edit teal mr-3">	</i>More Options</h5>
                <p>With us get more hiring options. projects can range from quick turnarounds, one-offs, to longer term. You're not bound by one-time packaged projects or other limitations.
                </p><br>
                <h5 class=""> <i class="fas fa-edit teal mr-3">	</i>Know The Price Upfront</h5>
                <p>Find any service within minutes and know exactly what you'll pay.No hourly rates just a fixed price</p><br>
                <h5 class=""> <i class="fas fa-edit teal mr-3">	</i>We're Here For You 24/7</h5>
                <p>Quick Solution is here fror you, anything from answering any questions to resolving any issues at any time.</p><br>
            </div>
            <div class="col-md-6">
            <a href="sign.php">  <img src="assets/signupbutton.jpg" alt="" class="img-fluid image1"></a>
            </div>
        </div>
    </div>
    <br>

    <div class="text-info text-center mb-5">
        <h2 class="teal">Explore The Marketplace</h2>
    </div>
    <div class="news-agileinfo container">
        <div class="news-row">
            <div class="canestech-news-grids row">
                <div class="col-lg-6">
                    <img src="assets/banner1.jpg" class="img-responsive img-fluid rounded shadow-lg" alt="" />
                </div>
                <div class="col-lg-6 canestech-data-info ">
                    <!--remember to add a link on a wide range of properties-->
                    <h5 class="teal">Wide Range of Properties</h5>
                    <p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas
                        sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
                </div>
            </div>
            <div class="canestech-news-grids news-grids-mdl row">
                <div class="col-lg-6 canestech-data-info canestech-data-info-fltlft">
                    <!--remember to add a link under agents-->
                    <h5 class="teal">14 Agents for Your Service</h5>
                    <p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas
                        sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
                </div>
                <div class="col-lg-6  canestech-data-info canestech-data-info-fltlft">
                    <img src="assets/source.png" class="img-responsive img-fluid rounded" alt="" />
                </div>
            </div>
            <div class="canestech-news-grids row">
                <div class="col-lg-6 canestech-data-info">
                    <img src="assets/electricity.jpg" class="img-responsive img-fluid rounded" alt="" />
                </div>
                <div class="col-lg-6 canestech-data-info ">
                    <!--remember to leave a link under best prices guaranteed-->
                    <h5 class="teal">Best Price Guarantee!</h5>
                    <p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas
                        sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
                </div>
            </div>
        </div>

    </div>


    <!-- the plan section starts here -->
    <div class="py-5">
        <div class="container-fluid">
            <div class=" text-center mb-5">
                <h2 class="teal">Choose A Plan</h2>
            </div>
            <div class=" row">
                <div class="price-grid col-md-3">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr1">
                            <h4>Basic</h4>
                            <img src="assets/couch.jpg" alt="img" class="img-fluid">
                            <h5> <i class="fas fa-check-circle text-white ml-4"></i><span> </span> FREE</h5>
                           
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">

                                <ul>
                                <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>

                                </ul>
                            </div>
                            <div class="price-selet pric-sclr1">
                                <!--remember to leave a link here-->
                                <a href="sign.php" class="canestech_plan_sign_up2"  data-target="#exampleModalCenter" role="button">Select plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-grid col-md-3">
                    <div class="price-block price-block1 agile">
                        <div class="price-gd-top pric-clr2">
                            <h4>Diamond</h4>
                            <img src="assets/fry cook.jpg" alt="img" class="img-fluid">
                            <h3>10,000<span>XAF</span></h3>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>

                                </ul>

                            </div>
                            <div class="price-selet pric-sclr2">
                                <!--remember to leave a link here-->
                                <a href="sign.php" class="canestech_plan_sign_up2" data-target="#exampleModalCenter" role="button">Select plan</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-grid lost col-md-3">
                    <div class="price-block price-block2 agile">
                        <div class="price-gd-top pric-clr3">
                            <h4>Gold </h4>
                            <img src="assets/source.png" alt="img" class="img-fluid">
                            <h3>30,000<span>XAF</span></h3>

                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>


                                </ul>
                            </div>
                            <div class="price-selet pric-sclr3">
                                <!--remember to leave a link here-->
                                <a href="sign.php" class="canestech_plan_sign_up2"data-target="#exampleModalCenter" role="button">Select plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-grid lost col-md-3">
                    <div class="price-block price-block4 agile ">
                        <div class="price-gd-top ">
                            <h4>platinum </h4>
                            <img src="assets/computers.jpg" alt="img" class="img-fluid">
                            <h3>50,000<span>XAF</span></h3>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </ul>
                            </div>
                            <div class="price-selet pric-sclr3">
                                <a href="sign.php" class="canestech_plan_sign_up2" data-target="#exampleModalCenter" role="button">Select plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- //end of plan section -->
    <!-- what i do section starts here -->

    <section class="services py-lg-5 py-4" id="services">
        <div class="container py-sm-4 py-4">
            <div class="header-alfa py-lg-5 py-3 text-center" data-aos="slide-up">
                <h3 class="tittle mb-lg-3 mb-3">Features</h3>
            </div>
            <div class="feature-grids row text-left">
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="2000">
                    <div class="bottom-gd p-lg-5 p-3">
                        <span class="fas fa-edit" aria-hidden="true"></span>
                        <h3 class="my-4">We Post Jobs</h3>
                        <p> Tell us about your project. Quick work connects you with top talent and agencies around the world, or near you.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="3000">
                    <div class="bottom-gd2-active p-lg-5 p-3">
                        <span class="fa fa-laptop" aria-hidden="true"></span>
                        <h3 class="my-4">Bids Comes To You</h3>
                        <p>Get qualified proposals within 24 hours. Compare bids, reviews, and prior work. Interview favorites and hire the best fit.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="3000">
                    <div class="bottom-gd p-lg-5 p-3">
                        <span class="fas fa-folder" aria-hidden="true"></span>
                        <h3 class="my-4">Collaborate Easily</h3>
                        <p>Use Upwork to chat or video call, share files, and track project milestones from your desktop or mobile.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="2000">
                    <div class="bottom-gd p-lg-5 p-3">
                        <span class="fa fa-clone" aria-hidden="true"></span>
                        <h3 class="my-4">Friendly Design</h3>
                        <p>We enhance users satisfaction with our sites by improving usability and accessibility even a baby can use. </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="3000">
                    <div class="bottom-gd p-lg-5 p-3">
                        <span class="fa fa-headphones" aria-hidden="true"></span>
                        <h3 class="my-4">Online Support</h3>
                        <p>We offer 24/7 support to our <strong>clients</strong> because we consider them our priority</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="3000">
                    <div class="bottom-gd p-lg-5 p-3">
                        <span class="fa fa-magic" aria-hidden="true"></span>
                        <h3 class="my-4">Maintenance</h3>
                        <p>We offer updates and maintain software, mobile apps, databases and websites here at Alpha-code.</p>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- end of what i do -->

    <!-- banner-bottom-alfa1 -->
    <section class="mobile py-lg-5 py-5" id="screen">
        <div class="container py-sm-3 py-3">
            <div class="header-alfa py-lg-5 text-center" data-aos="slide-up" data-aos-duration="3000">
                <h3 class="tittle mb-lg-3 mb-3"> About Us</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 pr-lg-5" data-aos="slide-up" data-aos-duration="2000">
                    <div class="header-alfa pt-lg-5 pt-3 text-left">
                        <h3 class="tittle mb-lg-4 mb-3">Our Vision</h3>
                    </div>
                    <p>We are out to inspire with our creativity. We seek to bring innovation and creativity with work which we hope not only to satisfy our clients but also inspire everyone who comes across what we do.
                    </p>
                    <p class="my-3">Nous vision L'excellence car c'est dans notre AND de faire tout notre travail pour PERFECTION.</p>
                    <ul class="tic-info list-unstyled">
                        <li>

                            <span class="fas fa-bell mr-2"></span> Recieve Bids

                        </li>
                        <li>

                            <span class="fa fa-database mr-2"></span> post jobs

                        </li>
                        <li>

                            <span class="fa fa-bullhorn mr-2"></span> collaborate easily

                        </li>
                        <li>

                            <span class="fas fa-gem mr-2"></span> Secured payment

                        </li>
                    </ul>
                </div>
                <div class="slider col-lg-6 mt-4" data-aos="slide-left" data-aos-duration="3000">
                    <div class="csslider infinity" id="slider1">
                        <input type="radio" name="slides" checked="checked" id="slides_1" />
                        <input type="radio" name="slides" id="slides_2" />
                        <input type="radio" name="slides" id="slides_3" />
                        <input type="radio" name="slides" id="slides_4" />
                        <ul>
                            <li>
                                <div id="bg">
                                    <img src="assets/mobile1.png" class="img-fluid" alt="mobile-image">
                                </div>
                            </li>
                            <li>
                                <div id="bg1">
                                    <img src="assets/mobile2.png" class="img-fluid" alt="mobile-image">
                                </div>
                            </li>
                            <li>
                                <div id="bg2">
                                    <img src="assets/mobile3.png" class="img-fluid" alt="mobile-image">
                                </div>
                            </li>
                            <li>
                                <div id="bg3">
                                    <img src="assets/mobile2.png" class="img-fluid" alt="mobile-image">
                                </div>
                            </li>

                        </ul>
                        <div class="arrows">
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                            <label for="slides_4"></label>
                        </div>
                        <div class="navigation">
                            <div>
                                <label for="slides_1"></label>
                                <label for="slides_2"></label>
                                <label for="slides_3"></label>
                                <label for="slides_4"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about us section ends here -->

    <!-- the subcribe section begins here -->
    <section class="subscribe">
        <div class="layer two">
            <div class="container text-center py-5">
                <div class="header-alfa pt-lg-3 pt-4">
                    <h3 class="tittle two mb-lg-5 mb-3 text-white">Subscribe Now</h3>
                </div>
                <form action="#" method="post" class="newsletter mt-lg-5 mt-3">
                    <input class="email" type="email" placeholder="Your email..." required="">
                    <button class="but-submit" type="submit" data-aos="slide-up"><span class="fas fa-paper-plane" aria-hidden="true" ></> Subscribe</button>
                </form>
            </div>

        </div>
    </section><br><br>
    <!-- //the subscribe section ends here -->

    <!-- another info section starts here -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="teal">Get Work Done Faster On Quick Solution With Confidence</h5><br>
                <h5 class=""> <i class="fas fa-check-circle teal mr-3"></i>More Options</h5>
                <p>With us get more hiring options. projects can range from quick turnarounds, one-offs, to longer term. You're not bound by one-time packaged projects or other limitations.
                </p><br>
                <h5 class=""> <i class="fas fa-check-circle teal mr-3">	</i>Know The Price Upfront</h5>
                <p>Find any service within minutes and know exactly what you'll pay.No hourly rates just a fixed price</p><br>
                <h5 class=""> <i class="fas fa-check-circle teal mr-3">	</i>We're Here For You 24/7</h5>
                <p>Quick Solution is here fror you, anything from answering any questions to resolving any issues at any time.</p><br>
            </div>
            <div class="col-md-6 banner1Image mb-3">
                <img src="assets/banner1.jpg" alt="" class="img-fluid rounded ">
            </div><br>
            <!-- remember to separate the picture above from the next section with a margin buttom -->
        </div>
    </div>
    <!-- //end of info section -->

    <section class="banner-bottom-alfa pt-lg-5 py-5" id="app-serve">
        <div class="container pt-lg-5 py-5">
            <div class="ab-grids row text-left">
                <div class="col-lg-6 pt-lg-5 mt-lg-5 app-mob">
                    <img src="assets/app2.png" class="img-fluid" alt="mobile-image">
                </div>
                <div class="col-lg-6 pl-lg-5 mb-lg-5">
                    <div class="header-alfa text-left">
                        <h3 class="text-white mb-lg-4 mb-3">Easily Find Quality Matches</h3>
                    </div>
                    <p data-aos="slide-up" class="feature-grid">On Quick works you’ll find a range of top freelancers and agencies, from developers and development agencies to designers and creative agencies, Electricians, campaign Repairers, marketing agencies and marketers, Plumers, and more.</p>
                    <div class="feature-grid text-left ml-3 mt-5">
                        <div class="bottom-gd my-lg-5">
                            <span class="fa fa-database" aria-hidden="true"></span>
                            <h3 class="">BECOME A PATREON</h3>
                            <p>We are open too for slight negotiations, partnerships, and suggestions. If you think of becoming a patreon today to support what we do, it will be highly appreciated. Just fill the information in the form below. </p>
                        </div>
                        <div class="bottom-gd my-lg-5">
                            <span class="far fa-money-bill-alt" aria-hidden="true"></span>
                            <h3 class="">We send you a shortlist of likely candidates</h3>
                            <p>You can also search our site for specialized freelancers and professional agencies who can view your job and submit proposals too.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonies -->

    <!--/testimonials-->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-lg-5 py-4">
            <div class="header-alfa pb-lg-5 pb-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3 teal"> What They Say</h3>
            </div>
            <div class="row mt-3">

                <div class="col-lg-4 test-grid text-left px-lg-3">
                    <div class="test-info">

                        <p>"We can hire experts who codes in different languages than we write internally. Our pro is one of the best hires we've made."</p>
                        <h3 class="mt-md-4 mt-3"> - Terry Wolfskin</h3>

                        <div class="test-img text-center mb-3">
                            <img src="assets/terry.jpg" class="img-fluid" alt="user-image">
                        </div>
                        <div class="mobl-footer test-soc text-center">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 test-grid text-left px-lg-3">
                    <div class="test-info">

                        <p>"I attribute our success building and scaling our startup to upwork. its how we recuit new people, manage payments and track deadlines."</p>
                        <h3 class="mt-md-4 mt-3"> - Harrison</h3>
                        <div class="test-img text-center mb-3">
                            <img src="assets/Harrison.jpg" class="img-fluid" alt="user-image">
                        </div>
                        <div class="mobl-footer test-soc text-center">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 test-grid text-left px-lg-3">
                    <div class="test-info">

                        <p>"I appreciate their work and their devotion for our satisfaction. I work with them often and i highly recommend this this team to use if you want the best." </p>
                        <h3 class="mt-md-4 mt-3">- Mme Naomi</h3>

                        <div class="test-img text-center mb-3">
                            <img src="Assets/Beauty.jpg " class="img-fluid" alt="user-image">
                        </div>
                        <div class="mobl-footer test-soc text-center">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
   
    <?php include 'includes/footer.php';?>
</body>

</html>