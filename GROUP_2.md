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
1. Create a Controller accessible on `/auth/login` that accepts a POST request with the `username` and `password` in  the JSON format.
2. Use `UserManager` class to validate the credentials.
3. Return an appropriate error message in case of wrong user or password (http status 401 - Unauthorized).
4. Return an appropriate error message in case `username` or `password` is not provided. (http status 400 - Bad Resquest).
5. Generate a token using the logic below and return it using the following format:

```json
    "token": <generated_token>
```

### Token generation

Below the payload structure.

```json
    "username": "HansZimmer"
    "role": "Admin",
    "iat": 1746651619
```
/* iat = issued at as NumericDate value

1. Encode payload
2. Hash + Encrypt encoded payload (called signature)
3. Concatenate the signature with the encoded payload as <encoded_payload>.<signature>.

### Unit test
php vendor/bin/phpunit tests

## Running the project

```sh
cd dhbw-idp
php spark serve --host 0.0.0.0 --port 8080
```
