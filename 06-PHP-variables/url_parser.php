<?php

$url = $argv[1];

/*если через short_options:
$options = getopt("u:");
$url = $options['u'];*/

/*если через long_options:
$options = getopt("",array ("url:"));
$url = $options['url'];*/

echo "Array of our url:" . PHP_EOL;
var_export(parse_url($url));
echo PHP_EOL . PHP_EOL;

$query_str = parse_url($url, PHP_URL_QUERY);
parse_str($query_str, $query_params);
echo "Our params:" . PHP_EOL;
var_export($query_params);
echo PHP_EOL;





