## Prerequisites

* [MySQL](http://www.mysql.com/downloads/)
* [PHP] (http://php.net/downloads.php)

## Install PHP

cd into the /web folder and run the following commands:

	npm install -g bower
	npm install -g grunt-cli
	npm install

If you get any errors during the npm install, run the command again and it should be fine.

	bower install

To test that everything is working, run

	grunt build
	grunt test

## Commands

* *grunt serve* - runs a localhost server and listens to changes in files. This does not build the app into /dist.
* *grunt test* - runs karma unit tests on angular code
* *grunt build* - builds the app into /dist