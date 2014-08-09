<?php

	// Include the phpQuery library
	// Download at http://code.google.com/p/phpquery/
	include 'phpQuery.php';

	// Load Mike Fisher's player page on thescore.com
	/*$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.thescore.com/nhl/player_profiles/859-mike-fisher');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($ch);
	curl_close($ch);*/
    $html = file_get_contents("http://www.flipkart.com/fastrack-backpack/p/itmdpzj2qukg7gjh?pid=BKPDHG5DQJJCKBM8&srno=b_1&ref=7e36a5a0-9e27-4943-9afa-03cd3f3455ed");
	// Create phpQuery document with returned HTML
	$doc = phpQuery::newDocument($html);

	// Create array to hold stats
	$stats = array();

	// Add stats from page to array
	// Notice the CSS style selector
	foreach($doc['h1[itemprop]'] as $td)
	{
		$stats[] = pq($td)->html();
	}

	// Display stats
	print_r($stats);

	foreach($doc['.prices'] as $td)
	{
		$stats[] = pq($td)->html();
	}

	// Display stats
	print_r($stats);


//$content = file_get_contents("http://www.cba.am/am/SitePages/Default.aspx");

//$content = file_get_contents("http://www.flipkart.com/fastrack-backpack/p/itmdpzj2qukg7gjh?pid=BKPDHG5DQJJCKBM8&srno=b_1&ref=7e36a5a0-9e27-4943-9afa-03cd3f3455ed");
/*
preg_match('#<b>USD</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $USDmatch);
preg_match('#<b>EUR</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $EURmatch);
preg_match('#<b>GBP</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $GBPmatch);
*/

//preg_match('"/<h1 itemprop=\"name\">(.*?)<\/h1>/s";', $content, $flip);
/*$eur = $EURmatch[3];
$usd = $USDmatch[3];
$gbp = $GBPmatch[3];
*/
//$out = $flip[3];
//var_dump( $flip[1]);
//																																																																																																																																																																																																																																																																																																														echo "Contents:".$content;
//echo "EUR: $eur USD: $usd GBP: $gbp";
//echo $content;
//echo "Product : $out";

/*$sPattern = "/<li class=\"sample\">(.*?)<\/li>/s";
$sText = "blah blah blah <li class=\"sample\">hello world!</li> blah blah blah";
preg_match($sPattern,$sText,$aMatch);
echo '<pre>'.$aMatch[1].'</pre>';*/








    /*$yourentirehtml = file_get_contents("http://www.flipkart.com/dell-vostro-2520-laptop-3rd-gen-ci3-4gb-500gb-ubuntu/p/itmdhjvnhhpuy9js?pid=COMDHJVNHHPUY9JS&srno=b_1&ref=bb9b4463-7d6a-41e7-8a90-cd4f12c10762");
    
preg_match("/<h1[^>]*itemprop=\"name\">(.*?)<\\/h1>/si", $yourentirehtml, $match);
$content = $match[1];*/


?>

