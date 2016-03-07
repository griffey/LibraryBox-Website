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
