<? 

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
 * Project Specific variables
 */
$fetchArticles = 200;
$server = "news.eclipse.org"; 
$serverLogin = "exquisitus"; 
$serverPassword = "flinder1f7"; 
$group = "eclipse.tools.pdt";
$articles = 15;
$version = "RSS0.91";

/**
 * Determines if the full text of articles is fetched and included in the feed.
 * Also determines max article size fetched (larger articles appear as headlines
 * with a notice that they've been too large).
 */
if ($fetchArticles)
	$maxArticleSize = 5000;


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

include("feedcreator.class.php"); 
include("Net/NNTP/Client.php"); 

define("newsreaderGroupLink","news:"); 
define("newsreaderArticleLink","news:"); 

/**************************************************/ 
/*                    real code                   */                   
/**************************************************/ 
@set_time_limit(20); 

$version = strtoupper($version); 
if ($version=="") { 
    $version = "RSS0.91"; 
} 

if ($version!="MBOX") { 
    $filename = "/home/data/httpd/writable/pdt/".str_replace(".","_",$group.".".$version).".xml"; 
} else { 
    $filename = "/home/data/httpd/writable/pdt/".str_replace(".","_",$group.".".$version).".mbox"; 
} 

$rss = new UniversalFeedCreator(); 
$rss->useCached($filename, $cacheTimeout); 

$conn = new Net_NNTP_Client();
$conn->connect($server);
$result = $conn->authenticate($serverLogin,$serverPassword); 
if (PEAR::isError($result)) {
    die($result->getMessage()); 
} 

$result = $conn->selectGroup($group); 
if (PEAR::isError($result)) { 
    die($result->getMessage()); 
} 

// get newsgroup description 
$result = $conn->cmdListNewsgroups($group); 
if (PEAR::isError($result)) { 
} else { 
    $groupDescription = $result[$group]; 
}

// determine which articles to load 
$last = $conn->last(); 
$first = $last-$articles+1; 
$first = max($first,$conn->first()); 

// load the latest articles
$articles = $conn->getOverview("$first-$last"); 
if (PEAR::isError($articles)) { 
    die($articles->getMessage()); 
}

// build the rss 
$rss->title = $group; 
$rss->description = $groupDescription; 
$rss->link = "http://www.eclipse.org/newsportal/thread.php?group=$group"; 
$rss->feedURL = "http://www.eclipse.org/newsportal/thread.php?group=$group"; 

foreach($articles as $key => $article) {
    $subject = $article['Subject']; 
    $from = $article['From']; 
    
    $subject = htmlspecialchars($subject); 
    $from = htmlspecialchars($from); 
    
    $item = new FeedItem(); 
    $item->title = $subject;
    $articleNumber = $article['Number']; 
    $item->link = "http://www.eclipse.org/newsportal/article.php?id=$articleNumber&group=$group#$articleNumber"; 
     
    if ($fetchArticles) {
    	$body = $conn->getBody($articleNumber, true);
		if (PEAR::isError($body)) {
			$item->description = "An error occured while retrieving this message from the server.";
		} else {
			$item->description = nl2br(htmlspecialchars(substr($body, 0, $fetchArticles)));
		}
    } else {
    	$item->description = $subject; 
    }
    $item->date = $article['Date']; 
    $item->source = $group; 
    $item->author = $from; 
     
    $rss->addItem($item); 
} 

// close the connection, it isn't needed any more 
$conn->quit(); 
$rss->saveFeed($version, $filename);

?> 
