<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic need -->
	<title>Online Movie Booking</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--preloading-->
<!--<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form action="VisitorLogin.php" method="post">
        	<div class="row">
        		 <label for="email">
                    Email:
                    <input type="email" name="email" placeholder="Enter your email"  required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" placeholder="Enter your Password"  required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit" name="btn">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form action="VisitorSignup.php" method="post">
            <div class="row">
                 <label for="username-2">
                    Name:
                    <input type="text" name="username"  placeholder="Enter your name"  required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    E-mail:
                    <input type="email" name="email"  placeholder="Enter your e-mail"  required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password"  placeholder="Enter your password"  required="required" />
                </label>
            </div>
			<div class="row">
                <label for="number-2">
                    Phone Number:
                    <input type="tel"  name="phone"  placeholder="Enter your phone number" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit" name="btn">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->
<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="Index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="nav-link">
						<a href="Index.php" class="active">Home</a>
						</li>
						<li class="nav-link">
						<a href="MoviesGrid.php" class="active">Movies</a>
						</li>
						<li class="nav-link">
						<a href="Series.php" class="active">Series</a>
						</li>
						<li class="nav-link">
						<a href="CelebrityGrid.php" class="active">Celebrities</a>
						</li>
						<li class="nav-link">
						<a href="MovieReviews.php" class="active">Most Reviewed</a>
						</li>
						<li class="nav-link">
						<a href="MovieRatings.php" class="active">Most Rated</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							News <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="ComingSoon.php">Coming Soon</a></li>
								<li class="it-last"><a href="Blog.php">Blogs</a></li>
							</ul>
						</li>     
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
		<!-- top search form -->
	    <div class="top-search">
	    	<select>
				<option value="united">Movies</option>
				<option value="saab">Series</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for" >
			
	    </div>
	</div>
</header>
<!-- END | Header -->
		
</body>
</html>