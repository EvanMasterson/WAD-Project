<?php
    /*
     * PHP SimpleXML
     * Loading a XML from a file, adding new elements and editing elements
     */
     

    
if(file_exists('colleges.xml')) {
        $cName = $_POST["cName"];
        $address = $_POST["address"];
        $postcode = $_POST["postcode"];
        $type = $_POST["type"];
        $pNumber = $_POST["pNumber"];
    // loads XML and returns SimpleXML
    $xml = simplexml_load_file('colleges.xml');
    
    //transforming the file in xml format
    $xmlFormat = $xml->asXML();
    //display element in proper format
    echo '<u><b>This is the xml code from colleges.xml:</b></u>
    <br /><br />
    <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />';
    
    //adding new child to XML
    $newChild = $xml->addChild('college');
    $newChild -> addChild('name', $cName.", ");
    $newChild -> addChild('address', $address.", ");
    $newChild -> addChild('postcode', $postcode.", ");
    $newChild -> addChild('type', $type.", ");
    $newChild -> addChild('phone', $pNumber." ");
    
    //transfering the object in XML format
    $xmlFormat = $xml->asXML();
    //display the element in proper format
    echo '<u><b>This is the xml code from rss.xml with new elements added:</b></u>
    <br /><br />
    <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';
} else{
    exit('Failed to open colleges.xml');
}
    file_put_contents('colleges.xml', $xml ->asXML() );
    
    writeRSS();
    function writeRSS(){
        if(file_exists('rss.xml')){
        $cName = $_POST["cName"];
        $address = $_POST["address"];
        $postcode = $_POST["postcode"];
        $type = $_POST["type"];
        $pNumber = $_POST["pNumber"];
        $stringDesc =$cName.", ".$address;
        // load XML in simple XML form
        
        $rssxml = simplexml_load_file('rss.xml');
        $newChild = $rssxml->channel->addChild('item');
        $newChild->addChild('title', "New College added! - ");
        $newChild->addChild('link', "https://wad-project-evanmasterson.c9users.io - Click to view College List! - ");
        $newChild->addChild('description', $stringDesc);
        file_put_contents('rss.xml', $rssxml->asXML());
        
        }
    }
?>