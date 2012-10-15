<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-12 10:48:53 --- ERROR: ErrorException [ 8 ]: Undefined index: topic ~ APPPATH/classes/controller/course.php [ 45 ]
2012-01-12 10:48:53 --- STRACE: ErrorException [ 8 ]: Undefined index: topic ~ APPPATH/classes/controller/course.php [ 45 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/course.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Joe/Site...', 45, Array)
#1 [internal function]: Controller_Course->action_lectures()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Course))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2012-01-12 10:53:02 --- ERROR: View_Exception [ 0 ]: The requested view course/lectures/day2 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-12 10:53:02 --- STRACE: View_Exception [ 0 ]: The requested view course/lectures/day2 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(137): Kohana_View->set_filename('course/lectures...')
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(30): Kohana_View->__construct('course/lectures...', NULL)
#2 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/course.php(47): Kohana_View::factory('course/lectures...')
#3 [internal function]: Controller_Course->action_lectures()
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Course))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#8 {main}
2012-01-12 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-12 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-12 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-12 23:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL course/ajax/runMysqlCode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-12 23:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL course/ajax/runMysqlCode was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#3 {main}
2012-01-12 23:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/runMysqlCodoe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-12 23:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/runMysqlCodoe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#3 {main}
2012-01-12 23:16:44 --- ERROR: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/ajax.php [ 7 ]
2012-01-12 23:16:44 --- STRACE: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/ajax.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Joe/Site...', 7, Array)
#1 [internal function]: Controller_Ajax->action_runMysqlCode()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2012-01-12 23:25:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/views/course/mysql.php [ 7 ]
2012-01-12 23:25:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/views/course/mysql.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 23:25:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/views/course/mysql.php [ 7 ]
2012-01-12 23:25:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/views/course/mysql.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 23:25:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/course/mysql.php [ 24 ]
2012-01-12 23:25:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/course/mysql.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 23:26:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/controller/ajax.php [ 7 ]
2012-01-12 23:26:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/controller/ajax.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 [internal function]: Controller_Ajax->action_runMysqlCode()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2012-01-12 23:27:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/controller/ajax.php [ 7 ]
2012-01-12 23:27:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/controller/ajax.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 [internal function]: Controller_Ajax->action_runMysqlCode()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2012-01-12 23:27:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/controller/ajax.php [ 7 ]
2012-01-12 23:27:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/controller/ajax.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/ajax.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 [internal function]: Controller_Ajax->action_runMysqlCode()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2012-01-12 23:27:50 --- ERROR: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/ajax.php [ 5 ]
2012-01-12 23:27:50 --- STRACE: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/ajax.php [ 5 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/ajax.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Joe/Site...', 5, Array)
#1 [internal function]: Controller_Ajax->action_runMysqlCode()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}