<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\Number;

class Fizz implements Number {
  public function __toString() {
    return 'Fizz';
  }
}

?>
