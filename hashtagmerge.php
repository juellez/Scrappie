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
 * @package HashTagMerge
 */
require_once('./config.php');
require_once('./php-sdk/src/temboo.php');

$session = new Temboo_Session(ACCOUNT_NAME, API_KEY_NAME, API_KEY_VALUE);
$hashtag = !empty($_GET['hashtag']) ? $_GET['hashtag'] : EVENTHASHTAG;

// flickr
if( $_GET['s'] == 'flickr'){
    require './php-sdk/src/library/temboo.flickr.php';
    $hashtag = !empty($_GET['hashtag']) ? $_GET['hashtag'] : EVENTHASHTAG;
    $search = new Flickr_Photos_Search($session);
    $searchInputs = $search->newInputs();
    $searchInputs->setCredential(FLICKR_CREDENTIAL);
    $searchInputs->setText("#".$hashtag)->setResponseFormat("json");
    $searchResults = $search->execute($searchInputs)->getResults();
    $searchResultsJSON = json_decode($searchResults->getResponse());
    $photos = $searchResultsJSON->photos->photo;
    $list = array();
    foreach( $photos as $photo )
    {
        $row = new stdClass;
        $row->img = new stdClass;
        $row->img->display_url = $photo->url_m;
        $row->img->width = $photo->width_m;
        $row->img->height = $photo->height_m;
        $row->caption = $photo->title;
        $row->owner = $photo->owner;
        $row->likes = false; // we don't get this info atm
        $row->owner_url = "http://www.flickr.com/photos/" . $photo->owner;
        $row->post_url = $row->img->link_url = $row->owner_url."/".$photo->id;
        $row->service = 'flickr';
        $list[] = $row;
    }
    jmeDisplay($list);
    jmeCache($list,$hashtag); 
}

// instagram - ig
if( $_GET['s'] == 'ig'){
    require './php-sdk/src/library/temboo.instagram.php';
    $recentlyTaggedMedia = new Instagram_RecentlyTaggedMedia($session);
    $recentlyTaggedMediaInputs = $recentlyTaggedMedia->newInputs();
    $recentlyTaggedMediaInputs->setCredential(IG_CREDENTIAL);
    $recentlyTaggedMediaInputs->setTagName($hashtag);
    $recentlyTaggedMediaResults = $recentlyTaggedMedia->execute($recentlyTaggedMediaInputs)->getResults();
    $searchResultsJSON = json_decode($recentlyTaggedMediaResults->getResponse());
    $objects = $searchResultsJSON->data;
    $list = array();
    foreach( $objects as $object )
    {
        $row = new stdClass;
        $row->img = new stdClass;
        $row->img->display_url = $object->images->low_resolution->url;
        $row->post_url = $row->img->link_url = $object->link;
        $row->img->width = $object->images->low_resolution->width;
        $row->img->height = $object->images->low_resolution->height;
        $row->caption = @$object->caption->text;
        $row->likes = $object->likes->count . "&nbsp;likes";
        $row->owner = $object->user->username;
        $row->owner_url = "http://instagram.com/".$object->user->username;
        $row->service = 'ig';
        $list[] = $row;
    }
    jmeDisplay($list);
    jmeCache($list,$hashtag);  
}

// google plus - g
if( $_GET['s'] == 'g'){
    require './php-sdk/src/library/temboo.google.php';
    $search = new Google_Plus_Activities_Search($session);
    $searchInputs = $search->newInputs();
    $searchInputs->setCredential(GOOGLE_PLUS_CREDENTIAL);
    $searchInputs->setQuery("#".$hashtag);
    $searchResults = $search->execute($searchInputs)->getResults();
    $searchResultsJSON = json_decode($searchResults->getResponse());
    $objects = $searchResultsJSON->items;
    $list = array();
    foreach( $objects as $object )
    {
        $row = new stdClass;
        $row->caption = $object->object->content;
        if( !empty($object->object->attachments[0]) ){
            switch( $object->object->attachments[0]->objectType ){
                case 'album':
                    $row->img = new stdClass;
                    $row->img->display_url = $object->object->attachments[0]->thumbnails[0]->image->url;
                    $row->img->width = $object->object->attachments[0]->thumbnails[0]->image->width;
                    $row->img->height = $object->object->attachments[0]->thumbnails[0]->image->height;
                    $row->img->link_url = $object->object->url;
                    break;
                case 'image':
                    $row->img = new stdClass;
                    $row->img->display_url = $object->object->attachments[0]->image->url;
                    $row->img->width = $object->object->attachments[0]->image->width;
                    $row->img->height = $object->object->attachments[0]->image->height;
                    $row->img->link_url = $object->object->url;
                    break;
                case 'video':
                    $row->vid = new stdClass;
                    $row->vid->link_url = $object->object->attachments[0]->url;
                    $row->vid->embed_url = $object->object->attachments[0]->embed->url;
                    if( stristr( $row->vid->embed_url, 'autoplay=1' ) ) $row->vid->embed_url = str_replace('autoplay=1','autoplay=0',$row->vid->embed_url);
                    //$row->vid->embed_type = $object->object->attachments[0]->embed->type;
                    $row->vid->embed_provider = $object->provider->title; // Google+ | YouTube | Vimeo
                    $row->vid->height = $object->object->attachments[0]->image->height;
                    $row->vid->width = $object->object->attachments[0]->image->width;
                    $row->caption = $object->object->attachments[0]->displayName . " - " . $object->object->attachments[0]->content;
                    break;
            }
        }

        $row->owner = $object->actor->displayName;
        $row->owner_url = $object->actor->url;
        $row->post_url = $object->object->url;
        $row->likes = " +1s &amp; replies";
        $row->service = 'g+';
        $list[] = $row;
    }
    jmeDisplay($list);
    jmeCache($list,$hashtag);    
}

// twitter - t
if( $_GET['s'] == 't'){
    require './php-sdk/src/library/temboo.twitter.php';
    $tweets = new Twitter_Search_Tweets($session);
    $tweetsInputs = $tweets->newInputs();
    $tweetsInputs->setCredential(TWITTER_CREDENTIAL);
    $tweetsInputs->setCount("100")->setQuery("#".$hashtag)->setIncludeEntities("true");
    $searchResults = $tweets->execute($tweetsInputs)->getResults();
    $searchResultsJSON = json_decode($searchResults->getResponse());
    $objects = $searchResultsJSON->statuses;
    $list = array();
    foreach( $objects as $object )
    {
        //var_dump($object);
        $row = new stdClass;
        $row->img = new stdClass;
        if( !empty( $object->entities->media[0] ) )
        {
            $row->img->display_url = $object->entities->media[0]->media_url;
            $row->img->link_url = $object->entities->media[0]->url;
            $row->img->width = $object->entities->media[0]->sizes->small->w;
            $row->img->height = $object->entities->media[0]->sizes->small->h;
        }
        elseif( !empty( $object->entities->urls[0] ) )
        {
            if( stristr($object->entities->urls[0]->expanded_url, 'twitpic') )
            {
              $row->img->link_url = $object->entities->urls[0]->expanded_url;
              $row->img->display_url = str_replace('twitpic.com','twitpic.com/show/thumb/',$object->entities->urls[0]->expanded_url);          
              $row->img->width = 150;
              $row->img->height = 150;
            }
        }
        $row->caption = parse_links($object->text);
        $row->likes = ($object->favorite_count + $object->retweet_count) . "&nbsp;favorites and retweets";
        $row->owner = $object->user->screen_name;
        $row->owner_url = "http://twitter.com/".$object->user->screen_name;
        $row->post_url = $row->owner_url . "/status/" . $object->id_str;
        $row->service = 'twitter';
        $list[] = $row;
    }
    jmeDisplay($list);
    jmeCache($list,$hashtag); 
}

function parse_links($string){ 
    return preg_replace('#http://(.*?)\s#i', '<a href="http://$1">$1</a>', $string); 
}  

function jmeDisplay($list){
    header('Content-Type: application/json');
    echo json_encode($list);
}

function jmeCache($list){
    foreach($list as $item){
        // db write serialized(item) with a date field. that's it.
    }
}

function jmeFetchCache($fromDate=null){
    // fetch everything from optional date param. no other searching. bam.
}

function jmeFlushCache($fromDate=null){
    // flush it
}
?>