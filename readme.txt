*****************************
*		Prerequisite		*
*****************************
1)Create a database named itsc
2)Import the itsc/table.sql into itsc
3)Download https://github.com/kishor10d/Admin-Panel-User-Management-using-CodeIgniter
4)Unzipnzip and rename to itsc
5)Change the content of some php file as below
 
*****************************
*		File Create			*
*****************************
13-03-2018 Wing
Model: software
Controller: Search
View: Index, list, preList, result

11-06-2018
View: addSoftware/addSoftware.php

*****************************
*		File Changed		*
*****************************
13-03-2018 Wing

routes.php
	$route['default_controller'] = "search";
	-------------add-----------
	$route['result/(:any)']='search/result/$1';
	$route['common'] = 'search/software';
	$route['locations'] = 'search/sort_list/locations';
	$route['category'] = 'search/sort_list/category';
	$route['software/(:any)/(:any)']='search/software/$1/$2';
	$route['keyword'] = 'search/keyword';
	$route['login']='login';

autoload.php
	$autoload['helper'] = array('url', 'file','cias_helper','form');
	$autoload['libraries'] = array('database', 'session','form_validation');

datatbase.php
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'itsc',

	
*****************************
*	Privileged account		*
*****************************
ID: admin@example.com
password : codeinsect

