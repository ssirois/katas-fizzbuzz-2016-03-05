<?php

namespace Kata\FizzBuzz;

use Kata\FizzBuzz\Screen;
use Kata\FizzBuzz\FizzBuzzGameBoard;
use Kata\FizzBuzz\Number;

class FizzBuzzGame {
  private $screen;
  private $gameBoard;

  public function __construct($screen) {
    $this->screen = $screen;
  }

  public function play($start, $end) {
    $this->gameBoard = new FizzBuzzGameBoard($start, $end);

    foreach($this->gameBoard as $number) {
      $this->screen->display($number);
    }
  }
}

?>
