<?php
namespace Binary_studio;
trait RandomQuote {
private $_quotes = ['A dream becomes a goal when action is taken toward its achievement.',
            'It does not matter how slowly you go so long as you do not stop.',
            'Everything takes longer than you think.',
            'Fortune is easily found, but hard to be kept.',
            'The actions of men are the best interpreters of their thoughts.',
            'Money speaks sense in a language all nations understand.',
            'To the world you may be just one person, but to one person you may be the world.',
            'Experience is the name every one gives to their mistakes.',
            'Success is not in what you have, but who you are.',
            'Illusion is the first of all pleasures.'];
  public function getQuote(){
    return  $this->_quotes [array_rand($this->_quotes, 1 )];
  }
}

class Greeting {

  use RandomQuote;

  public function say($name = 'Guest') {
    echo 'Hi, ' . $name . '! There is a new quote for you: &#10077;' . $this->getQuote() . '&#10078;';
  }
}
