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
2011-10-22 17:22:26 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-22 17:22:26 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(137): Kohana_View->set_filename('index')
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(30): Kohana_View->__construct('index', NULL)
#2 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/home.php(7): Kohana_View::factory('index')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#8 {main}
2011-10-22 17:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:31:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/views/about/staff.php [ 5 ]
2011-10-22 17:31:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/views/about/staff.php [ 5 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/about/staff.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 5, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Joe/Sites/6.470-2011/2012/application/views/template.php(149): Kohana_View->__toString()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/mit6470template.php(78): Kohana_Controller_Template->after()
#9 [internal function]: Controller_MIT6470Template->after()
#10 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_About))
#11 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#14 {main}
2011-10-22 17:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/Users/Joe/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/tooltip.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/fancybox.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/menu.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/css/reset.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/~Joe/Sites/6.470-2011/2012/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 17:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 17:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-5.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/slideshow/slide-6.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sponsors/Sponsors.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-2-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-1-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-3-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/demo-only/featured-4-thumb.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-static-version/images/logoSymbol-small.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-static-version/images/logoSymbol-small.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL course/video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-22 18:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL course/video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#3 {main}
2011-10-22 18:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: competition/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:34:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:34:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:34:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:34:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:34:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:34:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-10-22 18:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-static-version/images/logoSymbol-small.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-22 18:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-static-version/images/logoSymbol-small.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}