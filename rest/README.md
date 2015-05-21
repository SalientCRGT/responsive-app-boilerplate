## Prerequisites

* [MySQL](http://www.mysql.com/downloads/)

## Install PHP

Proceed to the windows page and download VC11 x## Thread Safe zip file (x86 or x64 is up to you)

	Create the C:\php folder on your hard drive
	Unzip the php into the c:\php folder

The VC11 builds require to have the Visual C++ Redistributable for Visual Studio 2012 x86 or x64 installed.

	Proceed to (http://www.microsoft.com/en-us/download/details.aspx?id=30679) and install the file

Configure the php.ini file for windows

	Copy the php.ini-development file from c:\php to your c:\windows folder and rename to php.ini
	Add the following lines to the c:\windows\php.ini to activate mysql
		extension = php_mysql.dll
		extension = php_mysqli.dll
		extension_dir = "ext"

## Commands

* *c:\php\php -i* - Display information about php setup
* *c:\php\php -S localhost:8080* - Run this command from the directory on your local containing the repo and it will start the web server with the current directory as the root.   This is the setup for our test server at 10.30.1.155
