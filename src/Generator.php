<?php
namespace Binary_studio;

class Generator {
  public function generateTriangularNumbers($amount){
    while ($i <=  $amount){
      $res = ($i * ($i + 1)) / 2;
      $i++;
      yield $res;
    }
  }
  public function printTriangularNumbers($amount){
    $counter = 0 ;
    foreach ($this->generateTriangularNumbers($amount) as $number) {
     if ($counter != ($amount)) {
        echo $number . ', ';
      }
      else {
         echo $number . '. ';
      }
      $counter++;
    }
  }
}
