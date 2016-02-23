<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | Map</title>
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
		    <h1>LibraryBox vs Piratebox</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
	
      <div class="container">
  <h2>What's the difference between LibraryBox & Piratebox?</h2>
  <p>In general, Piratebox is more DIY and built for hacking, while LibraryBox is more for the average user who wants to share files.</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th><h3>LibraryBox</h3></th>
        <th><h3>Piratebox</h3></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Simple Installation</td>
        <td>Simple Installation</td>
      
      </tr>
           <tr>
        <td>Share any type of file</td>
        <td>Share any type of file</td>
      
      </tr>
      <tr>
        <td>File Sharing from USB, no public upload</td>
        <td>File Sharing from USB, public upload on by default</td>
       
      </tr>
      <tr>
        <td>Easy to customize web interface - files all live on USB drive</td>
        <td>Harder to customize interface - files live in router, need SSH to change</td>
      
      </tr>
         <tr>
        <td>Easy config of SSID, Chat, & more by changing simple text files on USB</td>
        <td>No configuration of SSID, Chat, etc without SSH into router</td>
      
      </tr>
         <tr>
        <td>No image/forum service built in</td>
        <td>Image Gallery/Forum style BBS installation possible via SSH</td>
      
      </tr>
         <tr>
        <td>MiniDLNA media server built in</td>
        <td>MiniDLNA media server built in</td>
      
      </tr>
              <tr>
        <td>Gathers anonymous statistics (number of users, number of downloads per file)</td>
        <td>No statistics</td>
      
      </tr>
                    <tr>
        <td><p><a href="http://librarybox.us" class="btn btn-custom btn-action">Choose LibraryBox!</a></td>
        <td><p><a href="http://piratebox.cc" class="btn btn-primary btn-action">Choose Piratebox!</a></td>
      
      </tr>
    </tbody>
  </table>
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