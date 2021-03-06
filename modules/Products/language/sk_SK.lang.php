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
  'ERR_DELETE_RECORD' => 'K odstráneniu produktu musíte zadať číslo záznamu.',
  'LBL_ACCOUNT_ID' => 'Číslo účtu',
  'LBL_ACCOUNT_NAME' => 'Názov účtu',
  'LBL_ASSET_NUMBER' => 'Inventárne číslo:',
  'LBL_ASSIGNED_TO_NAME' => 'Pridelený k',
  'LBL_ASSIGNED_USER_ID' => 'Pridelené používateľské ID',
  'LBL_ASSOCIATED_QUOTE' => 'Ocenený predmet:',
  'LBL_BOOK_VALUE' => 'Účtovná hodnota',
  'LBL_BOOK_VALUE_DATE' => 'Zaúčtovanie dňa:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Účtovná hodnota (US Dollar):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Vypočítaná čiastka položky krivky výnosu',
  'LBL_CAMPAIGN_PRODUCT' => 'Kampaň ocenených položiek krivky',
  'LBL_CATEGORY' => 'Kategória',
  'LBL_CATEGORY_NAME' => 'Názov kategórie',
  'LBL_COMMIT_STAGE' => 'Fáza odovzdania',
  'LBL_COMMIT_STAGE_FORECAST' => 'Prognóza',
  'LBL_CONTACT' => 'Kontakt:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACT_ID' => 'Číslo kontaktu:',
  'LBL_CONTACT_NAME' => 'Meno kontaktu:',
  'LBL_CONTRACTS' => 'Kontrakty',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakty',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Chyba:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'Došlo k chybe pri prevádzaní tejto položky krivky do ponuky.',
  'LBL_COST_PRICE' => 'Výdavky:',
  'LBL_COST_USDOLLAR' => 'Výdavky USD:',
  'LBL_CREATED_USER' => 'Vytvorené užívateľom',
  'LBL_CURRENCY' => 'Mena:',
  'LBL_CURRENCY_ID' => 'ID meny:',
  'LBL_CURRENCY_RATE' => 'Menový kurz',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Názov symbolu meny',
  'LBL_DATE_CLOSED' => 'Predpokladaný dátum uzávierky',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Časová pečiatka predpokladaného dátumu uzávierky',
  'LBL_DATE_PURCHASED' => 'Zakúpené:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Podpora vyprší:',
  'LBL_DATE_SUPPORT_STARTS' => 'Podpora začína:',
  'LBL_DEAL_TOT' => 'Zľava',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Produkty',
  'LBL_DESCRIPTION' => 'Popis',
  'LBL_DISCOUNT_AMOUNT' => 'Zľava',
  'LBL_DISCOUNT_AS_PERCENT' => 'Zľava v %',
  'LBL_DISCOUNT_PRICE' => 'Jednotková cena:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Dátum zľavy:',
  'LBL_DISCOUNT_RATE' => 'Diskontná sadzba',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Diskontná sadzba (US Dollar)',
  'LBL_DISCOUNT_TOTAL' => 'Zľava celkom',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Zľava (US Dollar)',
  'LBL_DISCOUNT_USDOLLAR' => 'Jednotková cena (US Dollar)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_EDITLAYOUT' => 'Upraviť rozloženie',
  'LBL_EXPERT_ID' => 'Produktový expert',
  'LBL_EXPORT_CURRENCY_ID' => 'ID meny',
  'LBL_EXT_PRICE' => 'Ext. cena',
  'LBL_FORECAST' => 'Zahrnúť do prognózy',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Hlavné obchodné prípady',
  'LBL_LEAD_SOURCE' => 'Hlavný zdroj',
  'LBL_LIST_ACCOUNT_NAME' => 'Názov účtu',
  'LBL_LIST_CONTACT_NAME' => 'Meno kontaktu',
  'LBL_LIST_COST_PRICE' => 'Výdavky',
  'LBL_LIST_DATE_PURCHASED' => 'Zakúpené',
  'LBL_LIST_DISCOUNT_PRICE' => 'Cena',
  'LBL_LIST_FORM_TITLE' => 'Zoznam produktov',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Číslo výrobcu',
  'LBL_LIST_LIST_PRICE' => 'Zoznam',
  'LBL_LIST_MANUFACTURER' => 'Výrobca',
  'LBL_LIST_NAME' => '',
  'LBL_LIST_PRICE' => 'Cenník:',
  'LBL_LIST_QUANTITY' => 'Množstvo',
  'LBL_LIST_QUOTE_NAME' => 'Názov ponuky',
  'LBL_LIST_STATUS' => 'Stav',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Končí',
  'LBL_LIST_USDOLLAR' => 'Cenník (US Dollar)',
  'LBL_MANUFACTURER' => 'Výrobca:',
  'LBL_MANUFACTURER_NAME' => 'Názov výrobcu:',
  'LBL_MEMBER_OF' => 'Člen v:',
  'LBL_MFT_PART_NUM' => 'Číslo dielu výrobcu:',
  'LBL_MODIFIED_USER' => 'Zmenil užívateľ',
  'LBL_MODULE_NAME' => '',
  'LBL_MODULE_NAME_SINGULAR' => '',
  'LBL_MODULE_TITLE' => '',
  'LBL_NAME' => '',
  'LBL_NEW_FORM_TITLE' => 'Vytvoriť produkt',
  'LBL_NEXT_STEP' => 'Ďalší krok:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Poznámky',
  'LBL_OPPORTUNITY' => 'Obchodná príležitosť',
  'LBL_OPPORTUNITY_ID' => 'ID obchodu',
  'LBL_PRICING_FACTOR' => 'Faktor cenotvorby:',
  'LBL_PRICING_FORMULA' => 'Vzorec prednastavenej cenotvorby',
  'LBL_PROBABILITY' => 'Pravdepodobnosť (%)',
  'LBL_PRODUCT' => '',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => '',
  'LBL_PRODUCT_CATEGORIES' => 'Kategórie produktov',
  'LBL_PRODUCT_TEMPLATE' => 'Šablóna produktu:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'ID Šablóny produktu:',
  'LBL_PRODUCT_TYPES' => 'Typy produktov',
  'LBL_QUANTITY' => 'Množstvo',
  'LBL_QUOTE' => 'Kvóta',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Ponuky',
  'LBL_QUOTE_ID' => 'Kvóta ID',
  'LBL_QUOTE_NAME' => 'Názov kvóty:',
  'LBL_RELATED_PRODUCTS' => '',
  'LBL_RELATED_PRODUCTS_TITLE' => '',
  'LBL_REVENUELINEITEM' => 'Položka krivky výnosu',
  'LBL_REVENUELINEITEMS' => 'Položky krivky výnosu',
  'LBL_REVENUELINEITEM_ID' => 'ID položky krivky výnosu:',
  'LBL_REVENUELINEITEM_NAME' => 'Názov položky krivky výnosu:',
  'LBL_SALES_STAGE' => 'Fáza predaja',
  'LBL_SALES_STATUS' => 'Stav krivky výnosu',
  'LBL_SEARCH_FORM_TITLE' => 'Prehľadávanie produktov',
  'LBL_SELECT_DISCOUNT' => 'Zľava v %',
  'LBL_SERIAL_NUMBER' => 'Sériové číslo:',
  'LBL_STATUS' => 'Stav:',
  'LBL_SUPPORT_CONTACT' => 'Kontakt podpory:',
  'LBL_SUPPORT_DESCRIPTION' => 'Podpora popis:',
  'LBL_SUPPORT_NAME' => 'Podpora Názov:',
  'LBL_SUPPORT_TERM' => 'Podpora Podmienky:',
  'LBL_TAX_CLASS' => 'Daňova trieda',
  'LBL_TYPE' => 'Typ:',
  'LBL_URL' => 'URL produktu:',
  'LBL_VENDOR_PART_NUM' => 'Číslo dielu predajcu:',
  'LBL_WEBSITE' => 'Web stránka',
  'LBL_WEIGHT' => 'Váha:',
  'LNK_IMPORT_PRODUCTS' => 'Import produktov',
  'LNK_NEW_PRODUCT' => 'Vytvoriť produkt',
  'LNK_PRODUCT_LIST' => 'Zobrazenie produktov',
  'NTC_DELETE_CONFIRMATION' => 'Skutočne, chcete vymazať tento záznam?',
  'NTC_REMOVE_CONFIRMATION' => 'Ste si istým že chcete zrušiť túto väzbu produktu?',
);

