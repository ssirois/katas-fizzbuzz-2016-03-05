<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\NumberImplementation;
use Kata\FizzBuzz\Fizz;
use Kata\FizzBuzz\Buzz;

class FizzBuzzGameBoard implements \IteratorAggregate {
  private $start;
  private $end;
  private $board;

  public function __construct($start, $end) {
    $this->start = $start;
    $this->end = $end;
    $this->build();
  }

  private function build() {
    $this->board = array();

    for ($i = $this->start; $i <= $this->end; $i++) {
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

  public function getIterator() {
    return new \ArrayIterator($this->board);
  }
}

?>
