<?php
echo "Array of our url:".PHP_EOL;
var_export(parse_url($argv[1]));
echo PHP_EOL.PHP_EOL;

$query_str = parse_url($argv[1], PHP_URL_QUERY);
parse_str($query_str, $query_params);
echo "Our params:".PHP_EOL;
var_export($query_params);
echo PHP_EOL;

