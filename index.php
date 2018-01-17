<?php
$access_token = "EAAay2RMWI3sBAIZCjSg9lVOJzSx0ZCrjAbxiWXtUPrEWUSZCRGoIiEWplegMswuux3gLQHuwrBZAqb8TMAZAvW2IZC8uHZCy0zFrwnR45aloLvVcdj2nW7DhaJiZCgPn9QHsvdaRiEPMWSCKaZBRnUrEFBlnQZCLyPEDygye8teQ4A9mKk18z7dAH5";
$verify_token = "12132dffgfg";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}


if ($hub_verify_token === $verify_token) {
    echo $challenge;
}
?>