<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | iOS 7 Patch</title>
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
           <a class="brand" href="index.php">The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>	
    
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>iOS 7 and LibraryBox 1.5.1</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
<p>
With the Sept 2013 release of iOS 7, Apple <a href="http://stackoverflow.com/questions/18891706/ios7-and-captive-portals-changes-to-apple-request-url">changed the way that iOS devices handle captive portals</a>, thus <a href="http://forum.daviddarts.com/read.php?9,8879,8907#msg-8907">breaking LibraryBox 1.5 in a pretty serious way</a>. If you are running a LibraryBox that you built before Sept 28, 2013 (v1.5) then it has this issue and you should apply the patch as noted below. The patch will update you to LibraryBox v1.5.1, and iOS 7 should behave itself again.</p>
<p>If you built your LibraryBox AFTER Sept 28, 2013, your code is pre-patched. You're awesome just the way you are.</p>
<ol>
<li>Download the <a href="https://github.com/griffey/LibraryBox/blob/master/ios7_patch.zip">ios7_patch.zip</a> from the LibraryBox Repository on Github. (protip: click the "view raw" link on that page to download)</li>
<li>Unzip the patch file. In the zip, there should be two files: droopy and iOS7_patch.sh</li>
<li>Put the two files into the /librarybox directory on the USB thumb drive from your LibraryBox. droopy WILL replace the existing copy, and that's ok. </li>
<li>Put the thumb drive back into your LibraryBox, power it up, and connect via your computer.</li>
<li>SSH into your LibraryBox. You did this when you built it, but you can refer to the <a href="http://librarybox.us/MR3020.php">Stage Three instructions on the Build Your LibraryBox page</a> if you don't recall.</li>
<li> Once you're in, type: 
<pre>cd /mnt/usb/librarybox
</pre>
Press enter, then:
<pre>./iOS7_patch.sh
</pre>
</li>
<li> Revel in your awesome iOS 7 functional LibraryBox v1.5.1!</li>
</ol>
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