<?php
$web_development = [
    'frontend' => [],
    'backend' => []
];

array_push($web_development['frontend'], 'xhtml');
array_push($web_development['backend'], 'ruby');
array_push($web_development['frontend'], 'css');
array_push($web_development['frontend'], 'flash');
array_push($web_development['frontend'], 'javascript');

$web_development['frontend'][0] = 'html';
unset($web_development['frontend'][2]);

print_r($web_development);