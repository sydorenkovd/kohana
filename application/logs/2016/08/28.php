<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-28 05:18:54 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\admin\articles.php [ 18 ] in C:\OpenServer\domains\kohana.loc\application\classes\controller\admin\articles.php:18
2016-08-28 05:18:54 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\application\classes\controller\admin\articles.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\OpenServer\\d...', 18, Array)
#1 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.loc\application\classes\controller\admin\articles.php:18