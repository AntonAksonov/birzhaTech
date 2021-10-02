Feature: header(UA)(not registered)

  Background:
    Given the user navigates to {https://birzha.tech/}

    Then the object /logo/ should be visible
    And the value of attribute src of object /logo/ should be equal to {/images/logo.png}

    Then the object /menu/ should be visible
    And the object /language/ should be visible
    And the object /currencies/ should be visible
    And the object /phone/ should be visible

    Then the button /login/ should be visible
    And the value of attribute href of object /login/ should be equal to {/login}
    And the name of object /login/ should be equal to /вхід/

    When the user clicks on object /login/
    And the return code of URL from attribute href of object /login/ should be equal to /two hundred/

    Then the button /register/ should be visible
    And the name of object /register/ should be equal to /Реєстрація/

    When the user clicks on object /register/
    Then the value of attribute href of object /registration/ should be equal to {/register}
    And the return code of URL from attribute href of object /register/ should be equal to /two hundred/
