<?php
function isPublished(DateTime $published, $draft)
{
  if ($draft) { return false; }
  $now = new DateTime();
  return $now >= $published;
}
$published = new DateTime('2010-12-16T18:00:00-05:00');
$draft = false;
var_dump(isPublished($published, $draft));
// bool(true)