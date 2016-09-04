<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-04 10:17:31 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_New class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php:603
2016-09-04 10:17:31 --- DEBUG: #0 C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\kohana.loc\application\classes\controller\admin\Api.php(58): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Controller.php(84): Controller_Admin_Api->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Api))
#5 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana.loc\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana.loc\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohana.loc\modules\orm\classes\Kohana\ORM.php:603