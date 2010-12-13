<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
$post['categories'][] = 'Programming';
print_r($post['categories']);
/*
Array
(
    [0] => PHP
    [1] => BTV
    [2] => Programming
)
 */