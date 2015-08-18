<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-14 00:49:01 --- ERROR: ErrorException [ 2 ]: defined() expects exactly 1 parameter, 2 given ~ APPPATH/bootstrap.php [ 150 ]
2012-05-14 00:49:01 --- STRACE: ErrorException [ 2 ]: defined() expects exactly 1 parameter, 2 given ~ APPPATH/bootstrap.php [ 150 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'defined() expec...', '/Volumes/Data/w...', 150, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/bootstrap.php(150): defined('NON_SIGNED_IN_H...', '/user')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(104): require('/Volumes/Data/w...')
#3 {main}
2012-05-14 01:20:16 --- ERROR: ErrorException [ 2 ]: defined() expects exactly 1 parameter, 2 given ~ APPPATH/bootstrap.php [ 150 ]
2012-05-14 01:20:16 --- STRACE: ErrorException [ 2 ]: defined() expects exactly 1 parameter, 2 given ~ APPPATH/bootstrap.php [ 150 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'defined() expec...', '/Volumes/Data/w...', 150, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/bootstrap.php(150): defined('NON_SIGNED_IN_H...', '/user')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(104): require('/Volumes/Data/w...')
#3 {main}
2012-05-14 01:20:16 --- ERROR: ErrorException [ 2 ]: defined() expects exactly 1 parameter, 2 given ~ APPPATH/bootstrap.php [ 150 ]
2012-05-14 01:20:16 --- STRACE: ErrorException [ 2 ]: defined() expects exactly 1 parameter, 2 given ~ APPPATH/bootstrap.php [ 150 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'defined() expec...', '/Volumes/Data/w...', 150, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/bootstrap.php(150): defined('NON_SIGNED_IN_H...', '/user')
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(104): require('/Volumes/Data/w...')
#3 {main}
2012-05-14 01:21:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`' at line 1 [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.*, `stimulus`.`id as stimulus_id,simulus`.`*, generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-14 01:21:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`' at line 1 [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.*, `stimulus`.`id as stimulus_id,simulus`.`*, generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `stimulu...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stimulus->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:21:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'stimulus.modified_at' in 'order clause' [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-14 01:21:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'stimulus.modified_at' in 'order clause' [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `stimulu...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stimulus->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:21:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'stimulus.modified_at' in 'order clause' [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-14 01:21:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'stimulus.modified_at' in 'order clause' [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `stimulu...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stimulus->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:22:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`' at line 1 [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.*, `stimulus`.`id as stimulus_id,simulus`.`*, generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-14 01:22:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`' at line 1 [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.*, `stimulus`.`id as stimulus_id,simulus`.`*, generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `stimulu...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stimulus->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:22:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`' at line 1 [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.*, `stimulus`.`id as stimulus_id,simulus`.`*, generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-14 01:22:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`' at line 1 [ SELECT `stimulus`.`id` AS `stimulus_id`, `stimulus`.*, `generated_contents`.*, `stimulus`.`id as stimulus_id,simulus`.`*, generated_contents`.* FROM `stimulus` LEFT JOIN `contents` ON (`stimulus`.`content_id` = `contents`.`id`) LEFT JOIN `generated_contents` ON (`generated_contents`.`parent_id` = `contents`.`id`) WHERE (`stimulus`.`content_id` IS NULL OR `generated_contents`.`preset_type` = 'thumb_X_150') ORDER BY `stimulus`.`modified_at` DESC LIMIT 5 OFFSET 5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `stimulu...', true, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/stimulus.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Stimulus->action_index()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Stimulus))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:23:50 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Submission::remove_submission(), called in /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/submissions.php on line 94 and defined ~ APPPATH/classes/model/submission.php [ 286 ]
2012-05-14 01:23:50 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Submission::remove_submission(), called in /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/submissions.php on line 94 and defined ~ APPPATH/classes/model/submission.php [ 286 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/model/submission.php(286): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 286, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/submissions.php(94): Model_Submission->remove_submission()
#2 [internal function]: Controller_Submissions->action_remove()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Submissions))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:24:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: submission ~ APPPATH/classes/model/submission.php [ 297 ]
2012-05-14 01:24:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: submission ~ APPPATH/classes/model/submission.php [ 297 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/model/submission.php(297): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 297, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/submissions.php(94): Model_Submission->remove_submission(Object(Controller_Submissions))
#2 [internal function]: Controller_Submissions->action_remove()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Submissions))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 01:27:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Submissions::$main_menu ~ APPPATH/classes/controller/submissions.php [ 38 ]
2012-05-14 01:27:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Submissions::$main_menu ~ APPPATH/classes/controller/submissions.php [ 38 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/submissions.php(38): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 38, Array)
#1 [internal function]: Controller_Submissions->action_index()
#2 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Submissions))
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#6 {main}
2012-05-14 03:38:56 --- ERROR: ErrorException [ 8 ]: Undefined index: VIDEO_MP4_640_X ~ APPPATH/classes/model/content.php [ 119 ]
2012-05-14 03:38:56 --- STRACE: ErrorException [ 8 ]: Undefined index: VIDEO_MP4_640_X ~ APPPATH/classes/model/content.php [ 119 ]
--
#0 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/model/content.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 119, Array)
#1 /Volumes/Data/workspace/cgs/ql/qyuki_new/application/classes/controller/admin/cron.php(53): Model_Content->get_preset('VIDEO_MP4_640_X')
#2 [internal function]: Controller_Admin_Cron->action_aspect()
#3 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Cron))
#4 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/workspace/cgs/ql/qyuki_new/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/workspace/cgs/ql/qyuki_new/index.php(111): Kohana_Request->execute()
#7 {main}
2012-05-14 03:41:06 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/model/user.php [ 152 ]
2012-05-14 03:41:06 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/model/user.php [ 152 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}