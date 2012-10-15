<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-12 01:40:26 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-11-12 01:40:26 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('')
#2 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote('')
#3 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /Users/Joe/Sites/6.470-2011/2012/application/classes/model/emails.php(10): Kohana_Database_Query->execute()
#6 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/home.php(19): Model_Emails::addEmail('')
#7 [internal function]: Controller_Home->action_register()
#8 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#9 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#12 {main}
2011-11-12 02:20:25 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
2011-11-12 02:20:25 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/special.php(13): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/Joe/Site...', 13, Array)
#1 [internal function]: Controller_Special->action_uihackathon()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Special))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2011-11-12 02:21:14 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
2011-11-12 02:21:14 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/special.php(13): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/Joe/Site...', 13, Array)
#1 [internal function]: Controller_Special->action_uihackathon()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Special))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2011-11-12 02:21:15 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
2011-11-12 02:21:15 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/special.php(13): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/Joe/Site...', 13, Array)
#1 [internal function]: Controller_Special->action_uihackathon()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Special))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2011-11-12 02:21:28 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
2011-11-12 02:21:28 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/special.php(13): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/Joe/Site...', 13, Array)
#1 [internal function]: Controller_Special->action_uihackathon()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Special))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2011-11-12 02:21:40 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
2011-11-12 02:21:40 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/special.php [ 13 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/special.php(13): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/Joe/Site...', 13, Array)
#1 [internal function]: Controller_Special->action_uihackathon()
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Special))
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#6 {main}
2011-11-12 02:21:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
2011-11-12 02:21:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Special))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#9 {main}
2011-11-12 02:23:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
2011-11-12 02:23:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Special))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#9 {main}
2011-11-12 02:23:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
2011-11-12 02:23:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Special))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#9 {main}
2011-11-12 02:23:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
2011-11-12 02:23:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 7 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/application/views/template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Joe/Site...', 7, Array)
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(61): include('/Users/Joe/Site...')
#2 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Joe/Site...', Array)
#3 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Special))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#9 {main}
2011-11-12 02:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL special/uihackathon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-12 02:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL special/uihackathon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#3 {main}
2011-11-12 04:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-12 04:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-11-12 04:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-12 04:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-11-12 04:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-12 04:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-11-12 04:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-12 04:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/hackathons/ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2011-11-12 17:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/ui.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-12 17:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hackathons/ui.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}