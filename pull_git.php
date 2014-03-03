<?php
header('Content-Type: text/plain');
echo "Attempting git pull\n";
$r = shell_exec("whoami && cd /var/www/html && /usr/bin/git pull 2>&1");
echo "Results:\n" . $r;
