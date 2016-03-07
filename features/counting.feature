Feature: Counting
  In order to play FizzBuzz
  As a player
  I need to be able to make the application count incrementally up to a certain number

  Scenario: Counting up to 1
    Given a FizzBuzzGame application exists
    When I play up to number 1
    Then I should see "1"

  Scenario: Counting up to 2
    Given a FizzBuzzGame application exists
    When I play up to number 2
    Then I should see "1 2"
