<?php 
session_start();

if (isset($_POST['name'])) {
	$_SESSION['userName'] = $_POST['name'];
}


if (isset($_POST['email'])) {
	$_SESSION['userEmail'] = $_POST['email'];
}

if (isset($_POST['profile'])) {
	$_SESSION['profileType'] = $_POST['profile'];
}

?>
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

	<link rel='icon' href='img\icon.ico' type='image/x-icon'>

	<link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Control-F</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
			<a id="navLogo" class="navbar-brand" href="index.html" style="padding:0;">
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
         				<li><a href="index.html">How it works</a></li>
         				<li><a href="about.php">About Us</a></li>
         				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Login/Register<span class="caret"></span></a>
         					<ul class="dropdown-menu">
         						<li><a href="loginDev.php">Login - developers</a></li>
         						<li><a href="loginComp.php">Login - nonprofits</a></li>
         					</ul>
         				</li>

         			</ul>
      			</div>
    		</div>
    	</nav>


      <div class="container-fluid" id="login-box">
        <h1> Find a coder that cares </h1>
        <h2> Use the links below to access our service </h2>
      
        </script>
        <br>

          <button id="top-button" class ="buttons" style=" background-color:#dd4b39; color:#f2f2f2"><i id ="top-icon" class="fa fa-google icons" style="font-size:4rem;color:#f2f2f2; "></i> Access with Google</button>

          <button class ="buttons" style="background-color:rgb(0, 119, 181); color:#f2f2f2"><i id ="bottom-icon" class="fa fa-linkedin icons" style="font-size:4rem;color:#f2f2f2"></i> Access with Linkedin</button>

        <p id = "bottom-text">

          We  hold our community to the highest standards.
          By continuing, you are consenting to our community standards policy.

        </p>
      </div>



      <!-- SCRIPTS -->
      <!--
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
          -->
      <script src="hello.all.js"></script>
      <script>
        hello.init({
          google: "73862463897-ofr3bic69njtn603du9epk57648c3j7q.apps.googleusercontent.com"
        });
      </script>

        <script>
        hello.init({
           linkedin: "86eqyv837hjh0w"
        });
      </script>

      <script>

        hello.on('auth.login', function (auth) {

             hello(auth.network).api('me').then(function(r) {
            // Inject it into the container
            var label = document.getElementById('profile_' + auth.network);
            if (!label) {
                label = document.createElement('div');
                label.id = 'profile_' + auth.network;
                document.getElementById('profile').appendChild(label);
            }
            label.innerHTML = '<img src="' + r.thumbnail + '" /> Hey ' + r.name;
        });

        });

        hello.on('auth.logout', function () {
          var lab = document.getElementById("pic_and_greet");
          if (lab != null) document.body.removeChild( lab );
        });

      </script>



</body>
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

	<link rel='icon' href='img\icon.ico' type='image/x-icon'>

	<link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Control-F</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
			<a id="navLogo" class="navbar-brand" href="index.html" style="padding:0;">
            	<img  src="img/Icon-title.png" class="d-inline-block align-top" alt="" style="width: 10%; margin:0; padding:2.5% 0;">
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
         				<li><a href="#description">How it works</a></li>
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


      <div class="container-fluid" id="login-box">
        <h1> Find a coder that cares </h1>
        <h2> Use the links below to access our service </h2>
      
        </script>
        <br>

          <button id="top-button" class ="buttons" style=" background-color:#dd4b39; color:#f2f2f2" onclick="hello('google').login()"><i id ="top-icon" class="fa fa-google icons" style="font-size:4rem;color:#f2f2f2; "></i> Access with Google</button>

          <button class ="buttons" style="background-color:rgb(0, 119, 181); color:#f2f2f2" onclick="hello('linkedin').login()"><i id ="bottom-icon" class="fa fa-linkedin icons" style="font-size:4rem;color:#f2f2f2"></i> Access with Linkedin</button>

        <p id = "bottom-text">

          We  hold our community to the highest standards.
          By continuing, you are consenting to our community standards policy.

        </p>
      </div>

<script class="pre">
hello.on('auth.login', function(auth) {
    hello(auth.network).api('/me').then(function(r) {               
        console.log("name = "+r.name);
        console.log("email = " + r.email);
        var p = "comp";
        $.ajax({
            url: 'loginComp.php',
            data: {name: r.name, email: r.email, profile: p},
            type: 'post',
            success: function(result) {
                console.log("action performed successfully");
            }, 
            error: function(result) {
            	console.log(result);
            }
        });
    });
});
</script> 

      <pre class="response"></pre>

      <script src="hello.all.js"></script>
      <script>
        hello.init({
          google: "73862463897-ofr3bic69njtn603du9epk57648c3j7q.apps.googleusercontent.com"
        },{
            scope: 'email',
            redirect_uri: 'redirect.html'
          });
      </script>

        <script>
        hello.init({
           linkedin: "86eqyv837hjh0w"
        },{
            scope: 'email',
            redirect_uri: 'redirect.html'
          });
      </script>



</body>

</html>
