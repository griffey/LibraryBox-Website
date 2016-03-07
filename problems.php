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
	
<h3>If you can SSH into the MR3020 or WR703N...</h3>
<p>
If some part of the process didn't quite go as it should, or you got an odd error, or things just generally didn't go smoothly, you can re-flash your MR3020 with OpenWRT and start from Stage 2 above. Here's how:</p>
<ol>
<li>Power off the MR3020</li>
<li>Unplug the USB Drive from the MR3020, and plug it into your computer</li>
<li>Download this file:
<a href=" http://stable.openwrt.piratebox.de/ar71xx_AA/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">http://stable.openwrt.piratebox.de/ar71xx_AA/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin</a>
</li>
<li>Copy the file onto your USB Drive</li>
<li>Login to the MR3020, then:
<pre>
    cd /mnt/usb
    mtd write openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin firmware
    reboot
</pre></li>
</ol>
<p>After the reboot, you should be able to start again at <a href="./MR3020.php">Stage 2</a></p>
</p>

 <hr class="dashed">	
 
 <h3>If you can't SSH into the MR3020 or WR703N...</h3>
 <ol>
<li>Unplug the USB Drive from the MR3020, and plug it into your computer</li>
<li>Download this file:
<a href=" http://stable.openwrt.piratebox.de/ar71xx_AA/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">http://stable.openwrt.piratebox.de/ar71xx_AA/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin</a>
</li>
<li>Copy the file onto your USB Drive</li>
<li>Connect the MR3020 to your computer via Ethernet</li>
<li>Manually set the ethernet IP of your computer to 192.168.1.2, and turn off your wireless temporarily</li>
<li>Launch Terminal or Putty, and then:

<pre>ping 192.168.1.1</pre>

and let the ping command run...it will fail, but that's ok.</li>
</li>
<li>Power the MR3020 on and when the WPS Button starts to blink , push it. This should cause the button to blink much faster</li>
</li>At this point, you should see the ping from the previous step starting to respond. Once you do, stop the ping command with Option-C</li>
<li>You should now be able to:
<pre>telnet 192.168.1.1</pre></li>
<li>Plug the USB into the MR3020</li>
<li>Try these commands:

<pre>  /etc/init.d/boot start</pre> This will return some error messages, just ignore them.</li>

<li>Then:
<pre>
  mount /dev/sda1 /mnt
  cd /mnt/
  mtd write openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin firmware
  </pre>
 </li> 
<li>Once you see the command prompt again, you can unplug and reboot the MR3020. At this point, you have just finished Stage One of the LibraryBox install instructions.</li>
</ol>
</div>
</div>
</div>
</div>
