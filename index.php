<?php

require 'vendor/autoload.php';
use CowSay\Cow;

$marguerite = new Cow('Hello Guys');
$marguerite->setTongue('U');
$output = $marguerite->say();
echo $output;


