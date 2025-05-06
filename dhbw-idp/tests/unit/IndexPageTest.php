<?php

namespace Tests\Feature;

use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class IndexPageTest extends CIUnitTestCase
{
    use FeatureTestTrait; // Include the FeatureTestTrait for feature testing

    public function testIndexPageLoadsSuccessfully()
    {
        // Send a GET request to the root URL
        $result = $this->get('/');

        // Assert that the response status is 200 (OK)
        $result->assertStatus(200);
    }

    public function testIndexPageContainsUsernameAndPasswordFields()
    {
        // Send a GET request to the root URL
        $result = $this->get('/');

        // Assert that the response contains input fields for username and password
        $result->assertSeeElement('input#username', 'Contains username field');
        $result->assertSeeElement('input#password', 'Contains password field');
    }
}