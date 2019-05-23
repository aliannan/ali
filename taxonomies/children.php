<?php
/**
 * Created by PhpStorm.
 * User: annana
 * Date: 8/28/2018
 * Time: 8:38 AM
 */

$json = file_get_contents('http://api.beinsports.com/taxonomies/362');
$obj = json_decode($json,true);
$records=$obj["hydra:member"];
//var_dump($records);

$html="";
$html.="<table border='1'>";
foreach($obj["children"] as $channel)
{
    $name=$channel["name"];
    $id=$channel["@id"];
    $x=str_replace("/taxonomies/","",$id);
    $html.="<tr>";
    $html.="<td><h3>". $name ."</h3></td>";
    $html.="<td><h3>". $x ."</h3></td>";
    $html.="</tr>";

}
$html.="</table>";

echo $html;