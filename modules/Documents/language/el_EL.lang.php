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
  'DEF_CREATE_LOG' => 'Δημιουργία Εγγράφου',
  'ERR_DELETE_CONFIRM' => 'Θέλετε να διαγράψετε αυτή την αναθεώρηση του εγγράφου;',
  'ERR_DELETE_LATEST_VERSION' => 'Δεν επιτρέπεται η διαγραφή της τελευταίας αναθεώρησης ενός Εγγράφου.',
  'ERR_DOC_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης',
  'ERR_DOC_EXP_DATE' => 'Ημερομηνία Λήξης',
  'ERR_DOC_NAME' => 'Όνομα Εγγράφου',
  'ERR_DOC_VERSION' => 'Έκδοση Εγγράφου',
  'ERR_FILENAME' => 'Όνομα Αρχείου',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Ο χρήστης επιχείρησε να εξασφαλίσει πρόσβαση σε άκυρη εξωτερική API ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ο έλεγχος σύνδεσης απέτυχε για το εξωτερικό API ({0})',
  'ERR_MISSING_FILE' => 'Στο έγγραφο αυτό λείπει ένα αρχείο, πιθανότατα οφείλεται σε λάθος κατά τη διάρκεια της αποστολής. Παρακαλώ δοκιμάστε ξανά τη λήψη του αρχείου ή επικοινωνήστε με τον διαχειριστή σας.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογαριασμοί',
  'LBL_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Σφάλματα',
  'LBL_CASES_SUBPANEL_TITLE' => 'Υποθέσεις',
  'LBL_CATEGORY' => 'Κατηγορία',
  'LBL_CATEGORY_VALUE' => 'Κατηγορία:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Ακαθόριστο',
  'LBL_CHANGE_LOG' => 'Αλλαγή Σύνδεσης:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
  'LBL_CONTRACTS' => 'Συμβάσεις',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Σχετικές Συμβάσεις',
  'LBL_CONTRACT_NAME' => 'Όνομα Επαφής:',
  'LBL_CONTRACT_STATUS' => 'Κατάσταση Σύμβασης:',
  'LBL_CREATED' => 'Δημιουργήθηκε από',
  'LBL_CREATED_BY' => 'Δημιουργήθηκε από',
  'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_DELETED' => 'Διαγράφηκε',
  'LBL_DESCRIPTION' => 'Περιγραφή',
  'LBL_DET_IS_TEMPLATE' => 'Πρότυπο; :',
  'LBL_DET_RELATED_DOCUMENT' => 'Σχετικό Έγγραφο:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Αναθεώρηση Σχετικών Εγγράφων:',
  'LBL_DET_TEMPLATE_TYPE' => 'Τύπος Εγγράφου:',
  'LBL_DOCUMENT' => 'Σχετικό Έγγραφο',
  'LBL_DOCUMENT_ID' => 'Ταυτότητα Εγγράφου',
  'LBL_DOCUMENT_INFORMATION' => 'Επισκόπηση',
  'LBL_DOCUMENT_NAME' => 'Όνομα Εγγράφου',
  'LBL_DOCUMENT_REVISION_ID' => 'Ταυτότητα Αναθεώρησης Εγγράφου',
  'LBL_DOC_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης:',
  'LBL_DOC_DESCRIPTION' => 'Περιγραφή:',
  'LBL_DOC_EXP_DATE' => 'Ημερομηνία Λήξης:',
  'LBL_DOC_ID' => 'Ταυτότητα Πηγής Εγγράφου',
  'LBL_DOC_NAME' => 'Όνομα Εγγράφου:',
  'LBL_DOC_REV_HEADER' => 'Αναθεωρήσεις Εγγράφων',
  'LBL_DOC_STATUS' => 'Κατάσταση:',
  'LBL_DOC_STATUS_ID' => 'Ταυτότητα Κατάστασης Εγγράφου:',
  'LBL_DOC_TYPE' => 'Πηγή',
  'LBL_DOC_TYPE_POPUP' => 'Επιλέξτε μια πηγή στην οποία το έγγραφο αυτό θα αναρτηθεί και από την οποία θα είναι διαθέσιμο.',
  'LBL_DOC_URL' => 'Πηγή Εγγράφου URL',
  'LBL_DOC_VERSION' => 'Αναθεώρηση:',
  'LBL_DOWNNLOAD_FILE' => 'Λήψη Αρχείου:',
  'LBL_EXPIRATION_DATE' => 'Ημερομηνία Λήξης',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Τα πρώτα 20 πιο πρόσφατα τροποποιημένα αρχεία εμφανίζονται κατά φθίνουσα σειρά στη λίστα που ακολουθεί. Χρησιμοποιήστε την "Αναζήτηση" για να βρείτε άλλα αρχεία.',
  'LBL_FILENAME' => 'Όνομα Αρχείου:',
  'LBL_FILE_EXTENSION' => 'Επέκταση Αρχείου',
  'LBL_FILE_UPLOAD' => 'Αρχείο:',
  'LBL_FILE_URL' => 'Αρχείο url',
  'LBL_HOMEPAGE_TITLE' => 'Έγγραφα Μου',
  'LBL_IS_TEMPLATE' => 'Ειναι Πρότυπο',
  'LBL_LASTEST_REVISION_NAME' => 'Όνομα τελευταίας αναθεώρησης:',
  'LBL_LAST_REV_CREATE_DATE' => 'Ημερομηνία Δημιουργίας Τελευταίας Αναθεώρησης',
  'LBL_LAST_REV_CREATOR' => 'Αναθεώρηση Δημιουργήθηκε Από:',
  'LBL_LAST_REV_DATE' => 'Ημερομηνία Αναθεώρησης:',
  'LBL_LAST_REV_MIME_TYPE' => 'Τύπος MIME τελευταίας αναθεώρησης',
  'LBL_LATEST_REVISION' => 'Τελευταία Αναθεώρηση',
  'LBL_LATEST_REVISION_ID' => 'Ταυτότητα τελευταίας αναθεώρησης',
  'LBL_LINKED_ID' => 'Συνδεμένη ταυτότητα',
  'LBL_LIST_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης',
  'LBL_LIST_CATEGORY' => 'Κατηγορία',
  'LBL_LIST_DOCUMENT' => 'Έγγραφο',
  'LBL_LIST_DOCUMENT_NAME' => 'Όνομα',
  'LBL_LIST_DOC_TYPE' => 'Πηγή',
  'LBL_LIST_DOWNLOAD' => 'Λήψη',
  'LBL_LIST_EXP_DATE' => 'Ημερομηνία Λήξης',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Όνομα Αρχείου',
  'LBL_LIST_FILENAME' => 'Αρχείο:',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Εγγράφων',
  'LBL_LIST_IS_TEMPLATE' => 'Πρότυπο;',
  'LBL_LIST_LAST_REV_CREATOR' => 'Δημοσιεύθηκε Από',
  'LBL_LIST_LAST_REV_DATE' => 'Ημερομηνία Αναθεώρησης',
  'LBL_LIST_LATEST_REVISION' => 'Τελευταία Αναθεώρηση',
  'LBL_LIST_REVISION' => 'Αναθεώρηση',
  'LBL_LIST_SELECTED_REVISION' => 'Επιλεγμένη Αναθεώρηση',
  'LBL_LIST_STATUS' => 'Κατάσταση',
  'LBL_LIST_SUBCATEGORY' => 'Υπό-Κατηγορία',
  'LBL_LIST_TEMPLATE_TYPE' => 'Τύπος Εγγράφου',
  'LBL_LIST_VIEW_DOCUMENT' => 'Προβολή',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Συγχώνευση Προτύπου Ταχυδρομείου:',
  'LBL_MIME' => 'Τύπος Mime',
  'LBL_MODIFIED' => 'Τροποποιήθηκε από Ταυτότητα',
  'LBL_MODIFIED_USER' => 'Τροποποιήθηκε από',
  'LBL_MODULE_NAME' => 'Έγγραφα',
  'LBL_MODULE_NAME_SINGULAR' => 'Έγγραφο',
  'LBL_MODULE_TITLE' => 'Έγγραφα: Αρχή',
  'LBL_NAME' => 'Όνομα',
  'LBL_NEW_FORM_TITLE' => 'Νέο Έγγραφο',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ευκαιρίες',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Προσφορές',
  'LBL_RELATED_DOCUMENT_ID' => 'Ταυτότητα Σχετικού Εγγράφου',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Ταυτότητα Αναθεώρησης Σχετικού Εγγράφου',
  'LBL_REVISION' => 'Αναθεώρηση',
  'LBL_REVISIONS' => 'Αναθεωρήσεις',
  'LBL_REVISIONS_PANEL' => 'Λεπτομέρειες Αναθεώρησης',
  'LBL_REVISIONS_SUBPANEL' => 'Αναθεωρήσεις',
  'LBL_REVISION_NAME' => 'Αριθμός Αναθεώρησης',
  'LBL_RLI_SUBPANEL_TITLE' => 'Γραμμή Στοιχείων Εσόδων',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Όνομα Αρχείου',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Εγγράφου',
  'LBL_SELECTED_REVISION_FILENAME' => 'Επιλεγμένο όνομα αρχείου αναθεώρησης',
  'LBL_SELECTED_REVISION_ID' => 'Επιλεγμένη ταυτότητα αναθεώρησης',
  'LBL_SELECTED_REVISION_NAME' => 'Επιλεγμένο όνομα αναθεώρησης:',
  'LBL_SF_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης:',
  'LBL_SF_CATEGORY' => 'Κατηγορία:',
  'LBL_SF_DOCUMENT' => 'Όνομα Εγγράφου:',
  'LBL_SF_EXP_DATE' => 'Ημερομηνία Λήξης:',
  'LBL_SF_SUBCATEGORY' => 'Υπό-Κατηγορία:',
  'LBL_STATUS' => 'Κατάσταση',
  'LBL_SUBCATEGORY' => 'Υπο-Κατηγορία',
  'LBL_SUBCATEGORY_VALUE' => 'Υπό-Κατηγορία:',
  'LBL_TEAM' => 'Ομάδα:',
  'LBL_TEMPLATE_TYPE' => 'Τύπος Εγγράφου',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Αναθεωρήσεις',
  'LBL_TREE_TITLE' => 'Έγγραφα',
  'LNK_DOCUMENT_LIST' => 'Προβολή Εγγράφων',
  'LNK_NEW_DOCUMENT' => 'Δημιουργία Εγγράφου',
  'LNK_NEW_MAIL_MERGE' => 'Συγχώνευση Ταχυδρομείου',
);
