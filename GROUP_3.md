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
1. Create a html page accessible under `/list-users`.
2. During the page loading, using the token stored in the browser localStorage using `localStorage.getItem('token')`, make a GET request to `/users`.
3. In case of success (http status 200), the received json will have the following structure:
```json
[
    {
        "id": "<user id>",
        "username": "<username>",
        "role": "<user role>"
    }
}
```
5. List the received users in a HTML table.
4. Create a form that asks the user for the `username`, `password` and `role` (Admin or User), and submit the information in the json format using POST to `/users`. 
5. In case of success (http status 201 - created), reload the users.
6. Make it possible to change users' `username`, `password` or `role` by making a PUT request using the json format to `/users/<id>`.
7. Make it possible to delete the user by making a DELETE request to `/users/<id>`.
8. Show an appropriate error message in case of any other error (http status 5xx).

### Unit test
php vendor/bin/phpunit tests

## Running the project

```sh
cd dhbw-idp
php spark serve --host 0.0.0.0 --port 8080
```