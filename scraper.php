<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
 $link = array("https://www.betkingtipsters.com/soccer-tipster/charlie-loton", 
                "https://www.betkingtipsters.com/soccer-tipster/hayden-randall");



  for($id = 0; $id <= sizeof($link);$id++)
	
	
	{
	 $url =  [$link][$id]
	echo "$url\n";
	$link2 = file_get_html($url);
    
  }
  
  die();
  
// // Find something on the page using css selectors

//
// // Write out to the sqlite database using scraperwiki library
// scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
