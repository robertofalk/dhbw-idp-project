# dhbw-idp-project

## Dependecies

- PHP >= 8.2
- Composer

### PHP 8.2
Check your PHP version running the following command:
```sh
php -v

PHP 8.2.28 (cli) (built: Mar 14 2025 01:05:38) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.28, Copyright (c) Zend Technologies
    with Xdebug v3.4.2, Copyright (c) 2002-2025, by Derick Rethans
```

### Composer
Check the composer version running the following command:
```sh
composer -V

Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9000 (through xdebug.client_host/xdebug.client_port).
Composer version 2.8.6 2025-02-25 13:03:50
PHP version 8.2.28 (/usr/local/bin/php)
Run the "diagnose" command to get more detailed diagnostics output.
```

To install/update composer, use the following command:
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

Then, checking the version again:
```sh
composer -V

Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9000 (through xdebug.client_host/xdebug.client_port).
Composer version 2.8.8 2025-04-04 16:56:46
PHP version 8.2.28 (/usr/local/bin/php)
Run the "diagnose" command to get more detailed diagnostics output.
```


## Create an empty project
```sh
composer create-project codeigniter4/appstarter dhbw-idp
```

## Running the project

```sh
cd dhbw-idp
php spark serve --host 0.0.0.0 --port 8080
```