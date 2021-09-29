<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context
{
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
     * @When the user navigates to {https:\/\/birzha.tech\/}
     */
    public function theUserNavigatesToHttpsBirzhaTech()
    {
        $session = $this->getSession();
        $session->visit($this->locatePath('/'));
        echo $this->getSession()->getCurrentUrl();
    }

    /**
     * @Then the object \/logo\/ should be visible
     */
    public
    function theObjectLogoShouldBeVisible()
    {

        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.container .logo');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the value of attribute src of object \/logo\/ should be equal to {\/images\/logo.png}
     */
    public
    function theValueOfAttributeSrcOfObjectLogoShouldBeEqualToImagesLogoPng()
    {
        $page = $this->getSession()->getPage();

        $element = $page->find('css', '.logo');
         var_dump($element->getAttribute('src'));
//        $elements = $page->findAll('css', '.logo');
//        foreach ($elements as $element) {
//            if ($element->getAttribute('src') == '/images/logo.png') {
//                echo 'PASSED';
//            } else {
//               var_dump($element->getAttribute('src')) ;
//            }
//        }
    }

    /**
     * @Then the object \/menu\/ should be visible
     */
    public
    function theObjectMenuShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.menu');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the object \/language\/ should be visible
     */
    public
    function theObjectLanguageShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.language');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the object \/currencies\/ should be visible
     */
    public
    function theObjectCurrenciesShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.currencies');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the object \/phone\/ should be visible
     */
    public
    function theObjectPhoneShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.phone');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the button \/login\/ should be visible
     */
    public
    function theButtonLoginShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.login');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }


    /**
     * @When the user clicks on object \/login\/
     */
    public
    function theUserClicksOnObjectLogin()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.login');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        echo $this->getSession()->getCurrentUrl();
    }


    /**
     * @Then the return code of URL from attribute href of object \/login\/ should be equal to \/two hundred\/
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectLoginShouldBeEqualToTwoHundred()
    {
//        $page = $this->getSession()->getPage();
//        $products = $page->findAll('css', '.login');
//        foreach ($products as $product) {
//            if ($product->isValid()) {
//                $url = $product->getAttribute('href');
        $handle = curl_init('https://birzha.tech/login');
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($handle);
        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if ($httpCode == 200) {
            echo 'STATUS CODE 200 | ' . PHP_EOL;
        } else {
            echo $httpCode;
        }
        curl_close($handle);
//            }
//        }
    }

    /**
     * @Then the button \/register\/ should be visible
     */
    public
    function theButtonRegisterShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.registration');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @When the user clicks on object \/register\/
     */
    public
    function theUserClicksOnObjectRegister()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.registration');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        echo $this->getSession()->getCurrentUrl();
    }

    /**
     * @Then the value of attribute href of object \/registration\/ should be equal to {\/register}
     */
    public function theValueOfAttributeHrefOfObjectRegistrationShouldBeEqualToRegister()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.buttons .registration');
        foreach ($elements as $element) {
            if ($element->getAttribute('href') == '/register') {
                echo 'PASSED';
            } else {
                echo 'FALSE';
            }
        }
    }

    /**
     * @Then the return code of URL from attribute href of object \/register\/ should be equal to \/two hundred\/
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectRegisterShouldBeEqualToTwoHundred()
    {
//        $page = $this->getSession()->getPage();
//        $products = $page->findAll('css', '.login');
//        foreach ($products as $product) {
//            if ($product->isValid()) {
//                $url = $product->getAttribute('href');


        $handle = curl_init('https://birzha.tech/register');
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($handle);
        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if ($httpCode == 200) {
            echo 'STATUS CODE 200 | ' . PHP_EOL;
        } else {
            echo $httpCode;
        }
        curl_close($handle);

    }


    /**
     * @And the value of attribute href of object \/login\/ should be equal to {\/login}
     */
    public function theValueOfAttributeHrefOfObjectLoginShouldBeEqualToLogin2()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.login');
        foreach ($elements as $element) {
            if ($element->getAttribute('href') == '/login') {
                echo 'PASSED';
            } else {
                echo 'FALSE';
            }
        }
    }

    /**
     * @Then the value of attribute href of object \/login\/ should be equal to {\/login}
     */
    public function theValueOfAttributeHrefOfObjectLoginShouldBeEqualToLogin()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.login');
        foreach ($elements as $element) {
            if ($element->getAttribute('href') == '/login') {
                echo 'PASSED';
            } else {
                echo 'FALSE';
            }
        }
    }

    /**
     * @Then the name of object \/login\/ should be equal to \/вхід\/
     */
    public function theNameOfObjectLoginShouldBeEqualToVkhid2()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.login');
        foreach ($elements as $element) {
            if ($element->getText() == 'Вхід') {
                echo 'PASSED';
            } else {
                echo 'FALSE' . $element->getText();
            }
        }
    }

    /**
     * @Then the name of object \/register\/ should be equal to \/Реєстрація\/
     */
    public function theNameOfObjectRegisterShouldBeEqualToReiestratsiia()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.registration');
        foreach ($elements as $element) {
            if ($element->getText() == 'Реєстрація') {
                echo 'PASSED';
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Given the user navigates to {https:\/\/birzha.tech\/login}
     */
    public function theUserNavigatesToHttpsBirzhaTechLogin()
    {
        $session = $this->getSession();
        $session->visit($this->locatePath('/'));
        echo $this->getSession()->getCurrentUrl();
    }


    /**
     * @Then the object \/page title\/ should be visible
     */
    public function theObjectPageTitleShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.h3');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the name of the object \/page title\/ should be equal to \/АВТОРИЗАЦІЯ\/
     */
    public function theNameOfTheObjectPageTitleShouldBeEqualToAvtorizatsiia()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.h3');
        foreach ($elements as $element) {
            if ($element->getText() == 'АВТОРИЗАЦІЯ') {
                echo 'PASSED' . " " .  $element->getText();
            } else {
                echo 'FALSE' . $element->getText();
            }
        }
    }

    /**
     * @Then the object \/inputLogin\/ should be visible
     */
    public function theObjectInputloginShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('xpath', '//*[@id="inputLogin"]');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the label for \/inputLogin\/ should be \/Логін\/
     */
    public function theLabelForInputloginShouldBeLogin()
    {

    $page = $this->getSession()->getPage();
        $elements = $page->findAll('xpath', '/html/body/main/div/div/form/label[1]');
        foreach ($elements as $element) {
            if ($element[0]->getText() == 'Логін') {
                echo 'PASSED' . " " .  $element->getText();
                var_dump($element);
            } else {
                echo 'FALSE' . $element->getText();
            }
        }

    }

    /**
     * @Then the value of of object \/inputLogin\/ should be equal to \/+:arg1(:arg2):arg3-:arg4-:arg5-:arg6\/
     */
    public function theValueOfOfObjectInputloginShouldBeEqualTo($arg1, $arg2, $arg3, $arg4, $arg5, $arg6)
    {
        throw new PendingException();
    }

    /**
     * @Then the object \/inputPassword\/ should be visible
     */
    public function theObjectInputpasswordShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.inputPassword');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the label for \/inputPassword\/ should be \/Пароль\/
     */
    public function theLabelForInputpasswordShouldBeParol()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('xpath', '/html/body/main/div/div/form/label[2]');
        foreach ($elements as $element) {
            if ($element->getText() == 'Пароль') {
                echo 'PASSED';
            } else {
                echo 'FALSE' . $element->getText();
            }
        }
    }

    /**
     * @Then the value of of object \/inputPassword\/ should be equal to NULL
     */
    public function theValueOfOfObjectInputpasswordShouldBeEqualToNull()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.inputLogin');
        foreach ($elements as $element) {
            if ($element->getText() == NULL) {
                echo 'PASSED';
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Then the object \/checkBox\/ should be visible
     */
    public function theObjectCheckboxShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.checkbox');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the label  of of object \/checkBox\/ should be equal to \/Запам`ятати мене\/
     */
    public function theLabelOfOfObjectCheckboxShouldBeEqualToZapamIatatiMene()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.checkbbox');
        foreach ($elements as $element) {
            if ($element->getText() == 'Запам`ятати мене') {
                echo 'PASSED';
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Then Then the button \/submit\/ should be visible
     */
    public function thenTheButtonSubmitShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.btn-primary');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the name of object \/submit\/ should be equal to \/купують\/
     */
    public function theNameOfObjectSubmitShouldBeEqualToKupuiut()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.btn-primary');
        foreach ($elements as $element) {
            if ($element->getText() == 'Авторизуватися') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @When the user clicks on object \/submit\/
     */
    public function theUserClicksOnObjectSubmit()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.btn-lg .btn-primary');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        echo $this->getSession()->getCurrentUrl();
    }



    /**
     * @Given /^the value of of object \/inputLogin\/ should be equal to \/\+38\(000\)00\-00\-00\-0\/$/
     */
    public function theValueOfOfObjectInputLoginShouldBeEqualTo380000000000()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.inputLogin');
        foreach ($elements as $element) {
            if ($element[0]->getText() == '+38(000)00-00-00-0') {
                echo 'PASSED';
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Then the current URL should be equal to {https:\/\/birzha.tech\/login}
     */
    public function theCurrentUrlShouldBeEqualToHttpsBirzhaTechLogin()
    {
        if ($this->getSession()->getCurrentUrl() == 'https://birzha.tech/login') {
            echo 'PASSED |' . 'CURRENT URL: ' . $this->getSession()->getCurrentUrl();
        }
    }

}