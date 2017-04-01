<?php Class timeposter {

public function create_post($post_id,$post_source){
$calculated_source = "uday";

if($post_source == $calculated_source){

$xmlFile =simplexml_load_file("users/uday/timeline.xml");
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->loadXML($xmlFile->asXML());
$items = $doc->getElementsByTagName('post');
$new_post = $doc->createElement("post");
$new_post->setAttribute("id",$post_id);
$new_post->setAttribute("source",$post_source);
$items->item(0)->parentNode->insertBefore($doc->appendChild($new_post), $items->item(0));
$tlfile = fopen("users/uday/timeline.xml","r+");
fwrite($tlfile,$doc->saveXML());
fclose($tlfile);
}
else {

$xmlFile =simplexml_load_file("users/".$post_source."/timeline.xml");
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->loadXML($xmlFile->asXML());
$items = $doc->getElementsByTagName('post');
$new_post = $doc->createElement("post");
$new_post->setAttribute("id",$post_id);
$new_post->setAttribute("source",$post_source);
$items->item(0)->parentNode->insertBefore($doc->appendChild($new_post), $items->item(0));
$tlfile = fopen("users/".$post_source."/timeline.xml","r+");
fwrite($tlfile,$doc->saveXML());
fclose($tlfile);


$xmlFile =simplexml_load_file("users/uday/timeline.xml");
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->loadXML($xmlFile->asXML());
$items = $doc->getElementsByTagName('post');
$new_post = $doc->createElement("post");
$new_post->setAttribute("id",$post_id);
$new_post->setAttribute("source",$post_source);
$new_post->setAttribute("ontimeline",$post_source);
$items->item(0)->parentNode->insertBefore($doc->appendChild($new_post), $items->item(0));
$tlfile = fopen("users/uday/timeline.xml","r+");
fwrite($tlfile,$doc->saveXML());
fclose($tlfile);


}




}


}
?>