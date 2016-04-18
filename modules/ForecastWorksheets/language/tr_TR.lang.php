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
  'ERR_FORECAST_AMOUNT' => 'Onaylanan Miktar zorunludur ve sayı olmalıdır.',
  'LBL_ACCOUNT_NAME' => 'Müşteri İsmi:',
  'LBL_AMOUNT' => 'Tutar',
  'LBL_BASE_RATE' => 'Temel Oran',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Hesaplanan Satır Öğesi Tutarı',
  'LBL_CATEGORY_NAME' => 'Kategori',
  'LBL_COMMIT_HEADER' => 'Tahmini Onayla',
  'LBL_COMMIT_MESSAGE' => 'Bu tutarı onaylamak ister misiniz?',
  'LBL_COMMIT_NOTE' => 'Seçili Zaman Periyodu için onaylanacak miktarları girin:',
  'LBL_COMMIT_STAGE' => 'Onay Aşaması',
  'LBL_COST_PRICE' => 'Maliyet',
  'LBL_CREATED_BY' => 'Oluşturan',
  'LBL_CURRENCY' => 'Para Birimi',
  'LBL_CURRENCY_ID' => 'Para Birimi ID',
  'LBL_CURRENCY_RATE' => 'Döviz Kuru',
  'LBL_DATE_CLOSED' => 'Tahmini Kapanış Tarihi:',
  'LBL_DATE_COMMITTED' => 'Onaylanan Tarih',
  'LBL_DATE_ENTERED' => 'Giriş Tarihi',
  'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
  'LBL_DELETED' => 'Silindi',
  'LBL_DISCOUNT_PRICE' => 'Birim Fiyatı',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Tahmin Fırsatları',
  'LBL_DV_FORECAST_PERIOD' => 'Zaman Aralığı Tahmini',
  'LBL_DV_FORECAST_ROLLUP' => 'Tahmin Rollup',
  'LBL_DV_HEADER' => 'Tahmin: Çalışma Sayfası',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Son Onay Miktarları:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Son Onay Zamanı:',
  'LBL_DV_MY_FORECASTS' => 'Tahminlerim',
  'LBL_DV_MY_TEAM' => 'Takımımın Tahminleri',
  'LBL_DV_TIMEPERIOD' => 'Zaman Aralığı:',
  'LBL_DV_TIMEPERIODS' => 'Zaman Aralıkları:',
  'LBL_DV_TIMPERIOD_DATES' => 'Tarih Alanı:',
  'LBL_EDITABLE_INVALID' => '{{field_name}} için geçersiz değer',
  'LBL_EDITABLE_INVALID_RANGE' => 'Değer {{min}} ve {{max}} arasında olması gerekir',
  'LBL_FC_START_DATE' => 'Başlangıç Tarihi',
  'LBL_FC_USER' => 'Planlanacak Kişi',
  'LBL_FDR_ADJ_AMOUNT' => 'Ayarlanmış Miktar',
  'LBL_FDR_COMMIT' => 'Onaylanmış Miktar',
  'LBL_FDR_DATE_COMMIT' => 'Onay Tarihi',
  'LBL_FDR_OPPORTUNITIES' => 'Tahmindeki fırsatlar:',
  'LBL_FDR_USER_NAME' => 'Doğrudan Rapor',
  'LBL_FDR_WEIGH' => 'Fırsatların ağırlıklı miktarı:',
  'LBL_FORECAST' => 'Tahmin',
  'LBL_FORECAST_HISTORY' => 'Tahminler: Tarihçe',
  'LBL_FORECAST_HISTORY_TITLE' => 'Tarihçe',
  'LBL_FORECAST_ID' => 'Tahmin ID',
  'LBL_FORECAST_OPP_COUNT' => 'Toplam Fırsat Sayısı',
  'LBL_FORECAST_OPP_WEIGH' => 'Ağırlıklı Miktar',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Pipeline Opportunity Count',
  'LBL_FORECAST_TIME_ID' => 'Zaman Aralığı ID',
  'LBL_FORECAST_TYPE' => 'Tahmin Tipi',
  'LBL_FORECAST_USER' => 'Kullanıcı',
  'LBL_FS_CASCADE' => 'Basamaklandırılsın mı?',
  'LBL_FS_CREATED_BY' => 'Oluşturan',
  'LBL_FS_DATE_ENTERED' => 'Giriş Tarihi',
  'LBL_FS_DATE_MODIFIED' => 'Değiştirilme Tarihi',
  'LBL_FS_DELETED' => 'Silindi',
  'LBL_FS_END_DATE' => 'Bitiş Tarihi',
  'LBL_FS_FORECAST_FOR' => 'Planlanacak Kişi:',
  'LBL_FS_FORECAST_START_DATE' => 'Tahmin Başlangıç Tarihi',
  'LBL_FS_MODULE_NAME' => 'Tahmin Planlaması',
  'LBL_FS_START_DATE' => 'Başlangıç Tarihi',
  'LBL_FS_STATUS' => 'Durum',
  'LBL_FS_TIMEPERIOD' => 'Zaman Aralığı',
  'LBL_FS_TIMEPERIOD_ID' => 'Zaman Aralığı ID',
  'LBL_FS_USER_ID' => 'Kullanıcı ID',
  'LBL_LEAD_SOURCE' => 'Potansiyel Kaynağı',
  'LBL_LIST_FORM_TITLE' => 'İşlenmiş Tahminler',
  'LBL_LIST_PRICE' => 'Liste Fiyatı',
  'LBL_LOADING_COMMIT_HISTORY' => 'Onay Geçmişi Yükleniyor…',
  'LBL_LV_COMMIT' => 'Onaylanmış Miktar',
  'LBL_LV_COMMIT_DATE' => 'Onaylanan Tarih',
  'LBL_LV_OPPORTUNITIES' => 'Fırsatlar',
  'LBL_LV_TIMPERIOD' => 'Zaman aralığı',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Bitiş Tarihi',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Başlangıç Tarihi',
  'LBL_LV_TYPE' => 'Tahmin Tipi',
  'LBL_LV_WEIGH' => 'Ağırlıklı Miktar',
  'LBL_MANAGER_NOTIFY' => 'Bir önceki onayda dahil olan {0}, {1} son onayda dahil değil.',
  'LBL_MODIFIED_USER_ID' => 'Değiştiren',
  'LBL_MODULE_NAME' => 'Tahmin Çalışma Sayfası',
  'LBL_MODULE_NAME_SINGULAR' => 'Tahmin Çalışma Sayfası',
  'LBL_MODULE_TITLE' => 'Tahmin Çalışma Sayfası',
  'LBL_NEXT_STEP' => 'Bir Sonraki Adım',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Tahminleme için Etkin zaman periyodu yok.',
  'LBL_OPPORTUNITY_NAME' => 'Fırsat İsmi',
  'LBL_OW_ACCOUNTNAME' => 'Müşteri',
  'LBL_OW_DESCRIPTION' => 'Tanım',
  'LBL_OW_MODULE_TITLE' => 'Fırsat Çalışma Sayfası',
  'LBL_OW_NEXT_STEP' => 'Bir Sonraki Adım',
  'LBL_OW_OPPORTUNITIES' => 'Fırsat',
  'LBL_OW_PROBABILITY' => 'Olasılık',
  'LBL_OW_REVENUE' => 'Tutar',
  'LBL_OW_TYPE' => 'Tipi',
  'LBL_OW_WEIGHTED' => 'Ağırlıklı Miktar',
  'LBL_PERCENT' => 'Yüzde',
  'LBL_PRODUCT' => 'Ürün',
  'LBL_PRODUCT_ID' => 'Ürün ID',
  'LBL_QC_COMMIT_BUTTON' => 'Onay',
  'LBL_QC_COMMIT_VALUE' => 'Onaylanan Miktar:',
  'LBL_QC_DIRECT_FORECAST' => 'Doğrudan Tahminim:',
  'LBL_QC_HEADER_DELIM' => 'Kime',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Son Onay Miktarı:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Son Onay Zamanı:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Fırsat Sayısı:',
  'LBL_QC_ROLLUP_FORECAST' => 'Grubumun Tahmini:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Toplamı Onaylanmış Miktar:',
  'LBL_QC_TIME_PERIOD' => 'Zaman Aralığı:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Tahminlerim',
  'LBL_QC_WEIGHT_VALUE' => 'Ağırlıklı Miktar:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Çalışma Sayfası',
  'LBL_QUANTITY' => 'Miktar',
  'LBL_QUOTA' => 'Kota',
  'LBL_QUOTA_ID' => 'Kota ID',
  'LBL_REPORTS_TO_USER_NAME' => 'Rapor Edilen Kişi',
  'LBL_RESET_CHECK' => 'Seçilen zaman periyodu ve giriş yapmış kullanıcının tüm çalışma sayfası verileri silinecektir. Devam etmek ister misiniz?',
  'LBL_RESET_WOKSHEET' => 'Çalışma Sayfasını Sıfırla',
  'LBL_REVENUELINEITEM_NAME' => 'Gelir Kalemi Adı',
  'LBL_SALES_STAGE' => 'Aşama',
  'LBL_SALES_STATUS' => 'Durum',
  'LBL_SAVE_WOKSHEET' => 'Çalışma Sayfasını Kaydet',
  'LBL_SEARCH' => 'Seç',
  'LBL_SEARCH_LABEL' => 'Seç',
  'LBL_SHOW_CHART' => 'Grafiği Görüntüle',
  'LBL_SVFS_CASCADE' => 'Raporlara basamaklandırılsın mı?',
  'LBL_SVFS_FORECASTDATE' => 'Planlama Başlangıç Tarihi',
  'LBL_SVFS_HEADER' => 'Tahmin Planlama:',
  'LBL_SVFS_STATUS' => 'Durum',
  'LBL_SVFS_USER' => 'Kim İçin',
  'LBL_TIMEPERIOD_NAME' => 'Zaman Aralığı',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'Toplam İndirim Tutarı',
  'LBL_TYPE' => 'Tipi',
  'LBL_USER_NAME' => 'Kullanıcı İsmi',
  'LBL_VERSION' => 'Versiyon',
  'LBL_WK_REVISION' => 'Revizyon',
  'LBL_WK_VERSION' => 'Versiyon',
  'LB_FS_KEY' => 'ID',
  'LNK_ACCOUNTS' => 'Müşteri',
  'LNK_FORECAST_LIST' => 'Tahmin Tarihçesini Görüntüle',
  'LNK_NEW_OPPORTUNITY' => 'Fırsat Oluştur',
  'LNK_NEW_TIMEPERIOD' => 'Zaman Aralığı Oluştur',
  'LNK_OPPORTUNITY' => 'Fırsat',
  'LNK_QUOTA' => 'Kotaları Görüntüle',
  'LNK_TIMEPERIOD_LIST' => 'Zaman Aralığını Göster',
  'LNK_UPD_FORECAST' => 'Tahmin Çalışma Sayfası',
);
