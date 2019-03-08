<?php

foreach (getallheaders() as $name => $value) {
    echo "<b>$name</b>: $value<br />\n";
}


echo "<br /><br /><b>\$_SERVER['HTTP_REFERER']</b>:";
echo $_SERVER['HTTP_REFERER'];

echo "<br /><br /><b>\$_SERVER:</b><br />";
print_r($_SERVER);

$pod = getenv('HOSTNAME');
echo "<br /><br />pod: <b>$pod</b><br />";
