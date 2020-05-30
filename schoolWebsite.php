<?php
/**
 * @Author: Your name
 * @Date:   2020-04-22 20:46:06
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-28 09:56:06
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
                        <a class="dropdown-item" href="newsfeed.php">My jobs</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">All Contract</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Work Diary</a>
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
                        <a class="dropdown-item" href="#">Earnings</a>
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
                    <a class="dropdown-item" href="#">  <img src="assets/Harrison.jpg" class="img-fluid" width="30" height="30" alt="user-image" style=border-radius:50%><span class="ml-2">John Doe<br><div class="ml-4">Freelancer</div></span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog buttonColor"></i><span class="ml-2">Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php"> <i class="fas fa-sign-out-alt buttonColor"></i><span class="ml-2">Log Out</span></a>
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
        <div class="col-lg-3 mb-4"><h2>School Website</h2>
    </div>  
       
            </div>
           
             <div class=" row">
					<div class="col-lg-8 mt-2">
		
									<!--the cards begins here-->
				<div class="card ">
					<div class="card-header bgColor">
                    <h6 class="text-white">Front-End Development</h6>
                    <small class="text-white">posted 1hour ago</small>
					</div>
					<div class="card-body">

				 <p><span><i class="fas fa-volume-up"></i></span><span class="pcolor pl-2">Specialized profiles can help you better highlight your expertise when submitting proposals to jobs like these </span></p>
                 <hr>
				 <p><span class="pcolor pl-2">I want my site to look similar to what you see here at <a href="#">www.google.com</a> </span></p>

				<p class="pcolor"><i class="fas fa-tag mr-1"></i>Fixed Price : 150,000XAF <span></p>
                <p class="pcolor"><i class="fas fa-cogs mr-1"></i> I am looking for a mixture of experience and value</p>
                <p><i class="fas fa-check-circle text-info"></i><span> </span>Payment Verified,<span class="pl-4"><i class="fas fa-map-marker-alt"> <span>Limbe</span></i></span></p><hr>
                
                <h6>Activities on This Job</h6>
                <p>Proposals: 10 - 15</p>
                <p>Interviewing: 02</p>
                <hr>
                <button type="button" class="btn btn-info"><a href="schoolWebsiteProposal.php" class="text-white">submit Proposal</a> </button>
					</div>
				</div><br>

					<!--//first card-->
					<div class="card ">
						<div class="card-header bgColor">
                        <h6 class=" text-white">Similar Jobs on Quick Works</h6>
						</div>
						<div class="card-body">
                      <p><a href="#">Website for an NGO needed</a> freelancers needed urgently</p>
                      <p><a href="#">Wordpress Designer Needed</a> I need a wordpress designer to install some pluins on my site.</p>
                      <p><a href="#">SEO needed on a site.</a></p>
				
						</div>
					</div><br>
					<!--//end of card-->	

</div>

            <!--the left sidebar begins here-->
            <div class="col-lg-4 mt-2 d-none d-lg-block">
                <div class="card">
                    <div class="card-header bgColor">
                            <h4 class="text-white"><span ><i class="fas fa-filter text-white"></i></span>
                            Advanced filter options</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select type="dropdown" class="form-control">
                            <option><a href="#">Web Development</a></option>
                            <option><a href="#">Database Development</a></option>
                            <option><a href="#">Data Science</a></option>
                            <option><a href="#">PHP</a></option>
                            <option><a href="#">JAVA</a></option>
                        </select>
            <div class="form-group"> 
                <label>Location</label>
                    <select name="sid" id="sid" class="form-control" onchange="changeLocalityList();">
                    <option value="0" selected="selected">All Regions</option>
                    <optgroup label="Popular places">
                    <option value="2">Buea</option>
                    <option value="1">Douala</option>
                    <option value="34">Limbe</option>
                    <option value="29">Yaounde</option>
                    </optgroup>
                    <optgroup label="Other Places">
                    <option value="4">Mutengene</option><option value="1">Kumba</option>
                    <option value="5">Mamfe</option><option value="6">TIKO</option>
                    <option value="7">Dschang</option><option value="8">Bamenda</option>
                    <option value="9">Ebolowa</option><option value="10">Ombe</option>
                    <option value="11">Edea</option><option value="12">Melong</option>
                    <option value="13">Kumbo</option><option value="14">Muyuka</option>
                    <option value="38">Yassa</option>
                    </optgroup>
                    </select>
                </div>
</div>
                <div class="form-group"> 
            <label class="">Scope of work</label> 
                    <select name="lid" id="lid" class="form-control">
                        <option value="0" selected="selected">Complex </option>
                        <option value="1" selected="selected">Long Term</option>
                        <option value="2" selected="selected">Short Term</option>
                    </select>
                </div>
                  
                    <div class="form-group"> 
                            <label class="">Type of Experience</label> 
                                    <select name="lid" id="lid" class="form-control">
                                        <option value="0" >Entry</option>
                                        <option value="0" >Intermediate</option>
                                        <option value="0" >Expert</option>
                                    </select>
                                </div>	
            <div class="col-sm-12">
                    <button type="submit" class="btn btn-block bg-success text-white"
                    onclick="SetSearchPanelCookies();"> <a href="newsfeed.php" class="text-white"><span>Search<i class="fas fa-search text-white float-right"></i></span> </a> </button></div>	
					</div>
			</div>	<br>

<!--remember to add a link on a wide range of properties-->
<h5><a href="#" data-toggle="#" data-target="#" 
	role="button">Wide Range of Jobs</a></h5>
	<p class="pcolor">Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id 
		egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce
		 ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus 
		 ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo 
		 purus, facilisis non cursus ut, egestas sed ipsum.</p><br>
		<!--//end of left sidebar -->
               

                 
           

    
            














</div>
 
    <!-- js -->
    <script type="text/javascript " src="js/jquery-2.2.3.min.js "></script>
    <script type="text/javascript " src="js/bootstrap.js "></script>
    </body>