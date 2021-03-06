Strimoid
========

[![Join the chat at https://gitter.im/Strimoid/Strimoid](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Strimoid/Strimoid?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Build Status](https://travis-ci.org/Strimoid/Strimoid.svg?branch=master)](https://travis-ci.org/Strimoid/Strimoid) [![Test Coverage](https://codeclimate.com/github/Strimoid/Strimoid/badges/coverage.svg)](https://codeclimate.com/github/Strimoid/Strimoid) [![Code Climate](https://codeclimate.com/github/Strimoid/Strimoid/badges/gpa.svg)](https://codeclimate.com/github/Strimoid/Strimoid)

Source code of Strimoid.pl, brand-new social service.

Requirements
========
* PHP 5.5+ with APCu, MongoDB and ZMQ extensions.
* If you have too much free time, you can try with HHVM + Mongofill and hhvm-zmq instead of PHP.
* MongoDB.

API
========
You can find API documentation at https://developers.strimoid.pl

Documentation
========
We are providing documentation generated automatically by Sami at https://sami.strimoid.pl

How to start?
========
Install dependencies using Composer:

```
composer.phar install
```

Compile resources using Gulp:

```
npm install
gulp
```

To do
========
* [ ] Tests, tests, tests!
* [ ] AngularJS based frontend, developed as external project.
* [ ] Improve API: change routing, add more documentation, add ETags support.
* [ ] Many, many, other things...

Questions?
========
Just join #strimoid @ Freenode and feel free to ask.
