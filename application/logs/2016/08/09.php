<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-09 15:31:21 --- CRITICAL: ErrorException [ 1024 ]: Please change the value of 'security_salt' to a salt value specific to your application ~ MODPATH\kopauth\vendor\opauth\lib\Opauth\Opauth.php [ 83 ] in file:line
2016-08-09 15:31:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please change t...', 'C:\\OpenServer\\d...', 83, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\kopauth\vendor\opauth\lib\Opauth\Opauth.php(83): trigger_error('Please change t...', 1024)
#2 C:\OpenServer\domains\kohana.loc\modules\kopauth\classes\Kopauth.php(50): Opauth->__construct(Array, false)
#3 C:\OpenServer\domains\kohana.loc\modules\kopauth\classes\Kopauth.php(60): Kopauth->__construct()
#4 C:\OpenServer\domains\kohana.loc\modules\kopauth\views\kopauth\providers.php(24): Kopauth::instance()
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana.loc\modules\kopauth\classes\Controller\Kopauth\Auth.php(58): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Kopauth_Auth->action_providers()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kopauth_Auth))
#11 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2016-08-09 15:32:32 --- CRITICAL: ErrorException [ 256 ]: No Opauth strategies defined ~ MODPATH\kopauth\vendor\opauth\lib\Opauth\Opauth.php [ 173 ] in file:line
2016-08-09 15:32:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'No Opauth strat...', 'C:\\OpenServer\\d...', 173, Array)
#1 C:\OpenServer\domains\kohana.loc\modules\kopauth\vendor\opauth\lib\Opauth\Opauth.php(173): trigger_error('No Opauth strat...', 256)
#2 C:\OpenServer\domains\kohana.loc\modules\kopauth\vendor\opauth\lib\Opauth\Opauth.php(86): Opauth->loadStrategies()
#3 C:\OpenServer\domains\kohana.loc\modules\kopauth\classes\Kopauth.php(50): Opauth->__construct(Array, false)
#4 C:\OpenServer\domains\kohana.loc\modules\kopauth\classes\Kopauth.php(60): Kopauth->__construct()
#5 C:\OpenServer\domains\kohana.loc\modules\kopauth\views\kopauth\providers.php(24): Kopauth::instance()
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(62): include('C:\\OpenServer\\d...')
#7 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#8 C:\OpenServer\domains\kohana.loc\modules\kopauth\classes\Controller\Kopauth\Auth.php(58): Kohana_View->render()
#9 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Kopauth_Auth->action_providers()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kopauth_Auth))
#12 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#15 {main} in file:line