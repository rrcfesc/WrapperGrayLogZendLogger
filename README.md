# WrapperGrayLogZendLogger
[![Build Status](https://travis-ci.org/rrcfesc/WrapperGrayLogZendLogger.svg?branch=master)](https://travis-ci.org/rrcfesc/WrapperGrayLogZendLogger)
[![Coverage Status](https://coveralls.io/repos/github/rrcfesc/WrapperGrayLogZendLogger/badge.svg?branch=master)](https://coveralls.io/github/rrcfesc/WrapperGrayLogZendLogger?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rrcfesc/WrapperGrayLogZendLogger/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rrcfesc/WrapperGrayLogZendLogger/?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/59cc1ae46725bd1213879c40/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/59cc1ae46725bd1213879c40)

## About
A php implementation to send log-files to a gelf compatible backend like [Graylog2](http://graylog2.org/).
This library conforms to the PSR standards in regards to structure ([4](http://www.php-fig.org/psr/psr-4/)),
coding-style ([1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md),
[2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md))
and logging ([3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)).

Usage
-----

### Recommended installation via composer:

Add gelf-php to `composer.json` either by running `composer require graylog2/gelf-php` or by defining it manually:

    "require": {
       // ...
       "Rioxygen/Graylog": "~1.0"
       // ...
    }

Reinstall dependencies: `composer install`



@author Ricardo Ruiz Cruz
