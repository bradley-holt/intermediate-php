<?php
$a = array(
  'foo' => 'bar',
);
$o = (object) $a;
echo $o->foo; // 'bar'