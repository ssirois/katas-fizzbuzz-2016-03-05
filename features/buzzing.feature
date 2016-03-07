Feature: Buzzing
  In order to play FizzBuzz
  When a number is divisible by five
  Then I should see "Buzz"

  Scenario: Buzz on number five
    Given a FizzBuzzGame application exists
    When I play up to number 5
    Then I should see "1 2 Fizz 4 Buzz"
