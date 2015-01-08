<?php
class Registry
{
private $_obj=array();
  public static function Set($name,$object){
    self::$_obj[$name]=$object;
  }

  public static function &Get($name){
  return self::$_obj[$name];
  }


}
