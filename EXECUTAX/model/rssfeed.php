
<?PHP
 
    //SET XML HEADER
    header('Content-type: text/xml');
 
    //CONSTRUCT RSS FEED HEADERS
    $output = '<rss version="2.0">';
    $output .= '<channel>';
    $output .= '<title>Your RSS Feed Name or Website Name</title>';
    $output .= '<description>A description of your feed or site.</description>';
    $output .= '<link>http://www.yoursite.com/</link>';
    $output .= '<pubDate>Date Published</pubDate>';
    $output .= '<author>Name</author>';

 
    //BODY OF RSS FEED
   $output .= '<item>';
        $output .= '<title>Item Title</title>';
        $output .= '<description>Item Description</description>';
        $output .= '<link>Link to Item</link>';
        $output .= '<pubDate>Date Published</pubDate>';
        $output .= '<author>Name</author>';
   $output .= '</item> ';
 
    //CLOSE RSS FEED
   $output .= '</channel>';
   $output .= '</rss>';
 
    //SEND COMPLETE RSS FEED TO BROWSER
    echo($output);
 
?>
