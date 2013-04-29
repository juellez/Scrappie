var htObject = function htObject(hashtag) {
	this.owner_twitter = '';
	this.filter = '';
	this.name = '';
	this.year = '';
	this.location = '';
	this.previous_year = '';
	this.ditty = '';
	this.hashtag = '';
	this.weight = 0;
}
var htService = function htService(key,fname,url) {
	this.lastid = 0;
	this.firstid = 0;
	this.cols = 0;
	this.key = key;
	this.fname = fname;
	this.url = url;
	this.hashtag = '';
	this.count = 0;
	this.page = 0;
	this.maxpages = 0;
}
var htServices = new Array();
htServices['ig'] = new htService('ig','Instagram','http://instagram.com');
htServices['twitter'] = new htService('twitter','Twitter','http://www.twitter.com');
htServices['fb'] = new htService('fb','Facebook','http://facebook.com');
htServices['gplus'] = new htService('gplus','Google+','http://plus.google.com');
htServices['flickr'] = new htService('flickr','Flickr','http://flickr.com');
htServices['youtube'] = new htService('youtube','YouTube','http://youtube.com');
htServices['tumblr'] = new htService('tumblr','Tumblr','http://tumblr.com');
htServices['vimeo'] = new htService('vimeo','Vimeo','http://vimeo.com');

function embedVimeoVideo(id,video){
	log(id); log(video);
	//$("vimeo"+id).html('hey!');
	$("#vimeo"+id).html( unescape(video.html) );
}

function loadAllServices(myNewHashtag){

	if( myNewHashtag !== undefined && myNewHashtag != '' ){
		// clear out the hashtags from the headers
		// $('#ht2').css('visibility','hidden');
		// $('#ht3').css('visibility','hidden');
		// $('#TOgridFROMnav').css('visibility','hidden');
		$('#ditty').css('visibility','hidden');
	    $("#htmAuthors ul").empty();
		$("#container").empty();
		$("#container2").empty();
		$('#ht2').html(myNewHashtag);
		$('#ht3').html(myNewHashtag);
		$('#ht4').attr('href',"http://"+myNewHashtag+".scrappie.us");
		$('#ht4').text("http://"+myNewHashtag+".scrappie.us");
		$('#ht5').attr('href',"http://"+myNewHashtag+".scrappie.us");
		$('#ht5').text("http://"+myNewHashtag+".scrappie.us");
		$('#TOgridFROMnav').html('#'+myNewHashtag);

		// $('#ht2').css('visibility','visible');
		// $('#ht3').css('visibility','visible');
		// $('#TOgridFROMnav').css('visibility','visible');

	    var url = './scrappiefeed.php?s=intro&ht='+myNewHashtag;
	    log('clearing hashtags');
		$.get(url, function(data) {
			pgHashtag = data;
			log(pgHashtag);

			if( typeof pgHashtag.hashtag != undefined ) $('#ditty').html('A little ditty about <strong>#'+myNewHashtag+'</strong> <a href="http://twitter.com/'+pgHashtag.owner_twitter+'">@'+pgHashtag.owner_twitter+'</a>: '+pgHashtag.ditty+' // '+pgHashtag.location);
			else $('#ditty').html('Your event is not on the wanderlist wanderwall yet. Want to add it? Drop me a tweet: <strong class="tweet">@juellez #scrappie needs #'+myNewHashtag+'</strong>');

			$('#ditty').css('visibility','visible');
		});

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

		loadService('vimeo',myNewHashtag,0);
		loadService('tumblr',myNewHashtag,0);
		loadService('twitter',myNewHashtag,0);
		loadService('flickr',myNewHashtag,0);
		loadService('fb',myNewHashtag,0);
		loadService('gplus',myNewHashtag,0);
		loadService('ig',myNewHashtag,0);

		return true;
	}
}

function reloadServices(){
	$("#container").append( "<hr />" );
	$("#container2").append( "<hr />" );
	reloadService('twitter');
	reloadService('flickr');
	reloadService('vimeo');
}

function reloadService(myService){
	// called after initial loads are completed
	myHt = htServices[myService];
	log('reloadService:'+myHt.hashtag);
	if( htServices[myService] != '' ){
		if( htServices[myService].maxpages > 0 && htServices[myService].page < htServices[myService].maxpages ){
			log('reloadServices next pg: '+htServices[myService].hashtag);
			loadService(htServices[myService].key,htServices[myService].hashtag,htServices[myService].page + 1);
		}else if( htServices[myService].lastid > 0 && htServices[myService].count < 5 && htServices[myService].lastid != htServices[myService].firstid ){
			log('reloadServices pg1: '+htServices[myService].hashtag);
			loadService(htServices[myService].key,htServices[myService].hashtag,htServices[myService].lastid);
		}
	}
}

function loadService(myService, myHashtag, id, count){
    var url = './scrappiefeed.php?s='+myService+'&ht='+myHashtag+'&i='+id;
	htServices[myService].hashtag = myHashtag;
	htServices[myService].count++;
    log(url);
	$.get(url, function(data) {
		appendHTMPosts(myService,data);
		// go for it again?
		// reloadService(myService);
		if( $("#morelinks a."+myService).text() ){
			$("#morelinks a."+myService).remove();
		}
		$("#morelinks").append("<a href='#panel-2' onClick=\"reloadSerivce('"+myService+"')\" class='"+myService+'">Load More '+myService+'</a>');
	});	
	//log(htServices);
	return htServices[myService].lastid;
}

function log(thing){
	if( window.console ) console.log(thing);
}

function replaceURLWithHTMLLinks(text) {
    var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
    if( text )
	    return text.replace(exp,"<a href=\"$1\" target=\"_blank2\">$1</a>"); 
	else
		return '';
}

function appendHTMAuthors(myAuthors){
	$.each( myAuthors, function(i,myObj){
	    $("#htmAuthors ul").append('<li><a href="'+myObj.link+'" target="_blank">'+myObj.name+'</a></li>');
	    //log(myObj.name);
	});
}

var duplicateAuthors = []; // holding tank.
function appendHTMPosts(myService,myData){
	var authors = []; // holding tank. 
	var jstorun = []; // holding tank.
	var js ='';
	var colWidth = 1;
	$.each( myData, function(i,myObj){ 

		if( i < 2 ) htServices[myService].firstid = myObj.id;
		htServices[myService].lastid = myObj.id;
		if( myObj.pages ) htServices[myService].maxpages = myObj.pages;
		if( myObj.page ) htServices[myService].page = myObj.page;

    	if( !duplicateAuthors[myObj.owner] ){
	    	var author = new Object(); author.name = myObj.owner; author.link = myObj.owner_url;			    	
	    	authors.push(author);
	    	duplicateAuthors[myObj.owner] = 1;
    	}
		var blockHTML = ''; //<blockquote>'; // holding tank for this line.
		var imageFlag = false;
		// MEDIA COMPONENT
		if( myObj.img && myObj.img.display_url ){
			blockHTML += '<a href="'+myObj.img.link_url+'" target="_htnew"><img src="'+myObj.img.display_url+'" class="htmImg"></a>';
			imageFlag = true;
		}
		else if ( myObj.vid && myObj.vid.embed_url ) {
			if( myObj.vid.embed_provider == 'YouTube' ){
				imageFlag = true;
				blockHTML += '<iframe class="youtube-player" type="text/html" src="'+myObj.vid.embed_url+'" allowfullscreen webkitAllowFullScreen mozallowfullscreen frameborder="0"></iframe>"';
			}
			else if( myObj.vid.embed_provider = 'Vimeo' ){
				// [embed_url] => http://vimeo.com/api/oembed.json?url=http://vimeo.com/35182267&callback=embedVideo
                // [extrainfo_json_url] => http://vimeo.com/api/v2/video/35182267.json
				blockHTML += '<div class="vimeo"><iframe width="100%" class="vimeo-player" type="text/html" src="http://player.vimeo.com/video/'+myObj.vid.id+'" allowfullscreen webkitAllowFullScreen mozallowfullscreen frameborder="0"></iframe><br /><div>';

        		// blockHTML += '<div id="vimeo'+myObj.vid.id+'">VIDEO PLACEHOLDER HERE</div>';
        		// // load the video
	         //    js = document.createElement('script');
	         //    js.setAttribute('type', 'text/javascript');
	         //    js.setAttribute('src', myObj.vid.embed_url+'&callback=embedVideo'+myObj.vid.id);
	         //    jstorun.push(js);
        		// js = document.createElement('script');
        		// js.text = 'function embedVideo'+myObj.vid.id+'(video){ embedVimeoVideo('+myObj.vid.id+', video); }';
	         //    jstorun.push(js);

			}else{
				blockHTML += '<a href="'+myObj.vid.embed_url+'" target="_htnew">Watch on '+myObj.vid.embed_provider+'</a>';
			}
		}
		var textClass = imageFlag ? 'textImg' : 'text';
		// CAPTION
		blockHTML += '<div class="'+textClass+'">';
		// AUTHOR
		if( myObj.owner_url )
			blockHTML += '<p><a class="owner" target="_htnew" href="'+myObj.owner_url+'">'+myObj.owner+'</a></p>';
		else
			blockHTML += '<p>'+myObj.owner+'</p>';
		if( myObj.likes )
			blockHTML += '<p><a class="likes" target="_htnew" href="'+myObj.post_url+'"><span>&hearts;</span>&nbsp;'+myObj.likes+'</a></p>';
		//blockHTML += '<div class="clear">&nbsp;</div>';
		//blockHTML += '</blockquote>';
		blockHTML += '<p>'+replaceURLWithHTMLLinks(myObj.caption)+'</p>';
		blockHTML += '</div>';

		if( typeof htServices[myService].cols != "undefined" ) colWidth = htServices[myService].cols;
		else colWidth = 1;
		var $boxes = $( boxMaker.makeBoxes(blockHTML,myService, imageFlag) );
		//log($boxes);

		if(!!$('#container').isotope) $('#container').isotope( 'insert', $boxes );
		else{
			if( i % 2 ) $("#container").append( $boxes );
			else $("#container2").append( $boxes );
		}
		// any jstorun?
		for (var i=0; i < jstorun.length; i++){
		    document.getElementsByTagName('head').item(0).appendChild( jstorun[i] );			
		    log(jstorun[i]);
		}
	} );
	//$("#container").imagesLoaded( function(){
	//    $("#container").masonry( 'reload' );
	//});
   	// $("#container").masonry( 'reload' );
	appendHTMAuthors(authors);
}

var boxMaker = {};
boxMaker.makeBoxes = function( boxText, styleClass, imageFlag ) {
  //var boxes = [],
  //    count = Math.random()*4;
    var box = document.createElement('div');
	$(boxText).appendTo(box);
    // text = document.createTextNode( boxText );        
    var offset = imageFlag ? 3 : 1;
    if( styleClass == "fb" || styleClass == "gplus" ) offset = 3;
    else if( styleClass == 'twitter' && !imageFlag ) offset = 1;
    offset = Math.ceil( Math.random()*3 ) + offset;
    
    box.className = 'box isotope-item '+styleClass+' c'+ offset; // +' col' +  offset;
    // box.appendChild( text );
    // add box DOM node to array of new elements
  return box;
};
