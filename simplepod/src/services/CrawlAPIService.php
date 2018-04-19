<?php
/**
 * SimplePod plugin for Craft CMS 3.x
 *
 * Use the Simplecast API to populate entries
 *
 * @link      http://joebibby.com
 * @copyright Copyright (c) 2018 Joe Bibby
 */

namespace visualyeti\simplepod\services;

use visualyeti\simplepod\SimplePod;

use Craft;
use craft\base\Component;

/**
 * CrawlAPIService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Joe Bibby
 * @package   SimplePod
 * @since     0.1.0
 */
class CrawlAPIService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     SimplePod::$plugin->crawlAPIService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (SimplePod::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
