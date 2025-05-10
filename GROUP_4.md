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
1. Create a Controller accessible on `/users` that accepts the following requests:
    a. A POST request with the `username`, `password` and `role` in the JSON format. Save the user using the corresponding method of service class `UserManager`.
    b. A GET request. Return the list of existing users using the corresponding method of class `UserManager`.
2. Accept a PUT request on `/users/<id>` with the `username`, `password` and `role` in the JSON format. Update the user using the corresponding method of class `UserManager`.
3. Accept a DELETE request on `/users/<id>`. Delete the user using the corresponding method of class `UserManager`.


### Unit test
php vendor/bin/phpunit tests

## Running the project

```sh
cd dhbw-idp
php spark serve --host 0.0.0.0 --port 8080
```