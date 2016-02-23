<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | Building Your Own LibraryBox v2.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jason Griffey">
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
		    <h1>Building Your Own LibraryBox v2.1...</h1>
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
<p>To build a LibraryBox, you need a router and a USB thumb drive. You can build a LibraryBox v2.1 with a variety of different router hardware, depending on your use-case and need. At the moment, Librarybox v2.1 supports 12 different pieces of hardware. These are the suggested ones, a complete list can be found see below in the Download section.
<ul>
<li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-Portable-802-11n-Wireless-TL-MR3020/dp/B006DEBXD0/?tag=jasongriffey-20">TP-Link MR3020</a></li>
The MR3020 is the "standard" LibraryBox hardware, about the size of a hockey puck and cheap and easy to find.
<li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-TL-MR3040-Wireless-Portable-Compatible/dp/B0088PPFP4/?tag=jasongriffey-20">TP-Link MR3040</a></li>
The MR3040 is an upgrade from the 3020, in that has a built-in battery pack for on-the-go ease of use.
<li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-TL-WR703N-Portable-802-11n-Wireless/dp/B0083Z54P0/?tag=jasongriffey-20">TP-Link WR703n</a></li>
The WR703n is the non-US version of the MR3020, available in Japan, China, and elsewhere in the world. DO NOT confuse this with the 702n, which does not have a USB port and isn't suitable for use with LibraryBox.
<li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-TL-WR842ND-Multi-function-Wireless-detachable/dp/B006E04T9I/?tag=jasongriffey-20">TP-Link WR842n</a></li>
The WR842n is best for non-portable LibraryBox installations, or where you want the power of external antenna to broadcast your signal. Make sure that you download the correct version of the firmware for your hardware.
<!--<li style="font-size: 1.5em; line-height: 1.5em;"> <a href="http://www.amazon.com/TP-LINK-TL-WR1043ND-Ultimate-Wireless-Detachable/dp/B002YLAUU8/ref=sr_1_1?ie=UTF8&qid=1392697043&sr=8-1&keywords=1043nd">TP-Link WR-1043ND VERSION 1</a></li>
The 1043ND is another non-portable LibraryBox installation option, and has the highest cost of any of the stand-alone routers that LibraryBox supports. But with 3 external antennae, if you're looking for power, the 1043 is your huckleberry. This firmware supports version 1 of this router, NOT the currently available v2. -->
<li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-Link-Portable-Router-TL-MR10U-Mobile/dp/B00GM7Q1TY/?tag=jasongriffey-20">TP-Link TL-MR10U</a></li>
The MR10U is a portable router with a built-in 2600 mAh battery for charging other devices built in. It is primarily a non-US piece of hardware, so if you are in the US, tread carefully.
<li style="font-size: 1.5em; line-height: 1.5em;"> <a href="http://www.aliexpress.com/item/TP-Link-TL-MR13U-Portable-10400mAh-Battery-Powered-Wireless-N150-Home-Travel-Beach-Hotel-WIFI-3G/1542716177.html?af=ppc&isdl=y&src=Google&albch=Google&albcp=Search_Search-ALL-PLA&albkw=None_US-Shopping-Search-Product-AliExpress_none_none&albag=home_none_Search-ALL-PLA_1013999999870&albmt=broad&albst=search-text&albom=OTHERS_None_20130807_Aliexpress&creative=31447451305&ptsid=1013999999870&gclid=COa558_l1LwCFQNufgodvSYAfg">TP-Link MR13U</a></li>
The MR13U is also a portable router for the non-US market, but this one has a 10,000 mAh battery, plenty for running the LibraryBox for over a full day of use.

</ul>
</p>
<p>LibraryBox also requires a FAT32 formatted USB flash drive to be used in conjunction with one of the above routers. You can use any FAT32 formatted USB flash drive, which means that there is a soft limit of 4GB for a single file (a limitation of the FAT32 filesystem). I like the SanDisk Cruzer line of drives, that come in a variety of sizes and costs from Amazon: <a href="http://www.amazon.com/SanDisk-Cruzer-Flash-Drive-SDCZ33-016G-B35/dp/B005FYNSZA/?tag=jasongriffey-20">from 4GB to 32GB</a>. Another option is the <a href="http://www.amazon.com/Leef-Surge-Profile-PrimeGrade-Memory/dp/B00F0EZ4XY/?tag=jasongriffey-20">Leef Surge low profile USB drive</a>. I like the low-profile drives as they make for a more compact final product.</p>
<p>Once you've got your router and a USB flash drive, just follow the steps below.</p>
      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
       <p style="font-size: 3em; line-height: 1.2em;">
Step One: Download & Install LibraryBox</p>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
<ol>
<li>Download the firmware update that applies to the type of router that you are using to build your LibraryBox. Pay special attention to the Version # of the hardware, as some of these have a v1 and v2 where the hardware changes and a different firmware is needed.</li>
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

<li>Download the <a href="http://librarybox.us/v2.1/install_librarybox.zip">LibraryBox v2.1 Install folder</a> (as zip file) MD5 Hash: 85BF5A80220B9C8204303C6099908A7D</li>

<li> Unzip the install_librarybox.zip file, so that you are left with an install folder, and copy both the install folder AND the firmware file onto your FAT 32 formatted USB stick. The only things on your USB drive should be a folder called "install" copied from the unzipped install_librarybox.zip file and the firmware.</li>

<li>Plug the FAT 32 formatted USB drive into the router's USB port.</li>

<li>If the router has a selection switch for mode (like the MR3020) ensure that it's set to WISP.</li>

<li>Connect the router via ethernet cable to your computer, connect it to a power source. If you are on a laptop, you may have to temporarily disable wi-fi to make sure that your computer connects directly to the router over Ethernet.</li>

<li>Open a web browser, and type the address below that matches your router type into the address bar.</li>
<ul>
<li>MR3020 - http://192.168.0.254</li>
<li>MR3040 - http://192.168.0.1</li>
<li>WR703N - http://192.168.1.1</li>
<li>WR842N - http://192.168.1.1</li>
<li>WR1043ND - http://192.168.1.1</li>
<li>MR10U - http://192.168.1.1</li>
<li>MR13U - http://192.168.1.1</li>

</ul>
<li>Enter the default username & password (<strong>admin</strong> & <strong>admin</strong>).</li>

<li>Navigate to System Tools > Firmware Upgrade and select the OpenWRT firmware that you downloaded in step 1.</li>

<li>After the upgrade completes, the router will restart. Do not unplug the router or disconnect the ethernet cable during the firmware flash. The entire process of building your LibraryBox will take approximately 10 minutes. Walk away, go have a cup of coffee.</li>
</ol>
<p>Step I is done. That's it...after about 20 minutes of LEDs flashing, you should have a working LibraryBox. The speed depends on the USB drive. The install is done when the lights are no longer changing and you can see the SSID "LibraryBox - Free Content!" being broadcast.</p>

<p>Once you have a running LibraryBox, you can power down the router, unplug the USB drive, plug it into your computer, and throw content into the /LibraryBox/Shared directory...anything you place here will show up alphabetically to be downloaded. If you’d like, you can <a href="http://librarybox.us/Shared.zip.torrent">download this bundle of freely licensed works</a> (WARNING: Torrent client needed) to get started, or head to Project Gutenberg or Feedbooks to build your own. </p>
<p>One bit of warning: because of the way that the default webpage is designed, you do need to have the basic organizational folders in place in the Shared directory if you want the menu links to work (text, audio, video, software). Of course, if you change the website, you can do whatever you want with the Shared folder.</p>
      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion3">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      <p style="font-size: 3em; line-height: 1.2em;">Set Password</p>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">

<p>At this point, you have a working LibraryBox. The problem is that it isn't protected in any way, and anyone that knows the IP address (192.168.1.1) can simply telnet in and do what they wish. In order to secure your LibraryBox, you need to set a password.</p>
<ol start="10">
<li>Reboot your LibraryBox (power-cycle the router) and let it boot up.</li>

<li>Connect to the LibraryBox SSID with your computer, and telnet into it:</li><br />
<pre>
telnet 192.168.1.1
</pre>
<li>Run the LibraryBox advance setup script:
<br />
<pre>
box_init_setup.sh
</pre>
That will launch a script that will walk you through the possible customizations to LibraryBox v2.1.
</li>

<li>Choose 1 for Setting Password and Enable SSH.</li>

<li>Choose a strong password. After you set the password, you will no longer be able to login via insecure telnet. Log into the LibraryBox via SSH like this:
<pre>
ssh root@192.168.1.1
</pre>

</li>

<li>You've now got a working, secure LibraryBox!</li>


</ol>
      </div>
    </div>
  </div>
  </div>


 <div class="accordion" id="accordion4">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">
      <p style="font-size: 3em; line-height: 1.2em;">Optional: Config, DLNA, FTP, Sync, & More</p>
      </a>
    </div>
    <div id="collapseFour" class="accordion-body collapse">
      <div class="accordion-inner">

<h3>Config Options</h3>
<p>
On the USB drive under the LibraryBox folder, there is a folder named "Config" that is full of text files. This includes:
</p>
<p>
<ul>
<li>channel.txt</li>
<li>hostname.txt</li>
<li>librarybox_ftp.txt</li>
<li>librarybox_ftpadmin.txt</li>
<li>librarybox_ftpanon.txt</li>
<li>librarybox_ftpsync.txt</li>
<li>librarybox_ftpsyncport.txt</li>
<li>librarybox_shoutbox.txt</li>
<li>ssid.txt</li>
<li>system_hostname.txt</li>
<li>txpower.txt</li>
</ul>

</p>
<p>Some of these are controlled by the menus mentioned above in the FTP setup, but several of them allow you to customize your LibraryBox. You can change the value of:
<ul>
<li>channel.txt to reflect the wifi channel that you want the LibraryBox to use</li>

<li>system_hostname.txt if you'd like a custom hostname when setting up Sync Clients</li>

<li>ssid.txt if you want to have a custom wifi ssid to be broadcast</li>

<li>txpower.txt if you'd like to make your LibraryBox have just a bit more (or a bit less) oomph when it comes to wifi coverage. The default is 25, but ranges between 20-30 should be safe (although raising the TX power will result in significantly higher power consumption and heat generation by the MR3020.</li>
</p>
<p>If you make any changes to these files, they will take effect the next time you boot your LibraryBox. I would recommend NOT changing the various FTP settings in this way, stick to the config files mentioned above.
</p>
</ul>
<h3>MiniDLNA Setup</h3>
<p>Connect to the LibraryBox SSID with your computer, and SSH into it:</li><br />
<pre>
ssh root@192.168.1.1
</pre>
Run the LibraryBox advance setup script:
<br />
<pre>
box_init_setup.sh
</pre>
which will give you the following menu:

<pre>
1 - Setting password and enable SSH
2 - Set date & time (enable timesave)
3 - Start FTP configuration
4 - minidlna enable
</pre>

Simply select 4, and hit return. Your LibraryBox is now a DLNA server and should be discoverable by any DLNA client. The setting is saved across reboots, so the next time you power up your LibraryBox, the miniDLNA server will be active.
</p>
<h3>FTP Setup</h3>
<p>
Setting up your LibraryBox for FTP will allow you to upload, download, and delete files from the "Shared" directory from a computer connected to the wifi signal, without having to physically interact with the LibraryBox or the USB drive. Once you have it setup, you will be able to use any FTP software to login and change the Shared files.

Follow the steps below to enable FTP access on your LibraryBox.
</p>

<ol>
<li>Connect to the LibraryBox SSID with your computer, and SSH into it:</li><br />
<pre>
ssh root@192.168.1.1
</pre>
<li>Run the LibraryBox advance setup script:
<br />
<pre>
box_init_setup.sh
</pre>
which will give you the following menu:

<pre>
1 - Setting password and enable SSH
2 - Set date & time (enable timesave)
3 - Start FTP configuration
4 - minidlna enable
</pre>

This time, we are looking for option 3 on that menu, Start FTP Configuration.
</li>
<br />
<li>Selecting 3 will give you one more menu, this one a bit more complicated. First, I'll walk you through setting up just FTP access, and then below we'll worry about Sync and other options. The second menu looks like this:
<pre> Choose an option: 3
------------------------------------------------------
   Current configuration:
------------------------------------------------------
   FTP enabled                : yes
   Admin access               : yes
   Special SYNC access        : yes
   SYNC Port                  : 54321
   Anonymous login possible   : no
 --
   FTP Synchronisation active : no
   FTP Sync hostname          : empty
   FTP Sync password          : empty

------------------------------------------------------
  1 -  Enable / Disable FTP
  2 -  Enable / Disable Admin Access
  3 -  Enable / Disable Sync Master
  4 -  Enable / Disable Anonymous Access
  5 -  Set password for Sync Master
  6 -  Set password for Admin Access

  7 -  Enable Sync Client
  8 -     Client host
  9 -     Client password

 Enter h and a number for help about the topic. For example, h8 for Client host help
 Every other button is a clean exit. </pre>
<br />
The list above the selections show you the current status of the settings, and choosing any selection will cause the menu to re-draw to show you the new current settings. They are not applied, however, until you exit the menu and reboot your LibraryBox.
</li>

<li>To enable FTP, choose Option 1.</li>
<li>You must also set a password for your FTP access, done by selecting Option 6 - Set password for Admin Access. Choose a secure password for your FTP access!</li>
<li>After you have set the password, exit the menu by pressing any key. Then, reboot your LibraryBox by unplugging and plugging it back in.</li>
<li>At this point, you should be able to connect to the LibraryBox SSID, and use any popular FTP program to connect using your password and the username "nobody".</li>
</ol>

<h3>Sync Setup</h3>
<p>A brief word about Mesh/Sync: due to technical limitations and an effort to ensure good user experience in regards to battery life, we've implemented this first Sync protocol to be Master/Client oriented rather that true peer-to-peer mesh. We are going to continue to look at more robust sync services for LibraryBox, but for this release, the Sync works like this:
</p>
<p>You will designate one LibraryBox to be the Master box, and any number you wish as the Clients. The Client Boxen will search for a Master every 7 minutes, just looking to see if there is one in range. If a Client sees a Master that has the appropriate login credentials, it will start a comparison and sync with the Master in question. The Client will mirror the Master in content, both in deletions and additions. In order to automagically change the Shared folder on remote LibraryBoxen, you can set up a single Master that stays with you, and you can wander into range of your installed LibraryBoxen, hang out for a few minutes, and move on.
</p>
<p>To set up Sync, follow these direction:</p>
<ol>
<li>Connect to the LibraryBox SSID with your computer, and SSH into it:</li><br />
<pre>
ssh root@192.168.1.1
</pre>
<li>Run the LibraryBox advanced setup script:
<br />
<pre>
box_init_setup.sh
</pre>
which will give you the following menu:

<pre>
1 - Setting password and enable SSH
2 - Set date & time (enable timesave)
3 - Start FTP configuration
</pre>

Choose option 3 on that menu, Start FTP Configuration.
</li>
<br />
<li>Selecting 3 will give you one more menu, this one a bit more complicated.

<pre> Choose an option: 3
------------------------------------------------------
   Current configuration:
------------------------------------------------------
   FTP enabled                : yes
   Admin access               : yes
   Special SYNC access        : yes
   SYNC Port                  : 54321
   Anonymous login possible   : no
 --
   FTP Synchronisation active : no
   FTP Sync hostname          : empty
   FTP Sync password          : empty

------------------------------------------------------
  1 -  Enable / Disable FTP
  2 -  Enable / Disable Admin Access
  3 -  Enable / Disable Sync Master
  4 -  Enable / Disable Anonymous Access
  5 -  Set password for Sync Master
  6 -  Set password for Admin Access

  7 -  Enable Sync Client
  8 -     Client host
  9 -     Client password

 Enter h and a number for help about the topic. For example, h8 for Client host help
 Every other button is a clean exit. </pre>
<br />
The list above the selections show you the current status of the settings, and choosing any selection will cause the menu to re-draw to show you the new current settings. They are not applied, however, until you exit the menu and reboot your LibraryBox.
</li></ol>

<h4>Set Up a Master LibraryBox</h4>
<ol start="4">
<li>
Disable FTP
</li>
<li>Set Password for Sync Master</li>
<li>Enable Sync Master</li>
<li>Exit the menu by choosing any other key.</li>
<li>Run the command:
<pre>/etc/init.d/mesh enable
</pre></li>
<li>Run the command:
<pre>
/etc/init.d/piratebox avahi
</pre></li>
<li>Reboot your LibraryBox, and now you have a Master, ready for connections to Client Boxen. </li>

</ol>
<h4>Set Up a Client LibraryBox</h4>
<ol start="4">
<li>
Disable FTP
</li>
<li>Enable Sync Client</li>
<li>Under "Client Host" you will need the full hostname of the Master that you wish to sync to.</li>
<li>Client Password - you want to enter the Password you set for the Master here. The Client will use the Hostname and this Password to log in to the Master to begin the sync</li>
<li>Exit the menu by choosing any other key.</li>
<li>Run the command:
<pre>/etc/init.d/mesh enable
</pre></li>
<li>Run the command:
<pre>
/etc/init.d/piratebox avahi
</pre></li>
<li>Reboot your LibraryBox, and now you have a Client, ready for connections to its corresponding Master LibraryBox. </li>
</ol>


      </div>
    </div>
  </div>
  </div>



<h2><a href="./upgrading2.1.php">Upgrading from an another version?</a></h2>
<br />
<h2><a href="./problems2.php">Have a problem along the way?</a></h2>


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
