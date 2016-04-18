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
  'LBL_MODULE_NAME' => 'Süreç Tanımları',
  'LBL_MODULE_NAME_SINGULAR' => 'Süreç Tanımları',
  'LBL_MODULE_TITLE' => 'Süreç Tanımları',
  'LBL_PMSE_ADAM_DESIGNER_ACTION' => 'Aksiyon',
  'LBL_PMSE_ADAM_DESIGNER_COMMENT' => 'Yorum',
  'LBL_PMSE_ADAM_DESIGNER_DOCUMENTS' => 'Dokümanlar',
  'LBL_PMSE_ADAM_DESIGNER_DOCUMENT_START_EVENT' => 'Doküman Başlangıç Etkinliği',
  'LBL_PMSE_ADAM_DESIGNER_END_EVENT' => 'Etkinlik Sonu',
  'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE' => 'Özel',
  'LBL_PMSE_ADAM_DESIGNER_EXCLUSIVE_GATEWAY' => 'Hariç Tutma Ağ Geçidi',
  'LBL_PMSE_ADAM_DESIGNER_LEADS' => 'Potansiyeller',
  'LBL_PMSE_ADAM_DESIGNER_LEAD_START_EVENT' => 'Potansiyel Etkinlik Başlat',
  'LBL_PMSE_ADAM_DESIGNER_MESSAGE_EVENT' => 'Etkinlik Mesajı',
  'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY' => 'Fırsat',
  'LBL_PMSE_ADAM_DESIGNER_OPPORTUNITY_START_EVENT' => 'Fırsat Başlangıç Etkinliği',
  'LBL_PMSE_ADAM_DESIGNER_PARALLEL' => 'Paralel',
  'LBL_PMSE_ADAM_DESIGNER_PARALLEL_GATEWAY' => 'Paralel Ağ Geçidi',
  'LBL_PMSE_ADAM_DESIGNER_RECEIVE_MESSAGE' => 'Mesaj Al',
  'LBL_PMSE_ADAM_DESIGNER_REDO' => 'İleri Al',
  'LBL_PMSE_ADAM_DESIGNER_SAVE' => 'Kaydet',
  'LBL_PMSE_ADAM_DESIGNER_SEND_MESSAGE' => 'Mesaj Gönder',
  'LBL_PMSE_ADAM_DESIGNER_TASK' => 'Aktivite',
  'LBL_PMSE_ADAM_DESIGNER_TEXT_ANNOTATION' => 'Metin Açıklaması',
  'LBL_PMSE_ADAM_DESIGNER_UNDO' => 'Geri Al',
  'LBL_PMSE_ADAM_DESIGNER_USER_TASK' => 'Aktivite',
  'LBL_PMSE_ADAM_DESIGNER_WAIT' => 'Bekleyin',
  'LBL_PMSE_ADAM_DESIGNER_WAIT_EVENT' => 'Etkinliği Bekle',
  'LBL_PMSE_ALL_PROCESS_DEFINITIONS' => 'Bütün Süreç Tanımları',
  'LBL_PMSE_BPMN_WARNING_LABEL' => 'Hatalar',
  'LBL_PMSE_BPMN_WARNING_PANEL_TITLE' => 'Öğe Hataları',
  'LBL_PMSE_BPMN_WARNING_SINGULAR_LABEL' => 'Hata',
  'LBL_PMSE_BUTTON_CANCEL' => 'İptal',
  'LBL_PMSE_BUTTON_NO' => 'Hayır',
  'LBL_PMSE_BUTTON_OK' => 'Tamam',
  'LBL_PMSE_BUTTON_SAVE' => 'Kaydet',
  'LBL_PMSE_BUTTON_YES' => 'Evet',
  'LBL_PMSE_CONTEXT_MENU_100' => '100%',
  'LBL_PMSE_CONTEXT_MENU_125' => '125%',
  'LBL_PMSE_CONTEXT_MENU_150' => '150%',
  'LBL_PMSE_CONTEXT_MENU_50' => '50%',
  'LBL_PMSE_CONTEXT_MENU_75' => '75%',
  'LBL_PMSE_CONTEXT_MENU_ACTION' => 'Aksiyon',
  'LBL_PMSE_CONTEXT_MENU_ACTION_TYPE' => 'Aksiyon Tipi',
  'LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD' => 'İlişkili Kaydı Ekle',
  'LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM' => 'Sırayla',
  'LBL_PMSE_CONTEXT_MENU_ASSIGN_USER' => 'Kullanıcı Ata',
  'LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE' => 'İş Kuralı',
  'LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD' => 'Alanı Değiştir',
  'LBL_PMSE_CONTEXT_MENU_CONVERGING' => 'Yaklaşan',
  'LBL_PMSE_CONTEXT_MENU_CONVERT' => 'Dönüştürme...',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT' => '(Etkinlik)',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW' => 'Standart Akış',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY' => '(Ağ Geçidi)',
  'LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK' => '(Aktivite)',
  'LBL_PMSE_CONTEXT_MENU_DELETE' => 'Sil',
  'LBL_PMSE_CONTEXT_MENU_DIRECTION' => 'Yön...',
  'LBL_PMSE_CONTEXT_MENU_DIVERGING' => 'Farklı',
  'LBL_PMSE_CONTEXT_MENU_DO_NOTHING' => 'İşlem Yapma',
  'LBL_PMSE_CONTEXT_MENU_EVENT_BASED_GATEWAY' => 'Olay-Bazlı Ağ Geçidi',
  'LBL_PMSE_CONTEXT_MENU_EXCLUSIVE_GATEWAY' => 'Hariç Tutma Ağ Geçidi',
  'LBL_PMSE_CONTEXT_MENU_FORMS' => 'Formlar...',
  'LBL_PMSE_CONTEXT_MENU_INCLUSIVE_GATEWAY' => 'Dahil Etme Ağ Geçidi',
  'LBL_PMSE_CONTEXT_MENU_LISTEN' => 'Dinle',
  'LBL_PMSE_CONTEXT_MENU_NONE' => 'Yok',
  'LBL_PMSE_CONTEXT_MENU_PARELLEL_GATEWAY' => 'Paralel Ağ Geçidi',
  'LBL_PMSE_CONTEXT_MENU_PROCESS_DEFINITION' => 'Süreç Tanımı',
  'LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE' => 'Mesaj Al',
  'LBL_PMSE_CONTEXT_MENU_REFRESH' => 'Yenile',
  'LBL_PMSE_CONTEXT_MENU_RESULT' => 'Sonuç',
  'LBL_PMSE_CONTEXT_MENU_SAVE' => 'Kaydet',
  'LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE' => 'Mesaj Gönder',
  'LBL_PMSE_CONTEXT_MENU_SETTINGS' => 'Ayarlar…',
  'LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS' => 'Süreci Sona Erdir',
  'LBL_PMSE_CONTEXT_MENU_TIMER' => 'Sayaç',
  'LBL_PMSE_CONTEXT_MENU_UNASSIGNED' => 'Atanmamış',
  'LBL_PMSE_CONTEXT_MENU_USERS' => 'Kullanıcılar…',
  'LBL_PMSE_CONTEXT_MENU_ZOOM' => 'Yaklaş',
  'LBL_PMSE_EMAILPICKER_CURRENT_USER' => 'Geçerli Kullanıcı',
  'LBL_PMSE_EMAILPICKER_RECORD_OWNER' => 'Kayıt Sahibi',
  'LBL_PMSE_EMAILPICKER_RESULTS_TITLE' => '"%TEXT%" için %NUMBER% adet öneri',
  'LBL_PMSE_EMAILPICKER_SUGGESTIONS' => 'Öneriler',
  'LBL_PMSE_EMAILPICKER_SUPERVISOR' => 'Gözetmen',
  'LBL_PMSE_EMAILPICKER_TEAMS' => 'Takımlar',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_BR' => 'İş Kuralı',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_RESPONSE' => 'Yanıt',
  'LBL_PMSE_EXPCONTROL_BUSINESS_RULES_EVALUATION_TITLE' => 'İş Kuralı Değerlendirmesi',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC' => 'String, Number ve Boolean',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_BOOLEAN' => 'mantıksal değer ekle',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_NUMBER' => 'numara ekle',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_ADD_STRING' => 'dizeyi ekle',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_BASIC_VALUE' => 'Değer',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATE' => 'Sabit Tarih',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_FIXED_DATETIME' => 'Sabit Tarih-Saat',
  'LBL_PMSE_EXPCONTROL_CONSTANTS_TITLE' => 'Sabitler',
  'LBL_PMSE_EXPCONTROL_EVALUATIONS_TITLE' => 'Değerlendirmeler',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_FORM' => 'Form',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_STATUS' => 'Durum',
  'LBL_PMSE_EXPCONTROL_FORM_RESPONSE_EVALUATION_TITLE' => 'Yanıt Değerlendirmesi Formu',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_MODULE' => 'Modül',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_TITLE' => 'Modül Alan Değerlendirmesi',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VALUE' => 'Değer',
  'LBL_PMSE_EXPCONTROL_MODULE_FIELD_EVALUATION_VARIABLE' => 'Alan',
  'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL' => 'eşit:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_EQUAL_TEXT' => 'değer:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR' => 'daha büyük:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_DATE' => 'sonra',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MAJOR_EQUAL' => 'daha büyük veya eşit:',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_EQUAL_THAN' => 'küçük veya eşit',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN' => 'daha küçük',
  'LBL_PMSE_EXPCONTROL_OPERATOR_MINOR_THAN_DATE' => 'önce',
  'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL' => 'eşit değil',
  'LBL_PMSE_EXPCONTROL_OPERATOR_NOT_EQUAL_TEXT' => 'değildir',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_CURRENT' => 'Geçerli Kullanıcı',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ADMIN' => 'Admin?',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ADMIN' => 'Admin Değil',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_ROLE' => 'Rol değil',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_NOT_USER' => 'Kullanıcı değil',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_ROLE' => 'rol',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_IS_USER' => 'Kullanıcı',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OPERATOR' => 'Operatör',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_OWNER' => 'Kayıt Sahibi',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_SUPERVISOR' => 'Gözetmen',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_AMOUNT' => 'Değer',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_DAYS' => 'gün',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_HOURS' => 'saat',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_MINUTES' => 'dakika',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_MONTHS' => 'ay',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_TITLE' => 'Zaman Dizileri',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_UNIT' => 'Birim',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_WEEKS' => 'hafta',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TIMESPAN_YEARS' => 'yıl',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_TITLE' => 'Kullanıcı Değerlendirmesi',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_USER' => 'Kullanıcı',
  'LBL_PMSE_EXPCONTROL_USER_EVALUATION_VALUE' => 'Değer',
  'LBL_PMSE_EXPCONTROL_VARIABLES_PANEL_TITLE' => 'Alanlar',
  'LBL_PMSE_FORMPANEL_SUBMIT' => 'Gönder',
  'LBL_PMSE_FORM_LABEL_APPLIES_TO' => 'Uygulanır',
  'LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD' => 'Atama Metodu',
  'LBL_PMSE_FORM_LABEL_ASSIGN_TO_TEAM' => 'Takıma Ata',
  'LBL_PMSE_FORM_LABEL_ASSIGN_TO_USER' => 'Kullanıcıya Ata',
  'LBL_PMSE_FORM_LABEL_CRITERIA' => 'Kriter',
  'LBL_PMSE_FORM_LABEL_DURATION' => 'Süre',
  'LBL_PMSE_FORM_LABEL_EMAIL_BCC' => 'GizliBilgi',
  'LBL_PMSE_FORM_LABEL_EMAIL_CC' => 'Bilgi',
  'LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE' => 'E-Posta Şablonu',
  'LBL_PMSE_FORM_LABEL_EMAIL_TO' => 'Kime',
  'LBL_PMSE_FORM_LABEL_EXPECTED_TIME' => 'Beklenen Süre',
  'LBL_PMSE_FORM_LABEL_FIELDS' => 'Alanlar',
  'LBL_PMSE_FORM_LABEL_FIXED_DATE' => 'Sabit Tarih',
  'LBL_PMSE_FORM_LABEL_FORM_TYPE' => 'Form Tipi',
  'LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS' => 'Genel',
  'LBL_PMSE_FORM_LABEL_MODULE' => 'Modül',
  'LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS' => 'Diğer Rota Opsiyonları',
  'LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS' => 'Salt Okunur alanlar',
  'LBL_PMSE_FORM_LABEL_RELATED_MODULE' => 'ilişkili Modülü',
  'LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS' => 'Zorunlu alanlar',
  'LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS' => 'Form Tuşları',
  'LBL_PMSE_FORM_LABEL_TEAM' => 'Takım',
  'LBL_PMSE_FORM_LABEL_UNIT' => 'Birim',
  'LBL_PMSE_FORM_LABEL_UPDATE_RECORD_OWNER' => 'Kayıt Sahibini Bilgilendir',
  'LBL_PMSE_FORM_OPTION_ADMINISTRATOR' => 'Yönetici',
  'LBL_PMSE_FORM_OPTION_APPROVE_REJECT' => 'Onayla/Reddet',
  'LBL_PMSE_FORM_OPTION_CURRENT_USER' => 'Geçerli Kullanıcı',
  'LBL_PMSE_FORM_OPTION_DAYS' => 'Gün',
  'LBL_PMSE_FORM_OPTION_HOURS' => 'Saat',
  'LBL_PMSE_FORM_OPTION_MINUTES' => 'Dakika',
  'LBL_PMSE_FORM_OPTION_RECORD_OWNER' => 'Kayıt Sahibi',
  'LBL_PMSE_FORM_OPTION_ROUND_ROBIN' => 'Sırayla',
  'LBL_PMSE_FORM_OPTION_ROUTE' => 'Rota',
  'LBL_PMSE_FORM_OPTION_SELECT' => 'Seç…',
  'LBL_PMSE_FORM_OPTION_SELF_SERVICE' => 'Self Servis',
  'LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT' => 'Statik Atama',
  'LBL_PMSE_FORM_OPTION_SUPERVISOR' => 'Gözetmen',
  'LBL_PMSE_FORM_OPTION_TARGET_MODULE' => 'Hedef Modül',
  'LBL_PMSE_FORM_TITLE_ACTIVITY' => 'Aktivite',
  'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD' => 'İlişkili Kaydı Ekle',
  'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM' => 'Sırayla',
  'LBL_PMSE_FORM_TITLE_ASSIGN_USER' => 'Kullanıcı Ata',
  'LBL_PMSE_FORM_TITLE_BUSINESS_RULE' => 'İş Kuralı',
  'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS' => 'Alanları Değiştir',
  'LBL_PMSE_FORM_TITLE_GATEWAY' => 'Ağ Geçidi',
  'LBL_PMSE_FORM_TITLE_LABEL_EVENT' => 'Etkinlik',
  'LBL_PMSE_FORM_TITLE_USER_DEFINITION' => 'Kullanıcı Tanımı',
  'LBL_PMSE_FORM_TOOLTIP_DURATION' => 'Zaman sayacı etkinliğinin süresini tanımlar',
  'LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE' => 'Etkinlik tetikleyicisini uygulamak için SugarCRM modülü seçin',
  'LBL_PMSE_IMPORT_BUTTON_LABEL' => 'Veri Yükle',
  'LBL_PMSE_LABEL_DELETE' => 'Sil',
  'LBL_PMSE_LABEL_DESCRIPTION' => 'Tanım',
  'LBL_PMSE_LABEL_DESIGN' => 'Dizayn',
  'LBL_PMSE_LABEL_DISABLE' => 'Etkisizleştirin',
  'LBL_PMSE_LABEL_ENABLE' => 'Etkinleştir',
  'LBL_PMSE_LABEL_EXPORT' => 'Dışarı Aktar',
  'LBL_PMSE_LABEL_LOCKED_FIELDS' => 'Kilitli Alanlar',
  'LBL_PMSE_LABEL_PROCESS_NAME' => 'Süreç İsmi',
  'LBL_PMSE_LABEL_RULE' => 'Kural',
  'LBL_PMSE_LABEL_TERMINATE_PROCESS' => 'Süreci Sona Erdir',
  'LBL_PMSE_MESSAGE_ACTIVITY_NAME_ALREADY_EXISTS' => 'İsim "%s" zaten şekil ailesinde var.',
  'LBL_PMSE_MESSAGE_ACTIVITY_NAME_EMPTY' => 'Aktivitenin ismi boş.',
  'LBL_PMSE_MESSAGE_CANCEL_CONFIRM' => 'Bazı ayarlar değişti. Değişiklikleri görmezden gelmek istiyor musunuz?',
  'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_INCOMING' => 'Aktivitenin bir içeri doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_ACTIVITY_OUTGOING' => 'Aktivitenin bir dışarı doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_ANNOTATION' => 'Yorum Metninin birleştirme çizgisi olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_BOUNDARY_EVENT_OUTGOING' => 'Sınırlama Etkinliğinin dışarı doğru bir akışının olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_END_EVENT_INCOMING' => 'Sonlandırma Etkinliğinin içeri doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_INCOMING' => 'Ağ Bağlantısının iki veya daha fazla içeri doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_CONVERGING_OUTGOING' => 'Ağ Bağlantısının dışarı doğru akışı olamaz',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_INCOMING' => 'Ağ Bağlantısının bir veya daha fazla içeri doğru akışı olabilir',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_DIVERGING_OUTGOING' => 'Ağ Bağlantısının iki veya daha fazla dışarı doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_INCOMING' => 'Ağ Bağlantısının iki veya daha fazla içeri doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_GATEWAY_MIXED_OUTGOING' => 'Ağ Bağlantısının iki veya daha fazla dışarı doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_INCOMING' => 'Ara Etkinliğin bir veya daha fazla içeri doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_INTERMEDIATE_EVENT_OUTGOING' => 'Ara Etkinliğin dışarı doğru bir akışının olması gerekir',
  'LBL_PMSE_MESSAGE_ERROR_START_EVENT_OUTGOING' => 'Başlangıç Etkinliğinin dışarı doğru akışı olması gerekir',
  'LBL_PMSE_MESSAGE_INVALID_CONNECTION' => 'Geçersiz bağlantı',
  'LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA' => 'Modül değişiyor ve kriter de yeni modül ile ilgili alanı olmadığı için silinecek.',
  'LBL_PMSE_MY_PROCESS_DEFINITIONS' => 'Süreç Tanımlarım',
  'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED' => 'Etkisiz',
  'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED' => 'Etkin',
  'LBL_PMSE_PROCESS_DEFINITION_EMPTY_WARNING' => 'Lütfen geçerli bir *.bpm dosyası seçin.',
  'LBL_PMSE_PROCESS_DEFINITION_IMPORT_SUCCESS' => 'Sisteme Süreç Tanımları başarıyla yüklendi.',
  'LBL_PMSE_PROCESS_DEFINITION_IMPORT_TEXT' => 'Dosya Sisteminden *.bpm dosyası yükleyip, otomatik olarak yeni Süreç Tanımları kaydı oluştur.',
  'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => 'Kaydet & Tasarla',
  'LBL_PMSE_UPDATERFIELD_VARIABLES_LIST_TITLE' => '%MODULE% alanları',
  'LBL_PRJ_MODULE' => 'Hedef Modül',
  'LBL_PRJ_STATUS' => 'Durum',
  'LNK_LIST' => 'Süreç Tanımlarını Gör',
);
