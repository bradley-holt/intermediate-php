<?php
function mostRecent()
{
  $max = false;
  foreach (func_get_args() as $arg) {
    $max = $arg > $max ? $arg : $max;
  }
  return $max;
}
$mostRecent = mostRecent(
    new DateTime('2010-12-14T18:00:00'),
    new DateTime('2010-12-16T18:00:00'),
    new DateTime('2010-12-15T18:00:00')
);
// 2010-12-16T18:00:00