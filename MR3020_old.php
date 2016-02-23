<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | MR3020</title>
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
           <a class="brand" href="index.php">The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>	
    
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>Building Your Own LibraryBox...</h1>
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
       <p style="font-size: 3em; line-height: 1.2em;">
Equipment Needed</p>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse">
      <div class="accordion-inner">
<p>LibraryBox is based on the TP-Link MR3020 router, which costs less than $40 and is <a href="http://www.amazon.com/TP-LINK-Portable-802-11n-Wireless-TL-MR3020/dp/B006DEBXD0/?tag=jasongriffey-20">available from Amazon</a>. </p>
<p>LibraryBox also requires a USB flash drive to be used in conjunction with the MR3020. You can use any FAT32 formatted USB flash drive, which means that there is a soft limit of 32GB in size for your files. I haven't tested anything larger than 32GB, at least. I like the SanDisk Cruzer line of drives, that come in a variety of sizes and costs from Amazon: <a href="http://www.amazon.com/SanDisk-Cruzer-Flash-Drive-SDCZ33-016G-B35/dp/B005FYNSZA/?tag=jasongriffey-20">4Gb for $5.75, 8GB for $7.95, 16GB for $11.24, and 32GB for $21.67</a>.</p>
<p>Once you've got your MR3020 and a USB flash drive, just follow the three steps below.</p>
      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
       <p style="font-size: 3em; line-height: 1.2em;">
Stage One: Flash your hardware with OpenWRT</p>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
<ol>
<li>Download a custom copy of OpenWrt for the MR3020 at <!--<a href=" http://stable.openwrt.piratebox.de/ar71xx_AA/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">http://stable.openwrt.piratebox.de/ar71xx_AA/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin</a>--> <a href=" http://librarybox.us/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">http://librarybox.us/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin</a>(OpenWRT firmware modified by Matthias Strubel to include all needed kernel modules, MD5 Hash:  366a9ea0bb93c79efbfdab2171919fd6). This is the firmware that will prepare the router for all of the other customization.</li>

<li> Set the toggle switch located beside the LAN/WAN port to WISP mode</li>

<li>If using a computer with wifi, turn off the wireless in order to force it to connect to the router over ethernet.</li>

<li>Connect the router via ethernet cable to your computer, connect it to a power source via USB cable, and open a web browser to http://192.168.0.254</li>

<li>Enter the default username & password (admin & admin)</li>

<li>Navigate to System Tools > Firmware Upgrade and select the OpenWRT firmware that you downloaded in step 1 (openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin)</li>

<li>After the upgrade completes, the MR3020 will restart. Do not unplug the router or disconnect the ethernet cable during the firmware flash.</li>
</ol>
<p>Step I is done. At this point, you have an MR3020 running OpenWRT.</p>
      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion3">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      <p style="font-size: 3em; line-height: 1.2em;">Stage Two: Install PirateBox .3.2</p>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">

<p>Installing Piratebox doesn’t require that you understand the command line...you can simply follow the instructions, and you should be fine. But if you mistype something, it helps if you know your way around Linux a bit. Once the MR3020 restarts, begin this section.</p>
<ol start="8">
<li>Telnet to the device:

<pre>
telnet 192.168.1.1</pre> 

(yes, this is the right IP address, a la the OpenWRT install)</li>

<li>Use the passwd command to set your login password - this will enable SSH:</li><br />
<pre>
passwd
</pre>
<li>In the next step you'll be editing the MR3020 network configuration at /etc/config/network so that it can access the Internet and install dependencies. You will be changing 4 lines of the file. 2 of these changes (the lines with dns in them) will be the same for every LibraryBox. The other 2 depend on your network configuration. You'll need to determine values for the lines that start with option ipaddr and option gateway.

The value for option gateway should be the IP address of your network router.
The value for option ipaddr should be an IP address that is assignable by your network router. Example: If your network router is 172.16.0.1, then the two lines would be:<br />
<pre>
option gateway ‘172.16.0.1’
option ipaddr ‘172.16.0.101’
</pre>
The other two lines that need changing are list dns. I recommend using Google’s DNS servers for this, unless you have a good reason not to. If you have such a reason, then you probably already know what you should be using for these values...otherwise, stick to:
<pre>
list dns ‘8.8.8.8’
list dns ‘8.8.4.4’
</pre>
Because network configurations and routers vary widely it’s impossible for me to give you step by step instructions for how to determine these values, but some judicious use of Google should help if you’re lost.</li>

<li>Edit the network file with vi. vi is a text editor built into Linux that you will use to make the changes below. If you aren't familiar with vi, there are many help docs available online, but <a href="http://www.cs.colostate.edu/helpdocs/vi.html">here's a good place to start.</a> Read that over, then:<br />
<pre>
vi /etc/config/network
</pre>
You are editing the /etc/config/network file so that you set a static IP address for the MR3020, and the gateway that matches the IP range being delivered by your network router. I have chosen to use the DNS provided by Google, as it is fast and stable, but if you prefer you can use your network router’s DNS, or OpenDNS. The MR3020 needs to be able to access the Internet in order to update the packages necessary for PirateBox to run.  This is the part where the largest number of failures occur in the install process, so take a moment to look it over, use the values you determined in Step 9.5. If you make a mistake at this point, it is possible to brick the MR3020 in such a way that it is no longer accessible. Be careful.

You should modify the /etc/config/network file to look like this, where the lines in the second set with “ipaddr” and “gateway” are customized as noted in Step 9.5. You do not need to change any values in the first set of values:
<pre>
config interface 'loopback'
option ifname 'lo'
option proto 'static'
option ipaddr '127.0.0.1'
option netmask '255.0.0.0'

config interface 'lan'
option ifname 'eth0'
option type 'bridge'
option proto 'static'
option ipaddr '172.16.0.101'
option netmask '255.255.255.0'
option gateway '172.16.0.1'
list dns '8.8.8.8'
list dns '8.8.4.4’
</pre>
Another example: If your router is 192.168.0.1 (as many home routers are by default) and is set to assign IPs in the 192.168.0.X range, the lines in question would read:<br />
<pre>
option ipaddr ‘192.168.0.101'
option gateway ‘192.168.0.1’
</pre>
The important thing is that the lines under config interface ‘lan’  for option ipaddr gets set to an address not currently in use on your network, and that option gateway gets set to the IP address of your router.</li>
                                                                                     
<li>Remove the power from the router, and plug in the FAT formatted USB drive. Do not disconnect it for the remainder of the Piratebox install.</li>

<li>Enable your computer’s wifi once more.</li>

<li>Connect the MR3020 to your network router with an ethernet cable and plug the the power back into the MR3020. Wait a couple of minutes until the MR3020 boots up. With your computer connected to your home network, try sshing into the MR3020 from your computer.<br />
<pre>
ssh root@172.16.0.101
</pre>
You should be able to log into the router using the IP address you set in step 10 above..if you cannot, check your network settings by connecting the MR3020 directly to your computer via ethernet once more, and double-check the step 10 instructions.  The MR3020 should be reachable on your network, at the address you gave.</li>

<li>Ping google to ensure that your MR3020 can access the internet:<br />
<pre>
ping google.com
</pre>
If you get packet response from google.com, you should be good to go for the next section. CTRL-C to stop the ping command. If you do not get a packet response, double check your /etc/config/network file, double check your IP range, and make sure that any router-based firewall is off, then try again.</li>
<!--
<li>Update the package configuration:
<pre>
vi /etc/opkg.conf
</pre>
and change the URL in the first line to:
<pre>
src/gz attitude_adjustment http://stable.openwrt.piratebox.de/ar71xx/packages
</pre>
</li>
-->
<li>Add USB support to OpenWRT by installing and enabling the following packages:<br />
<pre>
opkg update
opkg install kmod-usb-uhci
insmod uhci
opkg install kmod-usb-ohci
insmod usb-ohci
</pre>
(NOTE: the opkg install lines may return the message: installed in root is up to date. This is fine, and is not an error.)</li>

<li>Install Piratebox 0.3.2:<br />
<pre>
cd /tmp
wget http://piratebox.aod-rpg.de/piratebox_0.3-2_all.ipk
opkg update && opkg install piratebox_0.3-2_all.ipk
</pre>
This will take a few minutes. Be patient and wait for the install process to finish completely before you do anything else. Removing power, pulling the USB, or otherwise interrupting the install is almost certainly going to brick your MR3020.

After the installation completes, you can unplug the MR3020 from your network router, unplug the power to the MR3020, and power it back up, unplugged from your network router. At this point, you should have a working Piratebox, and should be able to connect to the new “Piratebox” SSID that your MR3020 is broadcasting via wifi.</li>

</ol>
      </div>
    </div>
  </div>
  </div>
 

 <div class="accordion" id="accordion4">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">
      <p style="font-size: 3em; line-height: 1.2em;">Stage Three: Install LibraryBox</p>
      </a>
    </div>
    <div id="collapseFour" class="accordion-body collapse">
      <div class="accordion-inner">
<ol start="19">

<li>Download the librarybox.zip file from http://github.com/griffey/Librarybox and save it somewhere you can find it.</li>

<li>Unzip the file. The result should be a folder, called simply “librarybox”, that has inside it several files and scripts.</li>

<li>With the MR3020 powered down, remove the USB drive, and insert it into your computer. Copy the librarybox folder (the whole folder, not the contents) to the USB, in the root directory. Eject/remove the USB from your computer, plug it back into MR3020, and power the MR3020 back up.</li>

<li>Connect your wifi to the “Piratebox” SSID, and reconnect to the MR3020 via SSH:
<pre>
ssh root@192.168.1.1
</pre>
then enter your password from step 9 to login.

NOTE: this address is different from that in Step 13. The Piratebox install resets the IP that the MR3020 assigns itself.</li>

<li>Navigate to the librarybox directory on the USB drive on the MR3020:
<pre>
cd /mnt/usb/librarybox/
</pre>
And run the LibraryBox install script:
<pre>
./librarybox.sh
</pre>
That script will copy the files necessary for the UI customizations into place, and alters values in other files. If you would like the details of the script, and want to follow where all the parts go, see http://librarybox.us/scripts.php</li>

<li>By default, LibraryBox v1.5 is installed with Chatbox functionality, which some may prefer to remove. If you would like to remove the Chatbox, simply run the nochat script:
<pre>
./nochat.sh
</pre>
If you later change your mind, SSH back in to the MR3020, navigate back to /mnt/usb/librarybox/ and run:
<pre>
./chat.sh
</pre>
</li>
<li>Done! One more reboot, and you should now have a LibraryBox. When the MR3020 boots back up, you should see an SSID called “LibraryBox - Free Content!”. Connect to it via any wifi-enabled device, launch a browser, and you should see the LibraryBox homepage with the ability to browse and download files.</li>
</ol>

      </div>
    </div>
  </div>
  </div>




<p>Once you have a running LibraryBox, you can power down the MR-3020, unplug the USB drive, plug it into your computer, and throw content into the PirateBox Share directory...anything you place here will show up alphabetically to be downloaded. If you’d like, you can <a href="https://www.dropbox.com/s/a8noy3h0i8e5ilo/Shared.zip">download this bundle of freely licensed works</a> to get started, or head to Project Gutenberg or Feedbooks to build your own. </p>

<h2><a href="./problems.php">Have a problem along the way?</a></h2><br />
<h2><a href="./scripts.php">Curious about what's going on?</a></h2>

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