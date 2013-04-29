<?php
/**
 * @author jewel.mlnarik @juellez
 * @package Scrappie
 * @subpackage Source
 */

function get_hashtag(){
	global $config;
	$blacklist = array( 'sex','fuck','shit','slut','cunt','rape','$h1t','porn','porno' );
    $bits = explode('.',$_SERVER['HTTP_HOST']);
    $hashtag = '';
    $ht = array_shift($bits);
    if( $ht != 'innovatepdx' && $ht != 'scrappie' && $ht != 'scrappy' ){
        // we have one...
        $hashtag = $ht;
    }
    if( !$hashtag ){
        // look at url?
        $hashtag = !empty($_GET['ht']) ? $_GET['ht'] : false;
    }
    if( $hashtag ){
	    foreach($blacklist as $w){
	    	if( stristr($hashtag,$w) ) $hashtag = false;
	    }
    }
    $illegals = array('#','$','!',);
    $hashtag = str_replace($illegals,'',$hashtag);
    return $hashtag;
}

/*
    Right now this is pulling in from the config file,
    though thinking of pulling this in from a more dynamic
    source in the future. E.g. Eventbrite.
    http://developer.eventbrite.com/doc/events/event_search/
*/
function get_events(){
    global $config;
    return $config['events'];
}
