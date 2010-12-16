<?php
class BasicPerson
{
  public static $sex = 'unisex';
  public static function getSex()
  {
    return static::$sex;
  }
}
class MalePerson extends BasicPerson
{
  public static $sex = 'male'; // LSB
}
echo BasicPerson::getSex(); // 'unisex'
BasicPerson::$sex = 'female';
echo BasicPerson::getSex(); // 'female'
echo MalePerson::getSex();  // 'male'