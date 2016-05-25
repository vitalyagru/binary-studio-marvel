<?php
require __DIR__ . '/vendor/autoload.php';


class Application {
    public  function start() {
      $obj = new Binary_studio\Greeting();
      $obj->say();

      echo '<hr><h2> Задание 1 </h2>';
      echo '<ul>';
      echo '<li>' . Binary_studio\Marvel\Atlantida\NamorSubMaries::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\NewYork\HankPym::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\NewJersey\Wasp::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\Asgard\Thor::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\NewYork\IronMan::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\NewJersey\Wonder::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\England\CaptainBritain::whoami() . '</li>';
      echo '<li>' . Binary_studio\Marvel\Illinois\Beast::whoami() . '</li>';
      echo '</ul>';
    }
 }


$application = new Application();
$application->start();
