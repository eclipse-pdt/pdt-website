<?php
/* QuickRss

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

-------------------------------------------------------------------------------
$Id: feedcreator.class.php,v 1.4 2007/07/24 21:46:04 rganor Exp $

*/

/** A class for generating RSS 0.91 newsfeeds
 *@author Andy Chase <achase@greyledge.net>
 *@copyright 2002
 *@version 0.1
 *@access public
 */
class QuickRss{

  /** The channel copyright date.
   *@var int
   */
  var $copyright;

  /** The channel description.
   *@var string
   */
  var $description;

  /** An array of RssItem objects that describe the channel content.
   *@var array(RssItem)
   */
  var $items = array();

  /** The channel language
   *@var string
   */
  var $language = "en";

  /** The main URL to the channel
   *@var string
   */
  var $link;

  /** The channel title
   *@var string
   */
  var $title;

  /** Sets the object's title
   *@param string $newTitle The new title for the object
   *@access public
   */
  function setTitle($newTitle){
    $this->title = $newTitle;
  }

  /** Sets the object's description
   *@param string $newDescription The new description for the object
   *@access public
   */
  function setDescription($newDescription){
    $this->description = $newDescription;
  }

  /** Sets the object's copyright date
   *@param string $newCopyright The new copyright date for the object
   *@access public
   */
  function setCopyright($newCopyright){
    $this->copyright = $newCopyright;
  }

  /** Sets the main link (URL) for the object.
   *@param string $newLink
   *@access public
   */
  function setLink($newLink){
    $this->link = $newLink;
  }

  /** Adds a new item to the channel contents.
   *@param RssItem $newItem
   *@access public
   */
  function addItem($newItem){
    //Make sure $newItem is an 'rssitem' object
    if(!is_a($newItem, "rssitem")){
      //Stop execution with an error message
      trigger_error("Can't add a non-RssItem object to the QuickRss-&gt;items array");
    }
    $this->items[] = $newItem;
  }

  /** Sets the object's language.
   *@param string $newLanguage
   *@access public
   */
  function setLanguage($newLanguage){
    $this->language = $newLanguage;
  }


  /** Generates the RSS data based on object properties.
   *@param string $fileName The file name to save the RSS file as.  If $fileName is empty, buildRss returns the RSS data as a string.
   *@access public
   *@return [void|string]
   */
  function buildRss($fileName = null){
    $rss = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n<rss version=\"0.91\">\n\t<channel>";
    $rss .= "\t\t<title>$this->title</title>\n";
    $rss .= "\t\t<language>$this->language</language>\n";
    $rss .= "\t\t<copyright>$this->copyright</copyright>\n";
    $rss .= "\t\t<description>$this->description</description>\n";
    $rss .= "\t\t<link>$this->link</link>\n";

    foreach($this->items as $item){
      $rss .= "\t\t<item>\n\t\t\t<title>$item->title</title>\n";
      $rss .= "\t\t\t<link>$item->link</link>\n";
      $rss .= "\t\t\t<description>$item->description</description>\n\t\t</item>\n\n";
    }

    $rss .= "\t</channel>\n</rss>";

    if(!is_null($fileName)){
      $fh = fopen($fileName, 'w');
      fwrite($fh, $rss);
      fclose($fh);
    }else{
      return $rss;
    }


  }

  /** Provides a way to create a new QuickRss object and set its basic properties all at once.
   *@param string $userTitle The title of the new object.
   *@param string $userDescription The description of the new object.
   *@param string $userLink The link for the new object.
   *@param string $userCopyright the copyright for the new object.  Defaults to the current year.
   *@return QuickRss A QuickRss object with title, description, link and copyright properties already set.
   *@access public
   */
  function initNew($userTitle, $userDescription, $userLink, $userCopyright = null){
    $rss = new QuickRss();
    $rss->setTitle($userTitle);
    $rss->setDescription($userDescription);
    $rss->setLink($userLink);
    if(!is_null($userCopyright)){
      $rss->setCopyright($userCopyright);
    }else{
      $rss->setCopyright(date("Y"));
    }

    return $rss;

  }

}

/** A simple class for storing RSS "Items", to be added to QuickRss objects.
 *@author Andy Chase <achase@greyledge.net>
 *@copyright 2002
 *@access public
 *@version 0.1
 */
class RssItem{
  /** The item title.
   *@var string
   */
  var $title;
  /** The item link.
   *@var string
   */
  var $link;
  /** The item description.
   *@var string
   */
  var $description;

  /** Assigns constructor parameters to their corresponding object properties.
   *@access public
   *@param string $userTitle The title to use for the new RSS item.
   *@param string $userLink The link to use for the new RSS item.
   *@param string $userDescription The description to use for the new RSS item.
   */
  function RssItem($userTitle, $userLink, $userDescription){
    $this->title = $userTitle;
    $this->link = $userLink;
    $this->description = $userDescription;
  }
}

?>