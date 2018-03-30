# Ouch error handler for PHP
![ouch](https://user-images.githubusercontent.com/18489496/36539671-dbf89a76-17d7-11e8-99e1-b372935b83c4.png)

## About Ouch :
   
   Ouch is simple and lightweight ErrorHandler package for PHP. It is aimed to help you debug PHP 
    errors in a nice and detailed way.


![licence](https://img.shields.io/badge/Licence-MIT-yellow.svg)
![language](https://img.shields.io/badge/PHP-7-blue.svg)
![version](https://img.shields.io/badge/Version-0.1.0-red.svg)
![coverage](https://img.shields.io/badge/coverage-30%25-green.svg)
![build](https://img.shields.io/badge/build-passing-8e44ad.svg)

## How it looks like :
![2018-02-28-19-13-timino io](https://user-images.githubusercontent.com/18489496/36804680-973f3e4c-1cbb-11e8-9d27-f6e7d09a3993.png)
## Features :
- Simple and easy to use
- Catch all Errors and Exceptions
- Catch Fatal Errors
- Transforms all errors to Exceptions
- Uses PHP >= 7 
- Follow PSR coding style guidelines

# Instalation & Use :
```
    composer require lotfio-lakehal/ouch
```

### Use it:
```php
    $ouch = new Ouch\Core\Reporter;
    $ouch->enable();
```


## Contributing

Thank you for considering to contribute to Ouch. All the contribution guidelines are mentioned [here](CONTRIBUTE.md).

## ChangeLog

Here you can find the [ChangeLog](CHANGELOG.md).

## Support the development

**Do you like this project? Support it by:**

- Donate   : paypal.
- Share it : facebook, twitter, or on your website.

## License

Ouch is an open-source software licensed under the [MIT license](LICENSE).