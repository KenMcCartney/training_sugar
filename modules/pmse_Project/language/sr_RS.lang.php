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
  'LBL_MODULE_NAME' => 'Definicije procesa',
  'LBL_MODULE_NAME_SINGULAR' => 'Definicije procesa',
  'LBL_MODULE_TITLE' => 'Definicije procesa',
  'LBL_PMSE_ADAM_DESIGNER_ACTION' => 'Akcija',
  'LBL_PMSE_ADAM_DESIGNER_COMMENT' => 'Komentar',
  'LBL_PMSE_ADAM_DESIGNER_DOCUMENTS' => 'Dokumenta',
  'LBL_PMSE_ADAM_DESIGNER_DOCUMENT_START_EVENT' => 'Start događaja o dokumentacij',
  'LBL_PMSE_ADAM_DESIGNER_END_EVENT' => 'Završiti događaj',
  'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE' => 'Isključivo',
  'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE_GATEWAY' => 'Isključivi prolaz',
  'LBL_PMSE_ADAM_DESIGNER_LEADS' => 'Potencijalni klijenti',
  'LBL_PMSE_ADAM_DESIGNER_LEAD_START_EVENT' => 'Start događaja o potencijalnim kupcima',
  'LBL_PMSE_ADAM_DESIGNER_MESSAGE_EVENT' => 'Događaj o porukama',
  'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY' => 'Prodajna prilika',
  'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY_START_EVENT' => 'Start događaja prodajnih prilika',
  'LBL_PMSE_ADAM_DESIGNER_PARALLEL' => 'Paralelno',
  'LBL_PMSE_ADAM_DESIGNER_PARALLEL_GATEWAY' => 'Paralelni prolaz',
  'LBL_PMSE_ADAM_DESIGNER_RECEIVE_MESSAGE' => 'Primi poruku',
  'LBL_PMSE_ADAM_DESIGNER_REDO' => 'Vrati poništeno',
  'LBL_PMSE_ADAM_DESIGNER_SAVE' => 'Sačuvaj',
  'LBL_PMSE_ADAM_DESIGNER_SEND_MESSAGE' => 'Pošalji poruku',
  'LBL_PMSE_ADAM_DESIGNER_TASK' => 'Aktivnost',
  'LBL_PMSE_ADAM_DESIGNER_TEXT_ANNOTATION' => 'Tekstualna zabeleška',
  'LBL_PMSE_ADAM_DESIGNER_UNDO' => 'Poništi',
  'LBL_PMSE_ADAM_DESIGNER_USER_TASK' => 'Korisnički zadaci',
  'LBL_PMSE_ADAM_DESIGNER_WAIT' => 'Sačekaj',
  'LBL_PMSE_ADAM_DESIGNER_WAIT_EVENT' => 'Događaj na čekanju',
  'LBL_PMSE_ALL_PROCESS_DEFINITIONS' => 'Sve procesne definicije',
  'LBL_PMSE_BPMN_WARNING_LABEL' => 'Greške',
  'LBL_PMSE_BPMN_WARNING_PANEL_TITLE' => 'Greške elementa',
  'LBL_PMSE_BPMN_WARNING_SINGULAR_LABEL' => 'Greška',
  'LBL_PMSE_BUTTON_CANCEL' => 'Otkaži',
  'LBL_PMSE_BUTTON_NO' => 'Ne',
  'LBL_PMSE_BUTTON_OK' => 'OK',
  'LBL_PMSE_BUTTON_SAVE' => 'Sačuvaj',
  'LBL_PMSE_BUTTON_YES' => 'Da',
  'LBL_PMSE_CONTEXT_MENU_100' => '100%',
  'LBL_PMSE_CONTEXT_MENU_125' => '125%',
  'LBL_PMSE_CONTEXT_MENU_150' => '150%',
  'LBL_PMSE_CONTEXT_MENU_50' => '50%',
  'LBL_PMSE_CONTEXT_MENU_75' => '75%',
  'LBL_PMSE_CONTEXT_MENU_ACTION' => 'Akcija',
  'LBL_PMSE_CONTEXT_MENU_ACTION_TYPE' => 'Tip akcije',
  'LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD' => 'Dodati srodni zapis',
  'LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM' => 'Razigravanje',
  'LBL_PMSE_CONTEXT_MENU_ASSIGN_USER' => 'Dodeliti korisniku',
  'LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE' => 'Poslovna pravila',
  'LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD' => 'Promeniti polje',
  'LBL_PMSE_CONTEXT_MENU_CONVERGING' => 'Konvergentan',
  'LBL_PMSE_CONTEXT_MENU_CONVERT' => 'Konvertovati...',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT' => '(Događaj)',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW' => 'Definisan tok',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY' => '(Prolaz)',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK' => '(Aktivnost)',
  'LBL_PMSE_CONTEXT_MENU_DELETE' => 'Obriši',
  'LBL_PMSE_CONTEXT_MENU_DIRECTION' => 'Smer...',
  'LBL_PMSE_CONTEXT_MENU_DIVERGING' => 'Divergentan',
  'LBL_PMSE_CONTEXT_MENU_DO_NOTHING' => 'Ne radi ništa',
  'LBL_PMSE_CONTEXT_MENU_EVENT_BASED_GATEWAY' => 'Prolaz zasnovan na događaju',
  'LBL_PMSE_CONTEXT_MENU_EXCLUSIVE_GATEWAY' => 'Isključivi prolaz',
  'LBL_PMSE_CONTEXT_MENU_FORMS' => 'Forme...',
  'LBL_PMSE_CONTEXT_MENU_INCLUSIVE_GATEWAY' => 'Uključujući prolaz',
  'LBL_PMSE_CONTEXT_MENU_LISTEN' => 'Slušati',
  'LBL_PMSE_CONTEXT_MENU_NONE' => 'Nijedna',
  'LBL_PMSE_CONTEXT_MENU_PARELLEL_GATEWAY' => 'Paralelni prolaz',
  'LBL_PMSE_CONTEXT_MENU_PROCESS_DEFINITION' => 'Definicija procesa',
  'LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE' => 'Primi poruku',
  'LBL_PMSE_CONTEXT_MENU_REFRESH' => 'Osveži',
  'LBL_PMSE_CONTEXT_MENU_RESULT' => 'Rezultat',
  'LBL_PMSE_CONTEXT_MENU_SAVE' => 'Sačuvaj',
  'LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE' => 'Pošalji poruku',
  'LBL_PMSE_CONTEXT_MENU_SETTINGS' => 'Podešavanja...',
  'LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS' => 'Okončati proces',
  'LBL_PMSE_CONTEXT_MENU_TIMER' => 'Tajmer',
  'LBL_PMSE_CONTEXT_MENU_UNASSIGNED' => 'Nije dodeljeno',
  'LBL_PMSE_CONTEXT_MENU_USERS' => 'Korisnici',
  'LBL_PMSE_CONTEXT_MENU_ZOOM' => 'Uveličaj',
  'LBL_PMSE_EMAILPICKER_CURRENT_USER' => 'Trenutni korisnik',
  'LBL_PMSE_EMAILPICKER_RECORD_OWNER' => 'Vlasnik zapisa',
  'LBL_PMSE_EMAILPICKER_RESULTS_TITLE' => '%NUMBER% predlog/predlozi za "%TEXT%"',
  'LBL_PMSE_EMAILPICKER_SUGGESTIONS' => 'Predlozi',
  'LBL_PMSE_EMAILPICKER_SUPERVISOR' => 'Nadzornik',
  'LBL_PMSE_EMAILPICKER_TEAMS' => 'Timovi',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_BR' => 'Poslovno pravilo',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_RESPONSE' => 'Odgovor',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_TITLE' => 'Procena poslovnih pravila',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC' => 'Kanal, broj i binarna vrednost',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_BOOLEAN' => 'Dodati binarnu vrednost',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_NUMBER' => 'Dodati broj',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_STRING' => 'Dodati kanal',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_VALUE' => 'Vrednost',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATE' => 'Fiksirani datum',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATETIME' => 'Fiksirani Datum i Vreme',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_TITLE' => 'Postojanosti',
  'LBL_PMSE_EXPCONTROL_EVALUATIONS_TITLE' => 'Procene',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_FORM' => 'Forma',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_STATUS' => 'Status',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_TITLE' => 'Procena oblika odgovora',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_MODULE' => 'Modul',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_TITLE' => 'Procena polja modula',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VALUE' => 'Vrednost',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VARIABLE' => 'Polje',
  'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL' => 'je jednako',
  'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL_TEXT' => 'je',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR' => 'je veće od',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_DATE' => 'posle',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL' => 'je veće ili jednako od',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_THAN' => 'je manje ili jednako od',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN' => 'je manje od',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN_DATE' => 'pre',
  'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL' => 'različito je',
  'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_TEXT' => 'nije',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_CURRENT' => 'Trenutni korisnik',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN' => 'Je admin',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN' => 'Nije admin',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE' => 'Nije uloga',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER' => 'Nije korisnik',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE' => 'Je uloga',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER' => 'Je korisnik',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OPERATOR' => 'Operator',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OWNER' => 'Vlasnik zapisa',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_SUPERVISOR' => 'Nadzornik',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_AMMOUNT' => 'Iznos',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_AMOUNT' => 'Vrednost',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_DAYS' => 'dani',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_HOURS' => 'sati',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_MINUTES' => 'minuti',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_MONTHS' => 'meseci',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_TITLE' => 'Vremenski raspon',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_UNIT' => 'Jedinica',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_WEEKS' => 'nedelje',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_YEARS' => 'godine',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TITLE' => 'Procena korisnika',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_USER' => 'Korisnik',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_VALUE' => 'Vrednost',
  'LBL_PMSE_EXPCONTROL_VARIABLES_PANEL_TITLE' => 'Polja',
  'LBL_PMSE_FORMPANEL_SUBMIT' => 'Pošalji',
  'LBL_PMSE_FORM_LABEL_APPLIES_TO' => 'Odnosi se na:',
  'LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD' => 'Metod dodeljivanja',
  'LBL_PMSE_FORM_LABEL_ASSIGN_TO_TEAM' => 'Dodeli timu',
  'LBL_PMSE_FORM_LABEL_ASSIGN_TO_USER' => 'Dodeliti korisniku',
  'LBL_PMSE_FORM_LABEL_CRITERIA' => 'Kriterijum',
  'LBL_PMSE_FORM_LABEL_DURATION' => 'Trajanje',
  'LBL_PMSE_FORM_LABEL_EMAIL_BCC' => 'Tajna kopija',
  'LBL_PMSE_FORM_LABEL_EMAIL_CC' => 'Kopija za',
  'LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE' => 'Email šablon',
  'LBL_PMSE_FORM_LABEL_EMAIL_TO' => 'Za',
  'LBL_PMSE_FORM_LABEL_EXPECTED_TIME' => 'Očekivano vreme',
  'LBL_PMSE_FORM_LABEL_FIELDS' => 'Polja',
  'LBL_PMSE_FORM_LABEL_FIXED_DATE' => 'Fiksiran datum',
  'LBL_PMSE_FORM_LABEL_FORM_TYPE' => 'Tip forme',
  'LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS' => 'Opšte',
  'LBL_PMSE_FORM_LABEL_MODULE' => 'Modul',
  'LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS' => 'Ostale usmerene opcije',
  'LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS' => 'Polja samo za čitanje',
  'LBL_PMSE_FORM_LABEL_RELATED_MODULE' => 'Povezani modul',
  'LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS' => 'Potrebna polja',
  'LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS' => 'Forma dugmadi',
  'LBL_PMSE_FORM_LABEL_TEAM' => 'Tim',
  'LBL_PMSE_FORM_LABEL_UNIT' => 'Jedinica',
  'LBL_PMSE_FORM_LABEL_UPDATE_RECORD_OWNER' => 'Obavestiti vlasnika zapisa',
  'LBL_PMSE_FORM_OPTION_ADMINISTRATOR' => 'Administrator',
  'LBL_PMSE_FORM_OPTION_APPROVE_REJECT' => 'Odobriti/odbaciti',
  'LBL_PMSE_FORM_OPTION_CURRENT_USER' => 'Trenutni korisnik',
  'LBL_PMSE_FORM_OPTION_DAYS' => 'Dana',
  'LBL_PMSE_FORM_OPTION_HOURS' => 'Sati',
  'LBL_PMSE_FORM_OPTION_MINUTES' => 'Minuta',
  'LBL_PMSE_FORM_OPTION_RECORD_OWNER' => 'Vlasnik zapisa',
  'LBL_PMSE_FORM_OPTION_ROUND_ROBIN' => 'Razigravanje',
  'LBL_PMSE_FORM_OPTION_ROUTE' => 'Put',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Izaberi...',
  'LBL_PMSE_FORM_OPTION_SELF_SERVICE' => 'Samouslužno',
  'LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT' => 'Statičan zadatak',
  'LBL_PMSE_FORM_OPTION_SUPERVISOR' => 'Nadzornik',
  'LBL_PMSE_FORM_OPTION_TARGET_MODULE' => 'Ciljani modul',
  'LBL_PMSE_FORM_TITLE_ACTIVITY' => 'Aktivnost',
  'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD' => 'Dodati srodni zapis',
  'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM' => 'Razigravanje',
  'LBL_PMSE_FORM_TITLE_ASSIGN_USER' => 'Dodeliti korisnika',
  'LBL_PMSE_FORM_TITLE_BUSINESS_RULE' => 'Poslovno pravilo',
  'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS' => 'Izmeniti polja',
  'LBL_PMSE_FORM_TITLE_GATEWAY' => 'Prolaz',
  'LBL_PMSE_FORM_TITLE_LABEL_EVENT' => 'Događaj',
  'LBL_PMSE_FORM_TITLE_USER_DEFINITION' => 'Korisnička definicija',
  'LBL_PMSE_FORM_TOOLTIP_DURATION' => 'Definiše trajanje tajmera u okviru događaja',
  'LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE' => 'Odabrati SugarCRM modul koji će biti primenjen prilikom pokretanja događaja',
  'LBL_PMSE_IMPORT_BUTTON_LABEL' => 'Uvoz',
  'LBL_PMSE_IMPORT_PROCESS_DEFINITION_FAILURE' => 'Neuspešno kreiranje Procesne Definicije iz dokumenta',
  'LBL_PMSE_LABEL_DELETE' => 'Obriši',
  'LBL_PMSE_LABEL_DESCRIPTION' => 'Opis',
  'LBL_PMSE_LABEL_DESIGN' => 'Dizajn',
  'LBL_PMSE_LABEL_DISABLE' => 'Onemogući',
  'LBL_PMSE_LABEL_ENABLE' => 'Omogući',
  'LBL_PMSE_LABEL_EXPORT' => 'Izvoz',
  'LBL_PMSE_LABEL_LOCKED_FIELDS' => 'Zaključana polja',
  'LBL_PMSE_LABEL_PROCESS_NAME' => 'Naziv procesa',
  'LBL_PMSE_LABEL_RULE' => 'Pravilo',
  'LBL_PMSE_LABEL_TERMINATE_PROCESS' => 'Okončati proces',
  'LBL_PMSE_MESSAGE_ACTIVITY_NAME_ALREADY_EXISTS' => 'Naziv "%s" već postoji u obliku porodice.',
  'LBL_PMSE_MESSAGE_ACTIVITY_NAME_EMPTY' => 'Naziv aktivnosti je prazan',
  'LBL_PMSE_MESSAGE_CANCEL_CONFIRM' => 'Neka podešavanja su izmenjena. Da li želite da odbacite promene?',
  'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_INCOMING' => 'Aktivnost mora imati dolazeći tok',
  'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_OUTGOING' => 'Aktivnost mora imati odlazeći tok',
  'LBL_PMSE_MESSAGE_ERROR_ANNOTATION' => 'Tekstualna Beleška mora imati asocirajuću liniju',
  'LBL_PMSE_MESSAGE_ERROR_BOUNDARY_EVENT_OUTGOING' => 'Granični događaj mora imati jednu odlazeći tok',
  'LBL_PMSE_MESSAGE_ERROR_END_EVENT_INCOMING' => 'Završetak događaja mora imati dolazeći tok niza',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_INCOMING' => 'Prolaz mora imati dva ili više dolazećih tokova',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_OUTGOING' => 'Prolaz ne može imati odlazeći tok',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_INCOMING' => 'Prolaz mora imati jedan ili više dolazećih tokova',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_OUTGOING' => 'Prolaz mora itami dva ili više odlazećih tokova',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_INCOMING' => 'Prolaz mora imati dva ili više dolazećih tokova',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_OUTGOING' => 'Prolaz mora imati dva ili više odlazećih tokova',
  'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_INCOMING' => 'Središnji događaj mora imati dolazeći ili više dolazećih tokova niza',
  'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_OUTGOING' => 'Središnji događaj mora imati jedan odlazeći tok niza',
  'LBL_PMSE_MESSAGE_ERROR_START_EVENT_OUTGOING' => 'Početak događaja mora imati odlazeći tok niza',
  'LBL_PMSE_MESSAGE_INVALID_CONNECTION' => 'Nepostojeća veza',
  'LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA' => 'Modul je promenjen, tako da će kriterijumi biti promenjeni takođe jer ne postoje polja povezana s novim modulom.',
  'LBL_PMSE_MY_PROCESS_DEFINITIONS' => 'Moje procesne definicije',
  'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED' => 'Onemogućeno',
  'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED' => 'Omogućeno',
  'LBL_PMSE_PROCESS_DEFINITION_EMPTY_WARNING' => 'Molim odabrati važeći *.bpm dokument.',
  'LBL_PMSE_PROCESS_DEFINITION_IMPORT_SUCCESS' => 'Procesne definicije su uspešno uvezene u sistem.',
  'LBL_PMSE_PROCESS_DEFINITION_IMPORT_TEXT' => 'Automatski kreirati novi dokument Procesnih Definicija uvozom *.bpm dokumenta iz sopstvenog sistema.',
  'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => 'Sačuvati i dizajnirati',
  'LBL_PMSE_UPDATERFIELD_VARIABLES_LIST_TITLE' => '%MODULE% polja',
  'LBL_PRJ_MODULE' => 'Ciljani modul',
  'LBL_PRJ_STATUS' => 'Status',
  'LNK_LIST' => 'Prikaži definicije procesa',
);
