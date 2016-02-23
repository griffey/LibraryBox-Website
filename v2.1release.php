<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | v2.1 Release</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jason Griffey">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--[if lt IE 8]>
	  <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <![endif]-->
    <link href="css/base.css" rel="stylesheet">
	<link href="css/orange.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/ico/favicon.ico">
  </head>

  <body>

	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner tf-osans">
        <div class="container">
          <a class="btn btn-primary btn-dropnav" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
         <a class="brand" href="index.php"><img height="30px" src="http://librarybox.us/img/LibraryBox_25px_white.png">&nbsp;The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>

    <div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>We are very excited to announce that LibraryBox v2.1 is now available!</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">
	    <div class="row">
		  <div class="span12">

<h4>Best LibraryBox Ever</h4>
<p>After a year of development and bug squashing, LibraryBox v2.1 is finally ready for downloading and use around the world! The v2.1 release of the LibraryBox code brings with it lots of user experience improvements, as well as technical advancements that make the entire project even faster and easier to use. A short list of the most important changes can be <a href="./Aboutv2.1.php">found on our About v2.1 page</a>.
</p>
	<hr class="dashed">
  <h4>The LibraryBox Store</h4>
<p>Now that the v2.1 is official, the v2.0 will remain available for download, but if you are <a href="http://librarybox.myshopify.com/collections/all">purchasing a LibraryBox directly from us</a>, all sales will be v2.1 only and will feature the MR3040 as the router, with a 32GB USB drive...for the same price we were previously offering the MR3040 with a 16GB USB. We are very excited about the potential that the v2.1 offers.</p>
	<hr class="dashed">
<h4>Reporting Problems</h4>
<p style="font-weight: bold;">We believe that we have identified the bugs and issues for this release, but as always, there may be issues with your particular setup. Please test any upgrade on non-critical harware if possible before upgrading existing production LibraryBoxen.</p>
<p> Any issues with the v2.1 can be reported directly to our <a href="https://github.com/LibraryBox-Dev/LibraryBox-core/issues">Github repository</a>.</p>
	<hr class="dashed">
  <h4>Our Favorite People</h4>
<p>The v2.1 release of LibraryBox has been partially funded by a <a href="http://www.knightfoundation.org/grants/201448717/">Prototype Grant from the John S. and James L. Knight Foundation</a>. The LibraryBox Project is very thankful to the Knight Foundation for their support. We would also like the thank the <a href="https://cyber.law.harvard.edu">Berkman Center for Internet & Society at Harvard University</a> for their support and resources during the last few months of the v2.1 development.</p>

  <p>The LibraryBox Project is also supported by purchases of the product, and we'd like to thank those that have chosen to buy a LibraryBox from us directly. If you would like to support the LibraryBox Project in its future development, please <a href="./contact.php">contact us</a>.</p>

</div>
</div>
</div>
</div>
  <?php include('footer.php');?>
<div id="copywrite">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <p>Website Content - Creative Commons Licensed NC-BY Jason Griffey 2012, where not otherwise licensed.<br />Software Licensed under GPLv2, see http://www.gnu.org/licenses/gpl-2.0.html <span id="totop" class="pull-right">Back to Top <i class="icon-arrow-up"></i></span></p>
		  </div>
		</div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
      $("#totop").click(function () {
		$("body, html").animate({
		  scrollTop: 0
	    }, 300);
		return false;
	  });
	});
	</script>
    <script>
    $('#myCollapsible').collapse({
  toggle: false
})
    </script>

    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34754517-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </body>
</html>
