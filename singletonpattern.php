<?php
class Singleton
{
private static $instances=array();

//protected or private __construct to prevent instantiation from outside
  protected function __construct()
  {
  }
  //protected or private __clone to prevent instantiation from outside
  protected function __clone()
  {
  
  }
   //protected or private __wakeup to prevent deserializing  from outside
  public function __wakeup(){
  throw new Exception("Cannot unserialize Singleton");
  }
  public static function getInstance(){
    $cls=get_calledJ_class(); //late_static_bound_class name
    if(!isset(self::$instances[$cls])){
    self::$instances[$cls]=new static;
    }
    return self::$instance[$cls];
  }
}

//Test code:
class Foo extends Singleton{}
class Bar extends Singleton{}
echo get_class(Foo::getInstance())."\n";
echo get_class(Bar::getInstance())."\n";
