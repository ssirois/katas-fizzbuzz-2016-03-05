<?php

namespace Kata\FizzBuzz;

class FizzBuzzGame {
  private $outputStream;
  private $limit;

  public function __construct($outputStream = STDOUT) {
    $this->outputStream = $outputStream;
  }

  public function setLimit($limit) {
    $this->limit = $limit;
  }

  public function play() {
    $needASeparator = false;
    for ($i = 1; $i <= $this->limit; $i++) {
      if ($needASeparator) {
        fwrite($this->outputStream, ' ');
      }

      if ($i % 3 == 0) {
        fwrite($this->outputStream, 'Fizz');
      }
      else if ($i % 5 == 0) {
        fwrite($this->outputStream, 'Buzz');
      }
      else {
        fwrite($this->outputStream, $i);
      }

      $needASeparator = true;
    }
  }
}

?>
