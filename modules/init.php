<?php
//	 URI
	if (isset($_SERVER['ORIG_PATH_INFO']))
	{
		$url = explode('/', $_SERVER['ORIG_PATH_INFO']);
	}
	
//	 Check if page is set, if not give the values
	if (!isset($url[1])) {
		$url[1] = "accueil";
	}
	
	// Setting second directory
	if (isset($url[2])) {
		$subpage = $url[2];
	}

	// Smarter way
	$p = $url[1];
	
	$page_title = ucwords($p);
	
	if(isset($subpage))
		$page_title .= " " . $subpage;
	
?>
