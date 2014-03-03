<?php
header('Content-Type: text/plain');

$passphrase = "f0rty6!$";
echo "Attempting git pull\nResults:\n";
echo shell_exec("cd /var/www/html/; git pull;");
