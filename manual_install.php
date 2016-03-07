---
layout: default
title: LibraryBox | Scripts
---
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>Manually Installing LibraryBox v2.0</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
		  
		  <p>Below are the VERY rough steps that you should follow in order to build a LibraryBox from scratch, using the raw code instead of the installer. This is not recommended in any way, shape, or form, and is provided here purely as a reference. If you decide to try it, you're in deep water, and I hope you can swim. :-) </p>
<ol>
<li>change network configuration, that the box gets internet access</li>
<li>Connect your box to local network & reconnect.</li>
<li>install piratebox-repository</li>

<li><pre>opkg install
http://beta.openwrt.piratebox.de/all/packages/pbx-beta-opkg_0.0.5_all.ipk</pre></li>

<li>after that install needed packages.
<pre>opkg update</pre></li>

<li>(optional) box installer (contains the basic configuration menu)

<pre>opkg install box-installer</pre></li>

<li>(optional) usb-config, for the USB config files

<pre>opkg install usb-config-scripts-librarybox</pre></li>

<li>(optional) mesh config

<pre>opkg install piratebox-mesh</pre></li>

<li>extendRoot

<pre>opkg install extendRoot
/etc/init.d/extendRoot init</pre></li>

<li>if, mesh then should be

<pre>opkg install -d ext extendRoot-avahi</pre></li>

<li>LibraryBox core package

<pre>opkg install -d ext extendRoot-librarybox</pre></li>

</ol>	

</div>
</div>
</div>
</div>
