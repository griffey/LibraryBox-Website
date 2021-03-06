<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | Scripts</title>
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
		  <?php include('navmenu.php');?>        </div>
      </div>
    </div>	
    
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>Installation Scripts</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
	
<p>For LibraryBox v1.5, I've put together an install script (librarybox.sh) that should make the building of your own LibraryBox much, much easier. If all you are interested in is making a LibraryBox, you can stop reading, and go over to the <a href="./MR3020.php">Installation instructions</a>. But if you want to see what's going on under the hood, here you go.</p>

<p>There are 8 files that I've customized in order to convert a PirateBox to a LibraryBox, and each of them has to be moved to the appropriate directory on the MR3020 in order for the UI customizations to work. For a LibraryBox with a chatbox, the files are:</p>
<p>
<i>droopy</i> <b>moved to</b> <i>/opt/piratebox/bin/</i> <br />
<i>hosts</i> <b>moved to</b> <i>/opt/piratebox/conf/</i> <br />
<i>index.html</i> <b>moved to</b> <i>/opt/piratebox/chat/</i> <br />
<i>piratebox-logo-small.png</i> <b>moved to</b> <i>/opt/piratebox/src/</i> <br />
<i>piratebox-logo.png</i> <b>moved to</b> <i>/opt/piratebox/src/</i> <br />
<i>piratebox.conf</i> <b>moved to</b> <i>/opt/piratebox/conf/</i> <br />
<i>READ.ME.htm</i> <b>moved to</b> <i>/opt/piratebox/src/</i> <b>and renamed to </b><i>.READ.ME.htm</i> <br />
</p>

<p>One other file, <i>/etc/config/wireless</i>, has to have line 19 edited to correct the SSID. There is now a python script included in the librarybox.zip file on github that does this editing for you, and it is also executed by the librarybox.sh script.
</p>
<p>
If you do NOT want the Chatbox to appear, you can instead:<br />

<i>piratebox.nochat.conf</i> <b>moved to</b> <i>/opt/piratebox/conf/</i> <b>and renamed to</b> <i>piratebox.conf</i>
</p>
<p>
Seriously, if you just want a LibraryBox, run the librarybox.sh script. It's easier, and there's much less risk of bricking your MR3020.
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