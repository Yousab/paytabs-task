# Paytabs Task (CodeIgniter 4)

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the 
[development repository](https://github.com/codeigniter4/CodeIgniter4).

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 

## Installation

1. Pull the repo or Download the zip file and extract it
2. Create a new database and update the application database connection on app/Config/Database.php
3. Open CMD and check if you can run `php spark`, It will list spark commands if run successfully. If It doesn't run successfully, you can run the following command `composer update --no-dev`
4. Run the DB migration with the following command `php spark migrate`
5. Run the server by `php spark serve` and Check the website application on http://localhost:8080

## Server Requirements

1. PHP version 7.2 or higher is required, with the following extensions installed: 

	- [intl](http://php.net/manual/en/intl.requirements.php)
	- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

	Additionally, make sure that the following extensions are enabled in your PHP:

	- json (enabled by default - don't turn it off)
	- [mbstring](http://php.net/manual/en/mbstring.installation.php)
	- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
	- xml (enabled by default - don't turn it off)

2. MySQL Server
3. Composer >=1.8
