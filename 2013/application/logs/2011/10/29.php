<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-29 20:42:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:42:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:42:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:42:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:43:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:43:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:43:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:43:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:43:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:43:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:43:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:43:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:43:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
2011-10-29 20:43:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/home/index.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:45:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH/views/home/index.php [ 103 ]
2011-10-29 20:45:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH/views/home/index.php [ 103 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/home/index.php(103): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Joe/Site...', 103, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Joe/Sites/6.470-2011/2012/application/views/index_template.php(141): Kohana_View->__toString()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/indextemplate.php(77): Kohana_Controller_Template->after()
#9 [internal function]: Controller_IndexTemplate->after()
#10 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#11 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#14 {main}
2011-10-29 20:47:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH/views/home/index.php [ 103 ]
2011-10-29 20:47:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH/views/home/index.php [ 103 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/home/index.php(103): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Joe/Site...', 103, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Joe/Sites/6.470-2011/2012/application/views/index_template.php(141): Kohana_View->__toString()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/indextemplate.php(77): Kohana_Controller_Template->after()
#9 [internal function]: Controller_IndexTemplate->after()
#10 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#11 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#14 {main}