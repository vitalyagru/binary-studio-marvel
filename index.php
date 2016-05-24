<?php
require __DIR__ . '/vendor/autoload.php';

echo Marvel\NamorSubMaries::whoami();
  // $test = new Hello\Test;
  // $test->sayHello();
trait RandomQuote {
  public function getQuote(){
    return;
  }
}

class Greeting {

  use RandomQuote;

  public function say($name) {
    echo 'Hi, ' . $name . '! There is a new quote for you: ' . $this->getQuote();
  }
}
