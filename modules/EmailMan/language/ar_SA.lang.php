<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************
 * $Id: en_us.lang.php 55754 2010-04-02 01:37:10Z jmertic $
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'تاريخ الإرسال',
	'LBL_IN_QUEUE'								=> 'قيد التقدم',
	'LBL_IN_QUEUE_DATE'							=> 'تاريخ في قائمة الانتظار',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'استخدام القيم الصحيحة فقط لتحديد عدد رسائل البريد الإلكتروني المرسلة لكل دفعة',

	'LBL_ATTACHMENT_AUDIT'						=> ' تم إرسالها.  لم يتم التكرار محليًا للحفاظ على استخدام القرص.',
	'LBL_CONFIGURE_SETTINGS'					=> 'تكوين إعدادات البريد الإلكتروني',
	'LBL_CUSTOM_LOCATION'						=> 'مستخدم محدد',
	'LBL_DEFAULT_LOCATION'						=> 'افتراضي',
	
	'LBL_DISCLOSURE_TITLE'						=> 'إلحاق رسالة إفشاء لكل بريد إلكتروني',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'إفشاء المحتويات',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'إشعار: رسالة البريد الإلكتروني هي للاستخدام الوحيد للمتلقين المقصودين، وقد تحتوي على معلومات سرية ومتميزة. يُمنع منعًا باتًا عرض، أو استخدام، أو كشف، أو نشر غير مصرح به. إذا لم تكن أنت المتلقي المقصود، فيُرجى إتلاف جميع نسخ الرسالة الأصلية وإخطار المرسل بحيث يمكن تصحيح سجل العنوان الخاص بنا. شكرًا لك.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'إنشاء رسالة بريد إلكتروني في مجموعة الأحرف هذه',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'إنشاء رسالة بريد إلكتروني باستخدام هذا العميل',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'حذف جميع الملاحظات والملحقات مع رسائل البريد الإلكتروني المحذوفة',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'ملء مسبق Gmail&#153 الافتراضيات',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'عدد رسائل البريد الإلكتروني المرسلة لكل دفعة:',
	'LBL_EMAIL_SMTP_SSL'						=> 'تمكين SMTP فوق SSL؟',
	'LBL_EMAIL_USER_TITLE'						=> 'استخدام افتراضيات البريد الإلكتروني',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'تكوين البريد الصادر',
	'LBL_EMAILS_PER_RUN'						=> 'عدد رسائل البريد الإلكتروني المرسلة لكل دفعة:',
	'LBL_ID'									=> 'المعرّف',
	'LBL_LIST_CAMPAIGN'							=> 'الحملة',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'تمت معالجته',
	'LBL_LIST_FORM_TITLE'						=> 'قائمة الانتظار',
	'LBL_LIST_FROM_EMAIL'						=> 'من البريد الإلكتروني',
	'LBL_LIST_FROM_NAME'						=> 'من اسم',
	'LBL_LIST_IN_QUEUE'							=> 'قيد التقدم',
	'LBL_LIST_MESSAGE_NAME'						=> 'رسالة التسويق',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'البريد الإلكتروني الخاص بالمستلم',
	'LBL_LIST_RECIPIENT_NAME'					=> 'اسم المستلم',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'محالات الإرسال',
	'LBL_LIST_SEND_DATE_TIME'					=> 'إرسال على',
	'LBL_LIST_USER_NAME'						=> 'اسم المستخدم',
	'LBL_LOCATION_ONLY'							=> 'الموقع',
	'LBL_LOCATION_TRACK'						=> 'موقع حملة تعقب الملفات (مثل campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'حفظ نسخ من رسائل الحملة:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'هل ترغب في حفظ نسخ كاملة من <bold>كل</bold> رسالة بريد إلكتروني مرسلة خلال جميع الحملات؟  <bold>من المستحسن ومن المفترض لا</bold>.  الاختيار لا سيحفظ فقط القالب الذي تم إرساله والمتغيرات اللازمة لإعادة إنشاء رسالة فردية.',
	'LBL_MAIL_SENDTYPE'							=> 'عامل نقل الرسائل:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'استخدام مصادقة SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'كلمة المرور:',
	'LBL_MAIL_SMTPPORT'							=> 'منفذ SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'خادم بريد SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'اسم المستخدم:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'اختر موفر البريد الإلكتروني الخاص بك',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! كلمة مرور البريد الإلكتروني',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! معرّف البريد الإلكتروني',
	'LBL_GMAIL_SMTPPASS'					=> 'كلمة مرور Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'عنوان البريد الإلكتروني Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'تبادل كلمة المرور',
	'LBL_EXCHANGE_SMTPUSER'					=> 'تبادل اسم المستخدم',
	'LBL_EXCHANGE_SMTPPORT'					=> 'تبادل منفذ الخادم',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'تبادل الخادم',
	'LBL_EMAIL_LINK_TYPE'				=> 'عميل البريد الإلكتروني',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>عميل بريد Sugar:</b> إرسال رسائل البريد الإلكتروني باستخدام عميل البريد الإلكتروني في تطبيق Sugar.<br>هذا الخيار متاح فقط في حال قيام المسؤول بتكوين إعدادات البريد الإلكتروني الخاص بك للسماح بذلك. يرجى الاتصال بالمسؤول الخاص بك إذا كان لديك أي أسئلة.<br><b>عميل البريد الإلكتروني الخارجي:</b> قم بإرسال بريد إلكتروني باستخدام عميل بريد إلكتروني خارج تطبيق Sugar، مثل Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'معرّف التسويق',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'إعدادات البريد الإلكتروني',
	'LBL_MODULE_NAME_SINGULAR'						=> 'إعدادات البريد الإلكتروني',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'تكوين إعدادات البريد الإلكتروني الخاص بالحملة',
	'LBL_MODULE_TITLE'							=> 'إدارة قائمة انتظار البريد الإلكتروني الصادر',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'عند التمكين، يتم إرسال البريد الإلكتروني للمستخدمين عند تعيين السجلات لهم.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'عنوان "من":',
	'LBL_NOTIFY_FROMNAME' 						=> '"من" اسم:',
	'LBL_NOTIFY_ON'								=> 'إعلامات التعيين',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'إرسال إعلامات للمستخدمين الجدد',
	'LBL_NOTIFY_TITLE'							=> 'خيارات البريد الإلكتروني',
	'LBL_OLD_ID'								=> 'المعرّف القديم',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'خيارات البريد الإلكتروني الصادر',
	'LBL_RELATED_ID'							=> 'المعرّف ذو الصلة',
	'LBL_RELATED_TYPE'							=> 'النوع ذو الصلة',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'حفظ البريد الإلكتروني الخام الصادر',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'البحث فيما تمت معالجته',
	'LBL_SEARCH_FORM_TITLE'						=> 'البحث في قائمة الانتظار',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'إظهار رسائل البريد الإلكتروني التي تمت معالجتها',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'إظهار رسائل البريد الإلكتروني التي في قائمة الانتظار',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'قيمة Config.php setting site_url',
	'TXT_REMOVE_ME_ALT'							=> 'لإزالة نفسك من قائمة البريد الإلكتروني اذهب إلى',
	'TXT_REMOVE_ME_CLICK'						=> 'انقر هنا',
	'TXT_REMOVE_ME'								=> 'لإزالة نفسك من قائمة البريد الإلكتروني ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'إرسال إعلامات من البريد الإلكتروني الخاص بالمستخدم المعين',

	'LBL_SECURITY_TITLE'						=> 'إعدادات أمان البريد الإلكتروني',
	'LBL_SECURITY_DESC'							=> 'تحقق من كون ما يلي غير مسموح به عبر InboundEmail أو يظهر في وحدة رسائل البريد الإلكتروني.',
	'LBL_SECURITY_APPLET'						=> 'العلامة الصغيرة',
	'LBL_SECURITY_BASE'							=> 'العلامة الأساسية',
	'LBL_SECURITY_EMBED'						=> 'العلامة الضمنية',
	'LBL_SECURITY_FORM'							=> 'نموذج العلامة',
	'LBL_SECURITY_FRAME'						=> 'إطار العلامة',
	'LBL_SECURITY_FRAMESET'						=> 'إطارات العلامة',
	'LBL_SECURITY_IFRAME'						=> 'علامة iFrame',
	'LBL_SECURITY_IMPORT'						=> 'علامة الاستيراد',
	'LBL_SECURITY_LAYER'						=> 'علامة الطبقات',
	'LBL_SECURITY_LINK'							=> 'علامة الارتباط',
	'LBL_SECURITY_OBJECT'						=> 'علامة الكائنات',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'تحديد الحد الأدنى من إعدادات أمان Outlook (errs على جانب العرض الصحيح).',
	'LBL_SECURITY_SCRIPT'						=> 'علامة البرنامج النصي',
	'LBL_SECURITY_STYLE'						=> 'علامة النمط',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'تبديل جميع الخيارات',
	'LBL_SECURITY_XMP'							=> 'علامة Xmp',
    'LBL_YES'                                   => 'نعم',
    'LBL_NO'                                    => 'لا',
    'LBL_PREPEND_TEST'                          => '[اختبار]: ',
	'LBL_SEND_ATTEMPTS'							=> 'محالات الإرسال',
	'LBL_OUTGOING_SECTION_HELP'                 => 'تكوين الخادم الافتراضي للبريد الصادر لإرسال إعلامات البريد الإلكتروني، بما في ذلك تنبيهات سير العمل.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'تمكين المستخدمين من استخدام هذا الحساب للبريد الإلكتروني الصادر:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'عند تحديد هذا الخيار، ستكون لدى جميع المستخدمين إمكانية إرسال رسائل بريد إلكتروني باستخدام نفس حساب البريد<br> الصادر المستخدم لإرسال إعلامات النظام وتنبيهاته.  في حال عدم تحديد هذا الخيار، <br> تظل لدى المستخدمين إمكانية استخدام خادم البريد الإلكتروني الصادر بعد توفير معلومات الحساب الخاص بهم.',
    'LBL_FROM_ADDRESS_HELP'                     => 'عند التمكين، سوف يتم تضمين اسم المستخدم المعين والبريد الإلكتروني في حقل "من" في البريد الإلكتروني. قد لا تعمل هذه الميزة مع خوادم SMTP التي لا تسمح بالإرسال من حساب بريد إلكتروني مختلف غير حساب الخادم.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'تعليمات' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'دخول غير مسموح به للإدارة.',
    'LBL_INVALID_ENTRY_POINT' => 'ليست نقطة إدخال صالحة',
);
