---
layout: default
title: LibraryBox | Building Your Own LibraryBox
---
    <div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>Building Your Own LibraryBox v2.0...</h1>
        <h3>WARNING: v2.0 is NOT the most current version of LibraryBox. If you aren't here looking for the v2.0 instructions, please head back to <a href="http://librarybox.us">the LibraryBox Homepage</a> and grab the v2.1!</h3>
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
<p>To build a LibraryBox, you need a router and a USB thumb drive. You can build a LibraryBox with a variety of different router hardware, depending on your use-case and need. At the moment, Librarybox v2.0 supports 7 different pieces of hardware:
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
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">MR3020 - Version 1 firmware</a></li>MD5 Hash: 41DD7ED78843CCAE3D27903E5D1F46DB
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v1-squashfs-factory.bin">MR3040 - Version 1 firmware</a></li>MD5 Hash: 40BC4E9C85E3497065067EA523641FF0
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr3040-v2-squashfs-factory.bin">MR3040 - Version 2 firmware</a></li>MD5 Hash: F0BE4D92916CFDE5FD8046EFFA9090D2
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">WR703N - Version 1 firmware</a></li>MD5 Hash: 068C7986A2B33D307705460AB9AA037D
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr842n-v1-squashfs-factory.bin">WR842N - Version 1 firmware</a></li>MD5 Hash: B64EEB60321A3C9CC5BD37B314BAE6F6
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr842n-v2-squashfs-factory.bin">WR842N - Version 2 firmware</a></li>MD5 Hash: 0E3CEB4ADEE5D27042D8FF56D6E56C6C
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-wr1043nd-v1-squashfs-factory.bin">WR1043ND - Version 1 firmware</a></li>MD5 Hash: 3DCAB934F29A410C3402652F0AA9C2F5
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr10u-v1-squashfs-factory.bin">MR10U - Version 1 firmware</a></li>MD5 Hash: 0289186592FC4CFDC8F241D7C2069E27
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr11u-v1-squashfs-factory.bin">MR11U - Version 1 firmware</a></li>MD5 Hash: E750D2B475DF73C644E15ED8DF97A7F7
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr11u-v2-squashfs-factory.bin">MR11U - Version 2 firmware</a></li>MD5 Hash: AAFFE00C02B9CC14CB670B9BCF281CAC
<li><a href="http://librarybox.us/v2/openwrt-ar71xx-generic-tl-mr13u-v1-squashfs-factory.bin">MR13U - Version 1 firmware</a></li>MD5 Hash: D72C181DA8C7B3249420B146EE788E23
</li>
</ul>

<li>Download the <a href="http://librarybox.us/v2/install_librarybox.zip">LibraryBox v2.0 Install folder</a> (as zip file) MD5 Hash: 59423526AE160107E60265C212904E1E</li>

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
<li>Enter the default username & password (admin & admin).</li>

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
That will launch a script that will walk you through setting up FTP access.
</li>

<li>Choose 1 for Setting Password and Enable SSH.</li>

<li>Choose a strong password. After you set the password, you will log into the LibraryBox via SSH like this:
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
      <p style="font-size: 3em; line-height: 1.2em;">Optional: Config, FTP, Sync, & More</p>
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



<h2><a href="./upgrading.php">Upgrading from an older version?</a></h2>
<br />
<h2><a href="./problems2.php">Have a problem along the way?</a></h2>


</div>
</div>
</div>
</div>
