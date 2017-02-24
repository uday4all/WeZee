 
<?php Class registry_data_filler {

function wezee_xml_updater($xml_path,$tag_variable,$value_to_update) {


$xmlDoc = new DOMDocument();
$xmlDoc -> load($xml_path);
$x = $xmlDoc -> documentElement;
foreach($x -> childNodes As $item) {

if($item == $tag_variable){

$item -> nodeValue = $value_to_update;

}


}
$myfile = fopen($xml_path,"w+") or die("Unable to open file");
fwrite($myfile,$xmlDoc->saveXML());
fclose($myfile);


}

} ?>
