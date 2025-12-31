# PHP

Documentation: https://www.php.net/

## Installing PHP with Homebrew

1. Install [Homebrew](https://brew.sh/) on MacOS.

- Make sure Comand line tools are updated to the latest version.
- Be in the Terminal (current user folder)
- it will install it in `/usr/local` (Intel Mac)

2. Check:

        which brew           // if installed
        brew --version       // latest version
        brew list            // see all PHP versions
        brew search php      //

3. Update & upgrade (if necessary)

        brew update
        brew upgrade

4. Install PHP

        brew install php
        php -v

When installed like this, any folder can be used as a work folder.

---

## First steps

1. Make `index.php`.


```php
<?php

echo 'Hello, world';
```

2. See the file in the terminal:

```php
php index.php
// prints: 'Hello, world'
```

3. Run local server which comes with PHP.

```php
php -S // runs the server

php -S localhost:8000
```

4. Stop the server: `control C`
