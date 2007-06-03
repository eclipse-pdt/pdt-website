
<?

require_once 'rss_fetch.inc';

$url = 'http://download.eclipse.org/tools/pdt/downloads/rss/center.xml';
$rss = fetch_rss($url);

echo "Site: ", $rss->channel['title'], "<br>
";
foreach ($rss->items as $item ) {
	$title = $item[title];
	$url   = $item[link];
	echo "<a href=$url>$title</a></li><br>
";
}

?>