---
layout: default
title: LibraryBox | Scripts
---
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>Installation Scripts</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
	
<p>For LibraryBox v1.5, I've put together an install script (librarybox.sh) that should make the building of your own LibraryBox much, much easier. If all you are interested in is making a LibraryBox, you can stop reading, and go over to the <a href="./MR3020.php">Installation instructions</a>. But if you want to see what's going on under the hood, here you go.</p>

<p>There are 8 files that I've customized in order to convert a PirateBox to a LibraryBox, and each of them has to be moved to the appropriate directory on the MR3020 in order for the UI customizations to work. For a LibraryBox with a chatbox, the files are:</p>
<p>
<i>droopy</i> <b>moved to</b> <i>/opt/piratebox/bin/</i> <br />
<i>hosts</i> <b>moved to</b> <i>/opt/piratebox/conf/</i> <br />
<i>index.html</i> <b>moved to</b> <i>/opt/piratebox/chat/</i> <br />
<i>piratebox-logo-small.png</i> <b>moved to</b> <i>/opt/piratebox/src/</i> <br />
<i>piratebox-logo.png</i> <b>moved to</b> <i>/opt/piratebox/src/</i> <br />
<i>piratebox.conf</i> <b>moved to</b> <i>/opt/piratebox/conf/</i> <br />
<i>READ.ME.htm</i> <b>moved to</b> <i>/opt/piratebox/src/</i> <b>and renamed to </b><i>.READ.ME.htm</i> <br />
</p>

<p>One other file, <i>/etc/config/wireless</i>, has to have line 19 edited to correct the SSID. There is now a python script included in the librarybox.zip file on github that does this editing for you, and it is also executed by the librarybox.sh script.
</p>
<p>
If you do NOT want the Chatbox to appear, you can instead:<br />

<i>piratebox.nochat.conf</i> <b>moved to</b> <i>/opt/piratebox/conf/</i> <b>and renamed to</b> <i>piratebox.conf</i>
</p>
<p>
Seriously, if you just want a LibraryBox, run the librarybox.sh script. It's easier, and there's much less risk of bricking your MR3020.
</p>

</div>
</div>
</div>
</div>
