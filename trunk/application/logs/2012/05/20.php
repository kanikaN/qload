<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-20 22:16:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/submissions/view.php [ 136 ]
2012-05-20 22:16:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/submissions/view.php [ 136 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/views/submissions/view.php(136): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 136, Array)
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