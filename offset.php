<?php
/**
 * Created by PhpStorm.
 * User: annana
 * Date: 5/13/2019
 * Time: 1:36 PM
 */

echo "<script type=\\"text/javascript\\">";
echo "var localtime = new Date();";
echo "var unixtime = Math.floor(localtime.getTime() / 1000);";
echo "var timezone = (unixtime - " . mktime() . ");";
echo "timezone = Math.round(timezone / 3600);";
echo "document.location.href = '" . $_SERVER["PHP_SELF"] . "?timezone=' + timezone;";
echo "</script>";


?>