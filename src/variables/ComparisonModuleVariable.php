<?php
/**
 * Comparison module for Craft CMS 3.x
 *
 * ZZV Comparison Module
 *
 * @link      asmith.com
 * @copyright Copyright (c) 2018 Austin Smith
 */

namespace modules\comparisonmodule\variables;

use modules\comparisonmodule\ComparisonModule;

use Craft;

/**
 * Comparison Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.comparisonModule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Austin Smith
 * @package   ComparisonModule
 * @since     1.0.0
 */
class ComparisonModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.comparisonModule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.comparisonModule.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
