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
echo "script 20:43\n";

include("feedcreator.class.php"); 
include("Net/NNTP/Client.php"); 

echo "script 20:44\n";

define("googleGroupLink","http://groups.google.com/groups?group="); 
define("googleArticleLinkThreaded","http://groups.google.com/groups?threadm="); 
define("googleArticleLinkSingle","http://groups.google.com/groups?selm="); 
define("newsreaderGroupLink","news:"); 
define("newsreaderArticleLink","news:"); 


/** 
 * Decodes a quoted printable string from ISO-8859-1 or ISO-8859-15 
 * to ASCII. 
 * 
 * @param string    string    A quoted printable string 
 * @return string    an ASCII string 
 */ 
function qp_decode($string) { 
    if (preg_match("~(.*)=\\?ISO-?8859-?15?\\?Q\\?([^?]*)\\?=(.*)~i",$string,$matches)) { 
        $temp = preg_replace("/=([0-9A-F]{2})/e", "chr(hexdec('\\1'))", $matches[2]); 
        $temp = strtr($temp,"_"," "); 
        return $temp.$matches[3]; 
    } else { 
        return $string; 
    } 
} 


/** 
 * Create a link pointing to an article in Google Groups or in the newsreader. 
 * 
 * @param string    msgid the message ID of the article to get a link to 
 * @param boolean    target how to choose the target of the link. auto: use the settings in $googleLinks; 
 *                GOOGLE: create a Google Groups link; NEWSREADER: create a news: type link 
 * @return string    an ASCII string 
 */ 
function articleLink($msgid,$target="auto") { 
    GLOBAL $googleLinks,$googleThreaded; 

    if (($target=="auto" AND $googleLinks) OR strtoupper($target)=="GOOGLE") { 
        if ($googleThreaded) { 
            $articleLink = googleArticleLinkThreaded; 
        } else { 
            $articleLink = googleArticleLinkSingle; 
        } 
    } elseif (($target=="auto" AND !$googleLinks) OR strtoupper($target)=="NEWSREADER") {
        $articleLink = newsreaderArticleLink; 
    } 
    return $articleLink.urlencode($msgid); 
} 


function groupLink($group) { 
    GLOBAL $googleLinks; 

    if ($googleLinks) { 
        $groupLink = googleGroupLink; 
    } else { 
        $groupLink = newsreaderGroupLink; 
    } 
     
    return $groupLink.urlencode($group); 
} 


/**************************************************/ 
/*                    real code                   */                   
/**************************************************/ 
echo "script 20:44\n"; 

@set_time_limit(20); 

$version = strtoupper($_GET["version"]); 
if ($version=="") { 
    $version = "RSS0.91"; 
} 
if ($version!="MBOX") { 
    $filename = "cache/".str_replace(".","_",$group.".".$version).".xml"; 
} else { 
    $filename = "cache/".str_replace(".","_",$group.".".$version).".mbox"; 
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

echo "script 20:45\n";

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

echo "script 20:46\n";

// build the rss 
$rss->title = $group; 
$rss->description = $groupDescription; 
$rss->link = groupLink($group); 
$rss->feedURL = "http://".$_SERVER["SERVER_NAME"].htmlspecialchars($_SERVER["REQUEST_URI"]); 

foreach($articles as $key => $article) {
    $subject = qp_decode($article[Subject]); 
    $from = qp_decode($article[From]); 
    
    $subject = htmlspecialchars($subject); 
    $from = htmlspecialchars($from); 
    
    $item = new FeedItem(); 
    $item->title = $subject; 
    $item->link = "http://www.eclipse.org/newsportal/article.php?id={$article[Number]}&group=$group#{$article[Number]}"; 
     
    if ($fetchArticles) {
    	$body = $conn->getBody($article[Number], true);
		if (PEAR::isError($body)) {
			$item->description = "An error occured while retrieving this message from the server.";
			$item->description.= "You might try getting the article from <a href=\"".articleLink(substr($key,1,-1),"GOOGLE")."\">Google Groups</a>.";
		} else {
			$item->description = nl2br(htmlspecialchars(substr($body, 0, $fetchArticles)));
		}
    } else {
    	$item->description = $subject; 
    }
    $item->date = $article[Date]; 
    $item->source = $group; 
    $item->author = $from; 
     
    $rss->addItem($item); 
} 

// close the connection, it isn't needed any more 
$conn->quit(); 
$rss->saveFeed($version, $filename);

?> 
