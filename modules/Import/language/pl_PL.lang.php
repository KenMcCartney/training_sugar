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
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Nie możesz importować użytkownika, który jest administratorem systemu',
  'ERR_MISSING_MAP_NAME' => 'Nie odnaleziono nazwy dla własnego mapowania',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Brakuje wymaganego pola:',
  'ERR_MULTIPLE' => 'Kilka kolumn zostało zdefiniowanych z tą samą nazwą pola.',
  'ERR_MULTIPLE_PARENTS' => 'Możesz zdefiniować tylko jedno nadrzędne ID.',
  'ERR_SELECT_FILE' => 'Wybierz plik do wysłania.',
  'ERR_SELECT_FULL_NAME' => 'Nie możesz wybrać pełnej nazwy kiedy wybrałeś Imię i Nazwisko.',
  'LBL_' => '',
  'LBL_ACCOUNTS_NOTE_1' => 'Ostatnie pola adresu 2 i 3 są łączone w pole Ulica adresu głównego podczas dodawania do bazy danych.',
  'LBL_ACT' => 'Act!',
  'LBL_ACT_NUM_1' => 'Uruchom <b>ACT!</b>',
  'LBL_ACT_NUM_10' => 'Wybierz <b>Wszystkie rekordy</b> i następnie kliknij <b>Zakończ</b>',
  'LBL_ACT_NUM_2' => 'Wybierz menu <b>Plik</b>, opcję menu <b>Wymiana danych</b>, następnie opcję <b>Eksportuj...</b>',
  'LBL_ACT_NUM_3' => 'Wybierz typ pliku <b>Rozdzielany</b>',
  'LBL_ACT_NUM_4' => 'Wybierz nazwę pliku i lokalizację eksportowanych danych i kliknij <b>Dalej</b>',
  'LBL_ACT_NUM_5' => 'Wybierz <b>Tylko rekordy Kontaktów</b>',
  'LBL_ACT_NUM_6' => 'Kliknij przycisk <b>Opcje...</b>',
  'LBL_ACT_NUM_7' => 'Wybierz <b>Przecinek</b> jako separator znaków',
  'LBL_ACT_NUM_8' => 'Zaznacz okienko <b>Tak, eksportuj nazwy pól</b> i kliknij <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Kliknij <b>Dalej</b>',
  'LBL_ADD_FIELD_HELP' => 'Użyj tej opcji, aby dodać wartość do pola we wszystkich tworzonych i/lub aktualizowanych rekordach. Wybierz pole i wprowadź lub wybierz wartość dla tego pola w kolumnie domyślnych wartości.',
  'LBL_ADD_ROW' => 'Dodaj pole',
  'LBL_ARE_YOU_SURE' => 'Na pewno? To wyczyści wszystkie dane w tym module.',
  'LBL_ASSIGNED_USER' => 'Jeśli ten użytkownik nie istenieje, użyj bieżącego',
  'LBL_AUTO_DETECT_ERROR' => 'Znak rozdzielający i wartości pola nie zostały odnalezione w pliku importu. Sprawdź ustawienia we właściwościach pliku importu.',
  'LBL_BACK' => '< Cofnij',
  'LBL_CANCEL' => 'Anuluj',
  'LBL_CANNOT_OPEN' => 'Nie mogę otworzyć pliku do importu',
  'LBL_CHARSET' => 'Kodowanie pliku:',
  'LBL_CONFIRM_EXT_TITLE' => 'Krok {0}: Potwierdź właściwości źródła zewnętrznego',
  'LBL_CONFIRM_IMPORT' => 'Została zaznaczona opcja aktualizacji rekordów podczas importowania. Aktualizacja istniejących rekordów nie może zostać cofnięta. Jednkaże rekordy utworzone podczas importowania mogą zostać usunięte, jeśli zajdzie taka potrzeba. Kliknij Anuluj, aby wybrać opcję tylko tworzenia nowych rekordów lub kliknij OK, aby kontynuować.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Uwaga: własne mapowanie dla tego importu zostało już wybrane, czy chcesz kontynuować?',
  'LBL_CONFIRM_TITLE' => 'Krok {0}: Potwierdź właściwości pliku importu',
  'LBL_CONTACTS_NOTE_1' => 'Jedno z pól Nazwisko lub Pełna nazwa musi być zmapowane.',
  'LBL_CONTACTS_NOTE_2' => 'Jeśli zmapowane jest pole Pełna Nazwa, pola Imię i Nazwisko są ignorowane.',
  'LBL_CONTACTS_NOTE_3' => 'Jeśli zmapowałeś pole Pełna Nazwa, jego zawartość zostanie rozdzielona na Imię i Nazwisko przy dodawaniu do bazy danych.',
  'LBL_CONTACTS_NOTE_4' => 'Ostatnie pola adresu 2 i 3 są łączone w pole Ulica adresu głównego podczas dodawania do bazy danych.',
  'LBL_CREATED_TAB' => 'Utworzone rekordy',
  'LBL_CREATE_BUTTON_HELP' => 'Użyj tej opcji, by stworzyć nowy rekord. Uwaga: wiersze w pliku zawierające wartości, które pasują do ID istniejących rekordów nie zostaną zaimportowane jeżeli wartości są mapowane do pola ID.',
  'LBL_CSV' => 'plik na moim komputerze',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_CURRENCY_SIG_DIGITS' => 'Liczba cyfr po przecinku w walutach',
  'LBL_CUSTOM' => 'Własny',
  'LBL_CUSTOM_CSV' => 'Własny plik z wartościami oddzielonymi przecinkiem',
  'LBL_CUSTOM_DELIMITED' => 'Plik z własnym znakiem rozdzielającym',
  'LBL_CUSTOM_DELIMITER' => 'Pola rozdzielone przez:',
  'LBL_CUSTOM_ENCLOSURE' => 'Znak wartości pola:',
  'LBL_CUSTOM_NUM_1' => 'Uruchom aplikację i otwórz plik danych',
  'LBL_CUSTOM_NUM_2' => 'Wybierz opcję <b>Zapisz jako...</b> lub <b>Eksportuj...</b>',
  'LBL_CUSTOM_NUM_3' => 'Zapisz plik w formacie <b>CSV</b> lub <b>Wartości oddzielonych przecinkiem</b>.',
  'LBL_CUSTOM_TAB' => 'Własny plik z wartościami oddzielonymi tabulatorem',
  'LBL_DATABASE_FIELD' => 'Pole bazy danych',
  'LBL_DATABASE_FIELD_HELP' => 'Ta kolumna wyświetla wszystkie pola w module. Wybierz pole do mapowania danych do wierszy pliku importu.',
  'LBL_DATE_FORMAT' => 'Format daty:',
  'LBL_DEBUG_MODE' => 'Włącz tryb debugowania',
  'LBL_DECIMAL_SEP' => 'Symbol dziesiętny:',
  'LBL_DEFAULT_VALUE' => 'Domyślna wartość',
  'LBL_DEFAULT_VALUE_HELP' => 'Wskaż wartość, która zostanie użyta do określenia pola w tworzonym lub aktualizowanym rekordzie, jeśli pole w pliku importu nie zawiera danych.',
  'LBL_DELETE' => 'Usuń',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Czy na pewno usunąć zapisany zestaw ustawień importowania?',
  'LBL_DELIMITER_COMMA_HELP' => 'Wybierz tę opcję, jeśli znakiem rozdzielającym pola w pliku importu jest <b>przecinek</b>, jeśli rozszerzenie pliku to .csv lub plik jest plikiem eksportu z MS Outlook.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Wybierz tę opcję, jeśli znakiem rozdzielającym pola w pliku importu nie jest ani przecinek, ani tabulator, lecz inny znak, który należy podać w polu obok.',
  'LBL_DELIMITER_TAB_HELP' => 'Wybierz tę opcję, jeśli znakiem rozdzielającym pola w pliku importu jest <b>tabulator</b> lub jeśli rozszerzenie pliku to .txt.',
  'LBL_DESELECT' => 'odznacz',
  'LBL_DONT_MAP' => '-- Nie mapuj tego pola --',
  'LBL_DUPLICATES' => 'Znaleziono duplikaty',
  'LBL_DUPLICATE_TAB' => 'Duplikaty',
  'LBL_DUP_HELP' => 'Oto wiersze pliku importu, które nie zostały zaimportowane ze względu na fakt, iż zawierają dane z wartościami odpowiadającymi istniejącym rekordom (na podstawie sprawdzenia duplikatów). Dane te zostały podświetlone. Aby ponownie zaimportować te wiersze pobierz listę, wprowadź zmiany i kliknij <b>Importuj ponownie</b>.',
  'LBL_ENCLOSURE_HELP' => '<p><b>Znak wartości pola</b> jest używany do łączania określonej zawartości pola, wraz ze znakami używanymi jako znaki rozdzielające.<br><br>Przykład: Jeśli znakiem rozdzielającym jest przecinek (,), a znakiem wartości pola jest cudzysłów ("),<br><b>"Poznań, Polska"</b> jest importowane do jednego pola w aplikacji i będzie widoczne jako <b>Poznań, Polska </b>.<br>Jeśli nie ma znaków wartości pola lub jeśli inny znak jest znakiem wartości pola,<br><b>" Poznań, Polska "</b> jest importowane do dwóch osobnych pól jako <b>"Poznań</b> i <b>Polska"</b>.<br><br>Uwaga: Plik importu może nie zawierać żadnych znaków wartości pola. <br>Domyślnym znakiem wartości pola dla plików rozdzielanych przecinkiem i tabulatorem utworzonych w MS Excel jest cudzysłów.</p>',
  'LBL_ERROR' => 'Błąd:',
  'LBL_ERROR_DELETING_RECORD' => 'Błąd usunięcia rekordu:',
  'LBL_ERROR_HELP' => 'Oto wiersze pliku importu , które nie zostały zaimportowane ze względu na błędy. Aby ponownie zaimportować te wiersze pobierz listę, wprowadź zmiany i kliknij <b>Importuj ponownie</b>.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importy nie są skonfigurowane do tego typu modułów.',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Katalog pamięci podręcznej importu nie jest zapisywalny.',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Nieprawidłowa nazwa kontrahenta lub ID',
  'LBL_ERROR_INVALID_BOOL' => 'Nieprawidłowa wartość (powinno być  1 lub 0)',
  'LBL_ERROR_INVALID_CURRENCY' => 'Nieprawidłowa wartość waluty',
  'LBL_ERROR_INVALID_DATE' => 'Nieprawidłowy format daty',
  'LBL_ERROR_INVALID_DATETIME' => 'Nieprawidłowy format daty i czasu',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Nieprawidłowa data i czas',
  'LBL_ERROR_INVALID_EMAIL' => 'Niewłaściwy adres e-mail',
  'LBL_ERROR_INVALID_FLOAT' => 'Niewłaściwy format liczby zmiennoprzecinkowej',
  'LBL_ERROR_INVALID_ID' => 'Podane ID jest zbyt długie dla tego pola (maksymalna długośc to 36 znaków)',
  'LBL_ERROR_INVALID_INT' => 'Nieprawidłowa liczba całkowita',
  'LBL_ERROR_INVALID_NAME' => 'String jest zbyt długi dla tego pola',
  'LBL_ERROR_INVALID_NUM' => 'Nieprawidłowa wartość numeryczna',
  'LBL_ERROR_INVALID_PHONE' => 'Nieprawidłowy numer telefonu',
  'LBL_ERROR_INVALID_RELATE' => 'Nieprawidłowe pole zależne',
  'LBL_ERROR_INVALID_TEAM' => 'Nieprawidłowa nazwa zespołu lub ID',
  'LBL_ERROR_INVALID_TIME' => 'Nieprawidłowy format czasu',
  'LBL_ERROR_INVALID_USER' => 'Nieprawidłowa nazwa użytkownika lub ID',
  'LBL_ERROR_INVALID_VARCHAR' => 'String jest zbyt długi dla tego pola',
  'LBL_ERROR_NOT_IN_ENUM' => 'Wartość nie występuje w liście rozwijalnej. Dozwolone wartości to:',
  'LBL_ERROR_SELECTING_RECORD' => 'Błąd wyboru rekordu:',
  'LBL_ERROR_SYNC_USERS' => 'Nieprawidłowa wartość synchronizacji z Outlook:',
  'LBL_ERROR_TAB' => 'Błędy',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Nie można opublikować. Został już opublikowany import o tej samej nazwie.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Nie można usunąć opublikowanego i zamapowanego przez innego użytkownika pliku. Posiadasz zamapowany import o tej samej nazwie.',
  'LBL_EXAMPLE_FILE' => 'Pobierz szablon pliku importu',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Aby przydzielić nowe rekordy do użytkownika innego niż Ty, użyj kolumny domyślnej wartości, aby wybrać innego użytkownika.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Wskaż wartość dla pola w utworzonym rekordzie jeśli pole w zewnętrznym źródle nie zawiera danych.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Nie można połączyć się z kanałem zewnętrznym. Proszę spróbować później.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Nie znaleziono adapteru źródła, spróbuj ponownie później.',
  'LBL_EXTERNAL_FIELD' => 'Zewnętrzne pole',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Ta kolumna wyświetla pola w zewnętrznym źródle zawierające dane, które zostaną użyte do utworzenia nowych rekordów.',
  'LBL_EXTERNAL_MAP_HELP' => 'Poniższa tabela zawiera pola z zewnętrznego źródła i pola modułu, do którego zostały zmapowane. Sprawdź mapowania, aby upewnić się czy wszystko jest tak jak powinno być, a w razie potrzeby wprowadź odpowiednie zmiany. Upewnij się, że zmapowane zostały wszystkie wymagane pola (zaznaczone „*”).',
  'LBL_EXTERNAL_MAP_NOTE' => 'Ten import będzie dostępny dla wszystkich grup kontaktów Google.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Nazwy nowo utworzonych użytkowników będą domyślnie pełnymi nazwami kontaktów Google. Nazwy mogą zostać zmienione po utworzeniu rekordu użytkownika.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Kliknij <b>Importuj teraz</b>, aby rozpocząć import. Rekordy zostaną utworzone tylko dla wpisów zawierających nazwiska. Rekordy zawierające zduplikowane dane (imię, nazwisko i/lub adresu e-mail) nie zostaną utworzone.',
  'LBL_EXTERNAL_SOURCE' => 'zewnętrzna aplikacja lub serwis',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Użyj tej opcji, aby importować dane bezpośrednio z zewnętrznej aplikacji lub usługi, np. Gmail.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Aby przydzielić nowe rekordy do zespołu innego niż Twój domyślny, użyj kolumny domyślnej wartości, aby wybrać inny zespół.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Zaloguj się',
  'LBL_FAIL' => 'Błąd:',
  'LBL_FAILURE' => 'Import nie powiódł się:',
  'LBL_FIELD_DELIMETED_HELP' => 'Znak rozdzielający pola jest znakiem używanym do oddzielenia pól kolumn.',
  'LBL_FIELD_NAME' => 'Nazwa pola',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Wskazany przez Ciebie plik nie istnieje lub został już zaimportowany',
  'LBL_FILE_OPTIONS' => 'Opcje pliku',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Wybierz plik zawierający dane, który jest rozdzielony np. przecinkiem lub tabulatorem. Zaleca się pliki typu .csv.',
  'LBL_FINISHED' => 'Zakończone',
  'LBL_GOOD_FILE' => 'Importowane pliki zostały wczytane poprawnie',
  'LBL_HAS_HEADER' => 'Posiada nagłówek:',
  'LBL_HEADER_ROW' => 'Nagłówek',
  'LBL_HEADER_ROW_HELP' => 'Ta kolumna wyświetla etykiety w wierszu nagłówka importowanego pliku.',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Zaznacz jeśli pierwszy wiersz pliku importu jest nagłówkiem zawierającym etykiety pól.',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Ukryj właściwości pliku importu',
  'LBL_HIDE_NOTES' => 'Ukryj notatki',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Ukryj podgląd kolumny',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Rekord pominięty ze względu na istniejący rekord o identycznym ID lub dłuższym niż 36 znaków',
  'LBL_ID_EXISTS_ALREADY' => 'To ID już istnieje w tej tabeli',
  'LBL_IMPORT_ACT_TITLE' => 'Act! może eksportować dane do formatu <b>Wartości oddzielonych przecinkiem</b>, który może być użyty do importowania danych do systemu. Żeby wyeksportować dane z Act! wykonaj następujące kroki:',
  'LBL_IMPORT_BUTTON' => 'Utwórz rekordy',
  'LBL_IMPORT_COMPLETE' => 'Wyjdź',
  'LBL_IMPORT_COMPLETED' => 'Import zakończony',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Wiele aplikacji zezwala na eksport w formacie <b>Plików tekstowych rozdzielonych przecinkiem (.csv)</b> poprze postępowanie według ogólnych kroków:',
  'LBL_IMPORT_ERROR' => 'Pojawiły się błędy importu',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Liczba wierszy w pliku importu - {0}. Optymalna liczba wierszy to {1}. Większa liczba wierszy może spowolnić proces importu. Kliknij OK, aby kontynuować importowanie. Kliknij Anuluj, aby poprawić i ponownie przesłać plik imortu.',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nazwa użytkownika lub ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; lub &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeryczne (również dziesiętne)',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Data i czas',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeryczne (nie dziesiętne)',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Adres e-mail',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeryczne (również dziesiętne)',
  'LBL_IMPORT_FIELDDEF_ID' => 'Unikalny numer ID',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numeryczne (nie dziesiętne)',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Dowolny tekst',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numeryczne (nie dziesiętne)',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Numer telefonu',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Nazwa lub ID',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Nazwa zespołu lub ID',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Dowolny tekst',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Czas',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Dowolny tekst',
  'LBL_IMPORT_FILE_SETTINGS' => 'Ustawienia pliku importu',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Podczas przesyłania Twojego pliku importu niektóre z właściwości mogą zostać automatycznie wykryte. Zarządzaj tymi właściwościami według<br> potrzeb. Uwaga: ustawienia wprowadzone teraz będą dotyczyć tylko tego importu<br> i nie nadpiszą ogólnych ustawień użytkownika.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Plik jest za duży. Maks.:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bajtów. Zmień wartość $upload_maxsize w pliku config.php',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Plik nie został pomyślnie dodany. Sprawdź uprawnienia pliku w katalogu pamięci podręcznej instalacji Sugar.',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Nie udało się wysłać pliku. Być może &#39;upload_max_filesize&#39; w pliku php.ini ma ustawioną małą liczbę',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Nie można opublikować. Jest inny zamapowany import o tej samej nazwie.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Nie można usunąć opublikowanego i zamapowanego przez innego użytkownika pliku. Posiadasz zamapowany import o tej samej nazwie.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Folder',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nie istnieje lub nie ma odpowiednich praw do zapisu',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Import nie jest ustawiony dla tego typu modułu',
  'LBL_IMPORT_MODULE_NO_USERS' => 'UWAGA: Nie posiadasz zdefiniowanych użytkowników w swoim systemie. Jeśli przeprowadzisz import zanim dodasz użytkowników, wszystkie rekordy będą przydzielone do administratora.',
  'LBL_IMPORT_MORE' => 'Importuj ponownie',
  'LBL_IMPORT_NOW' => 'Importuj',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98, 2000, XP, 2003 może eksportować dane w formacie <b>Wartości oddzielonych przecinkiem</b>, który może być użyty do importowania danych do systemu. Żeby wyeksportować dane z Outlooka wykonaj następujące kroki:',
  'LBL_IMPORT_RECORDS' => 'Importowanie rekordów',
  'LBL_IMPORT_RECORDS_OF' => 'z',
  'LBL_IMPORT_RECORDS_TO' => 'do',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com może eksportować dane do formatu <b>Wartości oddzielonych przecinkiem</b>, który może być użyty do importowania danych do systemu. Żeby wyeksportować dane z Salesforce.com wykonaj następujące kroki:',
  'LBL_IMPORT_STARTED' => 'Import rozpoczęty:',
  'LBL_IMPORT_TAB_TITLE' => 'Wiele aplikacji pozwala na export danych do <b>Pliku z wartościami oddzielonymi tabulatorem (.tsv or .tab)</b> poprzez postępowanie według następujących kroków:',
  'LBL_IMPORT_TYPE' => 'Co chcesz zrobić z zaimportowanymi danymi?',
  'LBL_INDEX_NOT_USED' => 'Dostępne indeksy:',
  'LBL_INDEX_USED' => 'Pola do sprawdzenia:',
  'LBL_LAST_IMPORTED' => 'Utworzono',
  'LBL_LAST_IMPORT_UNDONE' => 'Operacja ostatniego importu została cofnięta.',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format wyświetlania nazwy',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Przykład',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Forma grzecznościowa, "f" Imię, "l" Nazwisko</i>',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Własne mapowania Microsoft Outlook zależą od tego, czy plik importu ma wartości rozdzielone przecinkiem (.csv). Jeśli plik importu ma wartości rozdzielane tabulatorem, mapowanie nie przebiegnie zgodnie z oczekiwaniami.',
  'LBL_MIME_TYPE_ERROR_1' => 'Wybrany plik zdaje się nie zawierać rozdzielanej listy. Sprawdź typ pliku. Zaleca się pliki rozdzielone przecinkiem (.csv).',
  'LBL_MIME_TYPE_ERROR_2' => 'Aby kontynuować importowanie wybranego pliku, kliknij OK. Aby przesłać nowy plik, kliknij Spróbuj ponownie',
  'LBL_MISSING_HEADER_ROW' => 'Nie znaleziono wiersza nagłówka',
  'LBL_MODULE_NAME' => 'Import',
  'LBL_MODULE_NAME_SINGULAR' => 'Import',
  'LBL_MY_PUBLISHED_HELP' => 'Użyj tej opcji, aby zastosować wcześniej zapisane ustawienia importu, takie jak właściwości importu, mapowania, sprawdzanie duplikatów, w tym imporcie.',
  'LBL_MY_SAVED' => 'Moje zapisane źródła:',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Użyj tej opcji, aby zastosować wcześniej zapisane ustawienia importu, takie jak właściwości importu, mapowania, sprawdzanie duplikatów, w tym imporcie.<br><br>Kliknij <b>Opublikuj</b>, aby uczynić to mapowanie dostępnym dla innych użytkowników.<br>Kliknij <b>Wycofaj z publikacji</b>, aby usunąć mapowanie dla wszystkich użytkowników.',
  'LBL_MY_SAVED_HELP' => 'Użyj tej opcji, aby zastosować wcześniej zapisane ustawienia importu, takie jak właściwości importu, mapowania, sprawdzanie duplikatów, w tym imporcie.<br><br>Kliknij <b>Usuń</b>, aby usunąć mapowanie dla wszystkich użytkowników.',
  'LBL_NEXT' => 'Dalej >',
  'LBL_NOLOCALE_NEEDED' => 'Konwersja danych lokalizacyjnych nie jest konieczna',
  'LBL_NONE' => 'Brak',
  'LBL_NOTES' => 'Notatki:',
  'LBL_NOT_MULTIENUM' => 'Nie jest listą wielokrotnego wyboru',
  'LBL_NOT_SAME_NUMBER' => 'Twój plik zawiera niespójną liczbę pól w poszczególnych liniach.',
  'LBL_NOT_SET_UP' => 'Import nie jest ustawiony dla tego typu modułu',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import nie jest ustawiony dla tego typu modułu',
  'LBL_NOW_CHOOSE' => 'Wybierz plik do importu:',
  'LBL_NO_DATECHECK' => 'Przeskocz sprawdzanie dat (szybsze, lecz nie powiedzie się jeśli którakolwiek z dat jest błędna)',
  'LBL_NO_EMAILS' => 'Nie wysyłaj powiadomień e-mail podczas tego importu',
  'LBL_NO_EMAIL_DEFS_IN_MODULE' => 'Próba poradzenia sobie z adresem e-mail w obiekcie, który go nie wspiera.',
  'LBL_NO_ID' => 'Wymagane ID',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nie można cofnąć operacji importu.',
  'LBL_NO_LINES' => 'Twój plik importu jest pusty. Upewniej się, że nie ma w nim pustych linii i spróbuj ponownie.',
  'LBL_NO_PRECHECK' => 'Tryb formatu macierzystego',
  'LBL_NO_RECORD' => 'Nie ma rekordów o tym ID do aktualizacji',
  'LBL_NO_WORKFLOW' => 'Nie uruchamiaj procesu workflow podczas tego importu',
  'LBL_NUMBER_GROUPING_SEP' => 'Separator tysięcy:',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_OK' => 'OK',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Podwójny cudzysłów (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Brak',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Inny:',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Pojedynczy cudzysłów (&#39;)',
  'LBL_OUTLOOK_NUM_1' => 'Uruchom <b>MS Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Wybierz z Menu <b>Plik</b>, a następnie opcję <b>Import i Eksport ...</b>',
  'LBL_OUTLOOK_NUM_3' => 'Wybierz <b>Eksportuj do pliku</b> i kliknij <b>[Dalej]</b>',
  'LBL_OUTLOOK_NUM_4' => 'Wybierz <b>Wartości oddzielone przecinkiem (Windows)</b> i kliknij <b>[Dalej]</b>.<br> Uwaga: System może upomnieć się o zainstalowanie modułu eksportu.',
  'LBL_OUTLOOK_NUM_5' => 'Wybierz folder <b>Kontakty</b> i kliknij <b>[Dalej]</b>. Możesz wybrać dowolny folder kontaktów jeśli przechowujesz kontaktu w różnych folderach',
  'LBL_OUTLOOK_NUM_6' => 'Wybierz Nazwę pliku i kliknij <b>[Dalej]</b>',
  'LBL_OUTLOOK_NUM_7' => 'Kliknij <b>[Zakończ]</b>',
  'LBL_PRE_CHECK_SKIPPED' => 'Pominięto Wstępne sprawdzenie',
  'LBL_PUBLISH' => 'Publikuj',
  'LBL_PUBLISHED_SOURCES' => 'Aby użyć fabrycznych ustawień importu wybierz z poniższych:',
  'LBL_RECORDS_SKIPPED' => 'Rekord pominięty ze względu na brak jednego lub więcej pól',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => '- liczba rekordów ominiętych z powodu błędu',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Rekord nie mógł zostać zaktualizowawny z powodu problemu z dostępem',
  'LBL_RELATED_ACCOUNTS' => 'Nie twórz powiązanych kont',
  'LBL_REMOVE_ROW' => 'Usuń pole',
  'LBL_REQUIRED_NOTE' => 'Wymagane pole(a):',
  'LBL_REQUIRED_VALUE' => 'Nie odnaleziono wymaganej wartości',
  'LBL_RESULTS' => 'Wyniki',
  'LBL_ROW' => 'Wiersz',
  'LBL_ROW_HELP' => 'Ta kolumna wyświetla  dane w pierwszym wierszu poniżej nagłówka w importowanym pliku. Jeśli etykiety nagłówka są widoczne w tej kolumnie kliknij Powrót, aby określić właściwości nagłówka w importowanym pliku.',
  'LBL_ROW_NUMBER' => 'Numer wiersza',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_SAMPLE_URL_HELP' => 'Pobierz próbny plik importu zawierający wiersz nagłówka pól modułu. Plik ten może zostać użyty jako szablon do tworzenia pliku importu zawierającego dane, które chcesz zaimportować.',
  'LBL_SAVE_AS_CUSTOM' => 'Zapisz jako własne mapowanie:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Nazwa własnego mapowania:',
  'LBL_SAVE_MAPPING_AS' => 'Aby zachować ustawienia importu podaj nazwę:',
  'LBL_SAVE_MAPPING_HELP' => 'Wprowadź nazwę, aby zapisać ustawienia importu – także mapowania pól i indeksy używane do sprawdzania duplikatów. Zapisane ustawienia importu mogą zostać użyte do następnych importów.',
  'LBL_SELECT_DS_INSTRUCTION' => 'Rozpocząć import? Wybierz źródło danych, które chcesz zaimportować.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Aby uniknąć tworzenia zduplikowanych rekordów, wybierz, których z mapowanych pól chcesz użyć do sprawdzenia duplikatów podczas importowania danych. Wartości istniejących rekordów w wybranych polach zostaną porównane z danymi w pliku importu. Jeśli zostaną znalezione pasujące dane, wiersze w pliku importu zawierające dane zostaną wyświetlone wraz z wynikami importu (następna strona). Będziesz mieć możliwość wyboru, które z wierszy mają zostać zaimportowane.',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Z poniższej listy wskaż pola, które zamierzasz importować. Kiedy zakończysz kliknij <b>Dalej</b>:',
  'LBL_SELECT_FILE' => 'Wybierz plik:',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'Poniższa tabela zawiera wszystkie pola modułu, które mogą zostać zmapowane do danych w pliku importu. Jeśli plik zawiera wiersz nagłówka oznacza to, iż kolumny w pliku zostały zmapowane do odpowiednich pól. Sprawdź mapowania, aby upewnić się czy wszystko jest tak jak powinno być, a w razie potrzeby wprowadź odpowiednie zmiany. Pierwszy wiersz wyświetla dane w pliku, aby pomóc w sprawdzeniu mapowania. Upewnij się, że zmapowane zostały wszystkie wymagane pola (zaznaczone „*”).',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Jeśli został wykryty wiersz nagłówka, zostanie on wyświetlony w pierwszym wierszu tabeli. Przejdź do właściwości pliku  importu, aby wprowadzić zmiany do wykrytych właściwości i ustawić dodatkowe właściwości. Aktualizacja ustawień zaktualizuje dane wyświetlane w tabeli.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Wybierz plik z Twojego komputera, zawierający dane, które chcesz zaimportować lub pobierz szablon, aby rozpocząć tworzenie pliku importu.',
  'LBL_SF_NUM_1' => 'Uruchom przeglądarkę, przejdź do <b>http://www.salesforce.com</b> i zaloguj się na swoje konto.',
  'LBL_SF_NUM_10' => 'W <b>Raporcie eksportu:</b>, dla <b> Formatu pliku eksportu:</b> wybierz <b>Oddzielony przecinkiem .csv</b>. Kliknij <b>Eksportuj</b>.',
  'LBL_SF_NUM_11' => 'Pojawi się okno do zapisania pliku na Twoim komputerze.',
  'LBL_SF_NUM_2' => 'Kliknij zakładkę <b>Raporty</b> w górnym menu.',
  'LBL_SF_NUM_3' => 'Żeby wyeksportować kontrahentów kliknij link: <b>Aktywni Kontrahenci</b>.<br>Aby wyeksportować Kontakty kliknij link: <b>Lista mailingowa</b>',
  'LBL_SF_NUM_4' => '<b>Krok 1: Wybierz typ raportu</b>, wybierz <b>Raport tabelaryczny</b> i kliknij <b>Dalej</b>',
  'LBL_SF_NUM_5' => '<b>Krok 2: Wybierz kolumny raportu </b>, wybierz kolumny jakie chcesz wyeksportować i kliknij <b>Dalej</b>',
  'LBL_SF_NUM_6' => '<b>Krok 3: Wybierz informacje do podsumowania </b> i kliknij <b>Dalej</b>',
  'LBL_SF_NUM_7' => '<b>Krok 4: Uporządkuj kolumny raportu </b> i kliknij <b>Dalej</b>',
  'LBL_SF_NUM_8' => '<b>Krok 5: Określ kryteria raportu</b> i wybierz <b>Datę rozpoczęcia</b> na tyle odległą w przeszłości, aby objęła wszystkich Kontrahentów. Możesz w tym celu wykorzystać narzędzia zaawansowanego określania kryteriów. Po zakończeniu kliknij <b>Utwórz raport</b>',
  'LBL_SF_NUM_9' => 'Raport zostanie wygenerowany, a na stronie pojawi się komunikat: <b>Status generowania raportu: Ukończono.</b> Kliknij <b>Eksportuj do MS Excel</b>',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Pokaż właściwości pliku importu',
  'LBL_SHOW_HIDDEN' => 'Pokaż pola, które nie są normalnie importowane',
  'LBL_SHOW_NOTES' => 'Pokaż notatki',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Pokaż podgląd kolumny',
  'LBL_SIGN_IN_HELP' => 'Aby włączyć tę opcję zaloguj się przez zakładkę zewnętrznego konta na swojej stronie ustawień użytkownika.',
  'LBL_START_OVER' => 'Zacznij od początku',
  'LBL_STEP_1_TITLE' => 'Krok 1: Wybierz źródło danych',
  'LBL_STEP_2_TITLE' => 'Krok {0}: Prześlij plik importu',
  'LBL_STEP_3_TITLE' => 'Krok {0}: Potwierdź mapowanie pól',
  'LBL_STEP_4_TITLE' => 'Krok {0}: Importuj plik',
  'LBL_STEP_5_TITLE' => 'Krok {0}: Obejrzyj wyniki importu',
  'LBL_STEP_DUP_TITLE' => 'Krok {0}: Sprawdź czy istnieją duplikaty',
  'LBL_STEP_MODULE' => 'Do którego modułu chcesz zaimportować dane?',
  'LBL_STRICT_CHECKS' => 'Użyj tych reguł (Sprawdź adresy e-mail i numery telefonów)',
  'LBL_SUCCESS' => 'Sukces:',
  'LBL_SUCCESSFULLY' => 'Poprawnie zaimportowano dane',
  'LBL_SUCCESSFULLY_IMPORTED' => '- liczba utworzonych rekordów',
  'LBL_SUMMARY' => 'Podsumowanie',
  'LBL_SYSTEM_SIG_DIGITS' => 'Znaczące cyfry systemu',
  'LBL_TAB' => 'Plik z wartościami oddzielonymi tabulatorem',
  'LBL_TAB_NUM_1' => 'Uruchom aplikację i otwórz plik z danymi',
  'LBL_TAB_NUM_2' => 'Wybierz <b>Zapisz jako...</b> lub <b>Eksportuj...</b> z opcji menu',
  'LBL_TAB_NUM_3' => 'Zapisz plik w formacie <b>TSV</b> lub <b>Pliku z wartościami oddzielonymi tabulatorem</b>',
  'LBL_TEST' => 'Test importu (nie zapisuj ani nie zmieniaj danych)',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Jeśli plik został wyeksportowany z któregokolwiek źródła wymienionego poniżej, wskaż z którego.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Wybierz źródło, aby automatycznie zastosować własnie mapowania w celu ułatwienia procesu mapowania (następny krok).',
  'LBL_TIMEZONE' => 'Strefa czasowa:',
  'LBL_TIME_FORMAT' => 'Format czasu:',
  'LBL_TRUNCATE_TABLE' => 'Opróżnij tabelę przed importem (usuń wszystkie rekordy)',
  'LBL_TRY_AGAIN' => 'Spróbuj ponownie',
  'LBL_UNDO_LAST_IMPORT' => 'Cofnij ostatni import',
  'LBL_UNIQUE_INDEX' => 'Wybierz wskaźnik do porównania duplikatów',
  'LBL_UNPUBLISH' => 'Cofnij publikowanie',
  'LBL_UPDATE_BUTTON' => 'Utwórz nowe rekordy i zaktualizuj istniejące',
  'LBL_UPDATE_BUTTON_HELP' => 'Użyj tej opcji, by zaktualizować istniejący rekord. Dane z pliku zostaną dopasowane do istniejących rekordów w oparciu o ID rekordu w importowanym pliku.',
  'LBL_UPDATE_RECORDS' => 'Aktualizuj istniejące rekordy, zamiast importować je (Cofnięcie operacji nie będzie możliwe)',
  'LBL_UPDATE_SUCCESSFULLY' => '- liczba pomyślnie zaktualizowanych rekordów',
  'LBL_VALUE' => 'Wartość',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Znajdź istniejące rekordy w systemie, które mogą być duplikatami rekordów właśnie importowanych, poprzez sprawdzenie możliwych dupliaktów odpowiednich danych. Pola przeciągnięte do kolumny „Sprzawdź dane”  zostaną użyte do sprawdzenia duplikatów. Wiersze w Twoim pliku importu zawierające podobne dane zostaną wyświetlone na następnej stronie i będziesz mieć możliwość wyboru, które wiersze zostaną zaimportowane',
  'LBL_VERIFY_DUPS' => 'Zaznacz pola do sprawdzenia, aby porównać czy istnieją rekordy o podobnyc dancych jak w pliku importu.',
  'LBL_WHAT_IS' => 'Określ źródło danych:',
  'LNK_DUPLICATE_LIST' => 'Pobierz listę duplikatów',
  'LNK_ERROR_LIST' => 'Pobierz listę błędów',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Pobierz listę wierszy, które nie zostały zaimportowane.',
);

