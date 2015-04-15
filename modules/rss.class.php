<?php
  class RSS
  {
	public function RSS()
	{
		require_once ('config.php');
	}

	public function GetFeed()
	{
		return $this->getDetails() . $this->getItems();
	}

	private function dbConnect()
	{
		DEFINE ('LINK', mysql_connect (DB_HOST, DB_USER, DB_PASSWORD));
	}

	private function getDetails()
	{
		$detailsTable = "rss_details";
		$this->dbConnect($detailsTable);
		$query = "SELECT * FROM ". $detailsTable;
		$result = mysql_db_query (DB_NAME, $query, LINK);

		while($row = mysql_fetch_array($result))
		{
			$details = '<?xml version="1.0" encoding="ISO-8859-1" ?>
				<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
					<channel>
						<title>'. $row['title'] .'</title>
						<link>'. $row['link'] .'</link>
						<description>'. $row['description'] .'</description>
						<language>'. $row['language'] .'</language>
						<atom:link href="'. $row['link'] .'/site/rss.php" rel="self" type="application/rss+xml" />
						<image>
							<title>'. $row['image_title'] .'</title>
							<url>'. $row['image_url'] .'</url>
							<link>'. $row['image_link'] .'</link>
							<width>'. $row['image_width'] .'</width>
							<height>'. $row['image_height'] .'</height>
						</image>';
		}
		return $details;
	}

	private function getItems()
	{
		$itemsTable = "rss_items";
		$this->dbConnect($itemsTable);
		$query = "SELECT * FROM ". $itemsTable;
		$result = mysql_db_query (DB_NAME, $query, LINK);
		$items = '';
		while($row = mysql_fetch_array($result))
		{
			$items .= '<item>
				<title>'. $row["title"] .'</title>
				<link>'. $row["link"] .'</link>
				<pubDate>'. $row["pubDate"] .'</pubDate>
				<description><![CDATA['. $row["description"] .']]></description>';
					
				if($row['author'] != "" & $row['email'] !="")
					$items .='<author>'. $row["email"] .' ('. $row["author"] .')</author>';
				if($row['category'] != "")
					$items .='<category>'. $row["category"] .'</category>';
				if($row['comments'] != "")
					$items .='<comments>'. $row["comments"] .'</comments>';
				if($row['source'] != "")
					$items .='<source>'. $row["source"] .'</source>';
					
				if($row['guid'] == "")
					$guid = $row["link"];
				else
					$guid = $row["guid"];
					
				$items .='<guid>'. $guid .'</guid>';

			$items .= '</item>';
		}
		$items .= '</channel>
				</rss>';
		return $items;
	}

}

?>