TDD PHP Example: SimpleCalc Library
=========================

[![Build Status](https://secure.travis-ci.org/tdd-php/lib-simple-calc.png?branch=master)](http://travis-ci.org/tdd-php/lib-simple-calc)

Example application using `tdd-php/lib-simple-calc` library
is available at (https://github.com/tdd-php/app-simple-calc).

How to run tests?
-----------------

    phpunit
    phpunit  --coverage-html coverage/


How to generate zipped archive?
-------------------------------

    git archive --format=zip --output=../lib-simple-calc-master.zip HEAD


How to generate API documentation with PhpDocumentor?
-----------------------------------------------------

    pear

    (creates %PHP_PEAR_PHP_BIN%)

    phpdoc -d . -t docs -i Tests/*


How to test coding standards with PHPCS?
----------------------------------------

    phpcs  --standard=Symfony2 . --ignore=Tests --extensions=php --encoding=utf-8


    mkdir phpcs
    phpcs  --standard=Symfony2 . --ignore=Tests --extensions=php --encoding=utf-8 > phpcs/results.txt

