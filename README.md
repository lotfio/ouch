# Ouch error handler for PHP
![ouch](https://user-images.githubusercontent.com/18489496/36539671-dbf89a76-17d7-11e8-99e1-b372935b83c4.png)

## About Ouch :
   
   Ouch is simple and lightweight ErrorHandler for PHP. It is aimed to help you debug PHP 
    errors in a nice and detailed way.


![licence](https://img.shields.io/badge/Licence-MIT-yellow.svg)
![language](https://img.shields.io/badge/PHP-7-blue.svg)
![version](https://img.shields.io/badge/Version-0.1.7-red.svg)
![coverage](https://img.shields.io/badge/coverage-30%25-blue.svg)
![build](https://travis-ci.org/lotfio/ouch.svg?branch=master)
[![StyleCI](https://github.styleci.io/repos/117599927/shield?branch=master)](https://github.styleci.io/repos/117599927)

## How it looks like :
![screenshot capture - 2018-05-25 - 15-54-29](https://user-images.githubusercontent.com/18489496/40551150-1391aad2-6034-11e8-8924-7ef421b76945.png)
## Features :
- Simple and easy to use
- Catch all Errors and Exceptions
- Catch Fatal Errors
- Transforms all errors to Exceptions

# Instalation & Use :
```
    composer require lotfio/ouch
```

### Use it:
```php
    $ouch = new Ouch\Reporter;
    $ouch->on();
```


## Contributing

Thank you for considering to contribute to Ouch. All the contribution guidelines are mentioned [here](CONTRIBUTE.md).

## ChangeLog

Here you can find the [ChangeLog](CHANGELOG.md).

## Support the development

- Share **Ouch** and lets get more stars and more contributors.

## License

***Ouch*** is an open-source software licensed under the [MIT license](LICENSE).