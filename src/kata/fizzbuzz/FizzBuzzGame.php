<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\Screen;
use Kata\FizzBuzz\Number;
use Kata\FizzBuzz\NumberImplementation;
use Kata\FizzBuzz\Fizz;
use Kata\FizzBuzz\Buzz;

class FizzBuzzGame {
  private $screen;
  private $limit;
  private $gameSet;

  public function __construct($screen) {
    $this->screen = $screen;
  }

  public function setLimit($limit) {
    $this->limit = $limit;
  }

  public function play() {
    $this->buildGameSet();

    foreach($this->gameSet as $number) {
      $this->screen->display($number);
    }
  }

  private function buildGameSet() {
    $this->gameSet = array();

    for ($i = 1; $i <= $this->limit; $i++) {
      if ($i % 3 == 0) {
        $this->gameSet[] = new Fizz();
      }
      else if ($i % 5 == 0) {
        $this->gameSet[] = new Buzz();
      }
      else {
        $this->gameSet[] = new NumberImplementation($i);
      }
    }
  }
}

?>
