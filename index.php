<?php
/**
 * @author jewel.mlnarik @juellez
 * @package Scrappie
 * @subpackage Web
 */
require_once('src/config.php');
$hashtag = get_hashtag();
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link type="text/plain" rel="author" href="humans.txt" />

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Scrappie</title>
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/headjs/0.99/head.min.js"></script>
	<script>
		head.js("assets/js/vendor/custom.modernizr.js", "http://code.jquery.com/jquery-2.0.0.min.js", function() {
	   		// all done
	   		//http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js
			//"/js/foundation.min.js"
		  //$(function(){
		  //  $(document).foundation();    
		  //})
		});
		head.js("assets/js/scrappie.js", function() {
	   		// all done
			// head.ready( function() {
			htServices['ig'].cols = 3;
			htServices['twitter'].cols = 1;
			htServices['fb'].cols = 4;
			htServices['gplus'].cols = 4;
			htServices['youtube'].cols = 3;
			htServices['tumblr'].cols = 2;
			htServices['vimeo'].cols = 3;
			var pgHashtag = new htObject('<?php echo $hashtag ?>');

			<?php if($hashtag): foreach($config['services'] as $service): ?>
				loadService('<?php echo $service; ?>', '<?php echo $hashtag; ?>', 0);
			<?php endforeach; ?>
				$('#panel-2').css('display','block');
				$('#panel-2').css('visibility','visible');
				$('#panel-3').css('display','block');
				$('#panel-3').css('visibility','visible');
				$('#TOgridFROMnav').css('display','block');
				$('#TOgridFROMnav').css('visibility','visible');
				$('#TOgridFROMnav2').css('display','block');
				$('#TOgridFROMnav2').css('visibility','visible');
				$('#TOauthorsFROMnav').css('display','block');
				$('#TOauthorsFROMnav').css('visibility','visible');
				$('#ht2').html('<?php echo $hashtag; ?>');
				$('#ht3').html('<?php echo $hashtag; ?>');
				$('#ht4').attr('href',"http://"+'<?php echo $hashtag; ?>'+".scrappie.us");
				$('#ht4').text("http://"+'<?php echo $hashtag; ?>'+".scrappie.us");
				$('#ht5').attr('href',"http://"+'<?php echo $hashtag; ?>'+".scrappie.us");
				$('#ht5').text("http://"+'<?php echo $hashtag; ?>'+".scrappie.us");

			    $('html,body').animate({
			        scrollTop: $("#panel-2").offset().top},
		        'slow');
			<?php endif; ?>

			  $('#TOwallFROMgrid').click(function(){ 
				$('#panel-2').css('display','hidden');
				$('#panel-2').css('visibility','hidden');
				$('#panel-3').css('display','hidden');
				$('#panel-3').css('visibility','hidden');
			  return true; });
			  $('#TOgridFROMnav').click(function(){ 
				$('#panel-2').css('display','block');
				$('#panel-2').css('visibility','visible');
				$('#panel-3').css('display','block');
				$('#panel-3').css('visibility','visible');
			  return true; });
			  $('#TOgridFROMnav2').click(function(){ 
				$('#panel-2').css('display','block');
				$('#panel-2').css('visibility','visible');
				$('#panel-3').css('display','block');
				$('#panel-3').css('visibility','visible');
			  return true; });
			  $('#TOauthorsFROMnav').click(function(){ 
				$('#panel-2').css('display','block');
				$('#panel-2').css('visibility','visible');
				$('#panel-3').css('display','block');
				$('#panel-3').css('visibility','visible');
			  return true; });

			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-7919133-3', 'scrappie.us');
			  ga('send', 'pageview');
		});

		// for mobile
		function hideAddressBar()
		{
		  if(!window.location.hash)
		  {
		      if(document.height < window.outerHeight)
		          document.body.style.height = (window.outerHeight + 50) + 'px';
		      setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
		  }
		}
		window.addEventListener("load", function(){ if(!window.pageYOffset){ hideAddressBar(); } } );
		window.addEventListener("orientationchange", hideAddressBar );
	</script>
</head>
<body id="page" class="paneled">
<div class="wrapper">

<!-- TOP SECTION: NAV -->
<div class="contain-to-grid fixed">	
	<nav id="menu" class="nav">
	<ul class="title-area">
		<li class="name"><h1><a href="#panel-1">S<span>crappie</span></a></h1></li>
	</ul><ul class="right">
	    <li class="spacer"><a href="#panel-1"><img src="assets/holodark_sun.png" alt="sun" title="explore tags: wanderlist wanderwall" /></a></li>
	    <li><a href="#panel-4"><img src="assets/holodark_plant.png" alt="plant" title="discover & inspire" /></a></li>

		<?php echo "<li class='hashtag'><a id=\"TOgridFROMnav\" href=\"#panel-2\">#{$hashtag}</a></li>"; ?>
	    <li><a id="TOgridFROMnav2" href="#panel-2"><img src="assets/holodark_grid.png" alt="grid" title="moments" /></a></li>
	    <li><a id="TOauthorsFROMnav" href="#panel-3"><img src="assets/holodark_people.png" alt="people" title="conversationalists" /></a></li>

	</ul></nav>
</div>

<!-- MAIN SECTION: PANELS -->
<div class="section">
<section role="main" id="main">

	<!-- PANEL 1 -->
	<article id="panel-1" class="page-panel"><div class="row">
		<div class="large-12 columns panel-top">
			<br><br>
			<h1>scrappie</h1>
		  	<h2 class="intro">OUR world, as shared moments in time, documented publicly by we, the people, on Twitter, Instagram, Flickr, Vimeo, Tumblr, Facebook, Google+, &amp; YouTube</h2>
			<form class="custom" action="./#panel-2" method="get">
			  <div class="row">
			  	<!--
			    <div class="large-4 columns">
			      <label for="checkbox">
					<?php $i = 1; foreach($config['services'] as $service): ?>
				      	<input name="<?php echo $service ?>" type="checkbox" id="s<?php echo $i ?>" style="display:none;"><span 
				      	class="custom checkbox"></span> <?php echo $service ?></label>
				    <?php endforeach; ?>
				</div>
				-->
			    <div class="large-12 columns">
				      <div class="row collapse">
				        <div class="small-7 columns">
					    	<input type="text" name="ht" placeholder="#hashtag" />
				        </div>
				        <div class="small-5 columns">
				          <input type="button" class="button" value="start scrappin!" onClick="loadAllServices(this.form.text.value)" />
				        </div>
				      </div>
			    </div>
			  </div>
			</form>
			<h3>wanderlist wanderwall</h3>
			<p class="note">Want to add your event to the wanderlist wanderwall? Drop this into your twitter: <b>@juellez #scrappie needs #yourhashtag</b></p>
			<?php 
				$events = $events2 = $events3 = array();
				$str = '';
				foreach( get_events() as $ht=>$event ){
					$class = empty($event['weight']) ? '' : 'featured'.$event['weight'];
					$str = '<a class="'.$class.'" href="#panel-2" onClick="loadAllServices(\''.$ht.'\')">#'.$ht.'</a> ';
					switch($event['weight']){
						case 5:
						case 4:
						case 3:
							$str .= '<br />'.$event['name'].' '.$event['year'];
							$events[] = $str;
						break;
						case 2:
						case 1:
							$str .= ': '.$event['name'].' '.$event['year'];
							$events2[] = $str;
						break;
						default:
							$events3[] = $str;
						break;
					}
				}
			?>
			<ul class="eventslist"><li><?php echo join('</li><li>',$events) ?></li></ul>
			<ul class="eventslist small"><li><?php echo join('</li><li>',$events2) ?></li></ul>
			<ul class="eventslist small"><li><?php echo join('</li><li>',$events3) ?></li></ul>
	  </div>
	</div></article><!-- /#panel-1 -->

	<!-- PANEL 4 -->
	<article id="panel-4" class="page-panel"><div class="row">
		<div class="large-12 columns panel-top">
			<h2>Discover</h2>
			<p>Couldn't make it to your favorite event? Live vicariously through those sharing their experiences.</p>
			<p>Getting prepped for a conference? Check out what happened last year and prepare for an additional dose of awesomeness ... as you'll be going this year!</p>
			<p>Join the conversations that inspire you, from anywhere.</p>
			<p>Feeling shy? Follow up later. Find the folks you wish you could connect with again.</p>
			<p>These are a few of the reasons I'm sharing scrappie. What do you wish you could do? 
			Like a good plant, I respond well to drink, food and sunshine. Tweets work well, too.</p>

				<a name="disclaimer"></a><br />
				<h3 class="disclaimer">disclaimer + terms</h3>
				<p class="disclaimer">This is a side project inspired by a session at <a href="http://etherpad.opensourcebridge.org/bcp5-t65">Barcamp Portland 7</a>. 
				Little cross browser testing has been done and while I don't fancy myself a web developer,
				I've had had fun diving into to what's become of JS and CSS since 2000. Use at your own risk
				and if you like what you see and want to make it better - contribute!</p>
				<p class="disclaimer">While the use of Scrappie is not monitored to individuals, abusive use will not be tolerated.</p>
				<p class="disclaimer">Content is in no way curated or filtered by me and is not a reflection of my personal opinions or beliefs.
					All content from various sources is publicly accessible (as set by the individuals posting
					on Twitter, Instagram, Flickr, Vimeo, Tumblr, Facebook, Google+, and YouTube) and is not stored on Scrappie.</p>

		</div>
	</div></article><!-- /#panel-4 -->


	<a name="v"></a>
	<!-- PANEL 2 -->
	<article id="panel-2" class="page-panel"><div class="row">
		<div id="postGrid" class="panel-top">
			<h2 id="moments" style="margin-bottom: 0">#<span id="ht2"><?php echo $hashtag ?></span> moments</h2>
			<p id="ditty" class="ditty">
			<?php if( !empty($config['events'][$hashtag]) ): ?>
			A little ditty about <strong><?php echo $config['events'][$hashtag]['name'] ?></strong>
				<a href="http://twitter.com/<?php echo $config['events'][$hashtag]['owner_twitter'] ?>">@<?php echo $config['events'][$hashtag]['owner_twitter'] ?></a>: <?php echo $config['events'][$hashtag]['ditty'] ?>  
				// <strong><?php echo $config['events'][$hashtag]['location'] ?></strong></p>
				<p id="share">Your Scrappie's Address: <strong><a id="ht5" href="#"></a></strong>
			<?php else: ?>
			Your event is not on the wanderlist wanderwall yet. Want to add it?
			Drop me a tweet: <strong class="tweet">@juellez #scrappie needs #<?php echo $hashtag ?></strong>
			<?php endif; ?></p>
			<div id="containerWrapper">
			<div id="container" class="transitions-enabled clickable">
			</div><!--/container --> 
			<div id="container2" class="transitions-enabled clickable">
			</div><!--/container -->  
			</div>
			<div style="clear: both;">&nbsp;</div>
            <div id="morelinks">
                    <a class="button" href="javascript:void(0)" title="load more moments"  onclick="reloadServices()">more!</a>
            </div>
			<div id="moretext"><p>Like what you see? Share the Scrappie!
                        <strong><a id="ht4" href="#"></a> #scrappie</strong></p>
                        <!-- <p><a href="#panel-1" title="check out another event" id="TOwallFROMgrid">check out another event</a></p> --></div>
		</div>
	</div></article><!-- /#panel-2 -->

	<!-- PANEL 3 -->
	<article id="panel-3" class="page-panel"><div class="row">
		<div id="authorGrid" class="large-12 columns panel-top">
			<h2>#<span id="ht3"><?php echo $hashtag ?></span> social butterflies</h2>
			<div id="htmAuthors" class="large-12 columns">
				<ul></ul>
			</div>
		</div>
	</div></article><!-- /#panel-3 -->

</section></div>
</div>

<!-- FOOTER -->
<div id="footer" class="contain-to-grid clearfix">
	<p><a href="#disclaimer">disclaimer, terms &amp; privacy</a> 
		| <a href="https://github.com/juellez/EventScrapBook">grab code</a> 
		| <span class="poweredby"><a href="http://temboo.com">powered by Temboo</a>, <a href="http://twitter.com">Twitter</a>, <a href="http://instagram.com">Ig</a>, <a href="http://plus.google.com">G+</a>, <a href="http://flickr.com">Flickr</a>, <a href="http://facebook.com">Fb</a>, <a href="http://tumblr.com">Tumblr</a>, <a href="http://youtube.com">Youtube</a></span></p>
</div>

</body>
</html>