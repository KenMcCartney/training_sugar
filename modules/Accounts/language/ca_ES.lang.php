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
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Està segur que desitja treure aquest compte del projecte?',
  'ERR_DELETE_RECORD' => 'Ha d´especificar un número de registre per eliminar el compte.',
  'LBL_ACCOUNT' => 'Compte:',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
  'LBL_ACCOUNT_INFORMATION' => 'Informació del Compte',
  'LBL_ACCOUNT_NAME' => 'Nom:',
  'LBL_ACCOUNT_TYPE' => 'Tipus de comptes',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
  'LBL_ADDRESS_INFORMATION' => 'Direccions',
  'LBL_ANNUAL_REVENUE' => 'Compte Bancari:',
  'LBL_ANY_ADDRESS' => 'Qualsevol direcció:',
  'LBL_ANY_EMAIL' => 'Qualsevol correu:',
  'LBL_ANY_PHONE' => 'Qualsevol telèfon:',
  'LBL_ASSIGNED_TO_ID' => 'Usuari Assignat:',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
  'LBL_ASSIGNED_USER_NAME' => 'Assignat a:',
  'LBL_BILLING_ADDRESS' => 'Direcció de cobrament:',
  'LBL_BILLING_ADDRESS_CITY' => 'Ciutat de cobrament:',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'País de cobrament:',
  'LBL_BILLING_ADDRESS_POSTALCODE' => 'CP de cobrament:',
  'LBL_BILLING_ADDRESS_STATE' => 'Estat/Província de cobrament:',
  'LBL_BILLING_ADDRESS_STREET' => 'Carrer de cobrament:',
  'LBL_BILLING_ADDRESS_STREET_2' => 'Carrer de cobrament 2',
  'LBL_BILLING_ADDRESS_STREET_3' => 'Carrer de cobrament 3',
  'LBL_BILLING_ADDRESS_STREET_4' => 'Carrer de cobrament 4',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Incidències',
  'LBL_BUG_FORM_TITLE' => 'Comptes',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Trucades',
  'LBL_CAMPAIGNS' => 'Campanyes',
  'LBL_CAMPAIGN_ID' => 'ID Campanya',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Registre de Campanyes',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_CHARTS' => 'Gràfics',
  'LBL_CITY' => 'Ciutat:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Els correus electrònics de contactes relacionats',
  'LBL_CONTRACTS' => 'Contractes',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contractes',
  'LBL_COPY' => 'Copiar',
  'LBL_COUNTRY' => 'País:',
  'LBL_CREATED_ID' => 'Creat Per Id',
  'LBL_DATE_ENTERED' => 'Creat:',
  'LBL_DATE_MODIFIED' => 'Modificat:',
  'LBL_DEFAULT' => 'Vistes',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informació addicional',
  'LBL_DNB_BAL_PREVIEW' => 'Vista prèvia de comptes',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_DUNS_NUM' => 'DUNS:',
  'LBL_DUPLICATE' => 'Possible compte duplicat',
  'LBL_EMAIL' => 'Correu:',
  'LBL_EMAIL_ADDRESSES' => 'Direccions de Correu',
  'LBL_EMAIL_OPT_OUT' => 'Refusar Correu:',
  'LBL_EMPLOYEES' => 'Empleats:',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nom d&#39;usuari assignat',
  'LBL_FAX' => 'Fax:',
  'LBL_FILENAME' => 'Adjunt',
  'LBL_FILTER_ACCOUNTS_REPORTS' => 'Informes de comptes',
  'LBL_HELP_CREATE' => 'El mòdul {{plural_module_name}} consisteix en companyies que tenen alguna relació amb la seva organització i generalment es consideren com el centre per gestionar i analitzar les interaccions de la seva empresa amb els clients. Per crear un {{module_name}}: 1. Proporcioneu els valors desitjats per als camps. - Els camps marcats "Obligatori" s&#39;han de completar abans de desar. - Feu clic a "Mostra més" per exposar camps addicionals si és necessari. 2. Feu clic a "Desa" per finalitzar el nou registre i torneu a la pàgina anterior. - Seleccioneu l&#39;opció "Guarda i vegeu" per obrir el nou {{module_name}}  en vista de registre. - Seleccioneu "Guarda i crea nou" per crear un nou {{module_name}} immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} consisteix en companyies que tenen alguna relació amb la seva organització i generalment es consideren com el centre per gestionar i analitzar les interaccions de la seva empresa amb els clients. 
- Editeu els camps d&#39;aquest registre fent clic a un camp individual o amb el botó Edita.
- Vegeu o modifiqueu enllaços a altres registres als subpanells mitjançant la commutació de la subfinestra inferior esquerra a la "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i l&#39;historial de canvis del registre al {{activitystream_singular_module}} mitjançant la commutació de la subfinestra inferior esquerra al "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest favorit o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicionals disponibles al menú desplegable d&#39;accions a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} consisteix en companyies que tenen alguna relació amb la seva organització i generalment es consideren com el centre per gestionar i analitzar les interaccions de la seva empresa amb els clients. Hi han vàries maneres de crear {{plural_module_name}} a Sugar com ara, mitjançant el mòdul {{plural_module_name}}, duplicació, importació de {{plural_module_name}}, etc. Quan ja s&#39;ha creat el {{module_name}}, podeu veure i editar la informació que pertany al {{module_name}} a la vista de registre de {{plural_module_name}}. A continuació cada registre de {{module_name}} es pot relacionar amb altres registres de Sugar, com ara {{contacts_module}}, {{meetings_module}}, {{cases_module}}, {{opportunities_module}} i molts altres al temps que la relació amb el client madura.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Històrial',
  'LBL_HOMEPAGE_TITLE' => 'Els Meus Comptes',
  'LBL_INDUSTRY' => 'Industria:',
  'LBL_INVALID_EMAIL' => 'Correu no vàlid:',
  'LBL_INVITEE' => 'Contactes',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
  'LBL_LIST_ACCOUNT_NAME' => 'Nom',
  'LBL_LIST_CITY' => 'Ciutat',
  'LBL_LIST_CONTACT_NAME' => 'Contacte',
  'LBL_LIST_EMAIL_ADDRESS' => 'Correu',
  'LBL_LIST_FORM_TITLE' => 'Llista de Comptes',
  'LBL_LIST_PHONE' => 'Telèfon',
  'LBL_LIST_STATE' => 'Estat/Província',
  'LBL_LIST_WEBSITE' => 'Lloc Web',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Reunions',
  'LBL_MEMBER_OF' => 'Membre de:',
  'LBL_MEMBER_ORG_FORM_TITLE' => 'Organitzacions Membre',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organitzacions Membre',
  'LBL_MISC' => 'Altres',
  'LBL_MODIFIED_ID' => 'Modificat Per Id:',
  'LBL_MODULE_ID' => 'Comptes',
  'LBL_MODULE_NAME' => 'Comptes',
  'LBL_MODULE_NAME_SINGULAR' => 'Compte',
  'LBL_MODULE_TITLE' => 'Comptes: Inici',
  'LBL_NAME' => 'Nom:',
  'LBL_NEW_FORM_TITLE' => 'Nou Compte',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunitats',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Correu alternatiu:',
  'LBL_OTHER_PHONE' => 'Tel. alternatiu:',
  'LBL_OWNERSHIP' => 'Propietari:',
  'LBL_PARENT_ACCOUNT_ID' => 'ID Compte Origen',
  'LBL_PARENT_ID' => 'ID Pare',
  'LBL_PHONE' => 'Telèfon:',
  'LBL_PHONE_ALT' => 'Telèfon alternatiu:',
  'LBL_PHONE_ALTERNATE' => 'Altre telèfon',
  'LBL_PHONE_FAX' => 'Fax oficina:',
  'LBL_PHONE_OFFICE' => 'Telèfon oficina:',
  'LBL_POSTAL_CODE' => 'Codi postal:',
  'LBL_PRODUCTS_TITLE' => 'Productes',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectes',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectes',
  'LBL_PROSPECT_LIST' => 'Llista de Públic Objectiu',
  'LBL_PUSH_BILLING' => 'Emissió de Factures',
  'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copiar a Contactes',
  'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copiar...',
  'LBL_PUSH_SHIPPING' => 'Emissió d´Enviaments',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pressuposts',
  'LBL_RATING' => 'Rating:',
  'LBL_REVENUELINEITEMS' => 'Línia d&#39;impostos articles',
  'LBL_RLI_SUBPANEL_TITLE' => 'Línia d&#39;impostos articles',
  'LBL_SAVE_ACCOUNT' => 'Guardar Compte',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Comptes',
  'LBL_SHIPPING_ADDRESS' => 'Direcció d´enviament:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Ciutat d´enviament:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País d´enviament:',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CP d´enviament:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Estat/Província d´enviament:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Carrer d´enviament:',
  'LBL_SHIPPING_ADDRESS_STREET_2' => 'Carrer d´enviament 2',
  'LBL_SHIPPING_ADDRESS_STREET_3' => 'Carrer d´enviament 3',
  'LBL_SHIPPING_ADDRESS_STREET_4' => 'Carrer d´enviament 4',
  'LBL_SIC_CODE' => 'CIF/DNI:',
  'LBL_STATE' => 'Estat/Província:',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Tasques',
  'LBL_TEAMS_LINK' => 'Equips',
  'LBL_TICKER_SYMBOL' => 'Sigla bursátil:',
  'LBL_TYPE' => 'Tipus:',
  'LBL_USERS_ASSIGNED_LINK' => 'Usuaris Assignats',
  'LBL_USERS_CREATED_LINK' => 'Usuaris Creat Per',
  'LBL_USERS_MODIFIED_LINK' => 'Usuaris Modificats',
  'LBL_UTILS' => 'Utilitats',
  'LBL_VIEW_FORM_TITLE' => 'Vista del Compte',
  'LBL_WEBSITE' => 'Web:',
  'LNK_ACCOUNT_LIST' => 'Comptes',
  'LNK_ACCOUNT_REPORTS' => 'Informes de Comptes',
  'LNK_CREATE' => 'Crear Companyia',
  'LNK_IMPORT_ACCOUNTS' => 'Importar comptes',
  'LNK_NEW_ACCOUNT' => 'Nou Compte',
  'MSG_DUPLICATE' => 'El registre per al compte que crearà podria ser un duplicat d´un altre registre de compte existent. Els registres de compte amb noms similars es llisten a continuació.<br>Faci clic en Guardar per continuar amb la creació d´aquest compte, o en Cancel·lar per tornar al mòdul sense crear el compte.',
  'MSG_SHOW_DUPLICATES' => 'El registre per al compte que crearà podria ser un duplicat d´un altre registre de compte existent. Els registres de compte amb noms similars es llisten a continuació.<br>Faci clic en Guardar per continuar amb la creació d´aquest compte, o en Cancel·lar per tornar al mòdul sense crear el compte.',
  'NTC_COPY_BILLING_ADDRESS' => 'Copiar direcció de cobrament a direcció d´enviament',
  'NTC_COPY_BILLING_ADDRESS2' => 'Copiar a direcció d´enviament',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar direcció d´enviament a direcció de cobrament',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar a direcció de cobrament',
  'NTC_DELETE_CONFIRMATION' => 'Està segur que desitja eliminar aquest registre?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Està segur que desitja treure aquest registre?',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Està segur que desitja treure aquest registre com a organització membre?',
);

