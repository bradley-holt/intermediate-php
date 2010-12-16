<?php
abstract class AbstractFoo
{
  abstract public function sayBar();
}

class Foo extends AbstractFoo
{
  public $bar;

  public function sayBar()
  {
    echo $this->bar;
  }
}