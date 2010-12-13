<?php
$post = array(
  // …
  'categories'  => array('PHP')
);
array_push($post['categories'], 'BTV');
echo array_pop($post['categories']);
// BTV
print_r($post['categories']);
/*
Array
(
    [0] => PHP
)
 */