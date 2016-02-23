<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | Problems</title>
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
		    <h1>Problems with your installation...</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
	
<h3>Upgrading your existing LibraryBox</h3>
<p>
Upgrading your LibraryBox should be a fast and painless exercise. Follow the steps below to upgrade your existing LibraryBox to the v2.0 release.</p>
<ol>
<li>Power off the router</li>
<li>Unplug the USB Drive from the router, and plug it into your computer</li>
<li>Download the firmware for your device, most likely for the MR3020 but there are a few brave souls who attempted builds on the MR3040, so that's included just for them:</li>
<ul>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">MR3020 - Version 1 firmware</a></li>MD5 Hash: 41DD7ED78843CCAE3D27903E5D1F46DB
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v1-squashfs-factory.bin">MR3040 - Version 1 firmware</a></li>MD5 Hash: 40BC4E9C85E3497065067EA523641FF0
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v2-squashfs-factory.bin">MR3040 - Version 2 firmware</a></li>MD5 Hash: F0BE4D92916CFDE5FD8046EFFA9090D2
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">WR703N - Version 1 firmware</a></li>MD5 Hash: 068C7986A2B33D307705460AB9AA037D
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr842n-v1-squashfs-factory.bin">WR842N - Version 1 firmware</a></li>MD5 Hash: B64EEB60321A3C9CC5BD37B314BAE6F6
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr1043nd-v1-squashfs-factory.bin">WR1043ND - Version 1 firmware</a></li>MD5 Hash: 3DCAB934F29A410C3402652F0AA9C2F5
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr10u-v1-squashfs-factory.bin">MR10U - Version 1 firmware</a></li>MD5 Hash: 0289186592FC4CFDC8F241D7C2069E27
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr11u-v1-squashfs-factory.bin">MR11U - Version 1 firmware</a></li>MD5 Hash: E750D2B475DF73C644E15ED8DF97A7F7
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr11u-v2-squashfs-factory.bin">MR11U - Version 2 firmware</a></li>MD5 Hash: AAFFE00C02B9CC14CB670B9BCF281CAC
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr13u-v1-squashfs-factory.bin">MR13U - Version 1 firmware</a></li>MD5 Hash: D72C181DA8C7B3249420B146EE788E23
</li>
</ul>


<li>Copy the file onto your USB Drive</li>
<li>Login to the router, and run the commands below, inserting the name of the firmware file where appropriate:
<pre>
    cd /mnt/usb
    mtd -r write YOUR_FIRMWARE_NAME_HERE firmware
</pre></li>
<li>Once the firmware flash finishes, power down the LibraryBox and put the USB back into your computer.</li>
<li>Download the <a href="http://librarybox.us/v2/install_librarybox.zip">LibraryBox v2.0 Install folder</a> (as zip file) (MD5 Hash: 59423526AE160107E60265C212904E1E) and unzip it.</li>
<li>Delete the existing install folder on the USB drive, and copy the newly-unzipped install folder and all its contents onto the root of the USB drive.</li>
<li>Put the USB back into the router, and power it back up. The install process should now kick off, and in about 10 minutes and a lot of flashing lights, you will have a LibraryBox v2.0 ready to go.</li>
</ol>

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