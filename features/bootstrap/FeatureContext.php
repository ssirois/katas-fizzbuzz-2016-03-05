<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once __DIR__ . '/../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';

use Kata\FizzBuzz\FizzBuzzGame;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $game;
    private $gameOutputStream;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
      $this->gameOutputStream = fopen('php://memory', 'w+');
    }

    public function __destruct()
    {
      fclose($this->gameOutputStream);
    }

    /**
     * @Given a FizzBuzzGame application exists
     */
    public function aFizzbuzzgameApplicationExists()
    {
      $this->game = new FizzBuzzGame($this->gameOutputStream);
    }

    /**
     * @Given game limit is :limit
     */
    public function gameLimitIs($limit)
    {
      $this->game->setLimit($limit);
    }

    /**
     * @When I play
     */
    public function iPlay()
    {
      $this->game->play();
    }

    /**
     * @Then I should see :expected
     */
    public function iShouldSee($expected)
    {
      $actual = stream_get_contents($this->gameOutputStream, -1, 0);
      assertEquals($expected, $actual);
    }
}
