<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-16 09:00:34 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/views/common/head.php [ 17 ]
2012-05-16 09:00:34 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/views/common/head.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-16 09:00:34 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/views/common/head.php [ 17 ]
2012-05-16 09:00:34 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/views/common/head.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-16 11:51:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH/views/templates/base.php [ 234 ]
2012-05-16 11:51:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH/views/templates/base.php [ 234 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/templates/base.php(234): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 234, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(51): Kohana_View->render()
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(238): Controller_Core_Template->after()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(67): Controller_Core_Filter->after()
#6 [internal function]: Controller_User->after()
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#11 {main}
2012-05-16 11:57:39 --- ERROR: View_Exception [ 0 ]: The requested view email/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-16 11:57:39 --- STRACE: View_Exception [ 0 ]: The requested view email/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('email/')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/pages.php(50): Kohana_View->__construct('email/', Array)
#2 [internal function]: Controller_Pages->action_email()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-16 12:02:00 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/pages.php [ 68 ]
2012-05-16 12:02:00 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/pages.php [ 68 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/pages.php(68): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Volumes/Data/w...', 68, Array)
#1 [internal function]: Controller_Pages->action_feedback()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-16 12:03:27 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/pages.php [ 68 ]
2012-05-16 12:03:27 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/pages.php [ 68 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/pages.php(68): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 68, Array)
#1 [internal function]: Controller_Pages->action_feedback()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-16 12:12:10 --- ERROR: View_Exception [ 0 ]: The requested view email/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-16 12:12:10 --- STRACE: View_Exception [ 0 ]: The requested view email/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('email/')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/pages.php(50): Kohana_View->__construct('email/', Array)
#2 [internal function]: Controller_Pages->action_email()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-16 12:30:06 --- ERROR: View_Exception [ 0 ]: The requested view email/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-16 12:30:06 --- STRACE: View_Exception [ 0 ]: The requested view email/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(137): Kohana_View->set_filename('email/')
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/pages.php(50): Kohana_View->__construct('email/', Array)
#2 [internal function]: Controller_Pages->action_email()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-16 12:36:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/pages.php [ 102 ]
2012-05-16 12:36:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/pages.php [ 102 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/pages.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 102, Array)
#1 [internal function]: Controller_Pages->action_feedback()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-16 12:39:54 --- ERROR: ErrorException [ 1 ]: Class 'AmazonSESMailer' not found ~ APPPATH/classes/controller/pages.php [ 85 ]
2012-05-16 12:39:54 --- STRACE: ErrorException [ 1 ]: Class 'AmazonSESMailer' not found ~ APPPATH/classes/controller/pages.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-16 12:47:14 --- ERROR: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/model/user.php [ 140 ]
2012-05-16 12:47:14 --- STRACE: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/model/user.php [ 140 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/model/user.php(140): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 140, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(134): Model_User::authenticate(Array, Object(Controller_User))
#2 [internal function]: Controller_User->action_login()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-16 12:47:59 --- ERROR: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/model/user.php [ 140 ]
2012-05-16 12:47:59 --- STRACE: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/model/user.php [ 140 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/model/user.php(140): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 140, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(134): Model_User::authenticate(Array, Object(Controller_User))
#2 [internal function]: Controller_User->action_login()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-16 12:55:27 --- ERROR: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/model/user.php [ 140 ]
2012-05-16 12:55:27 --- STRACE: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/model/user.php [ 140 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/model/user.php(140): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 140, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/user.php(134): Model_User::authenticate(Array, Object(Controller_User))
#2 [internal function]: Controller_User->action_login()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-16 13:21:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/submissions/create_edit.php [ 98 ]
2012-05-16 13:21:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/submissions/create_edit.php [ 98 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/submissions/create_edit.php(98): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 98, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/templates/base.php(164): Kohana_View->__toString()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(51): Kohana_View->render()
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(238): Controller_Core_Template->after()
#9 [internal function]: Controller_Core_Filter->after()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#11 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#14 {main}