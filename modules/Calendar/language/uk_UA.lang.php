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
  'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: не визначено для цієї форми перегляду',
  'ERR_YEAR_BETWEEN' => 'На жаль, календар не охоплює рік, який ви запросили<br>Необхідно вказати рік між 1970 та 2037',
  'LBL_AM' => 'AM',
  'LBL_APPLY_BUTTON' => 'Застосувати',
  'LBL_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
  'LBL_BUSY' => 'Зайнятий',
  'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => 'Кількість повторюваних подій {0} перевищила ліміт',
  'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => '{0} не основне повторення',
  'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => '{0} не є повторюваною подією',
  'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => '{0} не розпізнається як повторювана подія модуля',
  'LBL_CANCEL_BUTTON' => 'Скасувати',
  'LBL_CLOSE_BUTTON' => 'Закрити',
  'LBL_CONFIRM_REMOVE' => 'Ви дійсно бажаєте видалити запис?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ви дійсно бажаєте видалити всі повторювані записи?',
  'LBL_CONFLICT' => 'Конфлікт',
  'LBL_CREATE_CALL' => 'Зареєструвати дзвінок',
  'LBL_CREATE_MEETING' => 'Запланувати зустріч',
  'LBL_CREATE_NEW_CALL' => 'Створити дзвінок',
  'LBL_CREATE_NEW_RECORD' => 'Створити активність',
  'LBL_CREATING_NEW_ACTIVITY' => 'Ви створюєте нову зустріч. Ви бажаєте <a href="javascript:void(0);" data-action="create-task">Створити задачу</a> чи <a href="javascript:void(0);" data-action="schedule-call">Запланувати дзвінок</a>',
  'LBL_DATE' => 'Дата та час початку:',
  'LBL_DATE_END_ERROR' => 'Необхідно задати значення дати завершення перед датою початку',
  'LBL_DATE_TIME' => 'Дата та час:',
  'LBL_DAY' => 'День',
  'LBL_DELETE_BUTTON' => 'Видалити',
  'LBL_DURATION' => 'Тривалість',
  'LBL_EDIT_ALL_RECURRENCES' => 'Редагувати всі повторення',
  'LBL_EDIT_CALL' => 'Редагувати дзвінок',
  'LBL_EDIT_RECORD' => 'Редагувати активність',
  'LBL_EDIT_USERLIST' => 'Список користувачів',
  'LBL_ERROR_LOADING' => 'Помилка під час завантаження',
  'LBL_ERROR_SAVING' => 'Помилка під час збереження',
  'LBL_FILTER_BY_TEAM' => 'Фільтр списку користувачів по команді:',
  'LBL_GENERAL_TAB' => 'Деталі',
  'LBL_GOTO_DATE' => 'Перейти на дату',
  'LBL_HOURS_ABBREV' => 'год.',
  'LBL_INFO_DESC' => 'Опис',
  'LBL_INFO_DUE_DT' => 'Дата завершення',
  'LBL_INFO_DURATION' => 'Тривалість',
  'LBL_INFO_NAME' => 'Тема',
  'LBL_INFO_RELATED_TO' => 'Пов&#39;язаний з',
  'LBL_INFO_START_DT' => 'Дата початку:',
  'LBL_INFO_TITLE' => 'Додаткові деталі',
  'LBL_LOADING' => 'Завантаження',
  'LBL_MINS_ABBREV' => 'хв.',
  'LBL_MODULE_NAME' => 'Календар',
  'LBL_MODULE_NAME_SINGULAR' => 'Календар',
  'LBL_MODULE_TITLE' => 'Календар',
  'LBL_MONTH' => 'Місяць',
  'LBL_NEXT_DAY' => 'Наступного дня',
  'LBL_NEXT_MONTH' => 'Наступного місяця',
  'LBL_NEXT_SHARED' => 'Наступний',
  'LBL_NEXT_WEEK' => 'Наступного тижня',
  'LBL_NEXT_YEAR' => 'Наступного року',
  'LBL_NO' => 'Ні',
  'LBL_NO_ACCESS' => 'У Вас немає прав доступу',
  'LBL_NO_USER' => 'Збігів для поля немає: Відповідальний (-а)',
  'LBL_PARTICIPANTS_TAB' => 'Запрошені особи',
  'LBL_PM' => 'PM',
  'LBL_PREVIOUS_DAY' => 'Попередній день',
  'LBL_PREVIOUS_MONTH' => 'Попередній місяць',
  'LBL_PREVIOUS_SHARED' => 'Попередній',
  'LBL_PREVIOUS_WEEK' => 'Попередній тиждень',
  'LBL_PREVIOUS_YEAR' => 'Попередній рік',
  'LBL_RECURRING_LIMIT_ERROR' => 'Повторюваний $moduleTitle не може бути запланований через перевищення максимально дозволеної кількості повторень $limit.',
  'LBL_REFRESH' => 'Оновити',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Видалити всі повторення',
  'LBL_REPEAT_COUNT' => 'Кількість повторень',
  'LBL_REPEAT_DOW' => 'Конкретна дата',
  'LBL_REPEAT_END' => 'Дата завершення',
  'LBL_REPEAT_END_AFTER' => 'Після',
  'LBL_REPEAT_END_BY' => 'Ким',
  'LBL_REPEAT_INTERVAL' => 'кожну/кожні',
  'LBL_REPEAT_OCCURRENCES' => 'повторення',
  'LBL_REPEAT_TAB' => 'Повторення',
  'LBL_REPEAT_TYPE' => 'Повторювати',
  'LBL_REPEAT_UNTIL' => 'Повторювати до',
  'LBL_SAVE_BUTTON' => 'Зберегти',
  'LBL_SAVING' => 'Збереження',
  'LBL_SCHEDULED' => 'Заплановано',
  'LBL_SELECT_USERS' => 'Виберіть користувачів для перегляду календаря',
  'LBL_SENDING_INVITES' => 'Збереження та відправлення запрошень .....',
  'LBL_SEND_INVITES' => 'Зберегти та відправити запрошення',
  'LBL_SETTINGS' => 'Налаштування',
  'LBL_SETTINGS_CALLS_SHOW' => 'Показати дзвінки:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Відобразити тимчасові проміжки при огляді дня і тижня:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Показати задачі:',
  'LBL_SETTINGS_TIME_ENDS' => 'Час закінчення:',
  'LBL_SETTINGS_TIME_STARTS' => 'Час початку:',
  'LBL_SETTINGS_TITLE' => 'Налаштування',
  'LBL_SHARED' => 'Спільні',
  'LBL_SHARED_CAL_TITLE' => 'Спільний календар',
  'LBL_STATUS' => 'Статус',
  'LBL_STYLE_ADVANCED' => 'Розширений',
  'LBL_STYLE_BASIC' => 'Базовий',
  'LBL_SUBJECT' => 'Тема',
  'LBL_USERS' => 'Користувачі',
  'LBL_USER_CALENDARS' => 'Календарі користувача',
  'LBL_WEEK' => 'Тиждень',
  'LBL_YEAR' => 'Рік',
  'LBL_YES' => 'Так',
  'LNK_CALL_LIST' => 'Дзвінки',
  'LNK_IMPORT_CALLS' => 'Імпорт дзвінків',
  'LNK_IMPORT_MEETINGS' => 'Імпорт зустрічей',
  'LNK_IMPORT_TASKS' => 'Імпорт задач',
  'LNK_MEETING_LIST' => 'Зустрічі',
  'LNK_NEW_APPOINTMENT' => 'Створити домовленість про зустріч',
  'LNK_NEW_CALL' => 'Запланувати дзвінок',
  'LNK_NEW_MEETING' => 'Запланувати зустріч',
  'LNK_NEW_TASK' => 'Створити задачу',
  'LNK_TASK_LIST' => 'Задачі',
  'LNK_VIEW_CALENDAR' => 'Сьогодні',
  'NOTICE_DURATION_TIME' => 'Тривалість повинна бути більше, ніж 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Січ.',
    2 => 'Лют.',
    3 => 'Бер.',
    4 => 'Квіт.',
    5 => 'Трав.',
    6 => 'Черв.',
    7 => 'Лип.',
    8 => 'Серп.',
    9 => 'Вер.',
    10 => 'Жовт.',
    11 => 'Лист.',
    12 => 'Груд.',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Січень',
    2 => 'Лютий',
    3 => 'Березень',
    4 => 'Квітень',
    5 => 'Травень',
    6 => 'Червень',
    7 => 'Липень',
    8 => 'Серпень',
    9 => 'Вересень',
    10 => 'Жовтень',
    11 => 'Листопад',
    12 => 'Грудень',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Нд',
    1 => 'Пн',
    2 => 'Вт',
    3 => 'Ср',
    4 => 'Чт',
    5 => 'Пт',
    6 => 'Сб',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Неділя',
    1 => 'Понеділок',
    2 => 'Вівторок',
    3 => 'Середа',
    4 => 'Четвер',
    5 => 'П&#39;ятниця',
    6 => 'Субота',
  ),
);

