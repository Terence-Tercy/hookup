<?php
/**
 * @Author: Your name
 * @Date:   2020-04-22 20:46:06
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-30 16:26:57
 */
 
 include 'includes/header.php';?>
 <br>
 <style>
 body {
    margin: 90px;
    font-size: 100%;
    background: #fff;
}
body a {
    text-decoration: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.buttonColor{
    color:teal;
    
}
.hoverHeader a:hover{
	
	color:teal;
    font-weight:bold;
    text-decoration:none;
	
}
.pcolor{
    color:#777777;
}
.tealColor{
    color:teal;
}
.bgColor{
    background-color:teal;
}
 </style>
 <body>
 <!-- the header goes here -->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="index.php">
            <h3><span class="text-info">Quick</span> Solution</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
    </nav>
    <section>
    <div class="container">
        <center>
            <h3>Log In And Get To Work!</h3>
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                <form action="" id="signinFormform">
        <div class="form-group">
            <label for="email">User Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" style="width: 30rem;">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <center><button type="submit" class="btn btn-success" style="width: 30rem;">Continue</button></center>
        <hr> <h5>or</h5>
        <div class="form-group">
        <center><button type="submit" class="btn btn-outline-success">Register</button></center>
        </div>
        
    </form>
                </div>
            </div>
   
    </center>
    </div>
    </section>
 
    <!-- js -->
    <script type="text/javascript " src="js/md5.js "></script>
    <script type="text/javascript " src="js/jquery-2.2.3.min.js "></script>
    <script type="text/javascript " src="js/bootstrap.js "></script>
    <script>
    $('#signinFormform').submit(function () {
        var password = $('#pass');
        password.val(hexMD5(password.val()));
        console.log("Password Hash: " + password.val());
    });
    </script>
    </body>