<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\Screen;
use Kata\FizzBuzz\Number;

class VirtualScreen implements Screen {
  private $outputStream;
  private $needASeparator;

  public function __construct() {
    $this->outputStream = fopen('php://memory', 'w+');
    $this->needASeparator = false;
  }

  public function __destruct() {
    fclose($this->outputStream);
  }

  public function display(Number $number) {
    if ($this->needASeparator) {
      fwrite($this->outputStream, ' ');
    }

    fwrite($this->outputStream, $number);

    $this->needASeparator = true;
  }

  public function getContent() {
    return stream_get_contents($this->outputStream, -1, 0);
  }
}

?>
