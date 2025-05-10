<?php

namespace Tests\Feature;

use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class UserControllerTest extends CIUnitTestCase
{

    public function testUsersRoutesExist()
    {
        $routes = service('routes');
        $allRoutes = $routes->getRoutes();
        $routesOptions = $routes->getRoutesOptions();

        // Check /users for GET and POST
        $usersRouteMethods = [];
        foreach ($routesOptions as $route => $options) {
            if ($route === 'users' || $route === '/users') {
                if (isset($options['methods'])) {
                    $usersRouteMethods = array_merge($usersRouteMethods, $options['methods']);
                }
            }
        }
        $this->assertContains('get', array_map('strtolower', $usersRouteMethods), '/users GET route missing');
        $this->assertContains('post', array_map('strtolower', $usersRouteMethods), '/users POST route missing');

        // Check /users/{id} for PUT and DELETE
        $usersIdRouteMethods = [];
        foreach ($routesOptions as $route => $options) {
            if (preg_match('#^/users/(:any|(:num)|(:segment)|(:alphanum)|(:alpha)|(:hash)|(:uuid))$#', $route)) {
                if (isset($options['methods'])) {
                    $usersIdRouteMethods = array_merge($usersIdRouteMethods, $options['methods']);
                }
            }
        }
        $this->assertContains('put', array_map('strtolower', $usersIdRouteMethods), '/users/{id} PUT route missing');
        $this->assertContains('delete', array_map('strtolower', $usersIdRouteMethods), '/users/{id} DELETE route missing');
    }
}