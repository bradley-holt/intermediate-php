<?php
interface Resource { /* … */ }
interface Dispatcher { /* … */ }

abstract class DispatchableResource implements Resource,Dispatcher
{
  protected $resource;
  public function getResource() {
    return $this->resource;
  }
  public function dispatch() {
    return 'Dispatched ' . $this->getResource();
  }
}