# PHP Environment Setup and Checks

Before practical work, record the local toolchain. Do not assume your PHP CLI, web server, and database use the same configuration.

## Record these commands

```bash
php -v
php --ini
php -m
composer --version
git --version
```

Check the PHP executable path:

```bash
command -v php
```

Check common extensions:

```bash
php -m | grep -Ei 'PDO|pdo_mysql|mysqli|mbstring|openssl|curl|json|fileinfo|intl'
```

The exact extensions required depend on the current project. Do not install every extension blindly.

## CLI versus web runtime
The PHP CLI can use a different `php.ini` and set of extensions from PHP-FPM or Apache. Record the CLI output and verify the web runtime separately when you start the web projects.

## Local development server
For a simple built-in server experiment:

```bash
php -S 127.0.0.1:8000
```

Run it from the appropriate project directory and stop it with Ctrl+C. PHP's built-in server is for local development/testing, not production hosting.

## Environment record
Copy the observed output summary (not secrets) to `.emw-project/environment.md`. Record PHP version, SAPI, loaded configuration path, extensions, Composer version, database version, OS, and relevant editor/debugger details.

Never commit passwords, tokens, private keys, or full environment dumps.
