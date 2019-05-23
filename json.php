<?php
/**
 * Created by PhpStorm.
 * User: annana
 * Date: 2/5/2018
 * Time: 10:44 AM
 */

$geoblocking[0]= array("type"=>"allow","country"=>"dz");
$geoblocking[1]= array("type"=>"allow","country"=>"qa");
$json = json_encode(array(
    "id" => "4",
    "title" => "Video - United States v Japan: US seek final redemption",
    "taxonomy" => "football",
    "site" => "/sites/4",
    "media" => array(
        "id" => "1",
        "type" => "2",
        "provider" => "dailymotion",
        "uri" => "http://www.dailymotion.com/embed/video/k3azv7obsaabnZc9oRj",
        "advertising_custom_target"=> "/MENA/en/football/other_leagues",
        "geoblocking" => $geoblocking,
        "duration" =>"128"
    )

));

echo $json;