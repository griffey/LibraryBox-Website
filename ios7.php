---
layout: default
title: LibraryBox | iOS 7 Patch
---
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>iOS 7 and LibraryBox 1.5.1</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
<p>
With the Sept 2013 release of iOS 7, Apple <a href="http://stackoverflow.com/questions/18891706/ios7-and-captive-portals-changes-to-apple-request-url">changed the way that iOS devices handle captive portals</a>, thus <a href="http://forum.daviddarts.com/read.php?9,8879,8907#msg-8907">breaking LibraryBox 1.5 in a pretty serious way</a>. If you are running a LibraryBox that you built before Sept 28, 2013 (v1.5) then it has this issue and you should apply the patch as noted below. The patch will update you to LibraryBox v1.5.1, and iOS 7 should behave itself again.</p>
<p>If you built your LibraryBox AFTER Sept 28, 2013, your code is pre-patched. You're awesome just the way you are.</p>
<ol>
<li>Download the <a href="https://github.com/griffey/LibraryBox/blob/master/ios7_patch.zip">ios7_patch.zip</a> from the LibraryBox Repository on Github. (protip: click the "view raw" link on that page to download)</li>
<li>Unzip the patch file. In the zip, there should be two files: droopy and iOS7_patch.sh</li>
<li>Put the two files into the /librarybox directory on the USB thumb drive from your LibraryBox. droopy WILL replace the existing copy, and that's ok. </li>
<li>Put the thumb drive back into your LibraryBox, power it up, and connect via your computer.</li>
<li>SSH into your LibraryBox. You did this when you built it, but you can refer to the <a href="http://librarybox.us/MR3020.php">Stage Three instructions on the Build Your LibraryBox page</a> if you don't recall.</li>
<li> Once you're in, type: 
<pre>cd /mnt/usb/librarybox
</pre>
Press enter, then:
<pre>./iOS7_patch.sh
</pre>
</li>
<li> Revel in your awesome iOS 7 functional LibraryBox v1.5.1!</li>
</ol>
</div>
</div>
</div>
</div>
