<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-08 10:03:42 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-08 10:03:42 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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