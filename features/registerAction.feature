Feature: register action

  Background:
    Given the user navigates to {https://birzha.tech/}
    Then the button /login/ should be visible
#
#    When the user clicks on object /login/
#
#  Scenario: Validate Login Form
#
#    Then the current URL should be equal to {https://birzha.tech/login}
#    And the object /registerInputLogin/ should be visible
#    And the object /registerInputPassword/ should be visible
#    And the object /inputEmail/ should be visible
#
#    Then fill the /registerInputLogin/ with value /+38(067)354-85-14/
#    And fill the /registerInputPassword/ with value /test1111/
#    And fill the /inputEmail/ with value /whiletablesits@gmail.com/
#
#    Then the object /termsCheckbox/ should be visible
#    And click on object /termsCheckbox/
#
#  Scenario: Submit button
#    Then Then the button /registerSubmit/ should be visible
#
#    When the user clicks on object /registerSubmit/
#    Then the current URL should be equal to {https://birzha.tech/login}