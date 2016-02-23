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
     <a class="brand" href="index.php"><img height="30px" src="http://librarybox.us/img/LibraryBox_25px_white.png">&nbsp;The Librarybox Project</a>

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
	
<h3>If you can SSH into your router..</h3>
<p>
If some part of the process didn't quite go as it should, or you got an odd error, or things just generally didn't go smoothly, you can re-flash your MR3020 with OpenWRT and start again. Here's how:</p>
<ol>
<li>Power off the router</li>
<li>Unplug the USB Drive from the router, and plug it into your computer</li>
<li>Download the appropriate firmware for your device:</li>
<ul>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">MR3020 - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v1-squashfs-factory.bin">MR3040 - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v2-squashfs-factory.bin">MR3040 - Version 2 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">WR703N - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr842n-v1-squashfs-factory.bin">WR842N - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr1043nd-v1-squashfs-factory.bin">WR1043ND - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr10u-v1-squashfs-factory.bin">MR10U - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr13u-v1-squashfs-factory.bin">MR13U - Version 1 firmware</a></li>
</li>
</ul>


<li>Copy the file onto your USB Drive</li>
<li>Log in to the router, and insert the name of the firmware file where appropriate below:
<pre>
    cd /mnt/usb
    mtd -r write YOUR_FIRMWARE_NAME_HERE firmware
</pre></li>
<li>Once the firmware flash finishes, power down the LibraryBox and put the USB back into your computer.</li>
<li>Download the <a href="http://librarybox.us/v2/install_librarybox.zip">install folder</a>, unzip, and copy it onto the root of the USB drive.</li>
<li>Put the USB back into the router, and power it back up. The install process should now kick off, and in about 10 minutes and a lot of flashing lights, you will have a LibraryBox v2.0 ready to go.</li>
</ol>

</p>

 <hr class="dashed">	
 
 <h3>If you can't SSH into your router...</h3>
 <ol>
<li>Unplug the USB Drive from the router, and plug it into your computer</li>
<li>Download the appropriate firmware for your device:</li>
<ul>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">MR3020 - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v1-squashfs-factory.bin">MR3040 - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v2-squashfs-factory.bin">MR3040 - Version 2 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">WR703N - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr842n-v1-squashfs-factory.bin">WR842N - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr1043nd-v1-squashfs-factory.bin">WR1043ND - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr10u-v1-squashfs-factory.bin">MR10U - Version 1 firmware</a></li>
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr13u-v1-squashfs-factory.bin">MR13U - Version 1 firmware</a></li>
</li>
</ul>
<li>Copy the file onto your USB Drive</li>
<li>Visit the <a href="http://wiki.openwrt.org/">OpenWRT wiki</a> and find the Failsafe boot option for the router in question.</li>
<li>Follow the failsafe instructions to be able to log in to the router via a Terminal program.</li>

<li>Plug the USB into the router</li>
<li>Try these commands:

<pre>  /etc/init.d/boot start</pre> This will return some error messages, just ignore them.</li>

<li>Then:
<pre>
  mount /dev/sda1 /mnt
  cd /mnt/
  mtd write -r YOUR_FIRMWARE_NAME_HERE firmware
  </pre>
 </li> 
<li>Once the firmware flash finishes, power down the LibraryBox and put the USB back into your computer.</li>
<li>Download the <a href="http://librarybox.us/v2/install_librarybox.zip">install folder</a>, unzip, and copy it onto the root of the USB drive.</li>
<li>Put the USB back into the router, and power it back up. The install process should now kick off, and in about 10 minutes and a lot of flashing lights, you will have a LibraryBox v2.0 ready to go.</li>
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