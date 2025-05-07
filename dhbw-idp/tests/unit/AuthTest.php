<?php

namespace Tests\Feature;

use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class AuthTest extends CIUnitTestCase
{
    use FeatureTestTrait; // Include the FeatureTestTrait for feature testing

    public function testGetTokenSuccessfully()
    {
        // Send a request to the token
        $result = $this->post('/auth/login', [
            'username' => 'admin',
            'password' => 'admin'
        ]);

        // Assert that the response status is 200 (OK)
        $result->assertStatus(200);
    }
}