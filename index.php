<?php
require __DIR__ . '/vendor/autoload.php';

 // echo Marvel\NamorSubMaries::whoami();
  // $test = new Hello\Test;
  // $test->sayHello();

class Application {
    public  function start() {
      $obj = new Marvel\Greeting();
      $obj->say();

      echo '<hr><h2> Задание 2 </h2>';
      echo Marvel\NamorSubMaries::whoami();
      echo Marvel\HankPym::whoami();
      echo Marvel\Wasp::whoami();
      echo Marvel\Thor::whoami();
      echo Marvel\IronMan::whoami();
      echo Marvel\Wonder::whoami();
      echo Marvel\CaptainBritain::whoami();
      echo Marvel\Beast::whoami();
    }
 }


$application = new Application();
$application->start();
