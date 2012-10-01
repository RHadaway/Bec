<?PHP
 
    //SET XML HEADER
    header('Content-type: text/xml');
 
    //CONSTRUCT RSS FEED HEADERS
    $output = '<rss version="2.0">';
    $output .= '<channel>';
    $output .= '<title>Executax</title>';
    $output .= '<description>New income tax information.</description>';
    $output .= '<link>http://www.executax.ca/</link>';
    $output .= '<pubDate>Date Published</pubDate>';
    $output .= '<author>Brian</author>';

    
 
    //BODY OF RSS FEED
    
   $oitem = new rss();
   	foreach($oitem->find ('1 order by pubdate DESC limit 0,30')as $oitem){
   		$output .= '<item>';
   		$output .= "<title>$oitem->title </title>";
   		$output .= "<description>$oitem->description</description>";
   		$output .= "<link>$oitem->link</link>";
   		$output .= "<pubDate>$oitem->pubdate</pubDate>";
   		$output .= "<author>$oitem->author</author>";
   		$output .= "</item>\n";
   	}
   	
 
 
    //CLOSE RSS FEED
   $output .= '</channel>';
   $output .= '</rss>';
 
    //SEND COMPLETE RSS FEED TO BROWSER
    echo($output);
 
?>
