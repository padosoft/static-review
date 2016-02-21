# static-review
Custom Static Review classes


[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
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
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/padosoft/static-review.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/padosoft/static-review.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/padosoft/static-review.svg?style=flat-square
[ico-sensiolab]: https://insight.sensiolabs.com/projects/aedff4d3-49ad-4b90-a4ab-52e9a1fa8df6/small.png

[link-packagist]: https://packagist.org/packages/padosoft/static-review
[link-scrutinizer]: https://scrutinizer-ci.com/g/padosoft/static-review/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/padosoft/static-review
[link-downloads]: https://packagist.org/packages/padosoft/static-review
[link-sensiolab]: https://insight.sensiolabs.com/projects/aedff4d3-49ad-4b90-a4ab-52e9a1fa8df6


