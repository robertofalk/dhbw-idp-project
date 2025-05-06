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

1. Create a html page accessible under `/`.
2. Create a form that asks the user for the `username` and `password` and submits them using POST to `/auth/login`. 
3. In case of success (http status 200), the received json will have the following structure:
```json
{
    "token": "<encoded_token>"
}
```
4. Save the token in the browser local storage using `localStorage.setItem('token', <encoded_token>);`.
5. Redirect to `/list-users`.
6. Show an appropriate error message in case of wrong user or password (http status 401 - Unauthorized).
7. Show an appropriate error message in case of any other error (http status 5xx).

Use the unit test to validate your implementation.

### Unit test
php vendor/bin/phpunit tests

## Running the project

```sh
cd dhbw-idp
php spark serve --host 0.0.0.0 --port 8080
```