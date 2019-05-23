<?php
/**
 * Created by PhpStorm.
 * User: annana
 * Date: 8/28/2018
 * Time: 8:38 AM
 */

$json = file_get_contents('http://api.beinsports.com/epg_channels?site.id=4&itemsPerPage=150');
$obj = json_decode($json,true);
$records=$obj["hydra:member"];
//var_dump($records);

$html="";
$html.="<table border='1'>";
foreach($obj["hydra:member"] as $channel)
{
    $name=$channel["name"];
    $id=$channel["externalId"];

    $html.="<tr>";
    $html.="<td>". $name ."</td>";
    $html.="<td>". $id ."</td>";
    $html.="</tr>";

}
$html.="</table>";

echo $html;