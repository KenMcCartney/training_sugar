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
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit etre spécifié pour supprimer ce produit.',
  'LBL_ACCOUNT_ID' => 'Compte (ID) :',
  'LBL_ACCOUNT_NAME' => 'Nom du Compte :',
  'LBL_ASSET_NUMBER' => 'Autre N°:',
  'LBL_ASSIGNED_TO' => 'Assigné à',
  'LBL_ASSIGNED_TO_ID' => 'Assigné à (ID)',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
  'LBL_ASSIGNED_USER_ID' => 'Assigné à (ID) :',
  'LBL_ASSOCIATED_QUOTE' => 'Devis :',
  'LBL_BOOK_VALUE' => 'Prix réservé:',
  'LBL_BOOK_VALUE_DATE' => 'Date prix réservé:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Prix réservé (devise par défaut):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Montant calculé des lignes de revenu',
  'LBL_CAMPAIGN_ID' => 'Campagne (ID)',
  'LBL_CAMPAIGN_PRODUCT' => 'Campagne',
  'LBL_CATEGORY' => 'Catégorie :',
  'LBL_CATEGORY_NAME' => 'Catégorie :',
  'LBL_COMMIT_STAGE' => 'Etape de soumission',
  'LBL_COMMIT_STAGE_FORECAST' => 'Prévision',
  'LBL_CONTACT' => 'Contact',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_CONTACT_ID' => 'Contact (ID) :',
  'LBL_CONTACT_NAME' => 'Contact :',
  'LBL_CONTRACTS' => 'Contrats',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contrats',
  'LBL_CONVERT_INVALID_RLI' => 'Une ou plusieurs ligne de revenu que vous avez sélectionné ne peuvent être converties en devis :',
  'LBL_CONVERT_INVALID_RLI_ALREADYQUOTED_PLURAL' => 'Une ou plusieurs Lignes de revenu ont déjà fait l&#39;objet de devis.',
  'LBL_CONVERT_INVALID_RLI_PRODUCT' => 'La ligne de revenu doit contenir un produit issue du catalogue produit pour qu&#39;un devis puisse être généré.',
  'LBL_CONVERT_INVALID_RLI_PRODUCT_PLURAL' => 'Une ou plusieurs Lignes de revenu ne sont pas liées à un Produit du Catalogue Produit, ainsi le Devis ne peut être généré.',
  'LBL_CONVERT_TO_QUOTE' => 'Générer un devis',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Erreur :',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'Une erreur est survenue lors de la conversion de cette ligne de revenu en un devis',
  'LBL_CONVERT_TO_QUOTE_INFO' => 'Veuillez patienter',
  'LBL_CONVERT_TO_QUOTE_INFO_MESSAGE' => 'Générer un devis depuis la ligne de revenu',
  'LBL_COST_PRICE' => 'Prix de revient:',
  'LBL_COST_USDOLLAR' => 'Prix de revient (devise par défaut)',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_CURRENCY' => 'Devise :',
  'LBL_CURRENCY_ID' => 'Devise (ID) :',
  'LBL_CURRENCY_NAME' => 'Devise',
  'LBL_CURRENCY_RATE' => 'Taux de change',
  'LBL_CURRENCY_SYMBOL' => 'Symbole de la devise',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Symbole de la devise',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 des Lignes de revenu',
  'LBL_DATE_CLOSED' => 'Date de clôture attendue',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Timestamp date clôture attendue',
  'LBL_DATE_PURCHASED' => 'Acheté le :',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Expiration du support :',
  'LBL_DATE_SUPPORT_STARTS' => 'Démarrage du support :',
  'LBL_DEAL_TOT' => 'Remise:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lignes de revenu',
  'LBL_DESCRIPTION' => 'Description :',
  'LBL_DISCOUNT_AMOUNT' => 'Montant Remise',
  'LBL_DISCOUNT_AS_PERCENT' => 'Remise en %',
  'LBL_DISCOUNT_PRICE' => 'Prix Unitaire:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Date prix remisé',
  'LBL_DISCOUNT_RATE' => 'Taux de remise',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Taux de remise (devise par défaut)',
  'LBL_DISCOUNT_TOTAL' => 'Total Remise',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Remise (devise par défaut)',
  'LBL_DISCOUNT_USDOLLAR' => 'Prix unitaire (devise par défaut)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_EDITLAYOUT' => 'Editer la mise en page',
  'LBL_EXPERT_ID' => 'Expert produit',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigné à',
  'LBL_EXPORT_CURRENCY_ID' => 'Devise (ID)',
  'LBL_EXT_PRICE' => 'Prix Total',
  'LBL_FORECAST' => 'Inclus dans les prévisions',
  'LBL_HELP_CREATE' => 'Le module {{plural_module_name}} permet de gérer les différentes lignes de revenu incluses dans un enregistrement du module {{opportunities_singular_module}} et de gérer le cycle de vie associé à chacune d&#39;elles. Un enregistrement du module {{opportunities_singular_module}} permet de regrouper un ou plusieurs enregistrement du module {{module_name}}.

Pour créer un enregistrement du module {{module_name}}, les étapes suivantes sont nécessaires :
1. Remplir les champs désirés.
 - Les champs identifiés comme "Obligatoire" doivent être remplis avant de sauvegarder.
 - Cliquer sur "Voir plus" pour afficher plus de champs de qualification.
2. Cliquer sur "Sauvegarder" pour finaliser l&#39;enregistrement et retourner sur la page précédente.
 - Cliquer sur "Sauvegarder et Afficher" Pour ouvrer la nouvelle {{module_name}}.
 - Cliquer sur "Sauvegarder et Créer" pour créer immédiatement un autre enregistrement du module {{module_name}}.',
  'LBL_HELP_RECORD' => 'Le module {{plural_module_name}} permet de gérer les différentes lignes de revenu incluses dans un enregistrement du module {{opportunities_singular_module}} et de gérer le cycle de vie associé à chacune d&#39;elles. Un enregistrement du module {{opportunities_singular_module}} permet de regrouper un ou plusieurs enregistrement du module {{module_name}}.

- Editer chaque champs en cliquant directement sur le champ concerné ou en cliquant sur le bouton Editer.
- Voir ou modifier les liaisons avec les autres enregistrements via les sous-pannels.
- Voir et participer aux commentaire et au flux d&#39;activité via le module {{activitystream_singular_module}} en cliquant sur le bouton "Flux d’activité".
- Suivre ou mettre en favoris l&#39;enregistrement en utilisant les icônes prévues à cet effet à droite du nom de l&#39;enregistrement.
- Des actions complémentaires sont disponibles dans la listes déroulantes des actions à droite du bouton Editer.',
  'LBL_HELP_RECORDS' => 'Le module {{plural_module_name}} permet de gérer les différentes lignes de revenu incluses dans un enregistrement du module {{opportunities_singular_module}} et de gérer le cycle de vie associé à chacune d&#39;elles. Un enregistrement du module {{opportunities_singular_module}} permet de regrouper un ou plusieurs enregistrement du module {{module_name}}. Cela permet une meilleure granularité lorsque vos équipes travaillent sur un enregistrement du module {{opportunities_module}}. De plus le module {{forecasts_singular_module}} utilise directement ces éléments de manière unitaire et non les enregistrements englobant du module {{opportunities_singular_module}}. Etant donné que chaque enregistrement peut avoir sa propre probabilité et sa propre phase de vente, ceux-ci peuvent être inclus ou exclus pour chaque {{worksheet_module}} du module {{forecasts_singular_module}} de manière individuelle. Chaque module_name}} peuvent être en relation avec un produit du catalague. Cela permet de pré-remplir automatique les différents champs d&#39;un enregistrement du module  {{module_name}}.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LEAD_SOURCE' => 'Origine principale',
  'LBL_LIST_ACCOUNT_NAME' => 'Compte',
  'LBL_LIST_COMMIT_STAGE' => 'Etape de soumission',
  'LBL_LIST_CONTACT_NAME' => 'Contact',
  'LBL_LIST_COST_PRICE' => 'Prix de revient',
  'LBL_LIST_DATE_CLOSED' => 'Date de clôture',
  'LBL_LIST_DATE_PURCHASED' => 'Acheté le',
  'LBL_LIST_DISCOUNT_PRICE' => 'Prix remisé',
  'LBL_LIST_FORM_TITLE' => 'Lignes de revenu',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Num fab',
  'LBL_LIST_LIST_PRICE' => 'Prix Public',
  'LBL_LIST_MANUFACTURER' => 'Fabricant',
  'LBL_LIST_NAME' => 'Ligne de revenu',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Affaire',
  'LBL_LIST_PRICE' => 'Prix Public:',
  'LBL_LIST_PROBABILITY' => 'Probabilité',
  'LBL_LIST_PRODUCT_TEMPLATE' => 'Modèle de produit :',
  'LBL_LIST_QUANTITY' => 'Quantité',
  'LBL_LIST_QUOTE_NAME' => 'Devis',
  'LBL_LIST_SALES_STAGE' => 'Phase de vente',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Expire le',
  'LBL_LIST_USDOLLAR' => 'Prix Public (devise par défaut)',
  'LBL_MANUFACTURER' => 'Fabricant :',
  'LBL_MANUFACTURERS' => 'Fabricants',
  'LBL_MANUFACTURER_NAME' => 'Nom fabricant',
  'LBL_MEMBER_OF' => 'Membre de :',
  'LBL_MFT_PART_NUM' => 'N° série fabricant :',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Lignes de revenu',
  'LBL_MODULE_NAME_SINGULAR' => 'Ligne de revenu',
  'LBL_MODULE_TITLE' => 'Lignes de revenu : Accueil',
  'LBL_NAME' => 'Ligne de revenu',
  'LBL_NEW_FORM_TITLE' => 'Créer Ligne de revenu',
  'LBL_NEXT_STEP' => 'Prochaine étape :',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',
  'LBL_NOT_QUOTED' => 'Non devisé',
  'LBL_OPPORTUNITY' => 'Affaire',
  'LBL_OPPORTUNITY_ID' => 'Affaire (ID)',
  'LBL_PIPELINE_TOTAL_IS' => 'Total portefeuille',
  'LBL_PRICING_FACTOR' => 'Quotient:',
  'LBL_PRICING_FORMULA' => 'Formule de pricing:',
  'LBL_PROBABILITY' => 'Probabilité (%)',
  'LBL_PRODUCT' => 'Produit :',
  'LBL_PRODUCT_CATEGORIES' => 'Catégories de produit',
  'LBL_PRODUCT_TEMPLATE' => 'Modèle de produit :',
  'LBL_PRODUCT_TEMPLATES' => 'Produit',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Modèle Produit (ID) :',
  'LBL_PRODUCT_TYPE' => 'Type de produit:',
  'LBL_PRODUCT_TYPES' => 'Types de produit',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
  'LBL_QUANTITY' => 'Quantité :',
  'LBL_QUOTE' => 'Devis',
  'LBL_QUOTED' => 'Devis fait',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Devis',
  'LBL_QUOTE_ID' => 'Devis (ID) :',
  'LBL_QUOTE_NAME' => 'Devis :',
  'LBL_RELATED_PRODUCTS' => 'Ligne de revenu liée',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Produits revenu',
  'LBL_RLI_SUBPANEL_TITLE' => 'Lignes de revenu',
  'LBL_SALES_STAGE' => 'Phase de vente',
  'LBL_SALES_STATUS' => 'Statut des lignes de revenu',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher Lignes de revenu',
  'LBL_SELECT_DISCOUNT' => 'Remise en %',
  'LBL_SERIAL_NUMBER' => 'N° de série :',
  'LBL_STATUS' => 'Statut :',
  'LBL_SUPPORT_CONTACT' => 'Interlocuteur support :',
  'LBL_SUPPORT_DESCRIPTION' => 'Desc. support :',
  'LBL_SUPPORT_NAME' => 'Titre du support :',
  'LBL_SUPPORT_TERM' => 'Durée du support :',
  'LBL_TAX_CLASS' => 'Classe de taxe :',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Afficher le top 10 des Lignes de revenu dans un graphique à bulles.',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Mes Lignes de revenu',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Les Lignes de revenu de mon équipe',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'Montant total de la remise',
  'LBL_TYPE' => 'Type :',
  'LBL_URL' => 'URL Produit :',
  'LBL_VENDOR_PART_NUM' => 'N° série revendeur :',
  'LBL_WEBSITE' => 'Site Web',
  'LBL_WEIGHT' => 'Poids :',
  'LNK_IMPORT_REVENUELINEITEMS' => 'Importer des Lignes de revenu',
  'LNK_NEW_REVENUELINEITEM' => 'Créer Ligne de revenu',
  'LNK_REVENUELINEITEM_LIST' => 'Voir les lignes de revenu',
  'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
  'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce produit ?',
  'SAVE_RLI_QUOTE_NOTICE' => 'Cette ligne a déjà été convertie en un devis. Vos changements ne mettrons pas à jour le devis correspondant.',
  'WARNING_DELETED_RECORD_LIST_RECOMMIT_1' => 'Un ou plusieurs enregistrements sont inclus dans un',
  'WARNING_DELETED_RECORD_LIST_RECOMMIT_2' => 'Il seront supprimés et vous devrez soumettre à nouveau votre',
  'WARNING_DELETED_RECORD_RECOMMIT_1' => 'Cet enregistrement est lié à',
  'WARNING_DELETED_RECORD_RECOMMIT_2' => 'Il serra supprimé et vous devrez soumettre à nouveau votre',
  'WARNING_MERGE_RLIS_WITH_DIFFERENT_OPPORTUNITIES' => 'Un ou plusieurs enregistrement que vous avez sélectionné ne peuvent être fusionnés entre eux car ils sont rattachés à des affaires différentes',
);

