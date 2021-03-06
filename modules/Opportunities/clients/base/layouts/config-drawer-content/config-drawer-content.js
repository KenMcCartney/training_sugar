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
({extendsFrom:'ConfigDrawerContentLayout',viewOppsByTitle:undefined,viewOppsByOppsTpl:undefined,viewOppsByRLIsTpl:undefined,_initHowTo:function(){this.viewOppsByTitle=app.lang.get('LBL_OPPS_CONFIG_VIEW_BY_LABEL','Opportunities');var helpUrl={more_info_url:'<a href="'+app.help.getMoreInfoHelpURL('config','OpportunitiesConfig')
+'" target="_blank">',more_info_url_close:'</a>'},viewOppsByOppsObj=app.help.get('Opportunities','config_opps',helpUrl),viewOppsByRLIsObj=app.help.get('Opportunities','config_rlis',helpUrl);this.viewOppsByOppsTpl=app.template.getView('help-dashlet')(viewOppsByOppsObj);this.viewOppsByRLIsTpl=app.template.getView('help-dashlet')(viewOppsByRLIsObj);},bindDataChange:function(){this._super('bindDataChange');this.model.on('change:opps_view_by',function(model,oppsViewBy){this.changeHowToData(this.viewOppsByTitle,this._getText(oppsViewBy));},this);},_switchHowToData:function(helpId){switch(helpId){case'config-opps-view-by':this.currentHowToData.title=this.viewOppsByTitle;this.currentHowToData.text=this._getText(this.model.get('opps_view_by'));}
this._super('_switchHowToData');},_getText:function(oppsViewBy){return(oppsViewBy==='Opportunities')?this.viewOppsByOppsTpl:this.viewOppsByRLIsTpl;}})