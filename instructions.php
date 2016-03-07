---
layout: default
title: LibraryBox | Instructions for Purchased LibraryBoxen
---
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>So now you own a LibraryBox...</h1>
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
Basic Use</p>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse">
      <div class="accordion-inner">
      <h3>LibraryBox Basics</h3>
<p>To use your LibraryBox, you can power it up by simply plugging it into any USB power source. It will take a minute or so to boot up, and will project a wifi signal called "LibraryBox - Free Content!". If you connect to that SSID, and then launch a browser and try to visit any website, the LibraryBox will show you its webpage via a redirect. You can then chat, download any of the media on the LibraryBox, and view the statistics for your LibraryBox.</p>
<p>If you would like to add your own content to be shared, you can power down your LibraryBox, remove the USB drive, and insert it into any computer. The content to be shared is in the folder /LibraryBox/Shared, and you can see that there are folders for a variety of types of media. You can add media you'd like to share to those folders, or just directly in the /Shared folder where it will be available if someone clicks "all content" in the menu of the Librarybox page. </p>
<p>The v2.0 code adds a ton of features to LibraryBox, one of which is statistics. If you'd like to rest the statistics on your LibraryBox, follow these directions:</p>
<ol>
<li>Power down your LibraryBox and plug the USB drive from it into any computer</li>
<li>In the LibraryBox folder on the USB drive there are two files:</li>
<pre>dl_statistics.sqlite 
vc_statistics.sqlite</pre>
<li>Simply delete these files, and your stats will be reset, new files will be created when you reboot!</li>
</ol>
<h3>Next Steps</h3>
<p>While your LibraryBox will work fine without setting a password, I highly recommend that you go through the next setup in order to secure your LibraryBox against unauthorized changes by users.</p>

      </div>
    </div>
  </div>
  </div>

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
       <p style="font-size: 3em; line-height: 1.2em;">
Secure Your LibraryBox</p>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
<p>As shipped, your LibraryBox doesn't have a password to protect it from someone who knows the IP address (which is anyone that connects to it) from simply logging in and changing things. In order to secure your LibraryBox, you need to set a password.</p>
<ol>
<li>Plug your LibraryBox into power and let it boot up.</li>

<li>Connect to the LibraryBox SSID with your computer, and telnet into it:</li><br />
<pre>
telnet 192.168.1.1
</pre>
<li>Run the LibraryBox advance setup script by typing:
<br />
<pre>
box_init_setup.sh
</pre>
Then hit Enter. That will launch a script that has many Advanced options listed.
</li>

<li>Choose 1 for Setting Password and Enable SSH.</li>
                                                                                     
<li>Choose a strong password and enter it.</li>

<li>You've now got a secure LibraryBox!</li>
<li>At any point after you set the password, if you would like to login to your LibraryBox via the command line, you will log into the LibraryBox via SSH like this:
<pre>
ssh root@192.168.1.1
</pre>

</li>

</ol>
      </div>
    </div>
  </div>
  </div>

 

 <div class="accordion" id="accordion4">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">
      <p style="font-size: 3em; line-height: 1.2em;">Optional: FTP, Sync, & Advanced Setup</p>
      </a>
    </div>
    <div id="collapseFour" class="accordion-body collapse">
      <div class="accordion-inner">

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

      </div>
    </div>
  </div>
  </div>



<h2><a href="./upgrading.php">Upgrading your LibraryBox software</a></h2>
<br />
<h2><a href="./problems2.php">Have a problem along the way?</a></h2>


</div>
</div>
</div>
</div>
