<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\NumberImplementation;
use Kata\FizzBuzz\Fizz;
use Kata\FizzBuzz\Buzz;

class FizzBuzzGameBoard {
  private $limit;
  private $board;

  public function __construct($limit) {
    $this->limit = $limit;
    $this->build();
  }

  private function build() {
    $this->board = array();

    for ($i = 1; $i <= $this->limit; $i++) {
      if ($i % 3 == 0) {
        $this->board[] = new Fizz();
      }
      else if ($i % 5 == 0) {
        $this->board[] = new Buzz();
      }
      else {
        $this->board[] = new NumberImplementation($i);
      }
    }
  }

  public function steps() {
    return $this->board;
  }
}

?>
