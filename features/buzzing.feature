Feature: Buzzing
  In order to play FizzBuzz
  When a number is divisible by five
  Then I should see "Buzz"

  Scenario: Buzz on number five
    Given a FizzBuzzGame application exists
    And game limit is 5
    When I play
    Then I should see "1 2 Fizz 4 Buzz"
