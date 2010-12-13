<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
foreach ($post['categories'] as $v) {
  echo $v . PHP_EOL;
}
/*
PHP
BTV
 */