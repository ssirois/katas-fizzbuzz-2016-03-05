Feature: Fizzing
  In order to play FizzBuzz
  When a number is divisible by three
  Then I should see "Fizz"

  Scenario: Fizz on number three
    Given a FizzBuzzGame application exists
    When I play up to number 3
    Then I should see "1 2 Fizz"

  Scenario: Fizz on a number divisible by three
    Given a FizzBuzzGame application exists
    When I play up to number 6
    Then I should see "1 2 Fizz 4 Buzz Fizz"
