<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
foreach ($post['categories'] as $k => $v) {
  echo $k . ': ' . $v . PHP_EOL;
}
/*
0: PHP
1: BTV
 */