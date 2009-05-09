#!/bin/sh
#phpsrc=/home/cweiske/Dev/cvs/php/testfest/php-src
phpsrc=php-src
export TEST_PHP_EXECUTABLE=$phpsrc/sapi/cli/php

ext=gettext
extdir=$phpsrc/ext/$ext
testdir=tests/$ext

#cleanup
rm covdata-$ext.info
rm $extdir/$ext.gcda
rm -r htmlcoverage_$ext

#run
$TEST_PHP_EXECUTABLE\
 $phpsrc/run-tests.php\
 $testdir/$1

#html
lcov --directory $extdir -c -o covdata-$ext.info
genhtml covdata-$ext.info -o htmlcoverage_$ext
