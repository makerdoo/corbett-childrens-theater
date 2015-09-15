<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#">

<html class="no-js" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link href="cctlogofavicon.png" rel="shortcut icon" type="image/x-icon">
		<title>Corbett Children's Theater | Creating Character Together</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/normalize.css" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css/foundation.css" type="text/css"/>
        <script src="js/vendor/modernizr.js"></script>
        <link rel="stylesheet" href="css/stylee.css" type="text/css">
        <link rel="stylesheet" href="css/app.css" type="text/css">
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		 <meta name="robots" content="INDEX,FOLLOW" />
	     <meta name="robots" content="noimageindex" />	
		 <meta name="keywords" content="children's theater, children's theatre, corbett oregon, troutdale oregon, plays, musicals, act, acting, sing, singing, dance, dancing" />
		 <meta name="description" content="CCT provides professional quality theater, performed by children for audiences of all ages. Check out our classes and workshops for dance, acting, improv...." />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
    <body>
    	<?php
			function echoSelectedClassIfRequestMatches($requestUri)
				{
				    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

				    if ($current_file_name == $requestUri)
				        echo 'class="selected"';
				    }
		?>
    	<div class="sticky">
			<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true; dropdown_autoclose: false;">
				<ul class="title-area">
					<li class="logo">
						<a href="#"><img src="img/cct-logo.png" alt="logo" height="75" width="75"></a>

					</li>
				</ul>
				<section class="top-bar-section left" data-options="is_hover: false; dropdown_autoclose: false;">  		
						<div id="menu">
							<ul>
								<li><a href="#" id="bye-bye">Menu</a></li>
								<li><a href="home.php" <?=echoSelectedClassIfRequestMatches("home")?>><h3>&nbsp;&nbsp;Home |&nbsp;</h3></a></li>
								<li class="has-dropdown"><a href="shows.php" <?=echoSelectedClassIfRequestMatches("shows")?>><h3>Shows |&nbsp;</h3></a>
									<ul class="dropdown">
										<!--<li><a href="upcoming.php" <?=echoSelectedClassIfRequestMatches("upcoming")?>><h4>Upcoming Season&nbsp;</h4></a></li>-->
										<li><a href="past-shows.php" <?=echoSelectedClassIfRequestMatches("past-shows")?>><h4>Past Shows </h4></a></li>
										<!--<li><a href="gallery.php" <?=echoSelectedClassIfRequestMatches("gallery")?>><h4>Gallery </h4></a></li>-->
									</ul>
								</li>
								<li class="has-dropdown"><a href="classes.php" <?=echoSelectedClassIfRequestMatches("classes")?>><h3>Classes |&nbsp;</h3></a>
									<ul class="dropdown">
							          <!--<li><a href="future-classes.php" <?=echoSelectedClassIfRequestMatches("future-classes")?>><h4>Future Classes&nbsp;</h4></a></li>-->
							          <li><a href="past-classes.php" <?=echoSelectedClassIfRequestMatches("past-classes")?>><h4>Past Classes </h4></a>
							          <!--<li><a href="why.php" <?=echoSelectedClassIfRequestMatches("why")?>><h4>Why Classes? </h4></a>-->
									  </li>
							        </ul>
								</li>

								<li class="has-dropdown"><a href="auditions.php" <?=echoSelectedClassIfRequestMatches("auditions")?>><h3>Auditions |&nbsp;</h3></a>
							        <ul class="dropdown">
							          <li><a href="tips.php" <?=echoSelectedClassIfRequestMatches("tips")?>><h4>Tips for Success </h4></a></li>
							          <li><a href="forms.php" <?=echoSelectedClassIfRequestMatches("forms")?>><h4>Forms </h4></a>
							          <!--<li><a href="future-ops.php" <?=echoSelectedClassIfRequestMatches("future-ops")?>><h4>Future Opportunities&nbsp;</h4></a>
									  </li>-->
							        </ul>
						        </li>
						        <li class="has-dropdown"><a href="about.php" <?=echoSelectedClassIfRequestMatches("about")?>><h3>About | &nbsp;</h3></a>
						        	<ul class="dropdown">
						        	  <li><a href="mission.php" <?=echoSelectedClassIfRequestMatches("mission")?>><h4>Our Mission </h4></a></li>
									  <li><a href="contacts.php" <?=echoSelectedClassIfRequestMatches("contacts")?>><h4>Contacts&nbsp;</h4></a></li>
						        	  <li><a href="boardmembers.php" <?=echoSelectedClassIfRequestMatches("boardmembers")?>><h4>Board of Trustees&nbsp;</h4></a></li>
							        <!--  <li><a href="venue.php" <?=echoSelectedClassIfRequestMatches("venue")?>><h4>Venue</h4></a>  -->
							        <!--  <li><a href="staff.php" <?=echoSelectedClassIfRequestMatches("staff")?>><h4>Artistic Staff</h4></a>  -->
						        	</ul>
						        </li>
							</ul>
						</div>  
				</section>
			</nav>
		</div>
		