<?php
/**
 * Comparison module for Craft CMS 3.x
 *
 * ZZV Comparison Module
 *
 * @link      asmith.com
 * @copyright Copyright (c) 2018 Austin Smith
 */

namespace modules\comparisonmodule\services;

use modules\comparisonmodule\ComparisonModule;

use Craft;
use craft\base\Component;

/**
 * ComparisonModuleService Service
 *
 * All of your module’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other modules can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Austin Smith
 * @package   ComparisonModule
 * @since     1.0.0
 */
class ComparisonModuleService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin/module file, call it like this:
     *
     *     ComparisonModule::$instance->comparisonModuleService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
