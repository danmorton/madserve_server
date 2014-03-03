<?php
header('Content-Type: text/plain');

$passphrase = "f0rty6!$";
echo "Attempting git pull\n";
$r = shell_exec("cd /var/www/html/; git pull;");
echo "Results:\n" . $r;
