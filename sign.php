<?php
/**
 * @Author: Your name
 * @Date:   2020-04-22 20:46:06
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-30 18:03:28
 */
include ('connect.php');
 include 'includes/header.php';
 error_reporting(0);
 
 $userfirstName =$_POST['firstName'] ;
 $userlastName = $_POST['lastName'] ;
 $userpass = $_POST['pass'] ;
 $useremail = $_POST['email'] ;
 $userplaces = $_POST['places'] ;
 $userworkAs = $_POST['workAs'] ;
 $userplan = $_POST['plan'] ;
 $usernic = $_POST['nic'] ;

 if (!$_POST['submit']){
     echo "All fields are required to complete task";
 }
 else{
$sql = "INSERT into sign_in ( firstName, lastName, pass, email, places, workAs, plan, nic)

values ('$userfirstName', '$userlastName','$userpass','$useremail','$userplaces','$userworkAs','$userplan','$usernic') ";

if(mysqli_query($conn, $sql)){
    header("Location: ./signin.php");
}else{
    echo "something went wrong please try again later!!!";
}
 }
 ?>

 <br>
 <style>
 .submit{
     background-color: #0080ff;
     color:white;
     border:none;
     width:200px;
     height:50px;
 }
 .submit:hover{
     background: teal;
     cursor:pointer;
 }
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
/*
the search bar
*/

.search
{
	border: 2px solid teal;
	overflow: auto;
	border-radius: 5px;
    
}

.search input[type="text"]
{
	border: 0px;
	width: 67%;
	padding: 2px 2px;
}

.search input[type="text"]:focus
{
	outline: 0;
}

.search input[type="submit"]
{
	border: 0px;
	background: none;
	background-color: teal;
	color: #fff;
	float: right;
	padding: 10px;
	
        cursor:pointer;
}

/* 
   Medua Query for Search Box
 */

@media only screen and (min-width : 150px) and (max-width : 780px)
{
	{}
	.search
	{
		width: 95%;
		margin: 0 auto;
	}

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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto AdjustMargin">
                <li class="nav-item">
                 <h5><a class="nav-link text-white" href="signin.php">Log In</a></h5>  
                </li>
            </ul>
        </div>
    </nav>
        <div class="container"> <!--try to use grid to make them on the same line=-->
             <div class=" row">
					<div class="col-lg-12 mt-2">
		
									<!--the cards begins here-->
				<div class="card ">
					<div class="card-header bgColor text-center">
                    <h5 class="text-white">Complete Your Account!</h5>
					</div>
					<div class="card-body">
                    
                    <form action="sign.php" method="POST" id="signinFormform">
						<div class="form-row">
                        <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="John" name="firstName">
							</div>
							<div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" placeholder=" Doe" name="lastName">
							</div>
                            <div class="form-group col-md-6">
                            <label for="pass">Password</label>
    <input type="Password" class="form-control" id="pass" placeholder=" secured..." name="pass">
							</div>	
											<div class="form-group col-md-6"> 
											<label for="email">Work Email</label>
    <input type="email" class="form-control" id="email" placeholder=" @johndoe@gmail.com" name="email">
														</div>
							<div class="form-group col-md-6">
                            <label for="places">Location</label>
                    <select id="sid" class="form-control" onchange="changeLocalityList();" name="places">
                    <option value="0" selected="selected">All Regions</option>
                    <optgroup label="Popular places">
                    <option value="1">Buea</option>
                    <option value="2">Douala</option>
                    <option value="3">Limbe</option>
                    <option value="4">Yaounde</option>
                    </optgroup>
                    <optgroup label="Other Places">
                    <option value="5">Mutengene</option><option value="6">Kumba</option>
                    <option value="7">Mamfe</option><option value="8">TIKO</option>
                    <option value="9">Dschang</option><option value="10">Bamenda</option>
                    <option value="11">Ebolowa</option><option value="12">Ombe</option>
                    <option value="13">Edea</option><option value="14">Melong</option>
                    <option value="15">Kumbo</option><option value="16">Muyuka</option>
                    <option value="17">Yassa</option>
                    </optgroup>
                    </select>
							</div>
							<div class="form-group col-md-6">
								<label for="workAs">I want to work as a</label> 
								<select class="form-control" name="workAs">
									<option value="0" >Freelancer</option>
									<option value="1" >Client</option>
								</select>
                            </div>	
                            <div class="form-group col-md-6">
								<label for="plan">Choose a Plan</label> 
								<select class="form-control" name="plan">
									<option value="0" >Basic</option>
                                    <option value="1" >Diamond</option>
                                    <option value="2" >Gold</option>
                                    <option value="3" >Platinum</option>
								</select>
							</div>	
                            <div class="form-group col-md-6"> 
											<label for="nic">National ID Card Number</label>
    <input type="number" class="form-control" id="nic " name="nic">
														</div>		
                            </div>	
						<br>
					<center>
                    <input type="submit" name="submit" class="submit"></center>
                  
					</form>
				</div>
            </div>
        </div>
 
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