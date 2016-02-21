# static-review
Custom Static Review classes


[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![HHVM Status][ico-hhvm-status]][link-hhvm-status]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![SensioLabsInsight][ico-sensiolab]][link-sensiolab]



Table of Contents
=================

  * [Custom Static Review classes](#progetto-static-review)
  * [Table of Contents](#table-of-contents)
  * [Prerequisites](#prerequisites)
  * [Change Log](#change-log)
  * [Installation](#installation)
  * [Example](#example)
  * [Contributing](#contributing)
  * [Security](#security)
  * [Credits](#credits)
  * [About Padosoft](#about-padosoft)
  * [License](#license)
  
# PREREQUISITES

You must install sjparkinson/static-review in the root of your project. 

``` bash
$ composer require sjparkinson/static-review
```

and create a new Hooks directory and copy static-review-pre-commit.php into.

``` bash
$ mkdir Hooks
$ copy vendor/sjparkinson/static-review/hooks/static-review-pre-commit.php Hooks/static-review-pre-commit.php
```

# CHANGE LOG

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

# INSTALLATION

You can install the package via composer:

``` bash
$ composer require padosoft/static-review
```

Open Hooks/static-review-pre-commit.php in your root folder (created in PREREQUISITES above section) and add custom review.
For example if you want to add VarDumpReview and DdReview:

``` php
$review->addReview(new LineEndingsReview())
        //.....
        //.....
        //.....
        //.....
       ->addReview(new VarDumpReview());
       ->addReview(new DdReview());
```

In the end, create a pre-commit hook, by running the following command:

``` bash
$ vendor/bin/static-review.php hook:install hooks/static-review-pre-commit.php .git/hooks/pre-commit
```

And with that, if you look in .git/hooks, you’ll now see a symlink created from pre-commit, to our new hooks file.
See too: [sitepoint article](http://www.sitepoint.com/writing-php-git-hooks-with-static-review/)

# EXAMPLE

## Screenshot esempio


# Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

# Security

If you discover any security related issues, please email  instead of using the issue tracker.

# Credits

- [Padosoft](https://github.com/padosoft)
- [All Contributors](../../contributors)

# About Padosoft
Padosoft is a software house based in Florence, Italy. Specialized in E-commerce and web sites.

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/padosoft/static-review.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/padosoft/static-review/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/padosoft/static-review.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/padosoft/static-review.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/padosoft/static-review.svg?style=flat-square
[ico-sensiolab]: https://insight.sensiolabs.com/projects/@@@sensiolabs/small.png
[ico-hhvm-status]: http://hhvm.h4cc.de/badge/padosoft/static-review.svg?style=flat

[link-packagist]: https://packagist.org/packages/padosoft/static-review
[link-travis]: https://travis-ci.org/padosoft/static-review
[link-scrutinizer]: https://scrutinizer-ci.com/g/padosoft/static-review/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/padosoft/static-review
[link-downloads]: https://packagist.org/packages/padosoft/static-review
[link-sensiolab]: https://insight.sensiolabs.com/projects/@@@sensiolabs
[link-hhvm-status]: http://hhvm.h4cc.de/package/padosoft/static-review

