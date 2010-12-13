<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
sort($post['categories']);
print_r($post['categories']);
/*
Array
(
    [0] => BTV
    [1] => PHP
)
 */