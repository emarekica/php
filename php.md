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

## PHP TAGS

```php
<?php

?>
```

Usually, `*.html` and `*.php` files are separate.
In that case, omit the closing PHP tag.


### Ways to print PHP in browser using language constructs/statements:

- `echo`
- `print`

```php
<?php
  echo "Hello from ECHO!", "It can have multiple values";
  echo "<br>";
  print "Hello from PRINT";
```

### Writing PHP and HTML together

This will output the text and in the source code HTML, no PHP code will be shown in the browser because it is executed on the server.
The server sends to the browsers what it interprets.


- local code: `<title><?php echo "Learn PHP From Scratch"; ?></title>`

- browser source code: `<title>Learn PHP From Scratch</title>`

- Shorthand (usually used with variable): `<title><?= "Learn PHP From Scratch" ?></title>`

HTML can be used in echo statement.

```php
<?php echo "<p>In this course, you will learn the fundamentals of the PHP language</p>" ?>
```