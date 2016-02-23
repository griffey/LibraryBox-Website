<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | Upgrade to v2.1 </title>
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
           <a class="brand" href="index.php">The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>

    <div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>Upgrading your existing LibraryBox to v2.1</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">
	    <div class="row">
		  <div class="span12">

<p>
Upgrading your LibraryBox should be a fast and painless exercise. Follow the steps below to upgrade your existing LibraryBox to the v2.1 release. Be warned: upgrading an existing LibraryBox will reset any customizations you may have done to your existing install. Please back up your Shared directory, Content directory, and any other customizations before upgrading.</p>
<ol>
<li>Power off the router</li>
<li>Unplug the USB Drive from the router, and plug it into your computer</li>
<li>Download the firmware for your device:</li>
<ul>
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">MR3020 - Version 1 firmware</a></li>MD5 Hash: 00FDE382B00DF090716949062B6BD709
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3040-v1-squashfs-factory.bin">MR3040 - Version 1 firmware</a></li>MD5 Hash: 6537D860B7160C87012204B4BFF84808
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3040-v2-squashfs-factory.bin">MR3040 - Version 2 firmware</a></li>MD5 Hash: 45933D958ADC0F8326447811E728F01A
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">WR703N - Version 1 firmware</a></li>MD5 Hash: 8C0E374B965E2CCF49BB04356C77EE4F
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr842n-v1-squashfs-factory.bin">WR842N - Version 1 firmware</a></li>MD5 Hash: 4D11C1721A7E8204D72DBC69D9BC1592
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr842n-v2-squashfs-factory.bin">WR842N - Version 2 firmware</a></li>MD5 Hash: 36BCB67CF407CD22689DABBF81932837
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr1043nd-v1-squashfs-factory.bin">WR1043ND - Version 1 firmware</a></li>MD5 Hash: DF5B21E00F5CB6B1E87F4E373626AA6C
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr1043nd-v2-squashfs-factory.bin">WR1043ND - Version 2 firmware</a></li>MD5 Hash: 05DD6493AA46417CD46E22B02A99BB72
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr10u-v1-squashfs-factory.bin">MR10U - Version 1 firmware</a></li>MD5 Hash: 64DC6DC18524962FB19A798F34A9FFCC
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr11u-v1-squashfs-factory.bin">MR11U - Version 1 firmware</a></li>MD5 Hash: 8DD6DE57B314D47FD10F7E219FE2469E
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr11u-v2-squashfs-factory.bin">MR11U - Version 2 firmware</a></li>MD5 Hash: 559BDB5BC73A684A816208BE0693E268
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr13u-v1-squashfs-factory.bin">MR13U - Version 1 firmware</a></li>MD5 Hash: 2C376E0D09A4317BA338C2AB5634FFF4
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-gl-inet-v1-squashfs-factory.bin">GL-iNet - Version 1 firmware</a></li>MD5 Hash: 37D2E797ECA9E98C85343C57EB2A65B4
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3420-v1-squashfs-factory.bin">MR3420 - Version 1 firmware</a></li>MD5 Hash: CD01B8E845634C2C8D3B045624196D98
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3420-v2-squashfs-factory.bin">MR3420 - Version 2 firmware</a></li>MD5 Hash: 9E14C9EDB5B763EB4EA67107EB6FA02E
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wdr4300-v1-squashfs-factory.bin">WDR4300 - Version 1 firmware</a></li>MD5 Hash: 38CBAA2D397E98E18A3C7CD27B3B4758
<li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr2543-v1-squashfs-factory.bin">WR2543 - Version 1 firmware</a></li>MD5 Hash: FF98517B366B98B67B77EB8EED291A71

</ul>


<li>Copy the file onto your USB Drive</li>

<li>Safely eject the USB drive from your computer, place it back into the router, and power up the router.</li>

<li>Connect the router via ethernet cable to your computer and power up the router. Once the router is running, open a terminal window (for OS X, go to Applications > Utilities > Terminal; for Windows, install and open PuTTY) and log in with ssh:

<pre>ssh root@192.168.1.1 </pre>

Note: If you haven't set up a password yet, use the telnet command instead of ssh:

<pre>telnet 192.168.1.1</pre></li>

<li>Navigate to the /mnt/usb directory:

<pre>cd /mnt/usb</pre>
</li>

<li>Install the LibraryBox v2.1 firmware with:

<pre>sysupgrade -n YOUR_FIRMWARE_NAME_HERE</pre>

Note: Use your “tab” key at the end of “openwrt” to autocomplete the full file name of the firmware.

Note: If sysupgrade refuses the upgrade and you are sure it is the correct file, then you can trigger the flash with the following command

<pre>mtd write -r YOUR_FIRMWARE_NAME_HERE firmware</pre>
</li>

<li>After the upgrade completes, the router will restart twice. Just be patient and let it blink for 10-15 minutes.</li>

<li>Once the lights on the routers are in a steady state, <strong>turn off the router</strong> and remove the USB flash drive and insert it into your computer.</li>

<li>Download the<a href="http://librarybox.us/v2.1/install_librarybox.zip"> LibraryBox v2.1 Install folder </a>(as zip file) MD5 Hash: 85BF5A80220B9C8204303C6099908A7D</li>

<li>Extract the install_librarybox.zip file and drag the “install” folder over to your USB flash drive.</li>

<li>Navigate to the USB drive and into the LibraryBox folder. Rename the Content and Config folders to Content_old and Config_old respectively. The v2.1 upgrade will generate new Content and Config directories...if you have customized anything in these folders, you will need to re-copy those customizations into the newly created folders.</li>

<li>Now SAFELY REMOVE your USB drive from your computer and plug the USB stick into your router.</li>

<li>Power the router on. That will trigger the installation of the new packages. Note: You should wait 15-20 minutes for the installation to complete (depending upon your USB flash drive, it may take up to 45 minutes - be patient!). Your device will reboot a couple of times during the installation.</li>

<li>Once the installation is complete, you can use telnet to connect to the device:

<pre>telnet 192.168.1.1</pre>
</li>

<li>We recommend going over to the <a href="http://librarybox.us/buildingv2.1.php">Building page</a>, and following the instructions to set a password for your LibraryBox.</li>

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
