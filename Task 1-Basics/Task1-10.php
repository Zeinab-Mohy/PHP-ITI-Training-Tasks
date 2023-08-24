<?php

echo "phpversion ".phpversion()."<br>";
echo phpinfo()."<br>";
echo "get_ip_address ".$_SERVER['REMOTE_ADDR']."<br>";

echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
echo "<pre>";
print_r($browser);
echo "<pre>";
?>