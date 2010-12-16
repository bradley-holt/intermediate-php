<?php
interface Resource {
  public function getResource();
}
interface Dispatcher {
  public function dispatch();
}

abstract class DispatchableResource implements Resource,Dispatcher
{
  // …
}
