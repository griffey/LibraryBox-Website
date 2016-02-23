<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | v2.0 Final</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Evan Clemente">
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
      <div class="navbar-inner tf-osans">
        <div class="container">
          <a class="btn btn-primary btn-dropnav" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>		
         <a class="brand" href="index.php"><img height="30px" src="http://librarybox.us/img/LibraryBox_25px_white.png">&nbsp;The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>	
    
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>LibraryBox v2.0 Release</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
<p>
<img width="100%" src="./img/ledge_wide_thin.jpg">
<br /><br />
On July 28th, 2013 the LibraryBox Project got it's first major public push, with the funding of the <a href="https://www.kickstarter.com/projects/griffey/librarybox-20">LibraryBox v2.0 Kickstarter Campaign</a>. Today, 9 months later, I can finally announce that the v2.0 code is officially done, and is now <a href="http://librarybox.us/building.php">available for download for installing</a> as well as the source code being available on <a href="https://github.com/LibraryBox-Dev">Github</a>. There are a huge number of improvements, enhancements, and all around awesome things in the v2.0. I recommend you take a look at <a href="http://librarybox.us/v2.php">the About v2.0 page</a> to see the highlights. This release is much faster than the Public Beta releases, and includes some optimizations that will improve your experience in using LibraryBox.</p>

<p>This release means several things are now possible. First off, it means that the Kickstarter rewards for those that backed at the "get a LibraryBox" level are going to start shipping this week. I'll be working my way through building and shipping those as quickly as possible. Those that have ordered Boxen directly, those are also going to be shipping ASAP, starting next week. My process will be to build and ship as I go, in the order placed. So those of you that jumped on earliest will start seeing shipping notices hit your inboxes over the weekend or very early next week.</p>

<p>This is also the beginning of even more development for the LibraryBox Project. As <a href="http://jasongriffey.net/wp/2014/04/22/librarybox-receives-a-knight-foundation-prototype-grant/">announced just a few weeks ago</a>, the Project has been chosen as <a href="http://www.knightfoundation.org/blogs/knightblog/2014/4/22/17-projects-receive-funding-through-knight-prototype-fund/">a recipient of a Knight Foundation Prototype grant</a>. This grant will fund the next round of development on LibraryBox, making it even better, more flexible, and more useful to more people around the world. More information about this next round of development, including goals and timelines, will be coming soon.</p>

<p>I hope you enjoy the code. Please <a href="./building.php">build your own</a>, <a href="./upgrading.php">upgrade your existing LibraryBox to the new code</a>, or better yet, <a href="http://librarybox.myshopify.com/collections/all">buy a pre-built LibraryBox</a> and help support the project towards the v2.5 release.
</p>
</div>
</div>
</div>
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
    <script>
    $('#myCollapsible').collapse({
  toggle: false
})
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