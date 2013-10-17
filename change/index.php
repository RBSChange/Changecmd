<?php
//    Copyright 2012 Ready Business System
//
//    Licensed under the Apache License, Version 2.0 (the "License");
//    you may not use this file except in compliance with the License.
//    You may obtain a copy of the License at
//
//        http://www.apache.org/licenses/LICENSE-2.0
//
//    Unless required by applicable law or agreed to in writing, software
//    distributed under the License is distributed on an "AS IS" BASIS,
//    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//    See the License for the specific language governing permissions and
//    limitations under the License.

require_once __DIR__ . '/vendor/autoload.php';
define('PROJECT_HOME', getcwd());

use \Change\Application;
use \Change\Application\Console\ConsoleApplication;

if (file_exists(PROJECT_HOME . '/Change/Application.php'))
{
	require_once PROJECT_HOME . '/Change/Application.php';
	require_once PROJECT_HOME . '/Change/Application/Console/ConsoleApplication.php';
	$application = new \Change\Application();
	$application->start();
	$consoleApp = new ConsoleApplication("RBS Change Console Tool", $application->getVersion());
	$consoleApp->setChangeApplication($application);
	$consoleApp->registerCommands();
	$consoleApp->run();
}
else
{
	throw new \RuntimeException("You need to run this command at the root of your RBS Change Project");
}
