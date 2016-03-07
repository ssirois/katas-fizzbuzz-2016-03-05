<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once __DIR__ . '/../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';

use Kata\FizzBuzz\FizzBuzzGame;
use Kata\FizzBuzz\VirtualScreen;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $game;
    private $screen;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given a FizzBuzzGame application exists
     */
    public function aFizzbuzzgameApplicationExists()
    {
      $this->screen = new VirtualScreen();
      $this->game = new FizzBuzzGame($this->screen);
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
      $actual = $this->screen->getContent();
      assertEquals($expected, $actual);
    }
}
