<?php
header('Content-Type: text/plain');

$passphrase = "f0rty6!$";
echo "Attempting git pull\n";
$r = shell_exec("cd /var/www/html && /usr/bin/git pull");
echo "Results:\n" . $r;
