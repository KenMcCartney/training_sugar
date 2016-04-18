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


$mod_strings = array (
  'ADVANCED' => 'Розширений',
  'CURRENT_LOGO' => 'Поточний логотип:',
  'CURRENT_LOGO_HELP' => 'Даний логотип відображається в лівому верхньому кутку додатка Sugar.',
  'DEFAULT_CURRENCY' => 'Валюта за умовчанням',
  'DEFAULT_CURRENCY_ISO4217' => 'Код валюти ISO 4217',
  'DEFAULT_CURRENCY_NAME' => 'Назва валюти',
  'DEFAULT_CURRENCY_SYMBOL' => 'Символ валюти',
  'DEFAULT_DATE_FORMAT' => 'Формат дати за умовчанням',
  'DEFAULT_DECIMAL_SEP' => 'Десятковий символ',
  'DEFAULT_LANGUAGE' => 'Мова за умовчанням',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Символ роздільника розрядів',
  'DEFAULT_OC_STATUS' => 'Активувати автономного клієнт за замовчуванням',
  'DEFAULT_SYSTEM_SETTINGS' => 'Інтерфейс користувача',
  'DEFAULT_THEME' => 'Тема за умовчанням',
  'DEFAULT_TIME_FORMAT' => 'Формат часу за умовчанням',
  'DEVELOPER_MODE' => 'Режим розробника',
  'DISPLAY_RESPONSE_TIME' => 'Відображати час відгуку сервера',
  'ERR_ALERT_FILE_UPLOAD' => 'Сталася помилка в процесі завантаження зображення.',
  'ERR_DELETE_CORE_FILE' => 'ПОМИЛКА: Неможливо видалити базовий шрифт.',
  'ERR_EMPTY_SAML_CERT' => 'SAML сертифікат не може бути порожнім',
  'ERR_EMPTY_SAML_LOGIN' => 'URL-адреса входу SAML не може бути порожньою',
  'ERR_EZPDF_DISABLE' => 'Увага: клас EZPDF виключений з конфігурації таблиці і замість нього встановлено клас PDF. Збережіть цю форму, щоб встановити TCPDF в якості класу PDF і повернутися до стабільного стану.',
  'ERR_FONT_ALREADY_EXIST' => 'ПОМИЛКА: Цей шрифт вже існує. Відміна...',
  'ERR_FONT_EMPTYFILE' => 'ПОМИЛКА: Файл не може бути порожнім чи без назви!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'не існує або не є директорією.',
  'ERR_FONT_MAKEFONT' => 'ПОМИЛКА: помилка створення шрифту',
  'ERR_FONT_NOT_WRITABLE' => 'недоступний для запису.',
  'ERR_FONT_UNKNOW_TYPE' => 'ПОМИЛКА: Невідомий тип шрифту:',
  'ERR_LOADFONTFILE' => 'ПОМИЛКА: помилка завантаження файлу шрифту!',
  'ERR_MISSING_CIDINFO' => 'Поле з інформацією про CID не може бути порожнім.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ПОМИЛКА: Шлях до шрифту користувача недоступний!',
  'ERR_NO_FONT_PATH' => 'ПОМИЛКА: Шлях до шрифту недоступний!',
  'ERR_PDF_NO_UPLOAD' => 'Сталася помилка при завантаженні шрифту в файл вимірювань.',
  'ERR_SAML_LOGIN_URL' => 'Неприпустима URL-адреса входу SAML',
  'ERR_SAML_SLO_URL' => 'Неприпустима URL адреса SLO SAML',
  'HEAD_MAGNIFICATION' => 'Збільшення заголовка',
  'HEAD_MAGNIFICATION_INFO' => 'Коефіцієнт збільшення для назви',
  'IMAGES' => 'Логотипи',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Розширення даного файлу не підходить.',
  'K_CELL_HEIGHT_RATIO' => 'Коефіцієнт висоти комірок',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Якщо висота комірок менше, ніж (Font Height x Cell Height Ratio), то (Font Height x Cell Height Ratio) використовується в якості висоти комірки. (Font Height x Cell Height Ratio) також використовується в якості висоти комірки, коли висота не задана.',
  'K_SMALL_RATIO' => 'Малий коефіцієнт шрифту',
  'K_SMALL_RATIO_INFO' => 'Коефіцієнт зменшення для маленького шрифту.',
  'K_TITLE_MAGNIFICATION' => 'Збільшення назви',
  'K_TITLE_MAGNIFICATION_INFO' => 'Дотримання збільшення назви для розміру основного шрифту.',
  'LBL_ADDFONTRESULT_TITLE' => 'Результат додавання шрифту',
  'LBL_ADDFONT_TITLE' => 'Додати шрифт PDF',
  'LBL_ADD_FONT' => 'Додати шрифт',
  'LBL_ADD_FONT_BUTTON' => 'Додати',
  'LBL_ADMIN_WIZARD' => 'Майстер налаштування системи',
  'LBL_ALERT_JPG_IMAGE' => 'Файл зображення повинен бути у форматі JPEG. Завантажте новий файл з розширенням .jpg.',
  'LBL_ALERT_SIZE_RATIO' => 'Співвідношення сторін зображення повинно бути між 1: 1 і 10: 1. Розмір зображення буде змінено.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Співвідношення сторін зображення повинно бути між 3: 1 і 20: 1. Завантажте новий файл.',
  'LBL_ALERT_TYPE_IMAGE' => 'Файл зображення повинен бути у форматі JPEG або PNG. Завантажте новий файл з розширенням .jpg або .png.',
  'LBL_ALL' => 'Всі',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Дозволити користувачам використовувати цей обліковий запис для вихідних повідомлень:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'При виборі даної опції всі користувачі зможуть відправляти електронну пошту (включаючи автоматичні повідомлення про призначення записів і системні повідомлення) з використанням зазначеного тут стандартного сервера вихідної пошти. В іншому випадку кожному користувачеві при налаштуванні облікового запису електронної пошти необхідно вручну ввести налаштування сервера вихідної пошти.',
  'LBL_ALLOW_USER_TABS' => 'Дозволити користувачам приховувати вкладки',
  'LBL_BACK' => 'Назад',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Виберіть постачальника послуг вашої електронної пошти:',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Системні налаштування',
  'LBL_DELETE' => 'Видалити',
  'LBL_DISALBE_CONVERT_LEAD' => 'Відключити опцію конвертації попереднього контакту для вже конвертованих попередніх контактів',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Якщо попередній контакт вже конвертований, то підключення цієї опції деактивує опцію конвертації попереднього контакту.',
  'LBL_DISPLAYING_LOG' => 'Відображення входу',
  'LBL_ENABLE_ACTION_MENU' => 'Вдображати дії в меню',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Виберіть для відображення DetailView і дій субпанелей у випадаючому меню. Якщо опція не вибрана, дії будуть відображені у вигляді окремих кнопок.',
  'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Дозволити / Заборонити відображення електронних листів від пов&#39;язаних контактів на субпанелі Email.',
  'LBL_ENABLE_MAILMERGE' => 'Увімкнути злиття пошти?',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange Пароль:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Порт сервера:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Сервер:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange Ім&#39;я користувача::',
  'LBL_FONTMANAGER_BUTTON' => 'Менеджер шрифтів PDF',
  'LBL_FONTMANAGER_TITLE' => 'Менеджер шрифтів PDF',
  'LBL_FONT_BOLD' => 'Жирний шрифт',
  'LBL_FONT_BOLDITALIC' => 'Жирний шрифт/Курсив',
  'LBL_FONT_ITALIC' => 'Курсив',
  'LBL_FONT_LIST_CIDINFO' => 'Інформація CID',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Приклади :<ul><li>Chinese Traditional :<br><pre>$enc=\\&#39;UniCNS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;CNS1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;vendor/tcpdf/fonts/uni2cid_ac15.php\\&#39;);</pre></li><li>Chinese Simplified :<br><pre>$enc=\\&#39;UniGB-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;GB1\\&#39;,\\&#39;Supplement\\&#39;=>2);<br>include(\\&#39;vendor/tcpdf/fonts/uni2cid_ag15.php\\&#39;);</pre></li><li>Korean :<br><pre>$enc=\\&#39;UniKS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Korea1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;vendor/tcpdf/fonts/uni2cid_ak12.php\\&#39;);</pre></li><li>Japanese :<br><pre>$enc=\\&#39;UniJIS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Japan1\\&#39;,\\&#39;Supplement\\&#39;=>5);<br>include(\\&#39;vendor/tcpdf/fonts/uni2cid_aj16.php\\&#39;);</pre></li></ul> Допомога : www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Вбудований',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Відзначте, щоб включити цей шрифт у файл PDF',
  'LBL_FONT_LIST_ENC' => 'Кодування',
  'LBL_FONT_LIST_FILENAME' => 'Назва файлу',
  'LBL_FONT_LIST_FILESIZE' => 'Розмір шрифту',
  'LBL_FONT_LIST_NAME' => 'Назва',
  'LBL_FONT_LIST_STYLE' => 'Стиль',
  'LBL_FONT_LIST_STYLE_INFO' => 'Стиль шрифту',
  'LBL_FONT_LIST_TYPE' => 'Тип',
  'LBL_FONT_MOVE_DEFFILE' => 'Файл визначень переміщений в:',
  'LBL_FONT_MOVE_FILE' => 'Файл шрифтів переміщений в:',
  'LBL_FONT_REGULAR' => 'Звичайний',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Базовий шрифт',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_TYPE_TYPE1' => 'Тип1',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Пароль Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Email-адреса Gmail:',
  'LBL_IGNORE_SELF' => 'Ігнорувати:',
  'LBL_IMG_RESIZED' => '(розмір змінений для відображення)',
  'LBL_IMPORT_MAX_RECORDS' => 'Імпорт - максимальна кількість рядків:',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Вкажіть, скільки рядків дозволено в файлах імпорту. Якщо кількість рядків файлу імпорту перевищить це число, користувач побачить повідомлення. Якщо число не вказано, буде дозволено необмежену кількість рядків.',
  'LBL_IT_WILL_BE_IGNORED' => 'Це буде проігноровано',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Ви впевнені, що хочете видалити цей шрифт?',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Пароль:',
  'LBL_LDAP_ADMIN_USER' => 'Ім&#39;я користувача:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Пошук користувача Sugar. У разі відсутності параметра буде виконаний анонімний вхід.',
  'LBL_LDAP_AUTHENTICATION' => 'Аутентифікація:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Авторизація на сервері LDAP, використовуючи дані користувача',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Автоматичне створення користувачів:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Якщо користувач не існує в базі Sugar, то він буде створений.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind-атрибут:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Авторизація користувача LDAP <br> наприклад : <b>AD:</b> userPrincipalName, <b>openLDAP:</b> userPrincipalName, <b>Mac OS X:</b> uid',
  'LBL_LDAP_ENABLE' => 'Активувати LDAP',
  'LBL_LDAP_ENC_KEY' => 'Ключ шифрування:',
  'LBL_LDAP_ENC_KEY_DESC' => 'Для SOAP-авторизації при використанні LDAP.',
  'LBL_LDAP_GROUP_ATTR' => 'Атрибут групи:',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Унікальний атрибут групи, наприклад: <em>memberUid</em>',
  'LBL_LDAP_GROUP_DN' => 'DN групи:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Приклад: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Участь в групах:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Користувачі повинні бути членами певної групи',
  'LBL_LDAP_GROUP_NAME' => 'Назва групи:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Приклад:  <em>cn=sugarcrm</em>',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Атрибут користувача:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Унікальний ідентифікатор користувача, який використовується для перевірки належності користувача до певної групи, наприклад <em>uid</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login-атрибут:',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Пошук користувача LDAP <br>наприклад :<b>AD:</b> userPrincipalName, <b>openLDAP:</b> dn, <b>Mac OS X:</b> dn',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Сервер:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Приклад: ldap.example.com або  ldaps://ldap.example.com при увімкненні SSL',
  'LBL_LDAP_SERVER_PORT' => 'Номер порту:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Приклад: 389 або 636 при увімкненні SSL',
  'LBL_LDAP_TITLE' => 'Підтримка LDAP',
  'LBL_LDAP_USER_DN' => 'DN користувача:',
  'LBL_LDAP_USER_DN_DESC' => 'Приклад: ou=people,dc=example,dc=com',
  'LBL_LDAP_USER_FILTER' => 'Фільтри:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Будь-які додаткові параметри, застосовувані в процесі авторизації користувачів, наприклад:  \\nis_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
  'LBL_LEAD_CONV_OPTION' => 'Опції конверсії попередніх контактів',
  'LBL_LOADING' => 'Завантаження...',
  'LBL_LOCK_SUBPANELS_DESC' => 'Цей параметр застосовується до модулів в стандартному режимі.',
  'LBL_LOGGER' => 'Параметри журналу',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Формат дати за умовчанням',
  'LBL_LOGGER_FILENAME' => 'Назва  файлу журналу:',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Додатковий суфікс імені файлу журналу:',
  'LBL_LOGGER_FILE_EXTENSION' => 'Розширення',
  'LBL_LOGGER_LOG_LEVEL' => 'Рівень деталізації:',
  'LBL_LOGGER_MAX_LOGS' => 'Максимальна кількість файлів журналу:',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Максимальний розмір файлу журналу:',
  'LBL_LOGO' => 'Логотип',
  'LBL_LOGVIEW' => 'Переглянути журнал',
  'LBL_LOG_NOT_CHANGED' => 'Журнал не був змінений',
  'LBL_MAILMERGE' => 'Злиття пошти',
  'LBL_MAILMERGE_DESC' => 'Цей прапорець може бути встановлений тільки за наявності відповідного плагіна для Microsoft® Word®.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Використовувати аутентифікацію SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Пароль SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Порт SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Сервер SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Тип сервера SMTP:',
  'LBL_MAIL_SMTPUSER' => 'Ім&#39;я користувача SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Контрольна точка в журналі встановлена',
  'LBL_MARK_POINT' => 'Встановити контрольну точку',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Мінімальний час автоматичного оновлення розділу',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Це мінімальне значення часу автоматичного оновлення розділу. Виберіть "Ніколи" щоб повністю заборонити автоматичне оновлення розділів.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Модуль Звіти доступний тільки для мобільного клієнта Sugar iPhone.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => '* Модуль звітів недоступний для перегляду при вході в браузер з мобільного телефону',
  'LBL_MODULE_FAVICON' => 'Відображати іконку модуля як іконку сайту',
  'LBL_MODULE_FAVICON_HELP' => 'Якщо ви знаходитесь в модулі, що містить іконку, то ця іконка буде використовуватися в якості іконки сайту, замість іконки сайту, що міститься в поточній темі.',
  'LBL_MODULE_ID' => 'Конфігуратор',
  'LBL_MODULE_NAME' => 'Системні налаштування',
  'LBL_MODULE_NAME_SINGULAR' => 'Системні налаштування',
  'LBL_MODULE_TITLE' => 'Інтерфейс користувача',
  'LBL_NEXT_' => 'Наступний',
  'LBL_NOTIFY_FROMADDRESS' => '"Від" Адреса:',
  'LBL_NOTIFY_SUBJECT' => 'Тема Email-повідомлення',
  'LBL_NO_PRIVATE_TEAM_UPDATE' => 'Запобігти зміни назв користувачами для поновлення Назв приватних команд',
  'LBL_OC_STATUS' => 'Статус автономного клієнта',
  'LBL_OC_STATUS_DESC' => 'Натисніть тут, якщо хочете, щоб у всіх користувачів був доступ до Оффлайн клієнту. Ви також можете налаштувати доступ на рівні користувача.',
  'LBL_PDFMODULE_NAME' => 'Шаблон звіту у форматі PDF',
  'LBL_PDF_ENCODING_TABLE' => 'Таблиця кодувань',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Назва таблиці кодувань <br/> Ця опція ігнорується для TrueType Unicode, OpenType Unicode і символьних шрифтів. Кодування визначає відповідність між кодом (від 0 до 255) і символом, що містяться в шрифті. Перші 128 позицій є фіксованими і відповідають ASCII.',
  'LBL_PDF_FONT_FILE' => 'Файл шрифта',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf або .otf, або .pfb file',
  'LBL_PDF_INSTRUCTIONS' => 'Інструкції',
  'LBL_PDF_METRIC_FILE' => 'Кількісний файл',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm чи .ufm file',
  'LBL_PDF_PATCH' => 'Патч',
  'LBL_PDF_PATCH_INFO' => 'Зміна кодування користувачем. Запис в масив PHP. <br/> Приклад: <br/> Кодування ISO-8859-1 не містить символу євро. Щоб додати його на позиції № 164, напишіть "array (164 => \\ &#39;Euro \\&#39;)".',
  'LBL_PORTAL_ON' => 'Дозволити управління користувачам порталу',
  'LBL_PORTAL_ON_DESC' => 'Дозволяє користувачам управляти інформацією користувача порталу всередині записів контактів. Користувачі порталу можуть отримати доступ до статей Звернення, Помилки, База знань і інших даних через додаток Sugar Portal.',
  'LBL_PORTAL_TITLE' => 'Портал користувача',
  'LBL_PROXY_AUTH' => 'Аутентифікація?',
  'LBL_PROXY_HOST' => 'Проксі-хост',
  'LBL_PROXY_ON' => 'Використовувати проксі-сервер?',
  'LBL_PROXY_ON_DESC' => 'Налаштування: адреса проксі-сервера і параметри аутентифікації',
  'LBL_PROXY_PASSWORD' => 'Пароль',
  'LBL_PROXY_PORT' => 'Порт',
  'LBL_PROXY_TITLE' => 'Налаштування проксі-сервера',
  'LBL_PROXY_USERNAME' => 'Ім&#39;я користувача',
  'LBL_REFRESH_FROM_MARK' => 'Оновити з контрольною точки',
  'LBL_REG_EXP' => 'Реєстрація закінчується:',
  'LBL_REMOVE' => 'вид.',
  'LBL_RESTORE_BUTTON_LABEL' => 'Відновити',
  'LBL_SEARCH' => 'Пошук:',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'Час очікування сесії порталу встановлено для діючих версій порталу Sugar, доступних для Sugar 6.5 і вище.',
  'LBL_SKYPEOUT_ON' => 'Активувати інтеграція зі SkypeOut&reg',
  'LBL_SKYPEOUT_ON_DESC' => 'Дозволяє користувачам клікати на телефонних номерах з метою дозвону, використовуючи SkypeOut®. Для використання цієї функції номери повинні бути правильно відформатовані: + (код країни) (номер телефону), наприклад: +1 (555) 555-1234. За додатковою інформацією звертайтеся до Skype FAQ: https://support.skype.com/#calling',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
  'LBL_STATUS_FONT_ERROR' => 'ПОМИЛКА: Шрифт не додано. Перегляньте журнал помилок.',
  'LBL_STATUS_FONT_SUCCESS' => 'УСПІШНО: Шрифт був доданий в SugarCRM.',
  'LBL_SYSTEM_SETTINGS' => 'Системні налаштування',
  'LBL_TWEETTOCASE_ON' => 'Ввімкнути SkypeOut&reg; інтеграцію',
  'LBL_TWEETTOCASE_ON_DESC' => 'Дозволяє користувачам створювати звернення з Tweets',
  'LBL_TWEETTOCASE_TITLE' => 'Tweet&reg; до звернення',
  'LBL_USE_REAL_NAMES' => 'Показувати повні імена',
  'LBL_USE_REAL_NAMES_DESC' => 'Відображати повні імена користувачів замість логіна в полях записів.',
  'LBL_VCAL_PERIOD' => 'Оновлення часових діапазонів  vCal:',
  'LBL_WELCOME' => 'Ласкаво просимо!',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Кількість відображуваних записів на сторінці (мобільна версія)',
  'LBL_WIRELESS_SERVER_URL' => 'Сервер Sugar Mobile Plus',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Кількість відображуваних субпанелей на сторінці (мобільна версія)',
  'LBL_WIZARD_BACK_BUTTON' => '< Назад',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Продовжити',
  'LBL_WIZARD_FINISH' => 'Натисніть на кнопку <b> Продовжити </b> для налаштування облікового запису. <br/> Для налаштування додаткових параметрів системи натисніть <a href="index.php?module=Administration&action=index" target="_blank"> тут </a>.',
  'LBL_WIZARD_FINISH_BUTTON' => 'Завершити',
  'LBL_WIZARD_FINISH_TAB' => 'Завершити',
  'LBL_WIZARD_FINISH_TITLE' => 'Налаштування основних параметрів системи завершено',
  'LBL_WIZARD_LOCALE_DESC' => 'Вкажіть, яким чином мають бути представлені дані в системі, спираючись на Ваше географічне положенні. Зазначені тут параметри будуть параметрами за замовчуванням. Надалі користувачі зможуть змінити параметри на свій розсуд.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Наступний',
  'LBL_WIZARD_SKIP_BUTTON' => 'Пропустити',
  'LBL_WIZARD_SMTP_DESC' => 'Обліковий запис вихідної пошти буде використовуватися для відправки вихідної пошти, у тому числі для повідомлень про призначення записів і завдань, і листів з інформацією про новий пароль. Електронна адреса даного облікового запису буде фігурувати в листах в якості відправника.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Вкажіть назву вашої організації і виберіть логотип.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Налаштування логотипу',
  'LBL_WIZARD_TITLE' => 'Майстер налаштування системи',
  'LBL_WIZARD_WELCOME' => 'Пропонуємо Вам налаштувати параметри системи: налаштувати логотип вашої організації, регіональні налаштування системи, налаштувати параметри сервера вихідної пошти. <br/> По завершенні роботи майстра Ви зможете налаштувати параметри власного облікового запису і приступити до роботи в системі. <br/> Якщо Ви хочете налаштувати параметри системи пізніше, натисніть на кнопку <b> Пропустити </b>.',
  'LBL_WIZARD_WELCOME_TAB' => 'Ласкаво просимо!',
  'LBL_WIZARD_WELCOME_TITLE' => 'Ласкаво просимо в Sugar!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Пароль електронної пошти:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Пошта (ID):',
  'LBL_YAHOO_MAIL' => 'Пошта Yahoo',
  'LBL_YOUR_IP_ADDRESS' => 'Ваша  IP адреса',
  'LBL_YOUR_PROCESS_ID' => 'Ваш процес (ID)',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Розширення php_mcrypt повинно бути включено у файлі php.ini або ж php повинен бути скомпільований із зазначенням відповідного ключа.',
  'LEAD_CONV_OPT_HELP' => '<b> Copy </b> - Копіює і співвідносить копії всіх дій з попереднього контакту в нові записи, які обрані користувачем під час конверсії. Для кожного з обраних записів створюються копії. <br/> <br> <br> <B> Move </b> - Переміщує всі дії з попереднього контакту в новий запис, який обрано користувачем під час конверсії <br/> <br> <br> <b> Do Nothing </b> - Нічого не робить з діями з попереднього контакту під час конверсії. Дії  відносяться тільки до попереднього контакту.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Кількість відображуваних записів на сторінці',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Кількість відображуваних субпанелей на сторінці',
  'LOCK_HOMEPAGE' => 'Заборонити користувачам настройку головної сторінки',
  'LOCK_HOMEPAGE_HELP' => 'Даний параметр забороняє: <br/> 1) додавати Розділи на головну сторінку системи <br/> 2) переміщати Розділи на головній сторінці системи',
  'LOCK_SUBPANELS' => 'Заборонити користувачам настройку субпанелей',
  'LOG_MEMORY_USAGE' => 'Вести журнал використання пам&#39;яті',
  'LOG_SLOW_QUERIES' => 'Вести журнал повільних запитів',
  'MAX_DASHLETS' => 'Максимальна кількість Розділів на головній сторінці системи',
  'NEW_LOGO' => 'Виберіть логотип:',
  'NEW_LOGO_HELP' => 'Припустимі наступні формати логотипів: PNG або JPG. <br /> Рекомендований розмір логотипів - 212x40 пікселів.',
  'NEW_LOGO_HELP_NO_SPACE' => 'Формат зображення повинен бути .png або .jpg. Максимальна висота 17 пікселів, максимальна широта 450 пікселів. Будь-яке завантажене зображення більшого розміру буде змінено до даного розміру. У назві файлу не повинно міститися пробілів.',
  'NEW_QUOTE_LOGO' => 'Завантажити новий логотип комерційних пропозицій',
  'NEW_QUOTE_LOGO_HELP' => 'Припустимі наступні формати логотипів: PNG або JPG. <br /> Рекомендований розмір логотипу - 867x74 пікселів.',
  'PDF_ACL_ACCESS' => 'Контроль доступу',
  'PDF_ACL_ACCESS_INFO' => 'Контроль доступу за умовчанням для створення PDF.',
  'PDF_AUTHOR' => 'Автор',
  'PDF_AUTHOR_INFO' => 'Інформація про автора відображається у властивостях документа.',
  'PDF_COMPRESSION' => 'Стиснення',
  'PDF_COMPRESSION_INFO' => 'Включити або виключити стиск сторінки. <br/> Якщо включено, внутрішнє подання кожної сторінки стискається, що в підсумку призводить до коефіцієнта стиску документа: 2.',
  'PDF_CREATOR' => 'Генератор PDF',
  'PDF_CREATOR_INFO' => 'Визначає творця документа. <br/> Зазвичай, це назва програми, яке генерує PDF.',
  'PDF_FILENAME' => 'Ім&#39;я файлу за замовчуванням',
  'PDF_FILENAME_INFO' => 'Назва за замовчуванням для згенерованих PDF-файлів',
  'PDF_GD_WARNING' => 'У вас не встановлена бібліотека GD для PHP. Без бібліотеки GD, в файлах PDF можуть відображатися тільки логотипи у форматі JPEG.',
  'PDF_HEADER_LOGO' => 'Для PDF-документів комерційних пропозицій',
  'PDF_HEADER_LOGO_INFO' => 'Цей логотип відображається в заголовку PDF-документів комерційних пропозицій за замовчуванням.',
  'PDF_HEADER_LOGO_WIDTH' => 'Ширина зображення комерційних пропозицій',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Змінити масштаб завантаженого логотипу для відображення в PDF комерційних пропозицій. (Тільки TCPDF)',
  'PDF_HEADER_STRING' => 'Рядок заголовка',
  'PDF_HEADER_STRING_INFO' => 'Опис рядка заголовка',
  'PDF_HEADER_TITLE' => 'Заголовок верхнього колонтитула',
  'PDF_HEADER_TITLE_INFO' => 'Рядок для друку як заголовок документа',
  'PDF_IMAGE_SCALE_RATIO' => 'Відношення масштабу логотипу',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Відношення, що використовується для масштабування логотипів',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Шрифти, підтримувані SugarPDF: <br/> <br/> * TrueTypeUnicode (UTF-8 Unicode) <br/> * OpenTypeUnicode <br/> * TrueType <br/> * OpenType <br/> * Type1 <br/> * CID-0 <br/> <br/> Якщо Ви виберете не включати ваш шрифт в PDF, створений PDF вийде меншого розміру, але для відсутніх шрифтів буде проводитися заміна. <br/> <br/> Додавання шрифту PDF в SugarCRM вимагає проходження кроків 1 і 2, описаних документації про шрифти TCPDF, доступної в розділі "DOCS" на сайті TCPDF. (http://www.tcpdf.org) <br/> <br/> Утиліти pfm2afm і ttf2ufm доступні в розділі fonts / utils пакету TCPDF. Сам пакет знаходиться в розділі "DOWNLOAD" сайту TCPDF (http://www.tcpdf.org).',
  'PDF_JPEG_QUALITY' => 'Якість JPEG (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Налаштувати стиснення JPEG за замовчуванням (1-100)',
  'PDF_KEYWORDS' => 'Ключове(-і) слово(-а):',
  'PDF_KEYWORDS_INFO' => 'Зв&#39;язати ключові слова з документом, зазвичай у вигляді "ключевоеслово1 ключевоеслово2 ..."',
  'PDF_NEW_HEADER_LOGO' => 'Виберіть нове зображення для комерційних пропозицій',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Формат файлу може бути .jpg або .png. (Тільки .jpg для EZPDF) <br/> Рекомендований розмір: 212x40 px.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Виберіть нове зображення',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Формат файлу може бути .jpg або .png. (Тільки .jpg для EZPDF) <br /> Рекомендований розмір: 212x40 px.',
  'PDF_OWNER_PASSWORD' => 'Пароль власника',
  'PDF_OWNER_PASSWORD_INFO' => 'Якщо налаштований пароль користувача, програма перегляду PDF попросить ввести пароль перед відображенням документа. <br/> Якщо головний пароль буде відрізнятися від користувальницького, він буде використаний для повного доступу.',
  'PDF_PDF_VERSION' => 'PDF-версія',
  'PDF_PDF_VERSION_INFO' => 'Встановити версію PDF (перевірити посилання на PDF для діючих користувачів).',
  'PDF_PROTECTION' => 'Захист документа',
  'PDF_PROTECTION_INFO' => 'Налаштувати захист документа <br/> - копіювання: копіювати текст і логотипу в буфер обміну <br/> - друк: роздрукувати документ <br/> - змінити: змінити документ (крім коментарів і форм) <br/> - коментарі та форми: додати коментарі та форми <br/> Примітка: захист від змін можна налаштувати людям, що володіють повним продуктом Acrobat',
  'PDF_SMALL_HEADER_LOGO' => 'Поточне зображення',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Цей логотип відображається в заголовку PDF-документів Звіти за замовчуванням. <br/> Цей логотип також відображається у верхньому лівому куті системи Sugar.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Ширина логотипу Звіти',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Змінити масштаб завантаженого логотипу для відображення в PDF-документах Звіти. (Тільки TCPDF)',
  'PDF_SUBJECT' => 'Тема',
  'PDF_SUBJECT_INFO' => 'Тема відображена у властивостях документа.',
  'PDF_TITLE' => 'Заголовок',
  'PDF_TITLE_INFO' => 'Заголовок відображений у властивостях документа.',
  'PDF_UNIT' => 'Одиниця',
  'PDF_UNIT_INFO' => 'Одиниця виміру документа',
  'PDF_USER_PASSWORD' => 'Пароль користувача',
  'PDF_USER_PASSWORD_INFO' => 'Якщо пароль не налаштований, документ відкриється, як звичайно. <br/> Якщо налаштований пароль користувача, програма перегляду PDF попросить ввести пароль перед відображенням документа. <br/> Якщо головний пароль буде відрізнятися від користувальницького, він буде використаний для повного доступу.',
  'QUOTES_CURRENT_LOGO' => 'Логотип комерційних пропозицій',
  'SESSION_TIMEOUT' => 'Закінчення часу очікування відповіді від Порталу',
  'SESSION_TIMEOUT_UNITS' => 'секунд (-и)',
  'SHOW_DOWNLOADS_TAB' => 'Відображати панель завантажень',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Коли ця опція включена, панель завантажень буде відображатися в налаштуваннях користувача і надавати користувач доступ до розширень Sugar і іншим доступним файлів.',
  'SLOW_QUERY_TIME_MSEC' => 'Пороговий час виконання повільних запитів (мсек)',
  'STACK_TRACE_ERRORS' => 'Відображати відслідковування помилок',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Додаткові налаштування',
  'SUGARPDF_BASIC_SETTINGS' => 'Властивості документа',
  'SUGARPDF_LOGO_SETTINGS' => 'Зображення',
  'SYSTEM_NAME' => 'Системна назва:',
  'SYSTEM_NAME_HELP' => 'Дана назва відображається в заголовку браузера.',
  'SYSTEM_NAME_WIZARD' => 'Назва:',
  'TPL_LIST_ENTRIES_PER_LISTVIEW_HELP' => 'Рекомендована настройка для допустимого рівня продуктивності представлена нижче {{listEntriesNum}}. З кожним додаванням полів у спис, цей номер має бути в кінці рекомендованих налаштувань.',
  'TPL_LIST_ENTRIES_PER_SUBPANEL_HELP' => 'Рекомендована настройка для допустимого рівня продуктивності представлена нижче {{subpanelEntriesNum}}. З кожним додаванням полів у спис, цей номер має бути в кінці рекомендованих налаштувань.',
  'UPLOAD_MAX_SIZE' => 'Максимальний розмір для завантаження',
  'VERIFY_CLIENT_IP' => 'Перевірка IP-адреси користувача',
  'vCAL_HELP' => 'Використовуйте цей параметр для зазначення кількості місяців, протягом яких можлива публікація даних про зайнятість (дзвінки і зустрічі) з календаря. <br/> При включеній публікації допустимі значення від 1 до 12 місяців. Для виключення можливості публікації введіть "0".',
);

