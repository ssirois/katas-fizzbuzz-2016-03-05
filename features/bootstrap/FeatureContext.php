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

    private $limit;

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
     * @When I play up to number :end
     */
    public function iPlayUpToNumber($end)
    {
      $this->game->play(1, $end);
    }

    /**
     * @When I play between number :start to :end
     */
    public function iPlayBetweenNumberTo($start, $end)
    {
      $this->game->play($start, $end);
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
