<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-17 02:11:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-17 02:11:11 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
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
2016-07-17 02:11:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-17 02:11:11 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
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
2016-07-17 02:11:33 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 02:11:33 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 02:12:58 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-17 02:12:58 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
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
2016-07-17 02:17:12 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\index\auth\v_auth_register.php [ 4 ] in C:\OpenServer\domains\kohana.loc\application\views\index\auth\v_auth_register.php:4
2016-07-17 02:17:12 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\auth\v_auth_register.php(4): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 4, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.loc\application\views\index\v_base.php(50): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#11 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana.loc\application\views\index\auth\v_auth_register.php:4
2016-07-17 02:28:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-17 02:28:15 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
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
2016-07-17 02:28:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 02:28:30 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:02:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ] in C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php:12
2016-07-17 03:02:14 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 12, Array)
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
2016-07-17 03:02:17 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:02:17 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:00 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:00 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:02 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:02 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:03 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:04 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:05:04 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 03:11:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin.php [ 12 ] in file:line
2016-07-17 03:11:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 03:12:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 03:12:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:30:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:30:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:33:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:33:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:33:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:33:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:33:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:33:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:33:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:33:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:33:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:34:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:34:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:34:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:34:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\controller\admin\users.php [ 18 ] in file:line
2016-07-17 04:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:38:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 04:38:12 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 04:41:51 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 04:41:51 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 04:41:56 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\account.php [ 33 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 04:41:56 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Index_Account->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\index\account.php:33
2016-07-17 04:57:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `hay_products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-17 04:57:22 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ha...', false, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\OpenServer\domains\kohana.loc\application\classes\controller\admin\products.php(51): Kohana_ORM->add('categories', NULL)
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Admin_Products->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.loc\modules\database\classes\Kohana\Database\Query.php:251
2016-07-17 04:57:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin\categories.php [ 35 ] in file:line
2016-07-17 04:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:58:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin\categories.php [ 35 ] in file:line
2016-07-17 04:58:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 04:58:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin\products.php [ 74 ] in file:line
2016-07-17 04:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 05:01:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin\news.php [ 69 ] in file:line
2016-07-17 05:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 08:07:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin\news.php [ 69 ] in file:line
2016-07-17 08:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 13:12:39 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in C:\OpenServer\domains\kohana.loc\application\views\admin\users\v_users_edit.php:8
2016-07-17 13:12:39 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 8, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.loc\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana.loc\application\views\admin\users\v_users_edit.php:8
2016-07-17 13:56:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\admin\categories.php [ 35 ] in file:line
2016-07-17 13:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 14:19:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\index\cart.php [ 82 ] in file:line
2016-07-17 14:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-17 14:49:44 --- CRITICAL: ErrorException [ 8192 ]: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 43 ] in file:line
2016-07-17 14:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'preg_replace():...', 'C:\\OpenServer\\d...', 43, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(43): preg_replace('~\\b(?<!href="ma...', 'HTML::mailto("$...', '<ul>\n\t\t    <li>...')
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-07-17 14:49:49 --- CRITICAL: ErrorException [ 8192 ]: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 43 ] in file:line
2016-07-17 14:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'preg_replace():...', 'C:\\OpenServer\\d...', 43, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(43): preg_replace('~\\b(?<!href="ma...', 'HTML::mailto("$...', '<ul>\n\t\t    <li>...')
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-07-17 14:50:17 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, 'HTML::mailto(&quot;$0&quot;)', to be a valid callback ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 43 ] in file:line
2016-07-17 14:50:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\\OpenServer\\d...', 43, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(43): preg_replace_callback('~\\b(?<!href="ma...', 'HTML::mailto("$...', '<ul>\n\t\t    <li>...')
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-07-17 14:50:18 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, 'HTML::mailto(&quot;$0&quot;)', to be a valid callback ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 43 ] in file:line
2016-07-17 14:50:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\\OpenServer\\d...', 43, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(43): preg_replace_callback('~\\b(?<!href="ma...', 'HTML::mailto("$...', '<ul>\n\t\t    <li>...')
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-07-17 14:52:01 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback() expects parameter 4 to be long, string given ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 46 ] in file:line
2016-07-17 14:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\\OpenServer\\d...', 46, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(46): preg_replace_callback('~\\b(?<!href="ma...', 'HTML::mailto("$...', Object(Closure), '<ul>\n\t\t    <li>...')
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-07-17 14:53:06 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback() expects parameter 4 to be long, string given ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 47 ] in file:line
2016-07-17 14:53:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\\OpenServer\\d...', 47, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(47): preg_replace_callback('~\\b(?<!href="ma...', 'HTML::mailto("$...', Object(Closure), '<ul>\n\t\t    <li>...', 100)
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2016-07-17 14:53:10 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback() expects parameter 4 to be long, string given ~ MODPATH\codebench\classes\Bench\AutoLinkEmails.php [ 47 ] in file:line
2016-07-17 14:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\\OpenServer\\d...', 47, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Bench\AutoLinkEmails.php(47): preg_replace_callback('~\\b(?<!href="ma...', 'HTML::mailto("$...', Object(Closure), '<ul>\n\t\t    <li>...', 100)
#2 [internal function]: Bench_AutoLinkEmails->bench_replace_e('<ul>\n\t\t    <li>...')
#3 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Kohana\Codebench.php(100): ReflectionMethod->invoke(Object(Bench_AutoLinkEmails), '<ul>\n\t\t    <li>...')
#4 C:\OpenServer\domains\kohana.loc\modules\codebench\classes\Controller\Codebench.php(33): Kohana_Codebench->run()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Codebench->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codebench))
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#11 {main} in file:line