<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-13 14:38:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$page_title ~ APPPATH/classes/controller/core/filter.php [ 117 ]
2012-05-13 14:38:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$page_title ~ APPPATH/classes/controller/core/filter.php [ 117 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(117): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 117, Array)
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:38:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/core/template.php [ 43 ]
2012-05-13 14:38:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/core/template.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-13 14:42:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$default_sidebar_image ~ APPPATH/classes/controller/core/filter.php [ 106 ]
2012-05-13 14:42:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$default_sidebar_image ~ APPPATH/classes/controller/core/filter.php [ 106 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(106): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 106, Array)
#1 [internal function]: Controller_Core_Filter->before()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:43:22 --- ERROR: ErrorException [ 8 ]: Undefined index: page_size ~ APPPATH/classes/controller/stimulus.php [ 54 ]
2012-05-13 14:43:22 --- STRACE: ErrorException [ 8 ]: Undefined index: page_size ~ APPPATH/classes/controller/stimulus.php [ 54 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 54, Array)
#1 [internal function]: Controller_Stimulus->action_index()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:43:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/core/filter.php [ 113 ]
2012-05-13 14:43:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/core/filter.php [ 113 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(113): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:44:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$_styles ~ APPPATH/classes/controller/core/filter.php [ 113 ]
2012-05-13 14:44:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$_styles ~ APPPATH/classes/controller/core/filter.php [ 113 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(113): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:44:54 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/core/filter.php [ 110 ]
2012-05-13 14:44:54 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/core/filter.php [ 110 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(110): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 110, Array)
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:47:15 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/core/filter.php [ 110 ]
2012-05-13 14:47:15 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/core/filter.php [ 110 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(110): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 110, Array)
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:47:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$_view ~ APPPATH/classes/controller/core/filter.php [ 136 ]
2012-05-13 14:47:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$_view ~ APPPATH/classes/controller/core/filter.php [ 136 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(136): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 136, Array)
#1 [internal function]: Controller_Core_Filter->after()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:50:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: request_path ~ APPPATH/views/common/top_navigation.php [ 10 ]
2012-05-13 14:50:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: request_path ~ APPPATH/views/common/top_navigation.php [ 10 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/common/top_navigation.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/templates/base.php(148): Kohana_View->__toString()
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/template.php(43): Kohana_View->render()
#8 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/core/filter.php(146): Controller_Core_Template->after()
#9 [internal function]: Controller_Core_Filter->after()
#10 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stimulus))
#11 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#14 {main}
2012-05-13 14:52:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$main_menu ~ APPPATH/classes/controller/stimulus.php [ 45 ]
2012-05-13 14:52:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$main_menu ~ APPPATH/classes/controller/stimulus.php [ 45 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Stimulus->action_index()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:54:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$main_menu ~ APPPATH/classes/controller/stimulus.php [ 45 ]
2012-05-13 14:54:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$main_menu ~ APPPATH/classes/controller/stimulus.php [ 45 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Stimulus->action_index()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 14:54:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$main_menu ~ APPPATH/classes/controller/stimulus.php [ 45 ]
2012-05-13 14:54:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Stimulus::$main_menu ~ APPPATH/classes/controller/stimulus.php [ 45 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Stimulus->action_index()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 15:03:57 --- ERROR: Kohana_Exception [ 0 ]: The view_count property does not exist in the Model_Stimulus class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-05-13 15:03:57 --- STRACE: Kohana_Exception [ 0 ]: The view_count property does not exist in the Model_Stimulus class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(76): Kohana_ORM->__get('view_count')
#1 [internal function]: Controller_Stimulus->action_view()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-13 15:07:05 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/comments.php [ 41 ]
2012-05-13 15:07:05 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/comments.php [ 41 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/comments.php(41): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Volumes/Data/w...', 41, Array)
#1 [internal function]: Controller_Comments->action_view()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}