<?php
/**
 * LICENSE: Creative Commons 
 * Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0)
 * http://creativecommons.org/licenses/by-nc-sa/3.0/
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author jewel.mlnarik @juellez
 * @package EventScrapbook
 */
define('EVENTHASHTAG','bcp7');
$hashtag = !empty($_GET['hashtag']) ? $_GET['hashtag'] : EVENTHASHTAG;
?>
<html>
<head>
	<script type="text/javascript">
	    document.write("\<script src='//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' type='text/javascript'>\<\/script>");
	</script>
	<link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="./styles.css" />

	<script type="text/javascript">
		function replaceURLWithHTMLLinks(text) {
		    var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
		    if( text )
			    return text.replace(exp,"<a href='$1'>$1</a>"); 
			else
				return '';
		}

		$.get('./hashtagmerge.php?s=ig&hashtag=<?php echo $hashtag; ?>', function(data) {
			appendHTMPosts('ig',data);
			$("li.ig").hover(
			  function () {
			  	$("#highlight").html( this.innerHTML );
			  	$("#highlight").addClass('show');
			  },
			  function () {
			  	$("#highlight").html('');
			  	$("#highlight").removeClass('show');
			  }
			); 
		});
		$.get('./hashtagmerge.php?s=g&hashtag=<?php echo $hashtag; ?>', function(data) {
			appendHTMPosts('gplus',data);
			$("li.gplus").hover(
			  function () {
			  	$("#highlight").html( this.innerHTML );
			  	$("#highlight").addClass('show');
			  },
			  function () {
			  	$("#highlight").html('');
			  	$("#highlight").removeClass('show');
			  }
			); 
		});
		$.get('./hashtagmerge.php?s=t&hashtag=<?php echo $hashtag; ?>', function(data) {
			appendHTMPosts('twitter',data);
			$("li.twitter").hover(
			  function () {
			  	$("#highlight").html( this.innerHTML );
			  	$("#highlight").addClass('show');
			  },
			  function () {
			  	$("#highlight").html('');
			  	$("#highlight").removeClass('show');
			  }
			); 
		});
		$.get('./hashtagmerge.php?s=flickr&hashtag=<?php echo $hashtag; ?>', function(data) {
			appendHTMPosts('flickr',data);
			$("li.flickr").hover(
			  function () {
			  	$("#highlight").html( this.innerHTML );
			  	$("#highlight").addClass('show');
			  },
			  function () {
			  	$("#highlight").html('');
			  	$("#highlight").removeClass('show');
			  }
			); 
		});

		function appendHTMAuthors(myAuthors){
			$.each( myAuthors, function(i,myObj){
			    $("ul#htmAuthors").append('<li><a href="'+myObj.link+'">'+myObj.name+'</a></li>');
			});
		}

		var duplicateAuthors = []; // holding tank.
		function appendHTMPosts(myService,myData){
			var authors = []; // holding tank. 
			console.log(myData);
			$.each( myData, function(i,myObj){ 
			    $("ul#htmPosts").fadeIn('slow', function () { 
			    	if( !duplicateAuthors[myObj.owner] ){
				    	var author = new Object(); author.name = myObj.owner; author.link = myObj.owner_url;			    	
				    	authors.push(author);
				    	duplicateAuthors[myObj.owner] = 1;
			    	}
					var blockHTML = '<blockquote>'; // holding tank for this line.
					// MEDIA COMPONENT
					if( myObj.img && myObj.img.display_url )
						blockHTML += '<img src="'+myObj.img.display_url+'" class="htmImg">';
					else if ( myObj.vid && myObj.vid.embed_url ) {
						if( myObj.vid.embed_provider == 'YouTube' || myObj.vid.embed_provider == 'Vimeo' )
							blockHTML += '<iframe class="youtube-player" type="text/html" src="'+myObj.vid.embed_url+'" allowfullscreen webkitAllowFullScreen mozallowfullscreen frameborder="0"></iframe>"';
						else
							blockHTML += '<a href="'+myObj.vid.embed_url+'">Watch on '+myObj.vid.embed_provider+'</a>';
					}
					// CAPTION
					blockHTML += replaceURLWithHTMLLinks(myObj.caption);
					if( myObj.likes )
						blockHTML += '&nbsp;&nbsp;/&nbsp;&nbsp;<span>&hearts;</span>&nbsp;<a class="likes" href="'+myObj.post_url+'">'+myObj.likes+'</a>';
					blockHTML += '<div class="clear">&nbsp;</div>';
					blockHTML += '</blockquote>';
					// AUTHOR
					if( myObj.owner_url )
						blockHTML += '<p><a href="'+myObj.owner_url+'">'+myObj.owner+'</a></p>';
					else
						blockHTML += '<p>'+myObj.owner+'</p>';

				   	$("ul#htmPosts").append('<li class="'+myService+' fancybox">'+blockHTML+'</li>');
			    });
			} );
			appendHTMAuthors(authors);
		}
	</script>
</head>
<body>
<h1>Welcome to everything "#<?php echo $hashtag; ?>"</h1>
<h2 class="intro">as documented publicly by we, the people, on Twitter, Flickr, Instagram, Google+, Facebook</h2>

<div id="highlight"></div>

<ul id="htmAuthors">Social Butterflies	
</ul>
<ul id="htmPosts">		
</ul>

<div id="footer">
	<a href="https://github.com/juellez/EventScrapBook">grab code</a> | <a href="http://twitter.com/juellez">say hi</a> | <a href="http://temboo.com">powered by temboo</a>, <a href="http://twitter.com">twitter</a>, <a href="http://instagram.com">instagram</a>, <a href="http://plus.google.com">google+</a>, <a href="http://flickr.com">flickr</a>
</div>

</body>
</html>