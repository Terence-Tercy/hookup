<?php
/**
 * @Author: Your name
 * @Date:   2020-04-22 20:46:06
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-28 04:16:20
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
            <li class="nav-item dropdown">
                    <a class="nav-link  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			My Jobs
		  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">My jobs</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">All Job Post</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Post A Job</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Reports
		  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Overview</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">My reports</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Spent</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Transaction History</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="far fa-bell"><span class="badge text-danger">4</span></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-question "></i>
		  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Help and support</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Community and Forums</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Disputes</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img src="assets/Harrison.jpg" class="img-fluid" width="30" height="30" alt="user-image" style=border-radius:50%>
		  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">  <img src="assets/Harrison.jpg" class="img-fluid" width="30" height="30" alt="user-image" style=border-radius:50%><span class="ml-2">John Doe<br><div class="ml-4">Client</div></span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog buttonColor"></i><span class="ml-2">Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php"> <i class="fas fa-sign-out-alt buttonColor"></i><span class="ml-2">Log out</span></a>
                    </div>
                </li>
            </ul>

            <form class="form-inline  my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="find expert..." aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
        <div class="container"> <!--try to use grid to make them on the same line=-->
        <div class="row">
        <div class="col-lg-3 mb-4"><h2>Getting Started</h2>
    </div>  
       
            </div>
           
             <div class=" row">
					<div class="col-lg-12 mt-2">
		
									<!--the cards begins here-->
				<div class="card ">
					<div class="card-header text-center bgColor">
                    <h5 class="text-white">Enter the name of your Job post</h5>
					</div>
					<div class="card-body">
                    <form action="">
						<div class="form-row">
                        <div class="form-group col-md-6">
              <label for="formGroupExampleInput">First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="John">

							</div>
							<div class="form-group col-md-6">
              <label for="formGroupExampleInput">Last Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=" Doe">

							</div>
                            <div class="form-group col-md-6">
              <label for="formGroupExampleInput">NIC Number</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder=" we'll keep it confidential...">

							</div>
								<div class="form-group col-md-6"> 
										<label class="">Budget</label> 
                                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Amount in XAF">
											</div>	
											<div class="form-group col-md-6"> 
											<label for="formGroupExampleInput">Work Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput" placeholder=" @johndoe@gmail.com">
														</div>
				<div class="form-group col-md-6"> 
                <label>Describe your skill</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Plumber...">
				</div>
							<div class="form-group col-md-6">
								<label class="">Job Category</label> 
							<select name="lid" id="lid" class="form-control">
                              <option value="0">Plumbing</option>
                              <option value="1">Electricity</option>
                              <option value="2">Mobile/Web Development</option>
                              <option value="3">Repairs</option>
                              <option value="3">Digital</option>
							</select>
							</div>
							<div class="form-group col-md-6">
								<label class="">Project Level</label> 
								<select name="experience" class="form-control">
									<option value="0" >Short Term</option>
									<option value="0" >Long Term</option>
									<option value="0" >Complex</option>
								</select>
							</div>
				<div class="form-group col-md-6"> 
				<label class="">Level of Experience</label> 
                <select name="experience" class="form-control">
                    <option value="0" >Entry</option>
                    <option value="0" >Short Term</option>
                    <option value="0" >Long Term</option>
                </select>
				</div>					
                <div class="form-group col-md-6"> 
               
                <label for="formGroupExampleInput">Project Duration</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=" 2weeks...">
				</div>					
                <div class="form-group col-md-6">
								<label for="category">Job Title</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="I need a..."></textarea>
							</div>
							<div class="form-group col-md-6">
                            <label for="category">Job Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="precise and on point..."></textarea>
												</div> 	
                                                 <div class="form-group col-md-6"> 
                                                 <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
				</div>							
						</div><br>
					<center><button type="submit" class="btn btn-info">Submit Job</button></center>
					</form>
				</div>
            </div>
        </div>
 
    <!-- js -->
    <script type="text/javascript " src="js/jquery-2.2.3.min.js "></script>
    <script type="text/javascript " src="js/bootstrap.js "></script>
    </body>