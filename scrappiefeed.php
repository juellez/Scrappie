<?php
/**
 * @author jewel.mlnarik @juellez
 * @package Scrappie
 * @subpackage Web
 */
require_once('src/config.php');
require_once('src/php-sdk/src/temboo.php');
$hashtag = get_hashtag();
$session = new Temboo_Session(ACCOUNT_NAME, API_KEY_NAME, API_KEY_VALUE);

 // if( $_GET['s'] == 'vimeo' && $hashtag == 'tedxpdx' ){
 // // don't hit the apis to test building the layout - or plug in APIs that may be down
 //     header('Content-Type: application/json');
 //     switch($_GET['s']){
 //         case 'tumblr':
 //             //echo '[{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/d8d1220cc9d1fcdf9d23ea37ef45b05b\/tumblr_mlw65y6afn1rm07h1o1_1280.jpg","caption":""},"post_url":"http:\/\/retrokid45.tumblr.com\/post\/48974153945\/what-if-tedxportland-weekend-begins-fortunate-to","likes":"0&nbsp;notes","owner":"retrokid45","owner_url":"http:\/\/retrokid45tumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/bdaaf3af5cc88d9972837a4363d8d3a0\/tumblr_mlvwjcFyFu1rur1myo1_1280.jpg","caption":""},"post_url":"http:\/\/whiteboxuopdx.tumblr.com\/post\/48959612491\/tedxportland-what-if-art-and-design-exhibit","likes":"0&nbsp;notes","owner":"whiteboxuopdx","owner_url":"http:\/\/whiteboxuopdxtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/e0ad73408002a9f6a7620146860916e3\/tumblr_mlkjpthMDy1qcopono1_1280.jpg","caption":""},"post_url":"http:\/\/micronhero.tumblr.com\/post\/48460472083\/rockin-the-tedxportland-air-max-1s-from-last","likes":"2&nbsp;notes","owner":"micronhero","owner_url":"http:\/\/micronherotumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/4148a4566235396211bbecc63068ee82\/tumblr_mlkiyrUmu21qbfmv3o1_1280.jpg","caption":""},"post_url":"http:\/\/inundatedsunshine.tumblr.com\/post\/48459275336\/tedxpdx-tedxportland-tedx-tedtalks-pdx","likes":"0&nbsp;notes","owner":"inundatedsunshine","owner_url":"http:\/\/inundatedsunshinetumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/02bd2c07c9c9e4daa82329f87160ecbe\/tumblr_mkril812491rur1myo1_1280.jpg","caption":""},"post_url":"http:\/\/whiteboxuopdx.tumblr.com\/post\/47164456813\/look-for-work-to-be-auctioned-online-starting","likes":"0&nbsp;notes","owner":"whiteboxuopdx","owner_url":"http:\/\/whiteboxuopdxtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/e6ca4d9fbee43a5c5f83e9fc1999ca5f\/tumblr_mknqugmsKA1rur1myo1_1280.jpg","caption":""},"post_url":"http:\/\/whiteboxuopdx.tumblr.com\/post\/46990115484\/excited-for-whats-in-this-crate-from-the-last","likes":"0&nbsp;notes","owner":"whiteboxuopdx","owner_url":"http:\/\/whiteboxuopdxtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/b2bd14deec187ebc46369281e5806f1b\/tumblr_mj3wbosDve1rm07h1o1_1280.jpg","caption":""},"post_url":"http:\/\/retrokid45.tumblr.com\/post\/44491973360\/scrambled-eggs-kale-english-muffin-toast-and","likes":"0&nbsp;notes","owner":"retrokid45","owner_url":"http:\/\/retrokid45tumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/tumblr_me5t9jtCRV1rm07h1o1_1280.jpg","caption":""},"post_url":"http:\/\/retrokid45.tumblr.com\/post\/36676175456\/yo-supreme-tedxpdx-destroyer-supreme-x-new-era","likes":"0&nbsp;notes","owner":"retrokid45","owner_url":"http:\/\/retrokid45tumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/tumblr_m6yyi35GxI1r3o1lzo1_1280.jpg","caption":""},"post_url":"http:\/\/itstope.tumblr.com\/post\/26938845119\/thank-you-goodwill-tedxpdx-nikedestroyer-taken","likes":"0&nbsp;notes","owner":"itstope","owner_url":"http:\/\/itstopetumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/tumblr_m2v8ecKe6H1rn4zrgo1_1280.jpg","caption":""},"post_url":"http:\/\/tanqblog.tumblr.com\/post\/21553764317\/katedavismusic-jazzing-it-up-at-tedxportland","likes":"0&nbsp;notes","owner":"tanqblog","owner_url":"http:\/\/tanqblogtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/tumblr_m2v3fphgd31rn4zrgo1_1280.jpg","caption":""},"post_url":"http:\/\/tanqblog.tumblr.com\/post\/21547491391\/lets-get-this-afterparty-started-tedxpdx-taken","likes":"1&nbsp;notes","owner":"tanqblog","owner_url":"http:\/\/tanqblogtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/tumblr_m2uxt9XP6z1rn4zrgo1_1280.jpg","caption":""},"post_url":"http:\/\/tanqblog.tumblr.com\/post\/21539604722\/our-tedxpdx-strong-volunteers-are-carrying-this","likes":"0&nbsp;notes","owner":"tanqblog","owner_url":"http:\/\/tanqblogtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/tumblr_m2uoolhhse1qib8jso1_1280.jpg","caption":""},"post_url":"http:\/\/xocolatldedavid.tumblr.com\/post\/21527331172\/klutch-tedxpdx-taken-with-instagram","likes":"0&nbsp;notes","owner":"xocolatldedavid","owner_url":"http:\/\/xocolatldedavidtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":false,"post_url":"http:\/\/tedxsfu.tumblr.com\/post\/21519389032\/tedxportland-livestream-is-on-now-join-the","likes":"0&nbsp;notes","owner":"tedxsfu","owner_url":"http:\/\/tedxsfutumblr.com","service":"tumblr","caption":"TEDxPortland Livestream is on now! Join the conversation #TEDxPDX<br \/>http:\/\/tedxportland.com\/"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/tumblr_m2uhnhkEfP1qjnxeno1_1280.jpg","caption":""},"post_url":"http:\/\/wanderlustpdx.tumblr.com\/post\/21517369666\/wanted-to-go-somewhere-the-food-would-be-as","likes":"0&nbsp;notes","owner":"wanderlustpdx","owner_url":"http:\/\/wanderlustpdxtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/25.media.tumblr.com\/tumblr_m2ufw80Yya1qzfmr3o1_1280.jpg","caption":""},"post_url":"http:\/\/tekniklr.tumblr.com\/post\/21514832734\/this-hit-this-shit-music-industry-conundrum","likes":"0&nbsp;notes","owner":"tekniklr","owner_url":"http:\/\/tekniklrtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/tumblr_m2ucaogjqP1qjnxeno1_1280.jpg","caption":""},"post_url":"http:\/\/wanderlustpdx.tumblr.com\/post\/21509601251\/outside-tedxpdx-inspired-by-77sk8gavin-taken","likes":"0&nbsp;notes","owner":"wanderlustpdx","owner_url":"http:\/\/wanderlustpdxtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/tumblr_m2u9emuknW1qzfmr3o1_1280.jpg","caption":""},"post_url":"http:\/\/tekniklr.tumblr.com\/post\/21505401062\/skateboards-are-awesome-is-this-the-youngest-tedx","likes":"0&nbsp;notes","owner":"tekniklr","owner_url":"http:\/\/tekniklrtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":{"display_url":"http:\/\/24.media.tumblr.com\/tumblr_m2u6t3RIXT1qjnxeno1_1280.jpg","caption":""},"post_url":"http:\/\/wanderlustpdx.tumblr.com\/post\/21501733541\/a-little-closer-to-heaven-waiting-for-tedxpdx-to","likes":"1&nbsp;notes","owner":"wanderlustpdx","owner_url":"http:\/\/wanderlustpdxtumblr.com","service":"tumblr"},{"id":0,"page":0,"pages":0,"img":false,"post_url":"http:\/\/tedxportland.tumblr.com\/post\/21193673505\/jason-sturgil-for-tedxpdx","likes":"2&nbsp;notes","owner":"tedxportland","owner_url":"http:\/\/tedxportlandtumblr.com","service":"tumblr","caption":"Jason Sturgil for #TEDxPDX<br \/>Jason G. Sturgil\nREAD BETWEEN THE SIGNS (2012)\n\n Jason Sturgill is a culture worker with a background in advertising, design and various curatorial practices. Having worked for Wieden+Kennedy, Dark Horse Comics, Laika, and Nike along with running his own online art gallery has heavily influenced his art practice which centers around the intersection of art and local business. Sturgill is currently participating in the MFA program in Art and Social Practice as well as teaching graphic design at Portland State University.\nhttp:\/\/jasonsturgill.com\/\n\n Artwork made in partnership with Lee\u2019s Better Letters, Moso Graphics, Schonman Sign, Sign Wizards and Em Space. \n\n Complete creative control was given to four local sign shops to interpret the theme \u201cUncharted Territory\u201d in an attempt at transparency in artistic production and to highlight local business.\n- Lee Littlewood of Lee\u2019s Better Letters: acrylic paint on board\n- Collin Votrobeck of Moso Graphics: computer cut\/scored wood veneer, ink, adhesive vinyl, graphite\n- Benn Schonman of Schonman Sign: enamel paint on plastic - \u201crebirth of a letter\u201d\n- Lori Gilbert of Sign Wizards: edge print on vinyl on acrylic - exploration of empathy in the \njudicial system \n-Rory Sparks of Em Space: letterpress - footnotes\n\n Conceived and executed by Jason G. Sturgill\n\n \nCheck this art piece out in person and place a bid for CHAP at One Grand Gallery (1000\u00a0E. Burnside, a block from Doug Fir)"}]';
 //             break;
 //         case 'ig':
 //             //echo '[{"img":{"display_url":"http:\/\/distilleryimage11.s3.amazonaws.com\/8de2a1faafcd11e2bf1c22000aa8008f_6.jpg","link_url":"http:\/\/instagram.com\/p\/Yo3VK2h5lT\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/Yo3VK2h5lT\/","caption":"#tedxportland #tedxpdx Brian Grant","likes":"27&nbsp;likes","owner":"starkey23","owner_url":"http:\/\/instagram.com\/starkey23","service":"ig"},{"img":{"display_url":"http:\/\/distilleryimage0.s3.amazonaws.com\/9493a21cafc111e2a7ed22000a1f8f24_6.jpg","link_url":"http:\/\/instagram.com\/p\/YothZQO08k\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/YothZQO08k\/","caption":"Repost from @ryanjohnbush. These are a few of my lucky charms. Gas station crystal and a Milwaukee Bucks 1978 conference champs pendant that belonged to my grandma. #tedxpdx","likes":"59&nbsp;likes","owner":"katebingburt","owner_url":"http:\/\/instagram.com\/katebingburt","service":"ig"},{"img":{"display_url":"http:\/\/distilleryimage7.s3.amazonaws.com\/1d8f5378afc111e284fa22000a1f9c87_6.jpg","link_url":"http:\/\/instagram.com\/p\/YotJBXyD0n\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/YotJBXyD0n\/","caption":"What if? #TEDxPDX","likes":"17&nbsp;likes","owner":"caniciete","owner_url":"http:\/\/instagram.com\/caniciete","service":"ig"},{"img":{"display_url":"http:\/\/distilleryimage9.s3.amazonaws.com\/a7e11d1aafbf11e2a73522000a1faf50_6.jpg","link_url":"http:\/\/instagram.com\/p\/Yor8ffEFcl\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/Yor8ffEFcl\/","caption":"Mr. #Brokaw at #TEDxPDX, #PAM","likes":"20&nbsp;likes","owner":"j_hole","owner_url":"http:\/\/instagram.com\/j_hole","service":"ig"},{"img":{"display_url":"http:\/\/distilleryimage10.s3.amazonaws.com\/10fcb02eafbc11e2aeda22000a1f973b_6.jpg","link_url":"http:\/\/instagram.com\/p\/YopATTlNoO\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/YopATTlNoO\/","caption":"The #tedxpdx #cheetah making the \'I Could Totally Eat You Eyes\' at @bvickery","likes":"21&nbsp;likes","owner":"vinvickery","owner_url":"http:\/\/instagram.com\/vinvickery","service":"ig"},{"img":{"display_url":"http:\/\/distilleryimage0.s3.amazonaws.com\/788ad6f2afb311e2910822000a1f92c2_6.jpg","link_url":"http:\/\/instagram.com\/p\/Yoh9pqnt0c\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/Yoh9pqnt0c\/","caption":"What an amazing day. Big thanks to TEDxPDX for the inspiration. #tedxpdx #whatif","likes":"33&nbsp;likes","owner":"delaneyelliott","owner_url":"http:\/\/instagram.com\/delaneyelliott","service":"ig"},{"img":{"display_url":"http:\/\/distilleryimage11.s3.amazonaws.com\/2e564780afb111e2805c22000a9e0290_6.jpg","link_url":"http:\/\/instagram.com\/p\/YogFmIrhxD\/","width":306,"height":306},"id":0,"page":0,"pages":0,"post_url":"http:\/\/instagram.com\/p\/YogFmIrhxD\/","caption":"#TEDxPDX with Patrick. Great year!","likes":"12&nbsp;likes","owner":"clare_a_ryan","owner_url":"http:\/\/instagram.com\/clare_a_ryan","service":"ig"}]';
 //             break;
 //         case 'twitter':
 //             //echo '[{"id":328550866279886849,"page":0,"pages":0,"img":{},"caption":"Open bar at #TEDxPDX after party + visiting the bar of my former employment = not so good feelings today","likes":"0&nbsp;faves &amp; retweets","owner":"LeetleWolf","owner_url":"http:\/\/twitter.com\/LeetleWolf","post_url":"http:\/\/twitter.com\/LeetleWolf\/status\/328550866279886849","service":"twitter"},{"id":328523990714957824,"page":0,"pages":0,"img":{},"caption":"Would have done anything to go to the TED conference. One day. #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"KatherineObuch","owner_url":"http:\/\/twitter.com\/KatherineObuch","post_url":"http:\/\/twitter.com\/KatherineObuch\/status\/328523990714957824","service":"twitter"},{"id":328505849448382464,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI8WVF9CQAAgwjc.jpg","link_url":"http:\/\/t.co\/0fM7c57l8I","width":340,"height":81},"caption":"@TEDxPortland knocked it out of the park this year #TEDxPDX http:\/\/t.co\/0fM7c57l8I","likes":"0&nbsp;faves &amp; retweets","owner":"darrenbuckner","owner_url":"http:\/\/twitter.com\/darrenbuckner","post_url":"http:\/\/twitter.com\/darrenbuckner\/status\/328505849448382464","service":"twitter"},{"id":328471389524869120,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI72_QvCQAA3BeG.jpg","link_url":"http:\/\/t.co\/itiQ88xOlk","width":340,"height":340},"caption":"It was amazing to hear this big guy purring! #cheetahs #tedxpdx #endangered http:\/\/t.co\/itiQ88xOlk","likes":"0&nbsp;faves &amp; retweets","owner":"mandedah","owner_url":"http:\/\/twitter.com\/mandedah","post_url":"http:\/\/twitter.com\/mandedah\/status\/328471389524869120","service":"twitter"},{"id":328414520542371841,"page":0,"pages":0,"img":{},"caption":"can\'t wait to catch #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"trawickjtt","owner_url":"http:\/\/twitter.com\/trawickjtt","post_url":"http:\/\/twitter.com\/trawickjtt\/status\/328414520542371841","service":"twitter"},{"id":328410056204906497,"page":0,"pages":0,"img":{},"caption":"Love Tom B.! RT @CO_EQ: Pretty sure Tom Brokaw is the smoothest public speaker of all-time. #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"GDC_emilia","owner_url":"http:\/\/twitter.com\/GDC_emilia","post_url":"http:\/\/twitter.com\/GDC_emilia\/status\/328410056204906497","service":"twitter"},{"id":328409225288101889,"page":0,"pages":0,"img":{},"caption":"#TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"maxcoxxx","owner_url":"http:\/\/twitter.com\/maxcoxxx","post_url":"http:\/\/twitter.com\/maxcoxxx\/status\/328409225288101889","service":"twitter"},{"id":328401891606294528,"page":0,"pages":0,"img":{},"caption":"Came home from inspiring, embracing #TEDxPDX, then went w\/boys over to @gloriaharrison\'s house, slow day in garden planned tomorrow, yay wkd","likes":"0&nbsp;faves &amp; retweets","owner":"sarahgilbert","owner_url":"http:\/\/twitter.com\/sarahgilbert","post_url":"http:\/\/twitter.com\/sarahgilbert\/status\/328401891606294528","service":"twitter"},{"id":328400215637909504,"page":0,"pages":0,"img":{},"caption":"@clareangelaryan GREAT work, Clare! You and the team are amazing. #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"sarahgilbert","owner_url":"http:\/\/twitter.com\/sarahgilbert","post_url":"http:\/\/twitter.com\/sarahgilbert\/status\/328400215637909504","service":"twitter"},{"id":328397894967255040,"page":0,"pages":0,"img":{},"caption":"#TedXPdx","likes":"0&nbsp;faves &amp; retweets","owner":"AnneVanGordon1","owner_url":"http:\/\/twitter.com\/AnneVanGordon1","post_url":"http:\/\/twitter.com\/AnneVanGordon1\/status\/328397894967255040","service":"twitter"},{"id":328393411117846528,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI6wEUjCEAI54C3.jpg","link_url":"http:\/\/t.co\/xtir2ILC7L","width":340,"height":340},"caption":"Really connected with @WaterTheBamboo over the number #3 provided by @bwgrant @TEDxPortland #tedxpdx http:\/\/t.co\/xtir2ILC7L","likes":"1&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328393411117846528","service":"twitter"},{"id":328391654727876609,"page":0,"pages":0,"img":{},"caption":"lynohart @ #tedxpdx http:\/\/t.co\/DMkvtWkARu","likes":"0&nbsp;faves &amp; retweets","owner":"WalkerStory","owner_url":"http:\/\/twitter.com\/WalkerStory","post_url":"http:\/\/twitter.com\/WalkerStory\/status\/328391654727876609","service":"twitter"},{"id":328386630241103874,"page":0,"pages":0,"img":{},"caption":"Just celebrated the success of #TEDxPDX at a jazz club after party with some of the most talented and interesting people in Portland.","likes":"0&nbsp;faves &amp; retweets","owner":"BrandenHarvey","owner_url":"http:\/\/twitter.com\/BrandenHarvey","post_url":"http:\/\/twitter.com\/BrandenHarvey\/status\/328386630241103874","service":"twitter"},{"id":328386527321288705,"page":0,"pages":0,"img":{},"caption":"\"There was more dignity in my daughter\'s Jr. prom\" \u2026and he came to #TEDxPDX instead: http:\/\/t.co\/NvFEBI9tTt #whcd","likes":"0&nbsp;faves &amp; retweets","owner":"pdxgene","owner_url":"http:\/\/twitter.com\/pdxgene","post_url":"http:\/\/twitter.com\/pdxgene\/status\/328386527321288705","service":"twitter"},{"id":328383362538557440,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI4UBqjCAAEHpEA.jpg","link_url":"http:\/\/t.co\/8DdJ65tZIN","width":340,"height":255},"caption":"You did awesome! Thx from me and my late Dad for all U do! RT @bwgrant: Thankful to share my #WhatIf today. #tedxpdx http:\/\/t.co\/8DdJ65tZIN","likes":"0&nbsp;faves &amp; retweets","owner":"AmeliaJL","owner_url":"http:\/\/twitter.com\/AmeliaJL","post_url":"http:\/\/twitter.com\/AmeliaJL\/status\/328383362538557440","service":"twitter"},{"id":328377069950099456,"page":0,"pages":0,"img":{},"caption":"Special shout out to @CO_EQ and @jordanpsowers for rocking\' with us today at #TEDxPDX! Let\'s BBQ and play ping pong soon at the #wudshack!","likes":"0&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328377069950099456","service":"twitter"},{"id":328371948574867456,"page":0,"pages":0,"img":{},"caption":"\u201c@lauriematthews: the new business card #tedxpdx @ Portland Art Museum http:\/\/t.co\/a05QwH7eja\u201d - Innovation by yours truly! Thanks #portland","likes":"0&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328371948574867456","service":"twitter"},{"id":328361767308763136,"page":0,"pages":0,"img":{},"caption":"We were create to invent! RT @BrandenHarvey: I\u2019m always energized by people who are able to think big. Today was such a great day. #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"nella23pdx","owner_url":"http:\/\/twitter.com\/nella23pdx","post_url":"http:\/\/twitter.com\/nella23pdx\/status\/328361767308763136","service":"twitter"},{"id":328359876021604352,"page":0,"pages":0,"img":{},"caption":"@ho0olly Any favorite talks? #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"TEDxPortland","owner_url":"http:\/\/twitter.com\/TEDxPortland","post_url":"http:\/\/twitter.com\/TEDxPortland\/status\/328359876021604352","service":"twitter"},{"id":328358745367273472,"page":0,"pages":0,"img":{},"caption":"@AngariAziz You can see everyone\'s #TEDxPDX photos on our @stublisher feed: http:\/\/t.co\/yw6kHjUqnr More photos and videos in coming weeks!","likes":"0&nbsp;faves &amp; retweets","owner":"TEDxPortland","owner_url":"http:\/\/twitter.com\/TEDxPortland","post_url":"http:\/\/twitter.com\/TEDxPortland\/status\/328358745367273472","service":"twitter"},{"id":328358167266357248,"page":0,"pages":0,"img":{},"caption":"@starkey23 was wearing some ballin\' shoes today. Thanks for helping put #portland on the map with #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328358167266357248","service":"twitter"},{"id":328355811283841024,"page":0,"pages":0,"img":{},"caption":"Spent the day getting inspired at #tedxpdx then stuffed my face at #eatmobile with @WholeFoodsPDX #lovemyjob @CuratorPR","likes":"1&nbsp;faves &amp; retweets","owner":"brookeandersen","owner_url":"http:\/\/twitter.com\/brookeandersen","post_url":"http:\/\/twitter.com\/brookeandersen\/status\/328355811283841024","service":"twitter"},{"id":328355623878160385,"page":0,"pages":0,"img":{},"caption":"I\u2019m always energized by people who are able to think big. Today was such a great day. #TEDxPDX","likes":"3&nbsp;faves &amp; retweets","owner":"BrandenHarvey","owner_url":"http:\/\/twitter.com\/BrandenHarvey","post_url":"http:\/\/twitter.com\/BrandenHarvey\/status\/328355623878160385","service":"twitter"},{"id":328353831471677440,"page":0,"pages":0,"img":{},"caption":"My brain needs to stay active after #TEDxPDX http:\/\/t.co\/8tVa7rBdDv","likes":"0&nbsp;faves &amp; retweets","owner":"theGeekyBird","owner_url":"http:\/\/twitter.com\/theGeekyBird","post_url":"http:\/\/twitter.com\/theGeekyBird\/status\/328353831471677440","service":"twitter"},{"id":328353055722594306,"page":0,"pages":0,"img":{},"caption":"Instead he came to Portland #TEDxPDX RT @ politico: WATCH: Tom Brokaw tells @POLITICO why he RSVP\u2019ed no to the #WHCD http:\/\/t.co\/npjWCs0FYP\u201d","likes":"2&nbsp;faves &amp; retweets","owner":"NancyCopic","owner_url":"http:\/\/twitter.com\/NancyCopic","post_url":"http:\/\/twitter.com\/NancyCopic\/status\/328353055722594306","service":"twitter"},{"id":328352669175529473,"page":0,"pages":0,"img":{},"caption":"Cheetah... Real, live cheetah #tedxpdx  http:\/\/t.co\/elxHJ82WMu","likes":"0&nbsp;faves &amp; retweets","owner":"MichaelDickman1","owner_url":"http:\/\/twitter.com\/MichaelDickman1","post_url":"http:\/\/twitter.com\/MichaelDickman1\/status\/328352669175529473","service":"twitter"},{"id":328352023747641344,"page":0,"pages":0,"img":{},"caption":"Great speech by @NaomiPomeroy and an even better chat afterwards. Shout out to the Phillips family! #TEDxPDX","likes":"0&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328352023747641344","service":"twitter"},{"id":328350042375221248,"page":0,"pages":0,"img":{},"caption":"What an amazing day. Big thanks to TEDxPDX for the inspiration. #tedxpdx #whatif @ Portland Art Museum http:\/\/t.co\/TIEfbQkxDC","likes":"0&nbsp;faves &amp; retweets","owner":"delaney0210","owner_url":"http:\/\/twitter.com\/delaney0210","post_url":"http:\/\/twitter.com\/delaney0210\/status\/328350042375221248","service":"twitter"},{"id":328347626015715328,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI6GbRvCcAAmV1w.jpg","link_url":"http:\/\/t.co\/zQ6XaXzbvM","width":340,"height":263},"caption":"My life has been enriched thanks to the #TEDxPDX organizers &amp; community #ThankYou. Wisdom &amp; takeaways from the day http:\/\/t.co\/zQ6XaXzbvM","likes":"0&nbsp;faves &amp; retweets","owner":"rhianr","owner_url":"http:\/\/twitter.com\/rhianr","post_url":"http:\/\/twitter.com\/rhianr\/status\/328347626015715328","service":"twitter"},{"id":328346079458373632,"page":0,"pages":0,"img":{},"caption":"\"No text message in the world can replace someone you deeply care abt whispering in your ear \'I love you.\" -@tombrokaw #TEDxPDX (via @VNL)","likes":"1&nbsp;faves &amp; retweets","owner":"kellymcc","owner_url":"http:\/\/twitter.com\/kellymcc","post_url":"http:\/\/twitter.com\/kellymcc\/status\/328346079458373632","service":"twitter"},{"id":328345632286846976,"page":0,"pages":0,"img":{},"caption":"#TEDxPDX with Patrick. Great year! http:\/\/t.co\/pogrRKDntH","likes":"0&nbsp;faves &amp; retweets","owner":"clareangelaryan","owner_url":"http:\/\/twitter.com\/clareangelaryan","post_url":"http:\/\/twitter.com\/clareangelaryan\/status\/328345632286846976","service":"twitter"},{"id":328342923496271872,"page":0,"pages":0,"img":{},"caption":"@synthcat I\'m definitely going to follow that advice next year. ... Is it next year yet? #tedxpdx","likes":"0&nbsp;faves &amp; retweets","owner":"anndango","owner_url":"http:\/\/twitter.com\/anndango","post_url":"http:\/\/twitter.com\/anndango\/status\/328342923496271872","service":"twitter"},{"id":328342664250527744,"page":0,"pages":0,"img":{},"caption":"@anndango I\'ve learned that anytime I attend inspirational events, it\'s best to put buffer time between them and reality of work. #tedxpdx","likes":"0&nbsp;faves &amp; retweets","owner":"synthcat","owner_url":"http:\/\/twitter.com\/synthcat","post_url":"http:\/\/twitter.com\/synthcat\/status\/328342664250527744","service":"twitter"},{"id":328341213197520896,"page":0,"pages":0,"img":{},"caption":"What if they had asked you to speak @TEDxPortland today? What would your talk have been about? #tedxpdx","likes":"0&nbsp;faves &amp; retweets","owner":"anndango","owner_url":"http:\/\/twitter.com\/anndango","post_url":"http:\/\/twitter.com\/anndango\/status\/328341213197520896","service":"twitter"},{"id":328340537046335491,"page":0,"pages":0,"img":{},"caption":"@LarsvonS haha! I felt like I spent 8 hours on an airplane, but with really really interesting passengers and no crying babies. #tedxpdx","likes":"0&nbsp;faves &amp; retweets","owner":"anndango","owner_url":"http:\/\/twitter.com\/anndango","post_url":"http:\/\/twitter.com\/anndango\/status\/328340537046335491","service":"twitter"},{"id":328340214860877826,"page":0,"pages":0,"img":{},"caption":"@anndango I\'m just glad that #TEDxPDX was scheduled at beginning of my vacation. I *want* time to absorb, digest, and integrate!","likes":"0&nbsp;faves &amp; retweets","owner":"synthcat","owner_url":"http:\/\/twitter.com\/synthcat","post_url":"http:\/\/twitter.com\/synthcat\/status\/328340214860877826","service":"twitter"},{"id":328338404142092288,"page":0,"pages":0,"img":{},"caption":"What if... We weren\'t so stoked to go to #tedxpdx that we actually paid for parking? We wouldn\'t have\u2026 http:\/\/t.co\/H6DH4U0ZfF","likes":"0&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328338404142092288","service":"twitter"},{"id":328335567181987840,"page":0,"pages":0,"img":{},"caption":"How do you come down off of an amazing day @TEDxPortland? #headstillexplodingwithideas #tedxpdx","likes":"1&nbsp;faves &amp; retweets","owner":"anndango","owner_url":"http:\/\/twitter.com\/anndango","post_url":"http:\/\/twitter.com\/anndango\/status\/328335567181987840","service":"twitter"},{"id":328524227022053377,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI8nCzxCYAAUkxb.jpg","link_url":"http:\/\/t.co\/cFwhOMTbmX","width":340,"height":453},"caption":"Great gathering What if? @TEDxPortland @CCFOregon join us the Paramount hotel this evening @ccfusa saving #cheetahs http:\/\/t.co\/cFwhOMTbmX","likes":"0&nbsp;faves &amp; retweets","owner":"Chewbaaka","owner_url":"http:\/\/twitter.com\/Chewbaaka","post_url":"http:\/\/twitter.com\/Chewbaaka\/status\/328524227022053377","service":"twitter"},{"id":328505849448382464,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI8WVF9CQAAgwjc.jpg","link_url":"http:\/\/t.co\/0fM7c57l8I","width":340,"height":81},"caption":"@TEDxPortland knocked it out of the park this year #TEDxPDX http:\/\/t.co\/0fM7c57l8I","likes":"0&nbsp;faves &amp; retweets","owner":"darrenbuckner","owner_url":"http:\/\/twitter.com\/darrenbuckner","post_url":"http:\/\/twitter.com\/darrenbuckner\/status\/328505849448382464","service":"twitter"},{"id":328400569058353152,"page":0,"pages":0,"img":{},"caption":"@TEDxPortland thank you for a fabulous &amp; inspiring day! What if... our small voices come together and change the world?","likes":"0&nbsp;faves &amp; retweets","owner":"kristinvalente","owner_url":"http:\/\/twitter.com\/kristinvalente","post_url":"http:\/\/twitter.com\/kristinvalente\/status\/328400569058353152","service":"twitter"},{"id":328397214906974210,"page":0,"pages":0,"img":{},"caption":"What an amazing day! Still on an inspirational high from @TEDxPortland a game changer in how I view my life. #tedxportland","likes":"0&nbsp;faves &amp; retweets","owner":"lttllamb","owner_url":"http:\/\/twitter.com\/lttllamb","post_url":"http:\/\/twitter.com\/lttllamb\/status\/328397214906974210","service":"twitter"},{"id":328394936972095488,"page":0,"pages":0,"img":{},"caption":"@PDXSamAdams Nice seeing you at @TEDxPortland Speaker Dinner @IrvingStKitchen","likes":"0&nbsp;faves &amp; retweets","owner":"RDixPDX","owner_url":"http:\/\/twitter.com\/RDixPDX","post_url":"http:\/\/twitter.com\/RDixPDX\/status\/328394936972095488","service":"twitter"},{"id":328393411117846528,"page":0,"pages":0,"img":{"display_url":"http:\/\/pbs.twimg.com\/media\/BI6wEUjCEAI54C3.jpg","link_url":"http:\/\/t.co\/xtir2ILC7L","width":340,"height":340},"caption":"Really connected with @WaterTheBamboo over the number #3 provided by @bwgrant @TEDxPortland #tedxpdx http:\/\/t.co\/xtir2ILC7L","likes":"1&nbsp;faves &amp; retweets","owner":"thebackwuds","owner_url":"http:\/\/twitter.com\/thebackwuds","post_url":"http:\/\/twitter.com\/thebackwuds\/status\/328393411117846528","service":"twitter"},{"id":328360537501073409,"page":0,"pages":0,"img":{},"caption":"@TEDxPortland YES! @SchoolhouseElec #brianfaherty and @NaomiPomeroy! Enjoy your after party, core team! You deserve it! #greatsuccess","likes":"0&nbsp;faves &amp; retweets","owner":"ho0olly","owner_url":"http:\/\/twitter.com\/ho0olly","post_url":"http:\/\/twitter.com\/ho0olly\/status\/328360537501073409","service":"twitter"},{"id":328359553626415104,"page":0,"pages":0,"img":{},"caption":"Anyone else having a @TEDxPortland hangover? So many inspirational thoughts all day my mind is mush now!","likes":"2&nbsp;faves &amp; retweets","owner":"ho0olly","owner_url":"http:\/\/twitter.com\/ho0olly","post_url":"http:\/\/twitter.com\/ho0olly\/status\/328359553626415104","service":"twitter"},{"id":328353336292155392,"page":0,"pages":0,"img":{},"caption":"@wildsalmoncntr @TEDxPortland Thank you! Our incredible team made this happen - they worked so hard. Guido rocked!","likes":"0&nbsp;faves &amp; retweets","owner":"WalkerStory","owner_url":"http:\/\/twitter.com\/WalkerStory","post_url":"http:\/\/twitter.com\/WalkerStory\/status\/328353336292155392","service":"twitter"},{"id":328343603795607552,"page":0,"pages":0,"img":{},"caption":"@synthcat @tedxportland Nice.","likes":"0&nbsp;faves &amp; retweets","owner":"anndango","owner_url":"http:\/\/twitter.com\/anndango","post_url":"http:\/\/twitter.com\/anndango\/status\/328343603795607552","service":"twitter"}]';
 //             break;
 //          case 'vimeo':
 //             echo '[{"pages":2,"page":1,"caption":"Uncharted Territory - Speakers","shared_date":"2012-01-17 01:05:49","owner":"9441040","vid":{"id":"35182267","embed_provider":"Vimeo","embed_url":"http:\/\/vimeo.com\/api\/oembed.json?url=http:\/\/vimeo.com\/35182267","extrainfo_json_url":"http:\/\/vimeo.com\/api\/v2\/video\/35182267.json"}}]';
 //                break;
 //     }
 //     exit;
 // }

switch($_GET['s']){

// general intro
    case 'intro':
        if( !empty($config['events'][$hashtag]) ) jmeDisplay($config['events'][$hashtag]);
        else jmeDisplay( array() );
        break;

// facebook
    case 'fb':
    require 'src/php-sdk/src/library/temboo.facebook.php';
    // only searching on event name for now, in events, pages & groups
    if( !empty($config['events'][$hashtag] ) ){
        $event = $config['events'][$hashtag];
        $search = new Facebook_Searching_Search($session);
        $searchInputs = $search->newInputs();
        $searchInputs->setCredential(FB_CREDENTIAL);
        $searchInputs->setObjectType("event")->setQuery($event['name']);
        $searchResults = $search->execute($searchInputs)->getResults();
        $searchResultsJSON = json_decode($searchResults->getResponse());
        $objects = $searchResultsJSON->data;
        $list = array();
        foreach( $objects as $object )
        {
            $row = new stdClass;
            $row->id = 0;
            $row->pages = $row->page = 0;
            $row->caption = $object->name . " at " . $object->location;
            $row->owner = 'Facebook Event';
            $row->post_url = $row->owner_url = "http://facebook.com/events/".$object->id;
            $row->service = 'facebook';
            $list[] = $row;
        }
        jmeDisplay($list);
    }
    break;

// flickr
    case 'flickr':
    require 'src/php-sdk/src/library/temboo.flickr.php';
    $search = new Flickr_Photos_Search($session);
    $searchInputs = $search->newInputs();
    $searchInputs->setCredential(FLICKR_CREDENTIAL);
    $searchInputs->setText("#".$hashtag)->setResponseFormat("json")->setPerPage("20");
    if( $_GET['i'] ) $searchInputs->setPage($_GET['i']);
        // 100 is the default
        // setPerPage("100")->setMaxUploadDate("maxdate")->setMinTakenDate("mindate")->setPage("1");
    $searchResults = $search->execute($searchInputs)->getResults();
    $searchResultsJSON = json_decode($searchResults->getResponse());
    $photos = $searchResultsJSON->photos;
    $list = array();
    foreach( $photos->photo as $photo )
    {
        $row = new stdClass;
        $row->id = $photo->id;
        $row->pages = $photos->pages;
        $row->page = $photos->page;
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
    break;

// instagram
    case 'ig':
    require 'src/php-sdk/src/library/temboo.instagram.php';
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
        $row->id = 0;
        $row->pages = $row->page = 0;
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
    break;

// google plus
    case 'gplus':
    require 'src/php-sdk/src/library/temboo.google.php';
    // only searching on event name for now, in events, pages & groups
    if( !empty($config['events'][$hashtag] ) ){
        $search = new Google_Plus_Activities_Search($session);
        $searchInputs = $search->newInputs();
        $searchInputs->setCredential(GOOGLE_PLUS_CREDENTIAL);
        $searchInputs->setQuery("#".$hashtag);
        $searchInputs->setQuery($config['events'][$hashtag]['name']);
        $searchResults = $search->execute($searchInputs)->getResults();
        $searchResultsJSON = json_decode($searchResults->getResponse());
        $objects = $searchResultsJSON->items;
        $list = array();
        foreach( $objects as $object )
        {
            //var_dump($object);
            $row = new stdClass;
            $row->id = 0;
            $row->pages = $row->page = 0;
            $row->caption = get_friendly_text($object->object->content);
            if( !empty($object->object->attachments[0]) ){
                switch( $object->object->attachments[0]->objectType ){
                    case 'album':
                        $row->img = new stdClass;
                        $row->img->display_url = $object->object->attachments[0]->thumbnails[0]->image->url;
                        $row->img->width = $object->object->attachments[0]->thumbnails[0]->image->width;
                        $row->img->height = $object->object->attachments[0]->thumbnails[0]->image->height;
                        $row->img->link_url = $object->object->url;
                        $row->caption = get_friendly_text($object->object->content);
                        break;
                    case 'image':
                        $row->img = new stdClass;
                        $row->img->display_url = $object->object->attachments[0]->image->url;
                        $row->img->width = $object->object->attachments[0]->image->width;
                        $row->img->height = $object->object->attachments[0]->image->height;
                        $row->img->link_url = $object->object->url;
                        $row->caption = get_friendly_text($object->object->content);
                        break;
                    case 'article':
                        if( !empty($object->object->attachments[0]->fullImage->url ))
                        {
                            $row->img = new stdClass;
                            $row->img->display_url = $object->object->attachments[0]->image->url;
                            $row->img->link_url = $object->object->url;
                        }
                        $row->caption = $object->object->attachments[0]->displayName;
                        /*
                        ["objectType"]=>
                        string(7) "article"
                        ["displayName"]=>
                        string(91) "TEDx Portland scavenger hunt this weekend for ultimate prize: tickets to the sold-out event"
                        ["content"]=>
                        string(120) "Register for the scavenger hunt in advance on the event's Facebook page, or the morning of at Pioneer Courthouse Square."
                        ["url"]=>
                        string(88) "http://www.oregonlive.com/portland/index.ssf/2013/04/tedx_portland_scavenger_hunt_t.html"
                        ["fullImage"]=>
                        object(stdClass)#40 (2) {
                          ["url"]=>
                          string(81) "http://media.oregonlive.com/portland_impact/photo/12587771-thumb_square_large.jpg"
                          ["type"]=>
                          string(10) "image/jpeg"
                        */
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
                        $row->caption = $object->object->attachments[0]->displayName . " - " . get_friendly_text($object->object->attachments[0]->content);
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
    }
    break;

// twitter
    case 'twitter':
    require 'src/php-sdk/src/library/temboo.twitter.php';
    $tweets = new Twitter_Search_Tweets($session);
    $tweetsInputs = $tweets->newInputs();
    $tweetsInputs->setCredential(TWITTER_CREDENTIAL);
    if( !empty($_GET['i']) ){
        $tweetsInputs->setMaxId($_GET['i'])->setCount("5");
    }else{
        $tweetsInputs->setCount("80");
    }
    $tweetsInputs->setResultType("recent")->setQuery('#'.$hashtag)->setIncludeEntities("true");
    $searchResults = $tweets->execute($tweetsInputs)->getResults();
    $searchResultsJSON = json_decode($searchResults->getResponse());
    $objects = $searchResultsJSON->statuses;

    if(  empty($_GET['i']) && !empty($config['events'][$hashtag]['owner_twitter']) && !empty($config['events'][$hashtag]['filter']) ){
        $tweetsInputs->setCount("40")->setResultType("recent")->setQuery('@'.$config['events'][$hashtag]['owner_twitter'])->setIncludeEntities("true");
        $searchResults = $tweets->execute($tweetsInputs)->getResults();
        $searchResultsJSON = json_decode($searchResults->getResponse());
        $objects = array_merge( $objects, $searchResultsJSON->statuses );
    }

    $list = array();
    foreach( $objects as $object )
    {
        //var_dump($object);
        //        "created_at": "Mon Dec 17 23:55:29 +0000 2012",
        // retweeted_status
        if( substr($object->text,0,2) != 'RT' ){
            $row = new stdClass;
            $row->id = $object->id;
            $row->pages = $row->page = 0;
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
    }
    jmeDisplay($list);
    break;

// tumblr 
    case 'tumblr':
    // create a new cURL resource
    $process = curl_init();
    $url = 'http://api.tumblr.com/v2/tagged?tag='.urlencode($hashtag).'&api_key='.TUMBLR_API_KEY.'&filter=text';

    // set URL and other appropriate options
    curl_setopt($process, CURLOPT_URL, $url); 
    curl_setopt($process, CURLOPT_HEADER, 0);
    curl_setopt($process, CURLOPT_TIMEOUT, 30);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($process, CURLOPT_SSL_VERIFYPEER, TRUE);

    // grab URL and pass it to the browser
    $response = curl_exec($process);
    $results = json_decode($response);
    $list = array();
    if( !empty($results->meta->status) && $results->meta->status == 200 ){
        $objects = $results->response;
    }
    foreach( $objects as $object )
    {
        //var_dump($object);
        $row = new stdClass;
        $row->id = 0;
        $row->pages = $row->page = 0;
        $row->post_url = $row->img->link_url = $object->post_url;
        $row->likes = $object->note_count . "&nbsp;notes";
        $row->owner = $object->blog_name;
        $row->owner_url = 'http://'.$row->owner.'.tumblr.com';
        $row->service = 'tumblr';

        switch($object->type){
            case 'photo':
            $row->img = new stdClass;
            $row->img->display_url = $object->photos[0]->alt_sizes[0]->url;
            $row->img->caption = $object->photos[0]->caption;
            //$row->img->width = $row->img->height = 0;
            /*
            "photos":[
            {"caption":"",
            "alt_sizes":[
            {"width":375,"height":375,"url":"http:\/\/25.media.tumblr.com\/3ff72d454d03bb2bba7762d7932d7b41\/tumblr_mkp3reQVnO1rtpujdo1_400.gif"},
            {"width":250,"height":250,"url":"http:\/\/25.media.tumblr.com\/3ff72d454d03bb2bba7762d7932d7b41\/tumblr_mkp3reQVnO1rtpujdo1_250.gif"},
            {"width":100,"height":100,"url":"http:\/\/24.media.tumblr.com\/3ff72d454d03bb2bba7762d7932d7b41\/tumblr_mkp3reQVnO1rtpujdo1_100.gif"},
            {"width":75,"height":75,"url":"http:\/\/25.media.tumblr.com\/3ff72d454d03bb2bba7762d7932d7b41\/tumblr_mkp3reQVnO1rtpujdo1_75sq.gif"}],
            "original_size":{"width":375,"height":375,"url":"http:\/\/25.media.tumblr.com\/3ff72d454d03bb2bba7762d7932d7b41\/tumblr_mkp3reQVnO1rtpujdo1_400.gif"}}]},


            ["type"]=> string(4) "text" ["date"]=> string(23) "2013-04-16 15:38:01 GMT"
             ["timestamp"]=> int(1366126681) 
             ["state"]=> string(9) "published" 
             ["format"]=> string(4) "html" 
             ["reblog_key"]=> string(8) "xrN1933S" 
             ["tags"]=> array(14) { [0]=> string(11) "photolucida" [1]=> string(20) "portland photo month" [2]=> string(4) "pada" [3]=> string(22) "Portland Art Galleries" [4]=> string(12) "portland art" [5]=> string(11) "photography" [6]=> string(16) "pdx contemporary" [7]=> string(20) "pdx contemporary art" [8]=> string(13) "augen gallery" [9]=> string(18) "waterstone gallery" [10]=> string(23) "Elizabeth Leach Gallery" [11]=> string(16) "Froelick Gallery" [12]=> string(26) "Charles A Hartman FIne Art" [13]=> string(15) "butters gallery" } 
             ["short_url"]=> string(28) "http://tmblr.co/ZocK7uiqSIRZ" 
             ["highlighted"]=> array(0) { } 
             ["note_count"]=> int(0) 
             ["title"]=> string(55) "April is a Fantastic Month for Photography in Portland!" 
             ["body"]=> string(844) "In celebration and collaboration with Photolucida 2013, PDX Contemporary, Augen Gallery, Froelick Gallery, Charles A Hartman Fine Art, Elizabeth Leach Gallery, Butters Gallery Ltd, and Waterstone Gallery are featuring photography during the month of April. Photolucida, an arts non-profit hosting a biannual event in April, connects the photography community on a regional, national, and international level. It includes a Portfolio Review Festival where photographers and reviewers have the opportunity to attend workshops and participate in intensive portfolio reviews. The portfolio reviews offer valuable critiques for the artists as well as possible exhibitions, publications, and sales. These elements all provide emerging photographers with important dialogue with other photographers, gallery owners, curators, publishers and editors." } 
             Notice: Undefined property: stdClass::$image_permalink in /Users/jewelmlnarik/Sites/bcp7/EventScrapBook/hashtagmerge.php on line 290 Notice: Undefined property: stdClass::$caption in /Users/jewelmlnarik/Sites/bcp7/EventScrapBook/hashtagmerge.php on line 291 object(stdClass)#49 (18) { ["blog_name"]=> string(9) "booholler" ["id"]=> 
            ["type"]=> string(4) "link" 
            ["date"]=> string(23) "2012-11-01 02:29:00 GMT" 
            ["timestamp"]=> int(1351736940) 
            ["state"]=> string(9) "published" 
            ["format"]=> string(4) "html" [
            "reblog_key"]=> string(8) "WHl4L8yB" 
            ["tags"]=> array(5) { [0]=> string(4) "risd" [1]=> string(11) "photolucida" [2]=> string(14) "steven b smith" [3]=> string(17) "color photography" [4]=> string(24) "Contemporary Photography" } 
            ["short_url"]=> string(28) "http://tmblr.co/ZRjH4wWMapol" 
            ["highlighted"]=> array(0) { } 
            ["note_count"]=> int(4) 
            ["title"]=> string(88) "Steve Smith is a top 50 winner in this year's Photolucida Critical Mass. Congrats Steve!" 
            ["url"]=> string(74) "http://www.photolucida.org/cm_winners.php?aID=4442&CMYear=2012&event_id=14" ["description"]=> string(0) "" } Notice: Undefined property: stdClass::$image_permalink in /Users/jewelmlnarik/Sites/bcp7/EventScrapBook/hashtagmerge.php on line 290 Notice: Undefined property: stdClass::$caption in /Users/jewelmlnarik/Sites/bcp7/EventScrapBook/hashtagmerge.php on line 291 object(stdClass)#278 (17) { ["blog_name"]=> string(25) "physicalfactpsychiceffect" ["id"]=> int(26993917944) ["post_url"]=> string(91) "http://whitesunlight.com/post/26993917944/this-month-im-on-the-wall-in-a-group-sho
            */
            break;

            case 'text':
            $row->img = false;
            $row->caption = $object->title."<br />".get_friendly_text($object->body);
            break;

            case 'link':
            $row->img = false;
            $row->caption = $object->title."<br />".$object->url;
            break;
        }

        $list[] = $row;
    }
    jmeDisplay($list);
    break;

// vimeo
    case 'vimeo':
    require_once('src/vimeo/vimeo.php');
    $event = $config['events'][$hashtag];
    $vimeo = new phpVimeo(VIMEO_API_KEY,VIMEO_API_SECRET,VIMEO_OAUTH_TOKEN,VIMEO_OAUTH_TOKEN_SECRET);
    $vimeo->enableCache(phpVimeo::CACHE_FILE, './cache', 300);
    $params = array('query'=>$event['name'],'per_page'=>20,'sort'=>'newest');
    if( !empty($_GET['i']) ){
        $params['page'] = $_GET['i'];
    }
    try {
        $response = $vimeo->call('vimeo.videos.search',$params);
    }
    catch (VimeoAPIException $e) {
        echo "Encountered an API error -- code {$e->getCode()} - {$e->getMessage()}";
    }
    //var_dump($response);
    $list = array();
    if( $response->stat == 'ok' ){
        $pages = ceil( $response->videos->total / $response->videos->perpage );
        foreach( $response->videos->video as $i => $r ){
            $row = new stdClass;
            if( $r->privacy == 'anybody' ){
                // embed_privacy = anywhere
                $row->pages = $pages;
                $row->page = $response->videos->page;
                $row->id = $r->id;
                $row->caption = $r->title;
                $row->shared_date = $r->upload_date;
                $row->owner = $r->owner;
                $row->owner_url = 'http://vimeo.com/user'.$r->id;
                // MORE INFO @ http://vimeo.com/api/v2/9441040/info.json
                $row->vid = new stdClass;
                    $row->vid->id = $r->id;
                    $row->vid->embed_provider = 'Vimeo';
                    $row->vid->embed_url = 'http://vimeo.com/api/oembed.json?url=http://vimeo.com/'.$r->id;
                    $row->vid->extrainfo_json_url = 'http://vimeo.com/api/v2/video/'.$r->id.'.json';
            }
            $list[] = $row;
        }
    }
    /*
    [generated_in] => 0.0687
    [stat] => ok
    [videos] => stdClass Object
        (
            [on_this_page] => 20
            [page] => 1
            [perpage] => 20
            [total] => 33
            [video] => Array
                (
                    [0] => stdClass Object
                        (
                            [embed_privacy] => anywhere
                            [id] => 64474022
                            [is_hd] => 0
                            [is_like] => 0
                            [is_watchlater] => 0
                            [license] => 0
                            [modified_date] => 2013-04-27 18:17:28
                            [owner] => 4264617
                            [privacy] => anybody
                            [title] => TEDx Portland 2011 Audio Visualization
                            [upload_date] => 2013-04-20 22:51:43
                        )
    */
    jmeDisplay($list);
    break;

// youtube
    case 'youtube':
    require 'src/php-sdk/src/library/temboo.youtube.php';
    $searchVideos = new YouTube_SearchVideos($session);
    $searchVideosInputs = $searchVideos->newInputs();
    $searchVideosInputs->setQuery($hashtag)->setResponseFormat("json");
    $searchResults = $searchVideos->execute($searchVideosInputs)->getResults();
    //var_dump($searchResults);
    $searchResultsJSON = json_decode($searchResults->getResponse());
    $objects = $searchResultsJSON->feed->entry;
    //var_dump($objects);
    /*
     ["feed"]=>
  object(stdClass)#6 (20) {
    ["xmlns"]=>
    string(27) "http://www.w3.org/2005/Atom"
    ["xmlns$media"]=>
    string(29) "http://search.yahoo.com/mrss/"
    ["xmlns$openSearch"]=>
    string(36) "http://a9.com/-/spec/opensearch/1.1/"
    ["xmlns$gd"]=>
    string(32) "http://schemas.google.com/g/2005"
    ["xmlns$gml"]=>
    string(26) "http://www.opengis.net/gml"
    ["xmlns$yt"]=>
    string(37) "http://gdata.youtube.com/schemas/2007"
    ["xmlns$georss"]=>
    string(28) "http://www.georss.org/georss"
    ["gd$etag"]=>
    string(28) "W/"CUEBR3Yzfip7I2A9WhBWEE8.""
    ["id"]=>
    object(stdClass)#8 (1) {
      ["$t"]=>
      string(27) "tag:youtube.com,2008:videos"
    }
    ["updated"]=>
    object(stdClass)#9 (1) {
      ["$t"]=>
      string(24) "2013-04-03T21:14:16.886Z"
    }
    ["category"]=>
    array(1) {
      [0]=>
      object(stdClass)#10 (2) {
        ["scheme"]=>
        string(37) "http://schemas.google.com/g/2005#kind"
        ["term"]=>
        string(43) "http://gdata.youtube.com/schemas/2007#video"
      }
    }
    ["title"]=>
    object(stdClass)#11 (1) {
      ["$t"]=>
      string(21) "Videos matching: bcp7"
    }
    ["logo"]=>
    object(stdClass)#12 (1) {
      ["$t"]=>
      string(53) "http://www.youtube.com/img/pic_youtubelogo_123x63.gif"
    }
    ["link"]=>
    array(7) {
      [0]=>
      object(stdClass)#13 (3) {
        ["rel"]=>
        string(9) "alternate"
        ["type"]=>
        string(9) "text/html"
        ["href"]=>
        string(22) "http://www.youtube.com"
      }
      [1]=>
      object(stdClass)#14 (4) {
        ["rel"]=>
        string(48) "http://schemas.google.com/g/2006#spellcorrection"
        ["type"]=>
        string(20) "application/atom+xml"
        ["href"]=>
        string(104) "http://gdata.youtube.com/feeds/api/videos?alt=json&q=bcp+7&start-index=1&max-results=10&oi=spell&spell=1"
        ["title"]=>
        string(5) "bcp 7"
      }
      [2]=>
      object(stdClass)#15 (3) {
        ["rel"]=>
        string(37) "http://schemas.google.com/g/2005#feed"
        ["type"]=>
        string(20) "application/atom+xml"
        ["href"]=>
        string(41) "http://gdata.youtube.com/feeds/api/videos"
      }
      [3]=>
      object(stdClass)#16 (3) {
        ["rel"]=>
        string(38) "http://schemas.google.com/g/2005#batch"
        ["type"]=>
        string(20) "application/atom+xml"
        ["href"]=>
        string(47) "http://gdata.youtube.com/feeds/api/videos/batch"
      }
      [4]=>
      object(stdClass)#17 (3) {
        ["rel"]=>
        string(4) "self"
        ["type"]=>
        string(20) "application/atom+xml"
        ["href"]=>
        string(86) "http://gdata.youtube.com/feeds/api/videos?alt=json&q=bcp7&start-index=1&max-results=10"
      }
      [5]=>
      object(stdClass)#18 (3) {
        ["rel"]=>
        string(7) "service"
        ["type"]=>
        string(23) "application/atomsvc+xml"
        ["href"]=>
        string(58) "http://gdata.youtube.com/feeds/api/videos?alt=atom-service"
      }
      [6]=>
      object(stdClass)#19 (3) {
        ["rel"]=>
        string(4) "next"
        ["type"]=>
        string(20) "application/atom+xml"
        ["href"]=>
        string(87) "http://gdata.youtube.com/feeds/api/videos?alt=json&q=bcp7&start-index=11&max-results=10"
      }
    }
    ["author"]=>
    array(1) {
      [0]=>
      object(stdClass)#20 (2) {
        ["name"]=>
        object(stdClass)#21 (1) {
          ["$t"]=>
          string(7) "YouTube"
        }
        ["uri"]=>
        object(stdClass)#22 (1) {
          ["$t"]=>
          string(23) "http://www.youtube.com/"
        }
      }
    }
    ["generator"]=>
    object(stdClass)#23 (3) {
      ["$t"]=>
      string(16) "YouTube data API"
      ["version"]=>
      string(3) "2.1"
      ["uri"]=>
      string(24) "http://gdata.youtube.com"
    }
    ["openSearch$totalResults"]=>
    object(stdClass)#24 (1) {
      ["$t"]=>
      int(171)
    }
    ["openSearch$startIndex"]=>
    object(stdClass)#25 (1) {
      ["$t"]=>
      int(1)
    }
    ["openSearch$itemsPerPage"]=>
    object(stdClass)#26 (1) {
      ["$t"]=>
      int(10)
    }
    ["entry"]=>
    array(10) {
      [0]=>
      object(stdClass)#27 (13) {
        ["gd$etag"]=>
        string(28) "W/"DkYFQX47eCp7I2A9Wx9bFEU.""
        ["id"]=>
        object(stdClass)#28 (1) {
          ["$t"]=>
          string(38) "tag:youtube.com,2008:video:MsBAvLpVIdA"
        }
        ["published"]=>
        object(stdClass)#29 (1) {
          ["$t"]=>
          string(24) "2011-02-14T15:59:21.000Z"
        }
        ["updated"]=>
        object(stdClass)#30 (1) {
          ["$t"]=>
          string(24) "2011-02-23T18:01:50.000Z"
        }
        ["category"]=>
        array(2) {
          [0]=>
          object(stdClass)#31 (2) {
            ["scheme"]=>
            string(37) "http://schemas.google.com/g/2005#kind"
            ["term"]=>
            string(43) "http://gdata.youtube.com/schemas/2007#video"
          }
          [1]=>
          object(stdClass)#32 (3) {
            ["scheme"]=>
            string(52) "http://gdata.youtube.com/schemas/2007/categories.cat"
            ["term"]=>
            string(4) "Film"
            ["label"]=>
            string(16) "Film & Animation"
          }
        }
        ["title"]=>
        object(stdClass)#33 (1) {
          ["$t"]=>
          string(23) "BCP 7 Movilidad Escolar"
        }
        ["content"]=>
        object(stdClass)#34 (2) {
          ["type"]=>
          string(29) "application/x-shockwave-flash"
          ["src"]=>
          string(73) "http://www.youtube.com/v/MsBAvLpVIdA?version=3&f=videos&app=youtube_gdata"
        }
        ["link"]=>
        array(6) {
          [0]=>
          object(stdClass)#35 (3) {
            ["rel"]=>
            string(9) "alternate"
            ["type"]=>
            string(9) "text/html"
            ["href"]=>
            string(64) "http://www.youtube.com/watch?v=MsBAvLpVIdA&feature=youtube_gdata"
          }
          [1]=>
          object(stdClass)#36 (3) {
            ["rel"]=>
            string(53) "http://gdata.youtube.com/schemas/2007#video.responses"
            ["type"]=>
            string(20) "application/atom+xml"
            ["href"]=>
            string(63) "http://gdata.youtube.com/feeds/api/videos/MsBAvLpVIdA/responses"
          }
          [2]=>
          object(stdClass)#37 (3) {
            ["rel"]=>
            string(51) "http://gdata.youtube.com/schemas/2007#video.related"
            ["type"]=>
            string(20) "application/atom+xml"
            ["href"]=>
            string(61) "http://gdata.youtube.com/feeds/api/videos/MsBAvLpVIdA/related"
          }
          [3]=>
          object(stdClass)#38 (3) {
            ["rel"]=>
            string(44) "http://gdata.youtube.com/schemas/2007#mobile"
            ["type"]=>
            string(9) "text/html"
            ["href"]=>
            string(42) "http://m.youtube.com/details?v=MsBAvLpVIdA"
          }
          [4]=>
          object(stdClass)#39 (3) {
            ["rel"]=>
            string(46) "http://gdata.youtube.com/schemas/2007#uploader"
            ["type"]=>
            string(20) "application/atom+xml"
            ["href"]=>
            string(63) "http://gdata.youtube.com/feeds/api/users/VZ0sLh3JlwpCIXJBcVUnQQ"
          }
          [5]=>
          object(stdClass)#40 (3) {
            ["rel"]=>
            string(4) "self"
            ["type"]=>
            string(20) "application/atom+xml"
            ["href"]=>
            string(53) "http://gdata.youtube.com/feeds/api/videos/MsBAvLpVIdA"
          }
        }
        ["author"]=>
        array(1) {
          [0]=>
          object(stdClass)#41 (3) {
            ["name"]=>
            object(stdClass)#42 (1) {
              ["$t"]=>
              string(8) "CircusTI"
            }
            ["uri"]=>
            object(stdClass)#43 (1) {
              ["$t"]=>
              string(49) "http://gdata.youtube.com/feeds/api/users/CircusTI"
            }
            ["yt$userId"]=>
            object(stdClass)#44 (1) {
              ["$t"]=>
              string(22) "VZ0sLh3JlwpCIXJBcVUnQQ"
            }
          }
        }
        ["yt$accessControl"]=>
        array(8) {
          [0]=>
          object(stdClass)#45 (2) {
            ["action"]=>
            string(7) "comment"
            ["permission"]=>
            string(9) "moderated"
          }
          [1]=>
          object(stdClass)#46 (2) {
            ["action"]=>
            string(11) "commentVote"
            ["permission"]=>
            string(6) "denied"
          }
          [2]=>
          object(stdClass)#47 (2) {
            ["action"]=>
            string(12) "videoRespond"
            ["permission"]=>
            string(9) "moderated"
          }
          [3]=>
          object(stdClass)#48 (2) {
            ["action"]=>
            string(4) "rate"
            ["permission"]=>
            string(6) "denied"
          }
          [4]=>
          object(stdClass)#49 (2) {
            ["action"]=>
            string(5) "embed"
            ["permission"]=>
            string(7) "allowed"
          }
          [5]=>
          object(stdClass)#50 (2) {
            ["action"]=>
            string(4) "list"
            ["permission"]=>
            string(7) "allowed"
          }
          [6]=>
          object(stdClass)#51 (2) {
            ["action"]=>
            string(8) "autoPlay"
            ["permission"]=>
            string(7) "allowed"
          }
          [7]=>
          object(stdClass)#52 (2) {
            ["action"]=>
            string(9) "syndicate"
            ["permission"]=>
            string(7) "allowed"
          }
        }
        ["gd$comments"]=>
        object(stdClass)#53 (1) {
          ["gd$feedLink"]=>
          object(stdClass)#54 (3) {
            ["rel"]=>
            string(46) "http://gdata.youtube.com/schemas/2007#comments"
            ["href"]=>
            string(62) "http://gdata.youtube.com/feeds/api/videos/MsBAvLpVIdA/comments"
            ["countHint"]=>
            int(2)
          }
        }
        ["media$group"]=>
        object(stdClass)#55 (13) {
          ["media$category"]=>
          array(1) {
            [0]=>
            object(stdClass)#56 (3) {
              ["$t"]=>
              string(4) "Film"
              ["label"]=>
              string(16) "Film & Animation"
              ["scheme"]=>
              string(52) "http://gdata.youtube.com/schemas/2007/categories.cat"
            }
          }
          ["media$content"]=>
          array(3) {
            [0]=>
            object(stdClass)#57 (7) {
              ["url"]=>
              string(73) "http://www.youtube.com/v/MsBAvLpVIdA?version=3&f=videos&app=youtube_gdata"
              ["type"]=>
              string(29) "application/x-shockwave-flash"
              ["medium"]=>
              string(5) "video"
              ["isDefault"]=>
              string(4) "true"
              ["expression"]=>
              string(4) "full"
              ["duration"]=>
              int(36)
              ["yt$format"]=>
              int(5)
            }
            [1]=>
            object(stdClass)#58 (6) {
              ["url"]=>
              string(95) "rtsp://v3.cache4.c.youtube.com/CiILENy73wIaGQnQIVW6vEDAMhMYDSANFEgGUgZ2aWRlb3MM/0/0/0/video.3gp"
              ["type"]=>
              string(10) "video/3gpp"
              ["medium"]=>
              string(5) "video"
              ["expression"]=>
              string(4) "full"
              ["duration"]=>
              int(36)
              ["yt$format"]=>
              int(1)
            }
            [2]=>
            object(stdClass)#59 (6) {
              ["url"]=>
              string(95) "rtsp://v3.cache4.c.youtube.com/CiILENy73wIaGQnQIVW6vEDAMhMYESARFEgGUgZ2aWRlb3MM/0/0/0/video.3gp"
              ["type"]=>
              string(10) "video/3gpp"
              ["medium"]=>
              string(5) "video"
              ["expression"]=>
              string(4) "full"
              ["duration"]=>
              int(36)
              ["yt$format"]=>
              int(6)
            }
          }
          ["media$credit"]=>
          array(1) {
            [0]=>
            object(stdClass)#60 (4) {
              ["$t"]=>
              string(8) "circusti"
              ["role"]=>
              string(8) "uploader"
              ["scheme"]=>
              string(11) "urn:youtube"
              ["yt$display"]=>
              string(8) "CircusTI"
            }
          }
          ["media$description"]=>
          object(stdClass)#61 (2) {
            ["$t"]=>
            string(0) ""
            ["type"]=>
            string(5) "plain"
          }
          ["media$keywords"]=>
          object(stdClass)#62 (0) {
          }
          ["media$license"]=>
          object(stdClass)#63 (3) {
            ["$t"]=>
            string(7) "youtube"
            ["type"]=>
            string(9) "text/html"
            ["href"]=>
            string(30) "http://www.youtube.com/t/terms"
          }
          ["media$player"]=>
          object(stdClass)#64 (1) {
            ["url"]=>
            string(71) "http://www.youtube.com/watch?v=MsBAvLpVIdA&feature=youtube_gdata_player"
          }
          ["media$thumbnail"]=>
          array(6) {
            [0]=>
            object(stdClass)#65 (5) {
              ["url"]=>
              string(45) "http://i.ytimg.com/vi/MsBAvLpVIdA/default.jpg"
              ["height"]=>
              int(90)
              ["width"]=>
              int(120)
              ["time"]=>
              string(8) "00:00:18"
              ["yt$name"]=>
              string(7) "default"
            }
            [1]=>
            object(stdClass)#66 (4) {
              ["url"]=>
              string(47) "http://i.ytimg.com/vi/MsBAvLpVIdA/mqdefault.jpg"
              ["height"]=>
              int(180)
              ["width"]=>
              int(320)
              ["yt$name"]=>
              string(9) "mqdefault"
            }
            [2]=>
            object(stdClass)#67 (4) {
              ["url"]=>
              string(47) "http://i.ytimg.com/vi/MsBAvLpVIdA/hqdefault.jpg"
              ["height"]=>
              int(360)
              ["width"]=>
              int(480)
              ["yt$name"]=>
              string(9) "hqdefault"
            }
            [3]=>
            object(stdClass)#68 (5) {
              ["url"]=>
              string(39) "http://i.ytimg.com/vi/MsBAvLpVIdA/1.jpg"
              ["height"]=>
              int(90)
              ["width"]=>
              int(120)
              ["time"]=>
              string(8) "00:00:09"
              ["yt$name"]=>
              string(5) "start"
            }
            [4]=>
            object(stdClass)#69 (5) {
              ["url"]=>
              string(39) "http://i.ytimg.com/vi/MsBAvLpVIdA/2.jpg"
              ["height"]=>
              int(90)
              ["width"]=>
              int(120)
              ["time"]=>
              string(8) "00:00:18"
              ["yt$name"]=>
              string(6) "middle"
            }
            [5]=>
            object(stdClass)#70 (5) {
              ["url"]=>
              string(39) "http://i.ytimg.com/vi/MsBAvLpVIdA/3.jpg"
              ["height"]=>
              int(90)
              ["width"]=>
              int(120)
              ["time"]=>
              string(8) "00:00:27"
              ["yt$name"]=>
              string(3) "end"
            }
          }
          ["media$title"]=>
          object(stdClass)#71 (2) {
            ["$t"]=>
            string(23) "BCP 7 Movilidad Escolar"
            ["type"]=>
            string(5) "plain"
          }
          ["yt$duration"]=>
          object(stdClass)#72 (1) {
            ["seconds"]=>
            string(2) "36"
          }
          ["yt$uploaded"]=>
          object(stdClass)#73 (1) {
            ["$t"]=>
            string(24) "2011-02-14T15:59:21.000Z"
          }
          ["yt$uploaderId"]=>
          object(stdClass)#74 (1) {
            ["$t"]=>
            string(24) "UCVZ0sLh3JlwpCIXJBcVUnQQ"
          }
          ["yt$videoid"]=>
          object(stdClass)#75 (1) {
            ["$t"]=>
            string(11) "MsBAvLpVIdA"
          }
        }
        ["yt$statistics"]=>
        object(stdClass)#76 (2) {
          ["favoriteCount"]=>
          string(1) "0"
          ["viewCount"]=>
          string(3) "186"
        }
      }*/

    foreach( $objects as $object )
    {
        //var_dump($object);
        $row = new stdClass;
        $row->img = new stdClass;
        $row->id = 0;
        $row->pages = $row->page = 0;
        $row->post_url = $row->img->link_url = $object->post_url;
        $row->likes = $object->note_count . "&nbsp;notes";
        $row->caption = $object->caption;
        $row->owner = $object->blog_name;
        $row->owner_url = 'http://'.$row->owner.'tumblr.com';
        $row->service = 'tumblr';

        if( $object->type == 'photo' ){
            $row->img->display_url = $object->image_permalink;
            //$row->img->width = $row->img->height = 0;
        }
    }
    $list[] = $row;
    jmeDisplay($list);
    break;
}

function get_friendly_text($text){
    if( strlen($text) > 200 ) return substr($text,0,200)."...";
    else return $text;
}

function parse_links($string){ 
    return $string;
    //return preg_replace('#http://(.*?)\s#i', '<a href="http://$1">$1</a>', $string); 
}  

function jmeDisplay($list){
    header('Content-Type: application/json');
    echo json_encode($list);
}
?>