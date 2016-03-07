Feature: FizzBuzzing
  In order to play FizzBuzz
  When a number is divisible by three AND five
  Then I should see "FizzBuzz"

  Scenario: FizzBuzz on number fifteen
    Given a FizzBuzzGame application exists
    When I play between number 13 to 16
    Then I should see "13 14 FizzBuzz 16"
