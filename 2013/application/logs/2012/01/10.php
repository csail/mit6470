<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-10 09:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-10 09:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/icons/lock-and-key-110.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-10 09:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-10 09:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-10 09:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-10 09:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/assets/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-10 10:48:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
2012-01-10 10:48:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 10:51:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
2012-01-10 10:51:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 10:52:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
2012-01-10 10:52:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 10:53:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
2012-01-10 10:53:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 10:55:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
2012-01-10 10:55:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_END_HEREDOC or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH/views/course/lectures/day1.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 11:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-10 11:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: course/logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#1 {main}
2012-01-10 13:14:15 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-10 13:14:15 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Joe/Sites/6.470-2011/2012/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Joe/Sites/6.470-2011/2012/application/classes/model/emails.php(32): Kohana_Database_Query->execute()
#3 /Users/Joe/Sites/6.470-2011/2012/application/classes/controller/admin.php(12): Model_Emails::listEmails()
#4 [internal function]: Controller_Admin->action_newsletterMinusRegistered()
#5 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Joe/Sites/6.470-2011/2012/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Joe/Sites/6.470-2011/2012/index.php(112): Kohana_Request->execute()
#9 {main}