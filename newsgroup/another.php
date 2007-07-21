<? 
echo "hello world";
/*************************************************************************** 

nntp2rss v1.5
(c) Kai Blankenhorn 
www.bitfolge.de 
kaib@bitfolge.de 

This program is free software; you can redistribute it and/or 
modify it under the terms of the GNU General Public License 
as published by the Free Software Foundation; either version 2 
of the License, or (at your option) any later version. 

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details. 

You should have received a copy of the GNU General Public License 
along with this program; if not, write to the Free Software 
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA. 

**************************************************************************** 


Changelog: 

v1.5    07-25-04 By Roy Ganor
    update versions of pear + RSS creator

v1.4    07-25-04
    added the option to fetch and include full article bodies

v1.3    11-11-03 
    uses FeedCreator's new caching 
    uses new Net_NNTP 0.10.x 
    better error checking 
    better documentation 

v1.2    10-02-03 
    Google parameters can now be set via the URL 
    added Google and newsreader link to each post's description 
    now uses the new Net_NNTP 0.2 instead of my own custom version 
    code cleanup 

v1.1    06-28-03 
    better error checking 

v1.0    06-25-03 
    initial release 



***************************************************************************/ 


/**************************************************/ 
/*                   Installation                 */                   
/************************************************** 


Unpack all the files in the archive to a directory. Make sure to also 
unpack or create the cache subdirectory. 


Explanation of the script's URL parameters: 

server              string        the server name (optional) 
group               string        the group name (optional, defaults to comp.lang.php) 
articles            integer       the number of articles to fetch (optional, defaults to 10, maximum 25) 
version             string        the specification and version the created feed should comply to, 
                                  one of "RSS0.91", "RSS1.0", "RSS2.0", "PIE0.1", "mbox" (optional, 
                                  defaults to RSS0.91) 
googleLinks         boolean       wether to use links to Google Groups for article and group links 
                                  (optional, defaults to false) 
googleThreaded      boolean       wether or not to use threaded view in Google Groups when viewing 
                                  an article (optional, defaults to true) 


Example: 
http://yourhost.com/nntp2rss.php?server=news.someserver.net&articles=25&version=RSS1.0&group=alt.fan.britney-spears&googleLinks=true 


/**************************************************/ 
/*                  Initialization                */
/**************************************************/
$usedVars = Array("fetchArticles", "googleLinks", "googleThreaded", "server", "serverLogin", "serverPassword", "group", "articles");
extract($usedVars);

/**************************************************/ 
/*                   Configuration                */
/**************************************************/
/**
 * Determines if the full text of articles is fetched and included in the feed.
 * Also determines max article size fetched (larger articles appear as headlines
 * with a notice that they've been too large).
 */
$fetchArticles = 200;
if ($fetchArticles)
	$maxArticleSize = 5000;

/** 
 * Determines wether to use links to Google Groups for article 
 * and group links. 
 */ 
if (!$googleLinks) 
    $googleLinks = false; 

/** 
 * Determines wether to use threaded view in Google Groups 
 * when viewing an article. 
 */ 
if (!$googleThreaded) 
    $googleThreaded = false; 

/** 
 * Sets the default server and login data 
 * Get more servers on http://www.newzbot.com/ or register for free at 
 * http://news.individual.net/. 
 */ 
if (!$server) { 
    $server = "news.eclipse.org"; 
    $serverLogin = "exquisitus"; 
    $serverPassword = "flinder1f7"; 
} 

echo "hello world";

// default group 
if (!$group) 
    $group = "eclipse.tools.pdt"; 

// default and failover maximum number of articles 
if (!$articles OR $articles>25 OR $articles<1) 
    $articles = 10; 

// timeout for cached feeds in seconds 
$cacheTimeout = 1800; 


/**************************************************/ 
/*                    Functions                   */                   
/**************************************************/ 

