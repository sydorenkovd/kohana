<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-16 11:47:00 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH\pagination' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 11:47:00 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\OpenServer\domains\kohana.loc\index.php(102): require('C:\\OpenServer\\d...')
#2 {main} in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 11:47:36 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH\pagination' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 11:47:36 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\OpenServer\domains\kohana.loc\index.php(102): require('C:\\OpenServer\\d...')
#2 {main} in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 11:52:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\base.php [ 16 ] in file:line
2016-07-16 11:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 11:54:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\widget.php [ 64 ] in file:line
2016-07-16 11:54:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 11:55:15 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH\classes\model\category.php [ 3 ] in file:line
2016-07-16 11:55:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 11:59:00 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH\orm-mptt' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 11:59:00 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\OpenServer\domains\kohana.loc\index.php(102): require('C:\\OpenServer\\d...')
#2 {main} in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:06:56 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH\orm-mptt' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:06:56 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\OpenServer\domains\kohana.loc\index.php(102): require('C:\\OpenServer\\d...')
#2 {main} in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:06:58 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH\orm-mptt' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:06:58 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\OpenServer\domains\kohana.loc\index.php(102): require('C:\\OpenServer\\d...')
#2 {main} in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:06:59 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH\orm-mptt' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:06:59 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\bootstrap.php(113): Kohana_Core::modules(Array)
#1 C:\OpenServer\domains\kohana.loc\index.php(102): require('C:\\OpenServer\\d...')
#2 {main} in C:\OpenServer\domains\kohana.loc\application\bootstrap.php:113
2016-07-16 12:09:02 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH\classes\model\category.php [ 3 ] in file:line
2016-07-16 12:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 12:10:05 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:05 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:13 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:13 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:14 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:16 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:29 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:29 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:30 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:32 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:32 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:48 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:48 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:54 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:10:54 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:12:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:12:04 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:13:47 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:13:47 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:13:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:13:49 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:13:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:13:49 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohana.loc\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Cookie.php:67
2016-07-16 12:15:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\index\page.php [ 14 ] in file:line
2016-07-16 12:15:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 12:15:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\index\page.php [ 14 ] in file:line
2016-07-16 12:15:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 12:19:21 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohana.loc. If you trust kohana.loc, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\URL.php:144
2016-07-16 12:19:21 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, false)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('', true, false)
#2 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('')
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('', 302)
#4 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\page.php(14): Kohana_Controller::redirect()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Page->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Page))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\kohana.loc\system\classes\Kohana\URL.php:144
2016-07-16 12:22:46 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2016-07-16 12:22:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\OpenServer\\d...', 377, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-07-16 12:24:29 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2016-07-16 12:24:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\OpenServer\\d...', 377, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-07-16 12:25:25 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2016-07-16 12:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\OpenServer\\d...', 377, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-07-16 12:33:17 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2016-07-16 12:33:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\OpenServer\\d...', 377, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-07-16 12:33:21 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2016-07-16 12:33:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\OpenServer\\d...', 377, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-07-16 12:38:46 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2016-07-16 12:38:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\\OpenServer\\d...', 377, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2016-07-16 12:39:33 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'sydorenkovd' for key 'uniq_username' [ INSERT INTO `hay_users` (`username`, `first_name`, `password`, `email`) VALUES ('sydorenkovd', 'sydorenkovd', '828e822a46e0174ddbd6d2b6e778d53bc7982d79f6b8cadc8f2ed3b19e3193df', 'sydorenkovd@ewf.fewd') ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:39:33 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ha...', false, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#3 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:39:40 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'sydorenkovd' for key 'uniq_username' [ INSERT INTO `hay_users` (`username`, `first_name`, `password`, `email`) VALUES ('sydorenkovd', 'sydorenkovd', '828e822a46e0174ddbd6d2b6e778d53bc7982d79f6b8cadc8f2ed3b19e3193df', 'sydorenkovd@ewf.fewd') ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:39:40 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ha...', false, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#3 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:39:50 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `hay_roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:39:50 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ha...', false, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:40:43 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'sydorenkovd' for key 'uniq_username' [ INSERT INTO `hay_users` (`username`, `first_name`, `password`, `email`) VALUES ('sydorenkovd', 'sydorenkovd', '828e822a46e0174ddbd6d2b6e778d53bc7982d79f6b8cadc8f2ed3b19e3193df', 'sydorenkovd@ewf.fewd') ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:40:43 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ha...', false, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#3 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-16 12:48:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\index\account.php [ 10 ] in file:line
2016-07-16 12:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 12:48:53 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:48:53 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:49:06 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-16 12:49:06 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.loc\application\views\index\v_base.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#11 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-16 12:49:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:49:30 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:49:46 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:49:46 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:50:27 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:50:27 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:50:28 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:50:28 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:50:29 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:50:29 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:24 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:25 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:25 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:25 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:25 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:27 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:27 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-16 12:51:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-16 12:51:30 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.loc\application\views\index\v_base.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#11 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12