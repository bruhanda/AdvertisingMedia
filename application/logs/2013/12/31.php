<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-31 11:24:26 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'bett' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /root/Web-Server/cms.com/www/modules/database/classes/Kohana/Database/MySQL.php:75
2013-12-31 11:24:26 --- DEBUG: #0 /root/Web-Server/cms.com/www/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('bett')
#1 /root/Web-Server/cms.com/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /root/Web-Server/cms.com/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /root/Web-Server/cms.com/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('pages')
#4 /root/Web-Server/cms.com/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /root/Web-Server/cms.com/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /root/Web-Server/cms.com/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /root/Web-Server/cms.com/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /root/Web-Server/cms.com/www/modules/pages/classes/Controller/Backend/Pages.php(17): Kohana_ORM::factory('Page')
#9 /root/Web-Server/cms.com/www/system/classes/Kohana/Controller.php(84): Controller_Backend_Pages->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /root/Web-Server/cms.com/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Pages))
#12 /root/Web-Server/cms.com/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /root/Web-Server/cms.com/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /root/Web-Server/cms.com/www/index.php(118): Kohana_Request->execute()
#15 {main} in /root/Web-Server/cms.com/www/modules/database/classes/Kohana/Database/MySQL.php:75
2013-12-31 11:42:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-formo-master' at 'MODPATH/kohana-formo-master' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:42:29 --- DEBUG: #0 /root/Web-Server/test.ru/www/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /root/Web-Server/test.ru/www/index.php(102): require('/root/Web-Serve...')
#2 {main} in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:45:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-formo-master' at 'MODPATH/kohana-formo-master' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:45:34 --- DEBUG: #0 /root/Web-Server/test.ru/www/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /root/Web-Server/test.ru/www/index.php(102): require('/root/Web-Serve...')
#2 {main} in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:48:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-formo-master' at 'MODPATH/kohana-formo-master' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:48:31 --- DEBUG: #0 /root/Web-Server/test.ru/www/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /root/Web-Server/test.ru/www/index.php(102): require('/root/Web-Serve...')
#2 {main} in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:49:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-formo-master' at 'MODPATH/kohana-formo-master' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:49:23 --- DEBUG: #0 /root/Web-Server/test.ru/www/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /root/Web-Server/test.ru/www/index.php(102): require('/root/Web-Serve...')
#2 {main} in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:49:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-formo-master' at 'MODPATH/kohana-formo-master' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:49:52 --- DEBUG: #0 /root/Web-Server/test.ru/www/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /root/Web-Server/test.ru/www/index.php(102): require('/root/Web-Serve...')
#2 {main} in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:49:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-formo-master' at 'MODPATH/kohana-formo-master' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:49:53 --- DEBUG: #0 /root/Web-Server/test.ru/www/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /root/Web-Server/test.ru/www/index.php(102): require('/root/Web-Serve...')
#2 {main} in /root/Web-Server/test.ru/www/application/bootstrap.php:135
2013-12-31 11:50:41 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'bett' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /root/Web-Server/test.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75
2013-12-31 11:50:41 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('bett')
#1 /root/Web-Server/test.ru/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /root/Web-Server/test.ru/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /root/Web-Server/test.ru/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('pages')
#4 /root/Web-Server/test.ru/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /root/Web-Server/test.ru/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /root/Web-Server/test.ru/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /root/Web-Server/test.ru/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /root/Web-Server/test.ru/www/modules/pages/classes/Controller/Backend/Pages.php(17): Kohana_ORM::factory('Page')
#9 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Backend_Pages->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Pages))
#12 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#15 {main} in /root/Web-Server/test.ru/www/modules/database/classes/Kohana/Database/MySQL.php:75
2013-12-31 12:25:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view registration.view could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /root/Web-Server/test.ru/www/system/classes/Kohana/View.php:137
2013-12-31 12:25:07 --- DEBUG: #0 /root/Web-Server/test.ru/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('registration.vi...')
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('registration.vi...', NULL)
#2 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Frontend/Main.php(7): Kohana_View::factory('registration.vi...')
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Frontend_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#6 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#9 {main} in /root/Web-Server/test.ru/www/system/classes/Kohana/View.php:137
2013-12-31 12:41:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 52 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:52
2013-12-31 12:41:30 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 52, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:52
2013-12-31 12:44:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 52 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:52
2013-12-31 12:44:10 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 52, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:52
2013-12-31 12:45:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 52 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:52
2013-12-31 12:45:16 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 52, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:52
2013-12-31 12:49:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 55 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:49:43 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 55, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:50:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 55 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:50:02 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 55, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:50:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 55 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:50:29 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 55, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:52:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 55 ] in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 12:52:16 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/root/Web-Serve...', 55, Array)
#1 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#4 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#7 {main} in /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php:55
2013-12-31 13:21:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 79 ] in file:line
2013-12-31 13:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 13:22:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ MODPATH/core/classes/Controller/Ajax/Json.php [ 79 ] in file:line
2013-12-31 13:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 13:24:17 --- EMERGENCY: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ] in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php:264
2013-12-31 13:24:17 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, NULL)
#7 /root/Web-Server/test.ru/www/modules/mailer/classes/Kohana/Email.php(293): call_user_func(Array, NULL, NULL)
#8 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(81): Kohana_Email->from(NULL)
#9 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#10 [internal function]: Kohana_Controller->execute()
#11 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#12 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#15 {main} in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php:264
2013-12-31 13:24:47 --- EMERGENCY: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ] in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php:264
2013-12-31 13:24:47 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, NULL)
#7 /root/Web-Server/test.ru/www/modules/mailer/classes/Kohana/Email.php(293): call_user_func(Array, NULL, NULL)
#8 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(81): Kohana_Email->from(NULL)
#9 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#10 [internal function]: Kohana_Controller->execute()
#11 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#12 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#15 {main} in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php:264
2013-12-31 13:25:04 --- EMERGENCY: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ] in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php:264
2013-12-31 13:25:04 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(193): Swift_Mime_SimpleMessage->setFrom(Array)
#6 [internal function]: Swift_Mime_SimpleMessage->addFrom(NULL, NULL)
#7 /root/Web-Server/test.ru/www/modules/mailer/classes/Kohana/Email.php(293): call_user_func(Array, NULL, NULL)
#8 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(81): Kohana_Email->from(NULL)
#9 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#10 [internal function]: Kohana_Controller->execute()
#11 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#12 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#15 {main} in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php:264
2013-12-31 13:30:44 --- EMERGENCY: Swift_TransportException [ 0 ]: Connection could not be established with host mail.densim.org.ua [Unable to find the socket transport "ssl" - did you forget to enable it when you configured PHP? #149740964] ~ MODPATH/mailer/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php [ 259 ] in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2013-12-31 13:30:44 --- DEBUG: #0 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 /root/Web-Server/test.ru/www/modules/mailer/classes/Kohana/Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#4 /root/Web-Server/test.ru/www/modules/core/classes/Controller/Ajax/Json.php(83): Kohana_Email->send()
#5 /root/Web-Server/test.ru/www/system/classes/Kohana/Controller.php(84): Controller_Ajax_Json->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Json))
#8 /root/Web-Server/test.ru/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /root/Web-Server/test.ru/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /root/Web-Server/test.ru/www/index.php(118): Kohana_Request->execute()
#11 {main} in /root/Web-Server/test.ru/www/modules/mailer/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64