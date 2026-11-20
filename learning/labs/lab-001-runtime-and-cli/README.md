# Lab 001 — PHP Runtime and CLI

**Status:** ready after baseline.

## Questions
1. Which PHP executable does your terminal resolve?
2. Which PHP version is installed?
3. Which SAPI does the CLI use?
4. Which php.ini file is loaded?
5. Which extensions are available?
6. What changes when the same file is served through PHP's built-in development server?

## Commands

```bash
command -v php
php -v
php --ini
php -m
php -r 'echo PHP_VERSION, PHP_EOL, PHP_SAPI, PHP_EOL;'
```

Then create a small PHP script that prints version, SAPI, and a few selected environment facts. Do not print secrets or the full environment.

## Experiment
Run the same script:
1. Through the CLI.
2. Through `php -S 127.0.0.1:8000` from the appropriate directory and a browser/curl request.

Record what is the same and what is different. Explain what SAPI means and why CLI and web runtime configuration may differ.

## Submission
Save your script and observations under this lab folder. Include your PHP version and actual output. Do not paste only an AI explanation.
