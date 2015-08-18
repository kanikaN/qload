<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-17 09:20:41 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-17 09:20:41 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(41): Controller_Core_Filter->before()
#5 [internal function]: Controller_User->before()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_User))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#10 {main}
2012-05-17 09:23:24 --- ERROR: ErrorException [ 8 ]: Constant VIEW_BASE already defined ~ APPPATH/bootstrap.php [ 153 ]
2012-05-17 09:23:24 --- STRACE: ErrorException [ 8 ]: Constant VIEW_BASE already defined ~ APPPATH/bootstrap.php [ 153 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant VIEW_B...', '/Volumes/Data/w...', 153, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/bootstrap.php(153): define('VIEW_BASE', 'views_main')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(104): require('/Volumes/Data/w...')
#3 {main}
2012-05-17 09:23:24 --- ERROR: ErrorException [ 8 ]: Constant VIEW_BASE already defined ~ APPPATH/bootstrap.php [ 153 ]
2012-05-17 09:23:24 --- STRACE: ErrorException [ 8 ]: Constant VIEW_BASE already defined ~ APPPATH/bootstrap.php [ 153 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant VIEW_B...', '/Volumes/Data/w...', 153, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/bootstrap.php(153): define('VIEW_BASE', 'views_main')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(104): require('/Volumes/Data/w...')
#3 {main}
2012-05-17 09:24:34 --- ERROR: ErrorException [ 8 ]: Constant VIEW_BASE already defined ~ APPPATH/classes/controller/core/access.php [ 108 ]
2012-05-17 09:24:34 --- STRACE: ErrorException [ 8 ]: Constant VIEW_BASE already defined ~ APPPATH/classes/controller/core/access.php [ 108 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant VIEW_B...', '/Volumes/Data/w...', 108, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(108): define('VIEW_BASE', 'views')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(41): Controller_Core_Filter->before()
#6 [internal function]: Controller_User->before()
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_User))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#11 {main}
2012-05-17 09:26:45 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 255 ]
2012-05-17 09:26:45 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 255 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Submissions))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 10:56:21 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 255 ]
2012-05-17 10:56:21 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 255 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 11:06:45 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/view.php [ 7 ]
2012-05-17 11:06:45 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/view.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-17 11:06:59 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
2012-05-17 11:06:59 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(231): Kohana_View->render()
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-17 11:07:25 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
2012-05-17 11:07:25 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(231): Kohana_View->render()
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-17 11:07:26 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
2012-05-17 11:07:26 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(231): Kohana_View->render()
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-17 11:08:18 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/view.php [ 12 ]
2012-05-17 11:08:18 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/view.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-17 11:09:43 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 13 ]
2012-05-17 11:09:43 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 13 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 11:14:17 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 13 ]
2012-05-17 11:14:17 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 13 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 11:25:49 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 13 ]
2012-05-17 11:25:49 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 13 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 11:26:05 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 15 ]
2012-05-17 11:26:05 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 15 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 11:26:46 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 16 ]
2012-05-17 11:26:46 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ APPPATH/classes/view.php [ 16 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#4 [internal function]: Controller_Core_Filter->before()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#9 {main}
2012-05-17 11:27:15 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 253 ]
2012-05-17 11:27:15 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 253 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/view.php(15): Kohana_View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#5 [internal function]: Controller_Core_Filter->before()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#10 {main}
2012-05-17 11:27:17 --- ERROR: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 253 ]
2012-05-17 11:27:17 --- STRACE: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH/classes/kohana/view.php [ 253 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/view.php(15): Kohana_View->set_filename('templates/base')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): View->set_filename('templates/base')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/base', NULL)
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(41): Kohana_View::factory('templates/base')
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#5 [internal function]: Controller_Core_Filter->before()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#10 {main}
2012-05-17 11:27:48 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
2012-05-17 11:27:48 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(231): Kohana_View->render()
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-17 11:29:05 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
2012-05-17 11:29:05 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(231): Kohana_View->render()
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-17 11:29:06 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
2012-05-17 11:29:06 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 340 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(231): Kohana_View->render()
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-17 21:15:09 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-17 21:15:09 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(112): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-17 21:15:25 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-17 21:15:25 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('100000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/access.php(112): Kohana_ORM::factory('user', '100000000000000...')
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(24): Controller_Core_Access->before()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(36): Controller_Core_Tracker->before()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(182): Controller_Core_Template->before()
#11 [internal function]: Controller_Core_Filter->before()
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#16 {main}
2012-05-17 21:16:54 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-17 21:16:54 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('contents')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/v.php(27): Kohana_ORM->__construct('700000000000000...')
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/v.php(49): Controller_V->show_picture('700000000000000...', 'width_200')
#8 [internal function]: Controller_V->action_picture()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_V))
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#13 {main}
2012-05-17 22:00:48 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-17 22:00:48 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): MySQL server has gone away ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('activity')
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/tracker.php(34): Kohana_ORM->__construct()
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(54): Controller_Core_Tracker->after()
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(238): Controller_Core_Template->after()
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(67): Controller_Core_Filter->after()
#10 [internal function]: Controller_User->after()
#11 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#15 {main}
2012-05-17 22:04:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/submissions/view.php [ 82 ]
2012-05-17 22:04:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/submissions/view.php [ 82 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/submissions/view.php(82): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(344): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/templates/base.php(164): Kohana_View->__toString()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(344): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(51): Kohana_View->render()
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(238): Controller_Core_Template->after()
#9 [internal function]: Controller_Core_Filter->after()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Submissions))
#11 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#14 {main}