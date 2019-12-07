 # WP-CLI-Runner

Helper to test custom WP-CLI commands by bootstrapping WP-CLI.

Forked from https://github.com/polevaultweb/phpunit-wp-cli-runner

## Installation
To install simply require the package in the `composer.json` file like

```json
"require-dev":
{
"afragen/wp-cli-runner": "^0.1"
}
```

Then use `composer update` to fetch the package.

### Bootstrap
In your PHPUnit `bootstrap.php` file you will need add the following:

```php
$vendorDir = '/path/to/vendor';
\Fragen\WP_CLI_Runner\Runner::init( $vendorDir );
```

Then WP-CLI will be loaded whenever you instantiate your custom CLI command classes in your unit tests cases.

See the [blog post](http://polevaultweb.com/?p=818) for more information.
