# dhbw-idp-project

## Before you start

Check you have PHP version 8.2 or higher running the following command:
```sh
php -v

PHP 8.2.28 (cli) (built: Mar 14 2025 01:05:38) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.28, Copyright (c) Zend Technologies
    with Xdebug v3.4.2, Copyright (c) 2002-2025, by Derick Rethans
```

## Task description
1. Develop all the methods (`get`, `create`, `getAll`, `update` and `delete`) of service class UserManager.
    a. Use the service class `FileUserStorage` to persist the data.
2. Create an appropriate `salt` function to hash the password.
    a. Everytime a `password` is provided, make sure to keep it in memory only.

### Unit test
~~php vendor/bin/phpunit tests~~

## Running the project

```sh
cd dhbw-idp
php spark serve --host 0.0.0.0 --port 8080
```