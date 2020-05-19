# Ouch error handler for PHP
![ouch](https://user-images.githubusercontent.com/18489496/36539671-dbf89a76-17d7-11e8-99e1-b372935b83c4.png)

## About Ouch :

   Ouch is simple and lightweight ErrorHandler for PHP. It is aimed to help you debug PHP
    errors in a nice and detailed way.
    ouch is the Offical @SilverEngine framework error handler.


![licence](https://img.shields.io/badge/Licence-MIT-yellow.svg)
![language](https://img.shields.io/badge/PHP-7-blue.svg)
![version](https://img.shields.io/badge/Version-0.2.0-red.svg)
![coverage](https://img.shields.io/badge/coverage-30%25-blue.svg)
![build](https://travis-ci.org/lotfio/ouch.svg?branch=develop)
[![StyleCI](https://github.styleci.io/repos/117599927/shield?branch=develop)](https://github.styleci.io/repos/117599927)

## How it looks like :
 ### HTTP
   ![http-error](https://github.com/lotfio/ouch/blob/develop/docs/ouch.png)
 ### CLI
   ![cli-error](https://github.com/lotfio/ouch/blob/develop/docs/console.png)
 
## Features :
- Simple and easy to use.
- Transforms all errors to Exceptions.
- Catches all Errors and Exceptions.
- Catches Fatal Errors.
- Displays friendly Html errors.
- Displays friendly console (CLI) errors.
- Zero errors in prduction.

# Instalation & Use :
```php
    composer require lotfio/ouch
```

### Use it:
```php
    $ouch = new Ouch\Ouch;
    $ouch->enableErrorHandler($env = 'pro'); // for development use $env = 'dev';
```


## Contributing

Thank you for considering to contribute to Ouch. All the contribution guidelines are mentioned [here](CONTRIBUTE.md).

## ChangeLog

Here you can find the [ChangeLog](CHANGELOG.md).

## Support the development
Share **Ouch** and lets get more stars and more contributors.

## License

***Ouch*** is an open-source software licensed under the [MIT license](LICENSE).
