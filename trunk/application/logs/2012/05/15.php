<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-15 02:33:12 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-15 02:33:12 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(109): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-15 02:33:25 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-15 02:33:25 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(109): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-15 02:33:28 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-15 02:33:28 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(109): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-15 02:33:39 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-15 02:33:39 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(109): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-15 03:45:21 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-15 03:45:21 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(109): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-15 03:53:28 --- ERROR: ErrorException [ 1 ]: Call to undefined function filetime() ~ APPPATH/views/common/head.php [ 60 ]
2012-05-15 03:53:28 --- STRACE: ErrorException [ 1 ]: Call to undefined function filetime() ~ APPPATH/views/common/head.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 20:57:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='{Model_Submission::STATUS_PUBLISHED}'
    		group by channels.id' at line 4 [ select channel_name, count(*) as count from submissions 
    		left join users on submissions.owner_id = users.id
    		left join channels on channels.id = users.channel_id
    		where submissions.status =='{Model_Submission::STATUS_PUBLISHED}'
    		group by channels.id ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-15 20:57:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='{Model_Submission::STATUS_PUBLISHED}'
    		group by channels.id' at line 4 [ select channel_name, count(*) as count from submissions 
    		left join users on submissions.owner_id = users.id
    		left join channels on channels.id = users.channel_id
    		where submissions.status =='{Model_Submission::STATUS_PUBLISHED}'
    		group by channels.id ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'select channel_...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stats.php(22): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stats->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stats))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-15 20:57:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='PUBLISHED'
    		group by channels.id' at line 4 [ select channel_name, count(*) as count from submissions 
    		left join users on submissions.owner_id = users.id
    		left join channels on channels.id = users.channel_id
    		where submissions.status =='PUBLISHED'
    		group by channels.id ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-15 20:57:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='PUBLISHED'
    		group by channels.id' at line 4 [ select channel_name, count(*) as count from submissions 
    		left join users on submissions.owner_id = users.id
    		left join channels on channels.id = users.channel_id
    		where submissions.status =='PUBLISHED'
    		group by channels.id ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'select channel_...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stats.php(22): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stats->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stats))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-15 21:30:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function Model_Content_Image() ~ APPPATH/classes/controller/v.php [ 20 ]
2012-05-15 21:30:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function Model_Content_Image() ~ APPPATH/classes/controller/v.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 21:32:21 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/v.php [ 23 ]
2012-05-15 21:32:21 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/v.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 21:32:32 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/v.php [ 23 ]
2012-05-15 21:32:32 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/v.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 21:32:57 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/v.php [ 22 ]
2012-05-15 21:32:57 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/v.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 22:17:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/v.php [ 43 ]
2012-05-15 22:17:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/v.php [ 43 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/v.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/v.php(49): Controller_V->show_picture('square', NULL)
#2 [internal function]: Controller_V->action_picture()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_V))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-15 23:12:10 --- ERROR: View_Exception [ 0 ]: The requested view template/plain could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-15 23:12:10 --- STRACE: View_Exception [ 0 ]: The requested view template/plain could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('template/plain')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/v.php(62): Kohana_View->__construct('template/plain')
#2 [internal function]: Controller_V->action_all_images()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_V))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-15 23:13:37 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/v.php [ 58 ]
2012-05-15 23:13:37 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/v.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 23:30:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/user.php [ 389 ]
2012-05-15 23:30:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/user.php [ 389 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(389): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 389, Array)
#1 [internal function]: Controller_User->action_my_files()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}