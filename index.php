<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equix="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="index.css">
	
	<title>Control-F</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
			<a id="navLogo" class="navbar-brand" href="index.html">
            	<img  src="img/IconWhite.png" class="d-inline-block align-top" alt="" style="width: 40%; margin:0;">
          	</a>
       			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#theNav">
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>                        
      			</button>
    		</div>
    		<div>
      			<div class="collapse navbar-collapse" id="theNav">
       			 	<ul class="nav navbar-nav">
         			</ul>
         			<ul class="nav navbar-nav navbar-right">
         				<li><a href="#description">What We Do</a></li>
         				<li><a href="about.html">About Us</a></li>
         				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Login/Register<span class="caret"></span></a>
         					<ul class="dropdown-menu">
         						<li><a href="loginDev.html">Login - developers</a></li>
         						<li><a href="loginComp.html">Login - nonprofits</a></li>
         					</ul>
         				</li>
         				
         			</ul>
      			</div>
    		</div>
    	</nav>
		<div class="row"  id="banner"></div>
		<div class="row" id=title>
			<div class="col-sm-12" id="overlay1">
				<div id="landing-page-title">Control-F</div>
				<span>Finding a Freelancer or Gaining Experience Should Be Easy</span>
			</div>
		</div>
		
		<div class="row" id="line">
			<div class="col-sm-12" id="small-line">
				<p>What We Do</p>
			</div>
		</div>
		<div class="row" id="description">
			<div class="col-sm-12" id="overlay2">
				<p> Control-F is an advertisement-free, neutral marketplace to connect small business owners and nonprofits with technical developers willing to volunteer time, 
				or developers who are willing to work for less. 
				</p>
			</div> 
		</div>
		
		
	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> /*for the fancy scrolling function*/
$(document).ready(function() {		//do this when document has finished loading
	$("#flip").click(function() {
		$("#panel").slideToggle("slow");
	});
	
	$('a').click(function() {
	    var href = $.attr(this, 'href');
	    $("html, body").animate({
	        scrollTop: $(href).offset().top
	    }, 1500, function () {
	        window.location.hash = href;
	    });
	    return false;
	});
	
});
</script>
</body>

</html>
