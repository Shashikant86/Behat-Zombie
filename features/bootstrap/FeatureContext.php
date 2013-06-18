<?php

class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{


  public function __construct()
    {
    	
    }

  /**
     * @Given /^I should explore headless driver$/
     */
    public function iShouldExploreHeadlessDriver()
    {
        print_r(get_class_methods($this->getSession()->getDriver()));

       //print_r($this->getSession()->getResponseHeaders());
    }

}
 