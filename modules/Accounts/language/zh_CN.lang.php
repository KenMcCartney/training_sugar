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
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => '您确定要从此项目中移除这个账户吗？',
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户。',
  'LBL_ACCOUNT' => '账户：',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
  'LBL_ACCOUNT_INFORMATION' => '账户概述',
  'LBL_ACCOUNT_NAME' => '账户名称：',
  'LBL_ACCOUNT_TYPE' => '账户类型',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_ADDRESS_INFORMATION' => '地址信息',
  'LBL_ANNUAL_REVENUE' => '年营业额：',
  'LBL_ANY_ADDRESS' => '任意地址：',
  'LBL_ANY_EMAIL' => '任意邮件：',
  'LBL_ANY_PHONE' => '任意电话：',
  'LBL_ASSIGNED_TO_ID' => '负责人ID：',
  'LBL_ASSIGNED_TO_NAME' => '负责人：',
  'LBL_ASSIGNED_USER_NAME' => '负责人：',
  'LBL_BILLING_ADDRESS' => '账单地址：',
  'LBL_BILLING_ADDRESS_CITY' => '账单城市：',
  'LBL_BILLING_ADDRESS_COUNTRY' => '账单国家：',
  'LBL_BILLING_ADDRESS_POSTALCODE' => '账单邮编：',
  'LBL_BILLING_ADDRESS_STATE' => '账单省：',
  'LBL_BILLING_ADDRESS_STREET' => '账单地址：',
  'LBL_BILLING_ADDRESS_STREET_2' => '账单地址 2',
  'LBL_BILLING_ADDRESS_STREET_3' => '账单地址 3',
  'LBL_BILLING_ADDRESS_STREET_4' => '账单地址 4',
  'LBL_BUGS_SUBPANEL_TITLE' => '缺陷',
  'LBL_BUG_FORM_TITLE' => '账户',
  'LBL_CALLS_SUBPANEL_TITLE' => '电话',
  'LBL_CAMPAIGNS' => '市场活动',
  'LBL_CAMPAIGN_ID' => '商业机会编号',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '市场活动日志',
  'LBL_CASES_SUBPANEL_TITLE' => '案件',
  'LBL_CHARTS' => '图表',
  'LBL_CITY' => '城市：',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '相关联系人&#39;电邮',
  'LBL_CONTRACTS' => '合同',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => '合同',
  'LBL_COPY' => '复制',
  'LBL_COUNTRY' => '国家：',
  'LBL_CREATED_ID' => '创建人ID：',
  'LBL_DATE_ENTERED' => '创建日期：',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_DEFAULT' => '视图',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '账户',
  'LBL_DESCRIPTION' => '描述：',
  'LBL_DESCRIPTION_INFORMATION' => '描述信息',
  'LBL_DNB_BAL_PREVIEW' => '客户预览',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',
  'LBL_DUNS_NUM' => 'DUNS:',
  'LBL_DUPLICATE' => '可能有重复账户',
  'LBL_EMAIL' => '电子邮件地址：',
  'LBL_EMAIL_ADDRESSES' => '邮件地址',
  'LBL_EMAIL_OPT_OUT' => '退出邮件列表：',
  'LBL_EMPLOYEES' => '员工：',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人用户名',
  'LBL_FAX' => '传真：',
  'LBL_FILENAME' => '附件：',
  'LBL_FILTER_ACCOUNTS_REPORTS' => '客户报表',
  'LBL_HELP_CREATE' => '{{module_name}}模块由不符合成为潜在客户条件的个人组成，这些记录都有部分信息，但还未满足成为{{leads_singular_module}}的条件。

要创建{{module_name}}：
1. 按需要提供字段的值。
 - 标记"必须"的字段必须在保存前填写完毕。
 - 若有必要，单击"显示更多"显示额外字段。
2. 单击"保存"完成新记录并返回上一页。
 - 选择"保存并查看"以便在记录视图内打开新{{module_name}}。
 - 选择"保存并新增"以便立即另一新{{module_name}}。',
  'LBL_HELP_RECORD' => '{{module_name}}模块由不符合成为潜在客户条件的个人组成，这些记录都有部分信息，但还未满足成为{{leads_singular_module}}的条件。

- 点击单个字段或编辑按钮来进行字段编辑。
- 切换底部左侧窗格至“数据视图”来查看或编辑子面板中的其他记录。
- 切换底部左侧窗格至“活动流”在{{activitystream_singular_module}}中查看或新建用户评论，记录修改历史。
- 使用记录名称右侧的图标来关注或标记此记录
- 编辑按钮右侧的操作下拉菜单中可进行其他操作。',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} 模块由与你的组织有关的公司组成，并且一般会作为中心来管理和分析你与每个客户业务上的互动。你有多种方法在Sugar中创建{{plural_module_name}}，例如通过{{plural_module_name}}模块，复制，导入{{plural_module_name}}，等等。一旦创建{{module_name}}记录，你可以通过{{plural_module_name}}的记录查看和编辑{{module_name}}的相关信息。每条{{module_name}}记录之后都可能会关联到其他Sugar记录，例如{{contacts_module}}，{{meetings_module}}，{{cases_module}}，{{opportunities_module}}，和许多其他成熟的客户关系。',
  'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
  'LBL_HOMEPAGE_TITLE' => '我的客户',
  'LBL_INDUSTRY' => '行业：',
  'LBL_INVALID_EMAIL' => '有效邮件：',
  'LBL_INVITEE' => '联系人',
  'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
  'LBL_LIST_ACCOUNT_NAME' => '账户名称',
  'LBL_LIST_CITY' => '城市',
  'LBL_LIST_CONTACT_NAME' => '联系人姓名',
  'LBL_LIST_EMAIL_ADDRESS' => '邮件地址',
  'LBL_LIST_FORM_TITLE' => '客户列表',
  'LBL_LIST_PHONE' => '电话',
  'LBL_LIST_STATE' => '省',
  'LBL_LIST_WEBSITE' => '网站',
  'LBL_MEETINGS_SUBPANEL_TITLE' => '会议',
  'LBL_MEMBER_OF' => '父级组织：',
  'LBL_MEMBER_ORG_FORM_TITLE' => '子公司',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子公司',
  'LBL_MISC' => '杂项',
  'LBL_MODIFIED_ID' => '修改人ID',
  'LBL_MODULE_ID' => '客户',
  'LBL_MODULE_NAME' => '客户',
  'LBL_MODULE_NAME_SINGULAR' => '客户',
  'LBL_MODULE_TITLE' => '客户：主页',
  'LBL_NAME' => '名称：',
  'LBL_NEW_FORM_TITLE' => '新账户',
  'LBL_NOTES_SUBPANEL_TITLE' => '记录',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
  'LBL_OTHER_EMAIL_ADDRESS' => '其他邮件地址：',
  'LBL_OTHER_PHONE' => '其他电话：',
  'LBL_OWNERSHIP' => '所有者：',
  'LBL_PARENT_ACCOUNT_ID' => '父账户ID',
  'LBL_PARENT_ID' => '父ID',
  'LBL_PHONE' => '电话：',
  'LBL_PHONE_ALT' => '备用电话：',
  'LBL_PHONE_ALTERNATE' => '替代电话',
  'LBL_PHONE_FAX' => '传真：',
  'LBL_PHONE_OFFICE' => '办公室电话：',
  'LBL_POSTAL_CODE' => '邮编：',
  'LBL_PRODUCTS_TITLE' => '产品',
  'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
  'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
  'LBL_PROSPECT_LIST' => '目标列表',
  'LBL_PUSH_BILLING' => '推送账单',
  'LBL_PUSH_CONTACTS_BUTTON_LABEL' => '复制至联系人',
  'LBL_PUSH_CONTACTS_BUTTON_TITLE' => '复制...',
  'LBL_PUSH_SHIPPING' => '推送货运',
  'LBL_QUOTES_SUBPANEL_TITLE' => '报价',
  'LBL_RATING' => '评分：',
  'LBL_REVENUELINEITEMS' => '收入线项目',
  'LBL_RLI_SUBPANEL_TITLE' => '收入线项目',
  'LBL_SAVE_ACCOUNT' => '保存账户',
  'LBL_SEARCH_FORM_TITLE' => '客户搜索',
  'LBL_SHIPPING_ADDRESS' => '货运地址：',
  'LBL_SHIPPING_ADDRESS_CITY' => '货运城市：',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => '货运国家：',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => '货运邮编：',
  'LBL_SHIPPING_ADDRESS_STATE' => '货运省份：',
  'LBL_SHIPPING_ADDRESS_STREET' => '货运街道：',
  'LBL_SHIPPING_ADDRESS_STREET_2' => '货运街道 2',
  'LBL_SHIPPING_ADDRESS_STREET_3' => '货运街道 3',
  'LBL_SHIPPING_ADDRESS_STREET_4' => '货运街道 4',
  'LBL_SIC_CODE' => 'SIC代码：',
  'LBL_STATE' => '省：',
  'LBL_TASKS_SUBPANEL_TITLE' => '任务',
  'LBL_TEAMS_LINK' => '团队',
  'LBL_TICKER_SYMBOL' => '股票代码:',
  'LBL_TYPE' => '类型：',
  'LBL_USERS_ASSIGNED_LINK' => '负责人',
  'LBL_USERS_CREATED_LINK' => '创建人',
  'LBL_USERS_MODIFIED_LINK' => '修改人',
  'LBL_UTILS' => '工具',
  'LBL_VIEW_FORM_TITLE' => '客户视图',
  'LBL_WEBSITE' => '网站：',
  'LNK_ACCOUNT_LIST' => '查看客户',
  'LNK_ACCOUNT_REPORTS' => '客户报表',
  'LNK_CREATE' => '创建公司',
  'LNK_IMPORT_ACCOUNTS' => '导入客户',
  'LNK_NEW_ACCOUNT' => '创建客户',
  'MSG_DUPLICATE' => '您正要创建的这个客户也许存在重复记录。下面列举出了包含类似名称的客户。<br>点击创建客户来继续创建新的客户，或选择一个下面已经存在的客户。',
  'MSG_SHOW_DUPLICATES' => '您正要创建的这个客户也许存在重复记录。下面列举出了包含类似名称的客户。<br>点击保存来创建这个客户，或点击取消来返回之前的模块。',
  'NTC_COPY_BILLING_ADDRESS' => '复制账单地址至货运地址',
  'NTC_COPY_BILLING_ADDRESS2' => '复制至货运地址',
  'NTC_COPY_SHIPPING_ADDRESS' => '复制货运地址至账单地址',
  'NTC_COPY_SHIPPING_ADDRESS2' => '复制至账单地址',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录吗？',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '您确定要移除这条记录吗？',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => '您确定要删除这条子公司记录吗？',
);

