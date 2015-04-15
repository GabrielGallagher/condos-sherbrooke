<?php
include("config.php");

/*
function latest_feeds($limit)
{
	
	$query  = "SELECT * FROM rss_items ORDER BY id ASC LIMIT $limit";
	$result = mysql_query($query);

	echo '<ul>';
	
	while($row = mysql_fetch_assoc($result))
	{	
		$pubDate = date("F jS, Y", strtotime($row['pubDate'])); 
		echo'
		<li>
			<div class="li_feeds_main"><a href="?p=news&amp;id='.$row['id'].'">'.$row['title'].'</a></div>
			<div class="li_feeds_posted">Posted: '.$pubDate.'</div>
		</li>
		';
	}
	
	echo '</ul>';
}
*/

?>