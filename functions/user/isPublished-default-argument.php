<?php
function isPublished(DateTime $published, $draft, $now = false)
{
  if ($draft) { return false; }
  $now = $now ? $now : new DateTime();
  return $now >= $published;
}
$published = new DateTime('2010-12-16T18:00:00-05:00');
$draft = false;
$now = new DateTime('2010-12-16T17:59:59-05:00');
var_dump(isPublished($published, $draft, $now));
// bool(false)