<?php

namespace Tests\Feature;

use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class ListPageTest extends CIUnitTestCase
{
    use FeatureTestTrait; // Include the FeatureTestTrait for feature testing

    public function testListPageLoadsSuccessfully()
    {
        // Send a GET request to the root URL
        $result = $this->get('/list-users');

        // Assert that the response status is 200 (OK)
        $result->assertStatus(200);
    }

    public function testListPageContainsTableAndFields()
    {
        // Send a GET request to the root URL
        $result = $this->get('/list-users');

        // Assert that the response contains a <table> element
        $result->assertSeeElement('table', 'Contains table element');
    }
}