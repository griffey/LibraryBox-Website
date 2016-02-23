<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | v2.1 Public Beta Announcement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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
		    <h1>LibraryBox v2.1 Public Beta Release</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
<p>
<a href="./buildingv2.1.php" class="btn btn-custom btn-action">Build a new v2.1 Beta LibraryBox!</a> <a href="./upgrading2.1.php" class="btn btn-custom btn-action">Upgrade your existing LibraryBox to v2.1 Beta!</a>
<br /><br />
</p>

<p>The v2.1 Public Beta release of the LibraryBox code brings with it several important updates:

<ul>
<li>CSS styled directory listings that are fully responsive</li>
<li>The addition of the <a href="https://wiki.mozilla.org/L10n:Localization_Process">Mozilla l10n translation engine</a> that allows for multi-language support for the LibraryBox interface. In the initial v2.1 release, we have 10 languages supported: 
<ul>
<li>German</li>
<li>English</li>
<li>French</li>
<li>Spanish</li>
<li>Croatian</li>
<li>Swedish</li>
<li>Italian</li>
<li>Korean</li>
<li>Norwegian</li>
<li>Kiswahili</li>
</ul>
If you would like to add a language, <a href="http://librarybox.us/contact.php">please let us know</a>.</li>

<li>LibraryBox now has a built in miniDLNA server for media playback on <a href="https://en.wikipedia.org/wiki/Digital_Living_Network_Alliance">DLNA</a> clients</li>
<li>There is now an automated updater built-in to LibraryBox that will allow for future updates to be a matter of copying a file onto the USB key and rebooting...no SSH necessary.</li>
<li>Even more hardware choices that you can use to build your own.</li>
</ul>
</p>

<p>The v2.1 release will become official after a few weeks of testing the Public Beta release, although we have extensively tested and feel like this is a very solid release candidate. Once the v2.1 becomes official, the v2.0 will remain available for download, but we will move all sales over to the v2.1 only and plan to change from the MR3020 to the MR3040 as our supported "for sale" hardware. We are very excited about the potential that the v2.1 offers.</p>

<p style="font-weight: bold;">This release is currently a Public Beta, which means that there may still be issues unresolved in the code as is. Do not use Beta code releases for mission-critical hardware. If you choose to update your existing LibraryBox to this Public Beta release be aware that while we have tested extensively, it is possible that an issue during the upgrade could render your hardware difficult or impossible to recover.</p>
<p> Any issues with the v2.1 Public Beta code release that need to be fixed can be reported on our Github repository or you can use <a href="http://librarybox.us/contact.php">our contact form</a>.</p>

<p>The v2.1 release of LibraryBox has been funded by a <a href="http://www.knightfoundation.org/grants/201448717/">Prototype Grant from the John S. and James L. Knight Foundation</a>. The LibraryBox Project is very thankful to the Knight Foundation for their support.</p>

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