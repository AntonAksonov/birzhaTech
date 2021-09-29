Feature: login form(UA)(not registered)

  Background:
    Given the user navigates to {https://birzha.tech/}
    Then the button /login/ should be visible

    When the user clicks on object /login/

  Scenario: Validate Login Form

    Then the current URL should be equal to {https://birzha.tech/login}
    And the object /page title/ should be visible
    And the name of the object /page title/ should be equal to /АВТОРИЗАЦІЯ/

    Then the object /inputLogin/ should be visible
    And the label for /inputLogin/ should be /Логін/
    And the value of of object /inputLogin/ should be equal to /+38(000)00-00-00-0/

    Then the object /inputPassword/ should be visible
    And the label for /inputPassword/ should be /Пароль/
    And the value of of object /inputPassword/ should be equal to NULL

    Then the object /checkBox/ should be visible
    And the label  of of object /checkBox/ should be equal to /Запам`ятати мене/

  Scenario: Submit button
    Then Then the button /submit/ should be visible
    And the name of object /submit/ should be equal to /купують/

    When the user clicks on object /submit/
    Then the current URL should be equal to {https://birzha.tech/login}