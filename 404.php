<?php
/**
 * @Author: Your name
 * @Date:   2020-04-22 20:46:06
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-28 03:24:34
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
.giant{
    font-size:90px;
}
 </style>
 <body>
 <!-- the header goes here -->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="#">
            <h3><span class="text-info">Quick</span> Solution</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto AdjustMargin">
                <li class="nav-item">
                 <h5><a class="nav-link text-white" href="#">Sign in</a></h5>  
                </li>
            </ul>
        </div>
    </nav>
        <div class="container"> <!--try to use grid to make them on the same line=-->
            <h1 class="giant text-danger"><i class="fas fa-exclamation-triangle text-warning"></i> 404 ERROR <br> <small class="text-dark">Problems loading this page... please contact your service provider</small></h1>
        </div>
 
    <!-- js -->
    <script type="text/javascript " src="js/jquery-2.2.3.min.js "></script>
    <script type="text/javascript " src="js/bootstrap.js "></script>
    </body>