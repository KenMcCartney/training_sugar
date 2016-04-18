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
({extendsFrom:app.view.AlertView,className:'alert-wrapper',plugins:['Tooltip'],events:{'click [data-action=cancel]':'cancelClicked','click [data-action=confirm]':'confirmClicked','click [data-action=close]':'closeClicked','click a':'linkClick'},LEVEL:{PROCESS:'process',SUCCESS:'success',WARNING:'warning',INFO:'info',ERROR:'error',CONFIRMATION:'confirmation'},initialize:function(options){app.plugins.attach(this,'view');options||(options={});options.confirm||(options.confirm={});options.cancel||(options.cancel={});this.onConfirm=options.onConfirm||options.confirm.callback;this.confirmLabel=options.confirm.label||'LBL_CONFIRM_BUTTON_LABEL';this.onCancel=options.onCancel||options.cancel.callback;this.cancelLabel=options.cancel.label||'LBL_CANCEL_BUTTON_LABEL';this.onLinkClick=options.onLinkClick;this.onClose=options.onClose;this.templateOptions=options.templateOptions;this.name='alert';},render:function(options){if(!this.triggerBefore('render')){return false;}
if(_.isUndefined(options)){return this;}
var template=this.getAlertTemplate(options.level,options.messages,options.title,this.templateOptions);this.$el.html(template);if(options.level==='confirmation'){this.bindCancelAndReturn();}
this.trigger('render');},cancel:function(){this.trigger('dismiss');app.alert.dismiss(this.key);},cancelClicked:function(){this.cancel();app.events.trigger('alert:cancel:clicked');if(_.isFunction(this.onCancel)){this.onCancel();}},confirmClicked:function(){this.cancel();app.events.trigger('alert:confirm:clicked');if(_.isFunction(this.onConfirm)){this.onConfirm();}},linkClick:function(event){if(_.isFunction(this.onLinkClick)){this.onLinkClick(event);}},closeClicked:function(event){if(_.isFunction(this.onClose)){this.onClose();}
app.alert.dismiss(this.key);},getAlertTemplate:function(level,messages,title,templateOptions){var template,alertClasses=this.getAlertClasses(level);title=title?title:this.getDefaultTitle(level);switch(level){case this.LEVEL.PROCESS:title=title.substr(-3)==='...'?title.substr(0,title.length-3):title;template=app.template.getView(this.name+'.process');break;case this.LEVEL.SUCCESS:case this.LEVEL.WARNING:case this.LEVEL.INFO:case this.LEVEL.ERROR:template=app.template.getView(this.name+'.error');break;case this.LEVEL.CONFIRMATION:template=app.template.getView(this.name+'.confirmation');break;default:template=app.template.empty;}
var seed=_.extend({},{alertClass:alertClasses,title:this.getTranslatedLabels(title),messages:this.getTranslatedLabels(messages),alert:this},templateOptions);return template(seed);},getAlertClasses:function(level){switch(level){case this.LEVEL.PROCESS:return'alert-process';case this.LEVEL.SUCCESS:return'alert-success';case this.LEVEL.WARNING:return'alert-warning';case this.LEVEL.INFO:return'alert-info';case this.LEVEL.ERROR:return'alert-danger';case this.LEVEL.CONFIRMATION:return'alert-warning';default:return'';}},getDefaultTitle:function(level){switch(level){case this.LEVEL.PROCESS:return'LBL_ALERT_TITLE_LOADING';case this.LEVEL.SUCCESS:return'LBL_ALERT_TITLE_SUCCESS';case this.LEVEL.WARNING:return'LBL_ALERT_TITLE_WARNING';case this.LEVEL.INFO:return'LBL_ALERT_TITLE_NOTICE';case this.LEVEL.ERROR:return'LBL_ALERT_TITLE_ERROR';case this.LEVEL.CONFIRMATION:return'LBL_ALERT_TITLE_WARNING';default:return'';}},getTranslatedLabels:function(stringOrArray){var result;if(_.isArray(stringOrArray)){result=_.map(stringOrArray,function(text){return new Handlebars.SafeString(app.lang.get(text));});}else{result=new Handlebars.SafeString(app.lang.get(stringOrArray));}
return result;},close:function(){this.unbindCancelAndReturn();this.$el.next('br').remove();this._super('close');},bindCancelAndReturn:function(){app.shortcuts.saveSession();app.shortcuts.createSession(['Alert:Confirm','Alert:Cancel'],this);app.shortcuts.register('Alert:Confirm',['enter'],function(){this.$('[data-action=confirm]').click();},this);app.shortcuts.register('Alert:Cancel',['esc'],function(){this.$('[data-action=cancel]').click();},this);},unbindCancelAndReturn:function(){if(this.level==='confirmation'){app.shortcuts.restoreSession();}},bindDataChange:function(){}})