###About Scrappie

Scrappie is both an online scrapbook instantly created for your event of choice - and a dynamic collation of conversation happening about a topic across many social medias and the world over. I created it to easily reminisce past events, prep for current events and inspire others to join active conversations independent of any social media sites you belong to.

It's a personal, side project of mine that you can see in action @ http://scrappie.us

Scrappie is powered by a collection of APIs, many of which are in the [Temboo Library](https://temboo.com/library/). It pulls in our collective experiences by:

 * Finding photos on [Instagram](https://temboo.com/library/Library/Instagram/)
 * Finding photos on [Flickr](https://temboo.com/library/Library/Flickr/)
 * Searching for videos on [Vimeo](http://vimeo.com/api)
 * Searching for tweets on [Twitter](https://temboo.com/library/Library/Twitter/)
 * Searching for posts on [Google Plus](https://temboo.com/library/Library/Google/)
 * Searching for related events on [Facebook](https://temboo.com/library/Library/Facebook/)
 * Searching for videos on [YouTube](https://temboo.com/library/Library/YouTube/)
 * Searching for posts by tags on [Tumblr](http://tumblr.com/api)
 * Searching Eventbrite for events [Eventbrite](http://developer.eventbrite.com/api)

Like a good gardener, I'd love to see this grow and have additional services added in as time allows. (Hint, hint, pull request, hint, hint ...)

###Contribute or Replicate

To replicate Scrappie in your environment:

 1. Sign up for a free account at [temboo.com](http://temboo.com)
 2. Fork or Clone the repo: `git clone git@github.com:juellez/Scrappie.git`
 3. Download the [Temboo PHP SDK](https://temboo.com/download) into your `scrappie/src` directory and make sure to inlcude the referenced library files:
  temboo.flickr.php
  temboo.google.php
  temboo.instagram.php
  temboo.twitter.php
  temboo.youtube.php
  temboo.facebook.php
 4. Copy `config.php.template` to `config.php` and edit with your Temboo credentials. Follow the links in the config file to establish credentials for each API.

Scrappie can be dropped into any web host running PHP 5 or later.

###How Can I Help?

Scrappie could use some UI prowess and general innovation. Do you have awesome CSS and JS chops? I've got a list of features I'd love to see to make this even more usable and I can only hope this list grows as others use Scrappie. Submit a pull request and perhaps we can make Scrappie even better, together.

 * Maximized for mobile - ability to preview full photos and posts without having to open another browser window.
 * Better scrolling - infinity scroll or more intuitive way to browse through more posts
 * Better user names - to avoid the rather robotic, id names returned by some APIs by default
 * Events database - to get my proof of concept out quickly, I created a simple array of events that I was most interested in. I'd like to see these go into a database that can be populated via the public and/or Eventbrite API

###Why PHP? Why no framework? Why not another language?

The short story is that PHP is what I know best. I'm hoping to use Scrappie as a project to better learn Ruby and Python next ... but there's not much under the hood as most of the heavy lifting is done by Temboo and JavaScript. So if you're reading this before it's available in your language and you want to see it in your language, please feel free to contribute! Or let me know and maybe I'll add it to this year's bucketlist.

###About Temboo and a Disclaimer

While I'm currently employed at Temboo, this is a side project of mine only and in no way reflects the opinions, relationships, investments or expertise of Temboo or my fellow co-workers.

The Temboo SDK provides normalized access to 100+ APIs, databases and more so you can spend less time wrestling with API specifics and more time building what matters to you.

Learn more, and get the Temboo SDK in your favorite language, at [temboo.com](https://temboo.com).

###Contact Information

Have a question or see a bug? Please contact me (not Temboo or any of the API providers) [@juellez](http://twitter.com/juellez).

###Copyright and License

Copyright 2013, Jewel Mlnarik [@juellez](http://twitter.com/juellez)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.