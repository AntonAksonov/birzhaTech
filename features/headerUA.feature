Feature: header(UA)(not registered)

  Background:
    Given the user navigates to {https://birzha.tech/}

#  Scenario: Validate "logo"
#    When the user navigates to {https://birzha.tech/}
    Then the object /logo/ should be visible
    And the value of attribute src of object /logo/ should be equal to {/images/logo.png}


#  Scenario: Validate the /menu/ and the sublinks
#    When the user navigates to {https://birzha.tech/}
    Then the object /menu/ should be visible
    And the object /language/ should be visible
    And the object /currencies/ should be visible
    And the object /phone/ should be visible


#  Scenario: Validate the /login/ button
#    When the user navigates to {https://birzha.tech/}
    Then the button /login/ should be visible
    And the value of attribute href of object /login/ should be equal to {/login}
    And the name of object /login/ should be equal to /вхід/

    When the user clicks on object /login/
    And the return code of URL from attribute href of object /login/ should be equal to /two hundred/

#  Scenario: Validate the /register/ button
#    When the user navigates to {https://birzha.tech/}
    Then the button /register/ should be visible
    And the name of object /register/ should be equal to /Реєстрація/

    When the user clicks on object /register/
    Then the value of attribute href of object /registration/ should be equal to {/register}
    And the return code of URL from attribute href of object /register/ should be equal to /two hundred/























#  Scenario: Validate the menu "Collections" and the sublinks
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Collection should be visible
#
#    When the user clicks on object Main.Menu_Collection
#    Then the object Main.SubMenu_Collection should be visible
#    And the return code of URL from attribute href of object Main.SubMenu_Collection.Links should be equal to TWO HUNDRED For all linkS
#
#  Scenario: Validate the menu "Univers Tissot"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Brand should be visible
#    And the return code of URL from attribute href of object Main.Menu_Brand should be equal to TWO HUNDRED
#
#  Scenario: Validate the menu "Service Client"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_CustomerService should be visible
#    And the return code of URL from attribute href of object Main.Menu_CustomerService should be equal to TWO HUNDRED
#
#  Scenario: Validate the menu "Selection Pays" and the sublinks
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_CountrySelection should be visible
#
#    When the user clicks on object Main.Menu_CountrySelection
#    Then the object Main.Popup_CountrySelection should be visible
#    And the return code of URL from attribute href of object Main.Popup_CountrySelection.Links should be equal to TWO HUNDRED For all linkS
#
#  Scenario: Validate the menu "Rechercher"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Search should be visible
#
#    When the user clicks on object Main.Menu_Search
#    Then the object Main.Search.Input should be visible
#
#  Scenario: Validate the menu "Store Locator"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_StoreLocator should be visible
#    And the return code of URL from attribute href of object Main.Menu_StoreLocator should be equal to TWO HUNDRED
#
#  Scenario: Validate the menu "Enregistrer Montre"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_RegisterWatch should be visible
#    And the return code of URL from attribute href of object Main.Menu_RegisterWatch should be equal to TWO HUNDRED
#
#  Scenario: Validate the menu "Mon Compte"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_MyAccount should be visible
#    And the return code of URL from attribute href of object Main.Menu_MyAccount should be equal to TWO HUNDRED
#
#  Scenario: Validate the menu "Mon Panier"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_MyCart should be visible
#    And the return code of URL from attribute href of object Main.Menu_MyCart should be equal to TWO HUNDRED

