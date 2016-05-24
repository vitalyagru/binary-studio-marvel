<?php
require __DIR__ . '/vendor/autoload.php';

echo Marvel\NamorSubMaries::whoami();
  // $test = new Hello\Test;
  // $test->sayHello();
trait RandomQuote {
// $quotes = ['A dream becomes a goal when action is taken toward its achievement.',
//             'It does not matter how slowly you go so long as you do not stop.',
//             'Everything takes longer than you think.',
//             'Fortune is easily found, but hard to be kept.',
//             'The actions of men are the best interpreters of their thoughts.',
//             'Money speaks sense in a language all nations understand.',
//             'To the world you may be just one person, but to one person you may be the world.',
//             'Experience is the name every one gives to their mistakes.',
//             'Success is not in what you have, but who you are.',
//             'Illusion is the first of all pleasures.'];
  public function getQuote(){
    return 'BBBBBBBBBBBBBb';
  }
}

class Greeting {

  use RandomQuote;

  public function say($name) {
    echo 'Hi, ' . $name . '! There is a new quote for you: ' . $this->getQuote();
  }
}


$obj = new Greeting();
$obj->say('Diesel');
