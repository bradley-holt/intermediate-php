<?php
$post = array(
  'id'          => 1234,
  'title'       => 'Intermediate PHP',
  // …
);
foreach ($post as $k => $v) {
  echo $k . ': ' . $v . PHP_EOL;
}
/*
id: 1234
title: Intermediate PHP
…
 */