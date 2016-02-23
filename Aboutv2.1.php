<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | About v2.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The LibraryBox Project Website">
    <meta name="author" content="Jason Griffey">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--[if lt IE 8]>
	  <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <![endif]-->
    <link href="css/base.css" rel="stylesheet">
	<link href="css/orange.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/ico/favicon.ico">
  </head>

  <body>

	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-primary btn-dropnav" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
             <a class="brand" href="index.php">The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>

	<div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>About LibraryBox v2.1</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
    <div class="container">

    <div class="row">
    <div class="span4">
    <h2 class="sub">Expanded Hardware</h2>
    <p>LibraryBox v2.1 <a href="./hardware.php">expands the hardware we support</a> yet again. Our preferred hardware is now the MR3040, but we support a dozen types of hardware including the GL-iNet, the least expensive hardware we've ever supported. More hardware also means more international hardware for use around the world.</p>
    </div>

    <div class="span4">
    <h2 class="sub">Language Support</h2>
    <p>LibraryBox v2.1 has added multi-language support for the user interface, and we have a dozen languages currently included. For more information, see our <a href="./languages.php">Languages page</a>.</p>
    </div>

    <div class="span4">
    <h2 class="sub">DLNA Server</h2>
    <p>LibraryBox now has a built in miniDLNA server for media playback on <a href="https://en.wikipedia.org/wiki/Digital_Living_Network_Alliance">DLNA</a> clients. This means you can load up your LibraryBox, tell your SmartTV or Blu-Ray player to look for it, and play movies directly from your LibraryBox to your TV.</p>
    </div>
    </div>

    <hr class="dashed">
	    <div class="row">
	     <div class="span4">

			<h2 class="sub">Auto Updater</h2>
			<p>There is now an automated updater built-in to LibraryBox v2.1 that will allow for future updates to be a matter of copying a file onto the USB key and rebooting...no SSH necessary. This will allow for much easier updating of existing LibraryBoxen!</p>
		  </div>
		<div class="span4">

			<h2 class="sub">CSS Directory Listings</h2>
			<p>Directory listings are now CSS styled, which means that you can customize the look and feel of the file download directories. The are fully responsive as well!</p>
		  </div>
		<div class="span4">

			<h2 class="sub">Lots more...</h2>
			<p>There's a lot more that's been streamlined and generally made faster and more responsive. LibraryBox v2.1 is the best release yet. Update today!</p>
		  </div>

		</div>
		<hr class="dashed">
<h1>Still with awesome features from LibraryBox 2.0...</h1>
		<hr class="dashed">

	    <div class="row">
		  <div class="span4">
			<h2 class="sub">Expanded Hardware</h2>
			<p>LibraryBox v2.0 now runs on a wide variety of hardware, including the preferrred MR3020, but also the MR3040, the WR703N, and much more. Now you can choose the hardware best for your particular need, and build your LibraryBox to suit.</p>
		  </div>

		  <div class="span4">
			<h2 class="sub">Statistics</h2>
			<p>LibraryBox v2.0 now collects statistics on its use, and displays them to users. On the homepage, you can see the top 10 most downloaded items, and on the statistics page you can see both number of users per day and a full list of all downloads. These statistics are completely anonymous, and no identifying information about users is retained.</p>
		  </div>

		  <div class="span4">
			<h2 class="sub">Bootstrap 3.0</h2>
			<p>The entirety of the web interface has been redesigned. Not only is the web front end now on the USB drive (making development much easier) but it's based on <a href="http://getbootstrap.com/">the Bootstrap 3 framework</a>. This standard makes it simple for libraries and individuals to modify the interface to suit their needs.</p>
		  </div>
		</div>
		<hr class="dashed">
	    <div class="row">
	     <div class="span4">

			<h2 class="sub">Auto Sync/Mesh</h2>
			<p>LibraryBox v2.0 has a service built in that will allow you to have installed Boxen located in physically inaccessible areas that can be automatically updated simply by bringing a "master" box into range of their wifi signal. The remote Boxen will automatically see the Master, and update their content to match, no intervention or attention necessary.</p>
		  </div>
		<div class="span4">

			<h2 class="sub">Easier Installation</h2>
			<p>Making your own LibraryBox couldn't be much easier than the v2.0 makes it. Copy some files, update one file via a web browser, and then just wait while the software does its work. One-step installation!</p>
		  </div>
		<div class="span4">

			<h2 class="sub">Custom Configurations</h2>
			<p>We've moved most of the request configuration options to the USB thumb drive, allowing users to very easily change things like the SSID of the LibraryBox, the power of the wifi, the wifi channel, and even the local hostname of the LibraryBox server. It's never been easier to customize to just your needs. </p>
		  </div>

		</div>
	    <div class="row">
		  <div class="span12">
		    <div class="callout well">
			  <h2>Get Your Very Own LibraryBox!</h2>
			  <br />
			  <p><a href="./building.php" class="btn btn-primary btn-action">Build your own!</a>&nbsp;&nbsp;
			<a href="http://librarybox.myshopify.com/collections/all" class="btn btn-custom btn-action">Buy a LibraryBox v2.1!</a></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<div id="footer">
	<!--  <div class="container">
	    <div class="row">
		  <div class="span3">
			<h3>Quick Links</h3>
			<ul>
			  <li><a href="#">Home</a></li>
			  <li><a href="#">About Us</a></li>
			  <li><a href="#">Features</a></li>
			  <li><a href="#">Pricing</a></li>
			</ul>
		  </div>
		  <div class="span3">
			<h3>Company</h3>
			<ul>
			  <li><a href="#">Privacy Policy</a></li>
			  <li><a href="#">Terms of Use</a></li>
			  <li><a href="#">FAQ</a></li>
			</ul>
		  </div>
		  <div class="span3">
			<h3>We're Social</h3>
			<ul>
			  <li><a href="#">Facebook</a></li>
			  <li><a href="#">Twitter</a></li>
			  <li><a href="#">Google &#43;</a></li>
			</ul>
		  </div>
		  <div class="span3">
			<h3>Subscribe</h3>
			<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
		    <form>
              <input class="span3" type="text" placeholder="Your Email" name="subscribe">
			  <button class="btn btn-primary">Subscribe</button>
			</form>
		  </div>
		</div>
      </div>	  -->
    </div>

	<div id="copywrite">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <p>Website Content - Creative Commons Licensed NC-BY Jason Griffey 2012, where not otherwise licensed.<br />Software Licensed under GPLv2, see http://www.gnu.org/licenses/gpl-2.0.html <span id="totop" class="pull-right">Back to Top <i class="icon-arrow-up"></i></span></p>
		  </div>
		</div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
      $("#totop").click(function () {
		$("body, html").animate({
		  scrollTop: 0
	    }, 300);
		return false;
	  });
	});
	</script>

	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34754517-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </body>

</html>
