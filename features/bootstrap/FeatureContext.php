<?php

ini_set('log_errors', 'On');
ini_set('error_log', 'features/bootstrap/errors.log');

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

        if ($element->getAttribute('src') == '/images/logo.png') {
            echo 'PASSED';
        } else {
            var_dump($element->getAttribute('src'));
        }
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
                echo 'PASSED' . " " . $element->getText();
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
                echo 'PASSED' . " " . $element->getText();
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
                echo 'PASSED' . " " . $element->getText();
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
//        $element = $page->findAll('css', '.inputLogin');
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
        $elements = $page->findAll('css', '.inputLogin');
        foreach ($elements as $element) {
            if ($element[0]->getText() == 'Логін') {
                echo 'PASSED' . " " . $element->getText();
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
//        $element = $page->findAll('css', '.registration_form_plainPassword');
        $element = $page->findAll('xpath', '//*[@id="inputPassword"]');

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
        $elements = $page->findAll('xpath', '//*[@id="registration_form_plainPassword"]');
        foreach ($elements as $element) {
            if ($element->getText() == 'Пароль') {
                echo 'PASSED' . " " . $element->getText();
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
        $elements = $page->findAll('css', '.inputPassword');
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
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Then the button \/submit\/ should be visible
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
     * @Then the name of object \/submit\/ should be equal to \/Авторизуватися\/
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
        $elements = $page->findAll('css', '.inputLogin .data-mask');
        foreach ($elements as $element) {
            if ($element[0]->getText() == '+38(000)00-00-00-0') {
                echo 'PASSED' . " " . $element->getText();
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

    /**
     * @Then /^the current URL should be equal to \{https:\/\/birzha\.tech\/register\}$/
     */
    public function theCurrentURLShouldBeEqualToHttpsBirzhaTechRegister()
    {
        if ($this->getSession()->getCurrentUrl() == 'https://birzha.tech/register') {
            echo 'PASSED |' . 'CURRENT URL: ' . $this->getSession()->getCurrentUrl();
        } else {
            echo 'FALSE';
        }
    }

    /**
     * @Given /^the name of the object \/page title\/ should be equal to \/РЕЄСТРАЦІЯ\/$/
     */
    public function theNameOfTheObjectPageTitleShouldBeEqualToРЕЄСТРАЦІЯ()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->find('css', 'h1');
        if ($elements->getText() == 'РЕЄСТРАЦІЯ') {
            echo 'PASSED' . " " . $elements->getText();
        } else {
            echo 'FALSE' . $elements->getText();
        }

    }

    /**
     * @Then /^the object \/inputEmail\/ should be visible$/
     */
    public function theObjectInputEmailShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
//        $element = $page->findAll('сss', '.registration_form_email');
        $element = $page->findAll('xpath', '//*[@id="registration_form_email"]');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Given /^the label for \/inputEmail\/ should be \/Email\/$/
     */
    public function theLabelForInputEmailShouldBeEmail()
    {
        $page = $this->getSession()->getPage();
//        $elements = $page->findAll('css', '.registration_form_email');
        $elements = $page->find('xpath', '//*[@id="registration_form"]/div[2]/label');
        foreach ($elements as $element) {
            if ($element->getText() == 'Email') {
                echo 'PASSED' . " " . $element->getText();
                var_dump($element);
            } else {
                echo 'FALSE' . $element->getText();
            }
        }

    }

    /**
     * @Then /^the object \/termsCheckbox\/ should be visible$/
     */
    public function theObjectTermsCheckboxShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.registration_form_agreeTerms');
        $element = $page->find('xpath', '//*[@id="registration_form_agreeTerms"]');


        if ($element->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Given /^the label  of of object \/termsCheckbox\/ should be equal to \/Я підтверджую свою згоду\/$/
     */
    public function theLabelOfOfObjectTermsCheckboxShouldBeEqualToЯПідтверджуюСвоюЗгоду()
    {
        $page = $this->getSession()->getPage();
//        $elements = $page->findAll('css', '.registration_form_agreeTerms');
        $elements = $page->find('xpath', '//*[@id="registration_form"]/div[4]/label');
        foreach ($elements as $element) {
            if ($element->getText() === 'Я підтверджую свою згоду') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @When /^the user clicks on object \/registerSubmit\/$/
     */
    public function theUserClicksOnObjectRegisterSubmit()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.registration_form_submit');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        echo $this->getSession()->getCurrentUrl();
    }

    /**
     * @Given /^the object \/register Page title\/ should be visible$/
     */
    public function theObjectRegisterPageTitleShouldBeVisible()
    {
        $page = $this->getSession()->getPage();

        $element = $page->find('css', 'h1');
        if ($element->isVisible()) {
            echo 'VISIBLE' . " " . $element->getText();
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then /^the object \/registerInputLogin\/ should be visible$/
     */
    public function theObjectRegisterInputLoginShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->find('xpath','//*[@id="registration_form_login"]');
//        $element = $page->findAll('css', '.registration_form_login');

        if ($element->isVisible()) {
            echo 'VISIBLE'. " " . $element->getText();
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Given /^the label for \/registerInputLogin\/ should be \/Логін\/$/
     */
    public function theLabelForRegisterInputLoginShouldBeЛогін()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->find('xpath','//*[@id="registration_form"]/div[1]/label');
//        $elements = $page->findAll('css', '.registration_form_login');
        foreach ($elements as $element) {
            if ($element->getText() == 'Логін') {
                echo 'PASSED' . " " . $element->getText();
                var_dump($element);
            } else {
                echo 'FALSE' . $element->getText();
            }
        }
    }

    /**
     * @Given /^the value of of object \/registerInputLogin\/ should be equal to \/\+38\(000\)00\-00\-00\-0\/$/
     */
    public function theValueOfOfObjectRegisterInputLoginShouldBeEqualTo380000000000()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.registration_form_login');
        foreach ($elements as $element) {
            if ($element[0]->getText() == '+38(000)00-00-00-0') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Then /^the object \/registerInputPassword\/ should be visible$/
     */
    public function theObjectRegisterInputPasswordShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
//        $element = $page->findAll('css', '.inputPassword');
        $element = $page->findAll('xpath', '//*[@id="registration_form_plainPassword"]');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Given /^the label for \/registerInputPassword\/ should be \/Пароль\/$/
     */
    public function theLabelForRegisterInputPasswordShouldBeПароль()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('xpath', '//*[@id="registration_form"]/div[3]/label');
        foreach ($elements as $element) {
            if ($element->getText() == 'Пароль') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . $element->getText();
            }
        }
    }

    /**
     * @Given /^the value of of object \/registerInputPassword\/ should be equal to NULL$/
     */
    public function theValueOfOfObjectRegisterInputPasswordShouldBeEqualToNULL()
    {
        $page = $this->getSession()->getPage();
//        $elements = $page->findAll('css', '.inputPassword');
        $elements = $page->find('xpath', '//*[@id="registration_form_plainPassword"]');
        foreach ($elements as $element) {
            if ($element->getText() == NULL) {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Given /^the value of of object \/inputEmail\/ should be equal to NULL$/
     */
    public function theValueOfOfObjectInputEmailShouldBeEqualToNULL()
    {
        $page = $this->getSession()->getPage();
//        $elements = $page->findAll('css', '.registration_form_email');
        $elements = $page->find('xpath', '//*[@id="registration_form_email"]');
        foreach ($elements as $element) {
            if ($element->getText() == NULL) {
                echo 'PASSED';
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @Then /^fill the \/registerInputLogin\/ with value \/\+38\(067\)354\-85\-14\/$/
     */
    public function fillTheRegisterInputLoginWithValue380673548514()
    {
        try {

            $page = $this->getSession()->getPage();
            $element = $page->find('сss', '.inputLogin');

            if ($element->isVisible()) {
                $element->setValue('+38(067)354-85-14');
            } else {
                echo 'NOT FOUND';
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @Given /^fill the \/registerInputPassword\/ with value \/test1111\/$/
     */
    public function fillTheRegisterInputPasswordWithValueTest1111()
    {
        throw new PendingException();
    }

    /**
     * @Given /^fill the \/inputEmail\/ with value \/whiletablesits@gmail\.com\/$/
     */
    public function fillTheInputEmailWithValueWhiletablesitsGmailCom()
    {
        throw new PendingException();
    }

    /**
     * @Given /^click on object \/termsCheckbox\/$/
     */
    public function clickOnObjectTermsCheckbox()
    {
        throw new PendingException();
    }

    /**
     * @Then /^fill the \/inputLogin\/ with value \/\+38\(095\)470\-04\-86\/$/
     */
    public function fillTheInputLoginWithValue380673548514()
    {
        $page = $this->getSession()->getPage();
//        $element = $page->find('сss', '.inputLogin');
        $element = $page->find('xpath', '//*[@id="inputLogin"]');

        if ($element->isVisible()) {
            $element->setValue('+38(095)470-04-86');
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Given /^fill the \/inputPassword\/ with value \/123456789\/$/
     */
    public function fillTheInputPasswordWithValueTest1111()
    {
        $page = $this->getSession()->getPage();
//        $element = $page->find('css', '.registration_form_plainPassword');
        $element = $page->find('xpath', '//*[@id="inputPassword"]');
        if ($element->isVisible()) {
            $element->setValue('123456789');
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Given /^click on object \/checkBox\/$/
     */
    public function clickOnObjectCheckBox()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.checkbox');
        foreach ($element as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
    }


    /**
     * @Then the object \/info\/ should be visible
     */
    public function theObjectInfoShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
//        $element = $page->findAll('css', '.btn-primary');
        $element = $page->find('xpath', '/html/body/main/div/div/form/div[2]');
        if ($element->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }


    /**
     * @Then the link \/info\/ should be visible
     */
    public function theLinkInfoShouldBeVisible()
    {

      $page = $this->getSession()->getPage();
        $element = $page->find('xpath', '/html/body/main/div/div/form/div[2]/a');
        if ($element->isVisible()) {
            echo 'VISIBLE' . " " . $element->getText();
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the value of attribute href of object \/info\/ should be equal to {\/register}
     */
    public function theValueOfAttributeHrefOfObjectInfoShouldBeEqualToRegister()
    {
        $page = $this->getSession()->getPage();

        $element = $page->find('xpath', '/html/body/main/div/div/form/div[2]/a');

        if ($element->getAttribute('href') == '/register') {
            echo 'PASSED'. " ". $element->getAttribute('href');
        } else {
            echo 'FALSE' . " " . $element->getAttribute('href');
        }
    }

    /**
     * @Then the name of link \/info\/ should be equal to \/Увійдіть\/
     */
    public function theNameOfLinkInfoShouldBeEqualToUviidit()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->find('xpath', '/html/body/main/div/div/form/div[2]/a');
        foreach ($elements as $element) {
            if ($element->getText() == 'Увійдіть') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }

    /**
     * @When the user clicks on link \/info\/
     */
    public function theUserClicksOnLinkInfo()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->find('xpath', '/html/body/main/div/div/form/div[2]/a');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        echo $this->getSession()->getCurrentUrl();
    }

    /**
     * @Then Then the button \/registerSubmit\/ should be visible
     */
    public function thenTheButtonRegistersubmitShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $element = $page->findAll('css', '.submit');

        if ($element[0]->isVisible()) {
            echo 'VISIBLE';
        } else {
            echo 'NOT FOUND';
        }
    }

    /**
     * @Then the name of object \/registerSubmit\/ should be equal to \/Наступний крок\/
     */
    public function theNameOfObjectRegistersubmitShouldBeEqualToAvtorizuvatisia()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.submit');
        foreach ($elements as $element) {
            if ($element->getText() == 'Наступний крок') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }



//        $page = $this->getSession()->getPage();
//        $elements = $page->findAll('css', '.inputLogin');
//        foreach ($elements as $element) {
//            if ($element[0]->getText() == 'Логін') {
//                echo 'PASSED' . " " .  $element->getText();
//                var_dump($element);
//            } else {
//                echo 'FALSE' . $element->getText();
//            }
//        }


    /**
     * @Then /^the current URL should be equal to \{https:\/\/birzha\.tech\}$/
     */
    public function theCurrentURLShouldBeEqualToHttpsBirzhaTech()
    {
        if ($this->getSession()->getCurrentUrl() == '/') {
            echo 'PASSED |' . 'CURRENT URL: ' . $this->getSession()->getCurrentUrl();
        }
    }


    /**
     * @Given /^the name of object \/info\/ should be equal to \/Не маєш власного облікового запису\?\/$/
     */
    public function theNameOfObjectInfoShouldBeEqualToНеМаєшВласногоОбліковогоЗапису()
    {
        $page = $this->getSession()->getPage();
//        $elements = $page->findAll('css', '.btn-primary');
        $elements = $page->find('xpath', '/html/body/main/div/div/form/div[2]');
        foreach ($elements as $element) {
            if ($element->getText() == 'Не маєш власного облікового запису?') {
                echo 'PASSED' . " " . $element->getText();
            } else {
                echo 'FALSE' . " " . $element->getText();
            }
        }
    }
}
