<?php
    /*
     * PHP SimpleXML
     * Loading a XML from a file, adding new elements and editing elements
     */
     
$contact_email = Trim(stripslashes($_POST["contact_email"]));
$contact_name = Trim(stripslashes($_POST["contact_name"]));
$contact_message = Trim(stripslashes($_POST["contact_message"]));

    
if(file_exists('contact.xml')) {
    // loads XML and returns SimpleXML
    $xml = simplexml_load_file('contact.xml');
    
    //transforming the file in xml format
    $xmlFormat = $xml->asXML();
    //display element in proper format
    echo '<u><b>This is the xml code from contact.xml:</b></u>
    <br /><br />
    <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />';
    
    //adding new child to XML
    $newChild = $xml->addChild('details');
    $newChild -> addChild('email', $contact_email);
    $newChild -> addChild('name', $contact_name);
    $newChild -> addChild('message', $contact_message);
    
    //transfering the object in XML format
    $xmlFormat = $xml->asXML();
    //display the element in proper format
    echo '<u><b>This is the xml code from contact.xml with new elements added:</b></u>
    <br /><br />
    <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';
} else{
    exit('Failed to open contact.xml');
}
    file_put_contents('contact.xml', $xml ->asXML() );
   
?>