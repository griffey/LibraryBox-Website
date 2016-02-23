<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Evan Clemente">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
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
		    <h1>Frequently Asked Questions</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
	

<div class="accordion" id="accordion1">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
       <p style="font-size: 1.2em; line-height: 1.2em;">
What is the difference between LibraryBox and PirateBox?</p>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse">
      <div class="accordion-inner">
<p>
LibraryBox started out as a user interface hack of <a href="http://piratebox.cc/">Piratebox</a> .3 or so, but much has changed since those days. LibraryBox still uses the underlying platform that Piratebox is built on, but the two diverge via a handful of UI/UX changes and more significantly in what they offer to the end user in terms of services. The two projects are borrowing freely from each other at this point, with LibraryBox borrowing the underlying system, and Piratebox borrowing from LibraryBox the new customized install codebase. 
</p>
<p>Here's a quick summary of the differences between LibraryBox 2.0 and Piratebox 1.0:</p>
<ul>
<li>The biggest difference is that Piratebox is built around the ability to anonymously upload files to be shared, while LibraryBox deprecates that ability and puts the content shared in the control of the LibraryBox owner.</li>
<li>LibraryBox 2.0 has simple, text based config files on the USB drive that allow you to change things like the SSID, LAN name, and other aspects of the experience. PirateBox does not have this configuration setup.</li>
<li>The LibraryBox 2.0 web interface is built using Bootstrap 3, a web standard responsive framework. Piratebox 1.0 does not use Bootstrap.</li>
<li>The web interface that users see is housed on the USB as well, making customization and development very straightforward on LibraryBox. Piratebox has the web interface on the router, necessitating SSH and terminal access to customize. </li>
<li>LibraryBox 2.0 is capable of mesh syncing in a Primary/Replica setup, where the Replica automagically syncs to a Primary when it is brought into range. Piratebox 1.0 doesn't have this built in (yet, although they are discussing adding it). </li>
<li>PirateBox 1.0 has UPnP/DLNA streaming, LibraryBox 2.0 does not (again, but may be adding it in future releases)</li>
<li>Piratebox 1.0 has an optional image and message board functionality for 4chan like interactions. LibraryBox 2.0 does not have this built in.</li>
</ul>
      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
       <p style="font-size: 1.2em; line-height: 1.2em;">
What's the difference between a LibraryBox that I build and one that I buy from librarybox.us?</p>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
<p>
There is no technical difference...the same codebase is used for both. If you purchase one from <a href="http://librarybox.us">librarybox.us</a> you get the benefit of having a tested box that comes pre-loaded with a starter kit of media that has been curated by Jason Griffey. But there is no technical difference in building vs buying.
</p>
      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion3">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      <p style="font-size: 1.2em; line-height: 1.2em;">I don't get it, why are you giving away the code to build your own?</p>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
<p>
There are lots of reasons, but the largest is that I believe strongly in the value of the open sharing of knowledge. All of my writing, all of the things I create are shared openly online. My value isn't determined by the value of the thing I create, but by the fact that I continue to create things. This means that I can give away things and allow others to extract value from them without diminishing their value for me. 
</p>
<p>
<a href="http://kottke.org/07/11/cory-doctorow">Cory Doctorow once said</a> 

<blockquote>"It's the 21st century, there's not going to be a year in which it's harder to copy than this year; there's not going to be a day in which it's harder to copy than this day; from now on. Right? If copying gets harder, it's because of a nuclear holocaust. There's nothing else that's going to make copying harder from now on. And so, if your business model and your aesthetic effect in your literature and your work is intended not to be copied, you're fundamentally not making art for the 21st century. It might be quaint, it might be interesting, but it's not particularly contemporary to produce art that demands these constraints from a bygone era."</blockquote>
</p>
<p>That's why I give away the code. Because I'm making things for the time I'm in, and for all times moving forward</p>

      </div>
    </div>
  </div>
  </div>
 




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