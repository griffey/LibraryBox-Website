---
layout: default
title: LibraryBox | Problems
---
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
