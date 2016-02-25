---
layout: default
---
	<div id="landing">
	  <div class="container">  
	    <div class="row">
		  <div class="span5">
		    <h1>LibraryBox: <br />Portable Private<br /> Digital Distribution</h1><br />	
			<p>LibraryBox is an open source, portable digital file distribution tool based on inexpensive hardware that enables delivery of educational, healthcare, and other vital information to individuals off the grid.</p>
		    <p><a href="./MR3020.php" class="btn btn-primary btn-action">Build your own!</a>&nbsp;&nbsp;
			<a href="http://librarybox.myshopify.com/collections/all" class="btn btn-custom btn-action">Buy a LibraryBox!</a></p>  
		  </div>
		  <div class="span7">
		    <div class="js-video">
			  <iframe src="http://player.vimeo.com/video/52241825?badge=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
		    </div>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content" class="txt-middle">
	  <div class="container">
	    <div class="row">
		  <!--<div class="span12">
			<h1><a href="http://www.kickstarter.com/projects/griffey/librarybox-20">Help fund LibraryBox on <img src="./img/kickstarter50.png" height="25px"></a></h1> 
		    <hr class="dashed">				
		  </div> -->
		  <div class="span12">
			<h2><a href="http://librarybox.us/ios7.php">Trouble with iOS7 on LibraryBox? Fix available!</a></h2>
		    <hr class="dashed">				
		  </div>  
		</div>  
	    <div class="row">
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-book"></i>
		    </div>
			<h2><a href="./about.php">About LibraryBox</a></h2>
			<p>LibraryBox is a fork of <a href="http://wiki.daviddarts.com/PirateBox_DIY_OpenWrt#Tutorial_A:_TP-Link_MR3020">PirateBox for the TP-Link MR 3020</a>, customized for educational, library, and other needs. LibraryBox was conceived and created by <a href="http://jasongriffey.net">Jason Griffey</a>.</p>	
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-download-alt"></i>
		    </div>
			<a href="./use_cases.php"><h2>Use Cases</h2></a>
			<p>LibraryBox is a digital distribution tool for education, libraries, healthcare, and emergency response. Anywhere there is a lack of open internet access, LibraryBox can bridge the gap of information delivery.</p>	
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-road"></i>
		    </div>
			<h2><a href="./future.php">Future Roadmap</a></h2>
			<p>There are many development possibilities for LibraryBox. These include branching out to other hardware, mesh network updating, anonymous usage statistics, improved user interface, and a continued drive to make the installation process as easy as possible. </p>	
		  </div>		  
		</div>
		<hr class="dashed">				
	    <div class="row">
		  <div class="span4">
			<a class="thumbnail" href="./about.php">
			  <img alt="image" src="./img/hero.jpg">
			</a>		
			<!--<h2>Image 1</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>-->
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="./use_cases.php">
			  <img alt="image" src="./img/classroom1.jpg">
			</a>
			<!--<<h2>Image 2</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>-->
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="./future.php">
			  <img alt="image" src="./img/solar.jpg">
			</a>
			<!--<<h2>Image 3</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>-->
		  </div>		  
		</div>		
	  </div>
	</div>

	<div id="footer">
<!--	  <div class="container">
	    <div class="row">
		  <div class="span3">
			<h3>Quick Links</h3>
			<ul>
			  <li><a href="#">Home</a></li>
			  <li><a href="#">About Us</a></li>
			  <li><a href="#">Features</a></li>
			  <li><a href="#">Pricing</a></li>
			</ul>			
		  </div>
		  <div class="span3">		
			<h3>Company</h3>
			<ul>
			  <li><a href="#">Privacy Policy</a></li>
			  <li><a href="#">Terms of Use</a></li>
			  <li><a href="#">FAQ</a></li>
			</ul>	
		  </div>
		  <div class="span3">
			<h3>We're Social</h3>
			<ul>
			  <li><a href="#">Facebook</a></li>
			  <li><a href="#">Twitter</a></li>
			  <li><a href="#">Google &#43;</a></li>
			</ul>		  
		  </div>
		  <div class="span3">
			<h3>Subscribe</h3>
			<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>			
		    <form>
              <input class="span3" type="text" placeholder="Your Email" name="subscribe">
			  <button class="btn btn-primary">Subscribe</button>
			</form>
		  </div>		  
		</div>	  
      </div>	  -->
    </div>

{% capture page.footer %}

  {% include footer.html %}

  <script src="js/jquery.fitvids.js"></script>
  <script>

    jQuery(function ($) {
      $('.js-video').fitVids();
    });

  </script>

{% endcapture %}
