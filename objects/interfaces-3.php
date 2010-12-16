<?php
interface Resource { /* … */ }
interface Dispatcher { /* … */ }

abstract class DispatchableResource implements Resource,Dispatcher { /* … */ }

class TrafficCop extends DispatchableResource
{
  protected $resource = 'traffic cop';
}
$cop = new TrafficCop();
echo $cop->dispatch();
// 'Dispatched traffic cop'