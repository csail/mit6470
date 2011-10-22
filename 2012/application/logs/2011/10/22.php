<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-22 11:57:57 --- ERROR: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-22 11:57:57 --- STRACE: View_Exception [ 0 ]: The requested view home/index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/newww/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/index.php')
#1 /Users/Joe/Sites/6.470-2011/2012/newww/system/classes/kohana/view.php(30): Kohana_View->__construct('home/index.php', NULL)
#2 /Users/Joe/Sites/6.470-2011/2012/newww/application/classes/controller/home.php(9): Kohana_View::factory('home/index.php')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/Joe/Sites/6.470-2011/2012/newww/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/Joe/Sites/6.470-2011/2012/newww/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/newww/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/newww/index.php(112): Kohana_Request->execute()
#8 {main}