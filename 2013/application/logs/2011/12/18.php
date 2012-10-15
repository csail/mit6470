<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-18 17:38:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 18 ]
2011-12-18 17:38:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-18 17:39:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 15 ]
2011-12-18 17:39:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-18 17:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/importStudents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-12-18 17:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/importStudents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#3 {main}
2011-12-18 17:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/importStudents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-12-18 17:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/importStudents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#3 {main}
2011-12-18 17:39:31 --- ERROR: ErrorException [ 2 ]: fopen(assets/class_list/roster-12-18-2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:39:31 --- STRACE: ErrorException [ 2 ]: fopen(assets/class_list/roster-12-18-2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(assets/cl...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('assets/class_li...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:39:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function find_file() ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:39:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function find_file() ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-18 17:40:11 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php on line 10 and defined ~ SYSPATH/classes/kohana/core.php [ 612 ]
2011-12-18 17:40:11 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php on line 10 and defined ~ SYSPATH/classes/kohana/core.php [ 612 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/core.php(612): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Joe/Site...', 612, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): Kohana_Core::find_file('assets/class_li...')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:40:47 --- ERROR: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:40:47 --- STRACE: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:41:18 --- ERROR: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:41:18 --- STRACE: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:41:31 --- ERROR: ErrorException [ 2 ]: fgetcsv() expects parameter 1 to be resource, boolean given ~ APPPATH/classes/controller/admin.php [ 11 ]
2011-12-18 17:41:31 --- STRACE: ErrorException [ 2 ]: fgetcsv() expects parameter 1 to be resource, boolean given ~ APPPATH/classes/controller/admin.php [ 11 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fgetcsv() expec...', '/Users/Joe/Site...', 11, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(11): fgetcsv(false, 0, ',')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:42:31 --- ERROR: ErrorException [ 2 ]: fopen(assets/class_list/roster-12-18-2011.csv://localhost/~Joe/6.470-2011/2012/): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:42:31 --- STRACE: ErrorException [ 2 ]: fopen(assets/class_list/roster-12-18-2011.csv://localhost/~Joe/6.470-2011/2012/): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(assets/cl...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('assets/class_li...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:42:45 --- ERROR: ErrorException [ 2 ]: fopen(/~Joe/6.470-2011/2012/assets/class_list/roster-12-18-2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:42:45 --- STRACE: ErrorException [ 2 ]: fopen(/~Joe/6.470-2011/2012/assets/class_list/roster-12-18-2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/~Joe/6.4...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('/~Joe/6.470-201...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:43:07 --- ERROR: ErrorException [ 2 ]: fopen(/~Joe/6.470-2011/2012/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:43:07 --- STRACE: ErrorException [ 2 ]: fopen(/~Joe/6.470-2011/2012/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/~Joe/6.4...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('/~Joe/6.470-201...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:43:58 --- ERROR: ErrorException [ 2 ]: fopen(assets/class_list/roster-12_18_2011.csv://localhost/~Joe/6.470-2011/2012/): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:43:58 --- STRACE: ErrorException [ 2 ]: fopen(assets/class_list/roster-12_18_2011.csv://localhost/~Joe/6.470-2011/2012/): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(assets/cl...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('assets/class_li...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 17:44:09 --- ERROR: ErrorException [ 2 ]: fopen(/~Joe/6.470-2011/2012/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 17:44:09 --- STRACE: ErrorException [ 2 ]: fopen(/~Joe/6.470-2011/2012/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/~Joe/6.4...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('/~Joe/6.470-201...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 22:05:55 --- ERROR: ErrorException [ 2 ]: fopen(~Joe/6.470-2011/2012/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 22:05:55 --- STRACE: ErrorException [ 2 ]: fopen(~Joe/6.470-2011/2012/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(~Joe/6.47...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('~Joe/6.470-2011...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 22:11:58 --- ERROR: ErrorException [ 2 ]: fopen(/Users/Joe/Sites/6.470-2011/2012/system/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 22:11:58 --- STRACE: ErrorException [ 2 ]: fopen(/Users/Joe/Sites/6.470-2011/2012/system/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Users/Jo...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('/Users/Joe/Site...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 22:12:32 --- ERROR: ErrorException [ 2 ]: fopen(/Users/Joe/Sites/6.470-2011/2012/application/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
2011-12-18 22:12:32 --- STRACE: ErrorException [ 2 ]: fopen(/Users/Joe/Sites/6.470-2011/2012/application/assets/class_list/roster-12_18_2011.csv): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Users/Jo...', '/Users/Joe/Site...', 10, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(10): fopen('/Users/Joe/Site...', 'r')
#2 [internal function]: Controller_Admin->action_importStudents()
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#7 {main}
2011-12-18 22:12:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::Debug() ~ APPPATH/classes/controller/admin.php [ 12 ]
2011-12-18 22:12:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::Debug() ~ APPPATH/classes/controller/admin.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-18 22:17:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/admin.php [ 17 ]
2011-12-18 22:17:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/admin.php [ 17 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(17): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Joe/Site...', 17, Array)
#1 [internal function]: Controller_Admin->action_importStudents()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}