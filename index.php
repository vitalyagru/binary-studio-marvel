<?php
require __DIR__ . '/vendor/autoload.php';


class Application {
    public  function start() {
      $greeting = new Binary_studio\Greeting();
      $greeting->say();

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

      echo '<hr><h2> Задание 3 </h2>';
      $generate = new Binary_studio\Generator;
      $generate->printTriangularNumbers(15);
    }
 }


$application = new Application();
$application->start();




