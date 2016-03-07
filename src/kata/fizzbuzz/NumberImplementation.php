<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\Number;

class NumberImplementation implements Number {
  private $number;

  public function __construct($number) {
    $this->number = $number;
  }

  public function __toString() {
    return strval($this->number);
  }
}

?>
