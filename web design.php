<?php
/**
 * @Author: Your name
 * @Date:   2020-04-22 20:46:06
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-28 09:21:24
 */
 
 include 'includes/header.php';?>
 <html>
	 <body>
 <br>
 <style>
  
.ruleMargin {
    margin-left: 100px;
    margin-right: 100px;
}

  .adjustCard{
    margin-top:100px;
  }
  .bgColor{
    background-color:teal;
}
 </style>

 <!-- the header goes here -->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="index.php">
            <h3 class="text-white"><a href="index.php"><span class="text-info">Quick</span> Solution</a></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto AdjustMargin">
                <li class="nav-item active">
                    <a class="nav-link text-info" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Catergory 
		  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="web design.php">Electrical</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="web design.php">Plumbing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="web design.php">Digital</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="web design.php">Products</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="web design.php">Repairs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="sign.php">Join</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="signin.php">Log In</a>
                </li>

            </ul>

            <form class="form-inline  my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="find expert..." aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
	</nav>
	
    

 <div class="container">
 <div class="card shadow-lg p-3 mb-5 adjustCard">
 <div class="card-header">
 <h2 class="card-title text-center">Place Your Request Here</h2>
 </div>
  <div class="card-body">
    <form action="">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="category">Category</label>
									<select type="dropdown" class="form-control">
										<option><a href="#">Andriod Mobile Apllication</a></option>
										<option><a href="#">Web Development</a></option>
										<option><a href="#">Ios Mobile Application</a></option>
										<option><a href="#">Game Development</a></option>
										<option><a href="#">Web And Mobile Design</a></option>
									</select>
							</div>
							<div class="form-group col-md-6">
								<label>Scope of Work</label>
												 <select name="sid" id="sid" class="form-control" onchange="changeLocalityList();">
													<optgroup label="Popular States">
                          <option value="0">Complex Project</option>
                          <option value="1">Long Term Contract</option>
                          <option value="2">Short Term Project</option>
                          </optgroup>
                        </select>
												</div>
							
							<div class="form-group col-md-6">
								<label class="">Project Duration</label> 
														<select name="lid" id="lid" class="form-control">
                              <option value="0">More Than 6 months</option>
                              <option value="1">3 to 6 months</option>
                              <option value="2">1 to 3 months</option>
                              <option value="3">Less than 1 month</option>
														</select>
							</div>
							<div class="form-group col-md-6">
								<label class="">Type of Experience</label> 
								<select name="experience" class="form-control">
									<option value="0" >Expert</option>
									<option value="0" >Intermidiate</option>
									<option value="0" >Entry</option>
								</select>
							</div>
							<div class="form-group col-md-6">
              <label for="formGroupExampleInput">First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="John">

							</div>
							<div class="form-group col-md-6">
              <label for="formGroupExampleInput">Last Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=" Doe">

							</div>
								<div class="form-group col-md-6"> 
										<label class="">Max price</label> 
												<select name="lid" id="lid" class="form-control">
													<option value="0" >No min</option>
													<option value="0" >150, 000 XAF</option>
													<option value="0" >200,000 XAF</option>
													<option value="0" >250,000 XAF</option>
													<option value="0" >500,000,000 XAF</option>
													<option value="0" >600,000 XAF</option>
												</select>
											</div>	
											<div class="form-group col-md-6"> 
											<label for="formGroupExampleInput">Work Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput" placeholder=" @johndoe@gmail.com">
														</div>
				<div class="form-group col-md-6"> 
					<label for="exampleFormControlTextarea1">Task Description</label>
    					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=" This task involves..."></textarea>
				</div>	
				<div class="form-group col-md-6"> 
				<label for="exampleFormControlFile1">Import Files If Nessessary</label>
   				  <input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>						
														
						</div><br>
					<center><button type="submit" class="btn btn-info"><a href="newsfeed.php" class="text-white"> Submit Request</a></button></center>
					</form>
  </div>
</div>
 </div>
 
    <!-- js -->
    <script type="text/javascript " src="js/jquery-2.2.3.min.js "></script>
	<script type="text/javascript " src="js/bootstrap.js "></script>
</body>
</html>