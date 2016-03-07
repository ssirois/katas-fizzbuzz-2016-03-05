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

  public function play($limit) {
    $this->gameBoard = new FizzBuzzGameBoard($limit);

    $steps = $this->gameBoard->steps();
    foreach($steps as $number) {
      $this->screen->display($number);
    }
  }
}

?>
