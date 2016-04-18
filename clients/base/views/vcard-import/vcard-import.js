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
({initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.context.on('vcard:import:finish',this.importVCard,this);this.on('render',this._setFileField,this);},_setFileField:function(){var field=this.getField('vcard_import');field.setMode('edit');},importVCard:function(){var vcardFieldName='vcard_import',$vcardFile=this.$('[name=vcard_import]');if(_.isEmpty($vcardFile.val())){app.alert.show('error_validation_vcard',{level:'error',messages:'LBL_EMPTY_VCARD'});}else{var ajaxParams={temp:false,deleteIfFails:false},fields={},field=this.getField(vcardFieldName);fields[vcardFieldName]=field.def;this.model.uploadFile(vcardFieldName,$vcardFile,{success:_.bind(this._doValidateFileSuccess,this),error:_.bind(this._doValidateFileError,this)},ajaxParams);}},_doValidateFileSuccess:function(data){var route=app.router.buildRoute(this.module,data.vcard_import);app.router.navigate(route,{trigger:true});app.alert.show('vcard-import-saved',{level:'success',messages:app.lang.get('LBL_IMPORT_VCARD_SUCCESS',this.module),autoClose:true});},_doValidateFileError:function(error){app.alert.show('error_validation_vcard',{level:'error',messages:app.lang.get('TPL_IMPORT_VCARD_FAILURE',this.module,{module:this.module})});}})