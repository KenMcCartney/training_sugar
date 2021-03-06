<?php
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
require_once 'include/Expressions/Expression/Numeric/NumericExpression.php';

/**
 * <b>rollupMin(Relate <i>link</i>, String <i>field</i>)</b><br>
 * Returns the lowest value of <i>field</i> in records related by <i>link</i><br/>
 * ex: <i>rollupMin($opportunities, "amount")</i> in Accounts would return the <br/>
 * lowest amount of any Opportunity related to this Account.
 */
class MinRelatedExpression extends NumericExpression
{
    /**
     * Returns the entire enumeration bare.
     */
    public function evaluate()
    {
        $params = $this->getParameters();
        //This should be of relate type, which means an array of SugarBean objects
        $linkField = $params[0]->evaluate();
        $relfield = $params[1]->evaluate();

        if (!is_array($linkField) || empty($linkField)) {
            return 0;
        }

        $ret = false;

        foreach ($linkField as $bean) {
            if (isset($bean->$relfield) && $ret === false || $ret > $bean->$relfield) {
                $ret = $bean->$relfield;
            }
        }

        return $ret;
    }

    /**
     * Returns the JS Equivalent of the evaluate function.
     */
    public static function getJSEvaluate()
    {
        return <<<EOQ
		    var params = this.getParameters();
			var linkField = params[0].evaluate();
			var relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "") {
                return this.context.getRelatedField(linkField, 'rollupMin', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
EOQ;
    }

    /**
     * Returns the operation name that this Expression should be
     * called by.
     */
    public static function getOperationName()
    {
        return array("rollupMin");
    }

    /**
     * The first parameter is a number and the second is the list.
     */
    public static function getParameterTypes()
    {
        return array(AbstractExpression::$RELATE_TYPE, AbstractExpression::$STRING_TYPE);
    }

    /**
     * Returns the maximum number of parameters needed.
     */
    public static function getParamCount()
    {
        return 2;
    }

    /**
     * Returns the String representation of this Expression.
     */
    public function toString()
    {
    }
}
