---
layout: default
---
	<div id="landing">
	  <div class="container">
	    <div class="row">
		  <div class="span5">
		    <h1>LibraryBox v2.1: <br />Portable Private<br /> Digital Distribution</h1><br />
			<p>LibraryBox is an open source, portable digital file distribution tool based on inexpensive hardware that enables delivery of educational, healthcare, and other vital information to individuals off the grid.</p>
		    <p><a href="./buildingv2.1.php" class="btn btn-primary btn-action">Build your own!</a>&nbsp;&nbsp;
			<a href="http://librarybox.myshopify.com/collections/all" class="btn btn-custom btn-action">Buy a LibraryBox v2.1!</a></p>
      <a href="./upgrading2.1.php" class="btn btn-primary btn-action">Upgrade your existing LibraryBox to v2.1!</a>
		  </div>
		  <div class="span7">
		    <div class="js-video">
			<iframe src="//player.vimeo.com/video/87327904?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
			<h2><a href="./v2.1release.php">LibraryBox v2.1 Now Available!</a></h2>
		    <hr class="dashed">
		  </div>
		</div>
	    <div class="row">
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-book"></i>
		    </div>
			<h2><a href="./about.php">The LibraryBox Project</a></h2>
			<p>LibraryBox is a fork of <a href="http://wiki.daviddarts.com/PirateBox_DIY_OpenWrt#Tutorial_A:_TP-Link_MR3020">PirateBox for the TP-Link MR 3020</a>, customized for educational, library, and other needs. LibraryBox was conceived and created by <a href="http://jasongriffey.net">Jason Griffey</a>.</p>
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-download-alt"></i>
		    </div>
			<a href="./use_cases.php"><h2>Why LibraryBox?</h2></a>
			<p>LibraryBox is a digital distribution tool for education, libraries, healthcare, and emergency response. Anywhere there is a lack of open internet access, LibraryBox can bridge the gap of information delivery.</p>
		  </div>
		  <div class="span4 bouncy">
		    <div class="icon_wrapper">
		      <i class="icon-road"></i>
		    </div>
			<h2><a href="./Aboutv2.1.php">About v2.1</a></h2>
			<p>Funded by <a href="http://www.knightfoundation.org/grants/201448717/">a Knight Foundation Prototype Grant</a>, the v2.1 of LibraryBox makes it better in nearly every way. Take a look at the improvements and learn more about the v2.1.</p>
		  </div>
		</div>
		<hr class="dashed">
	    <div class="row">
		  <div class="span4">
			<a class="thumbnail" href="./about.php">
			  <img alt="image" src="./img/librarybox_cropped_printed2.png">
			</a>
			<!--<h2>Image 1</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>-->
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="./use_cases.php">
			  <img alt="image" src="./img/LibraryBox_ledge_cropped_200.png">
			</a>
			<!--<<h2>Image 2</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>-->
		  </div>
		  <div class="span4">
			<a class="thumbnail" href="./v2.php">
			  <img alt="image" src="./img/librarybox_bridge.png">
			</a>
			<!--<<h2>Image 3</h2>
			<p>Optional subtext to help better explain the image above can go here.</p>-->
		  </div>
		</div>
	  </div>
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
