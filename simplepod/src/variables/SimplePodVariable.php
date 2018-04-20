<?php
/**
 * SimplePod plugin for Craft CMS 3.x
 *
 * Use the Simplecast API to populate entries
 *
 * @link      http://joebibby.com
 * @copyright Copyright (c) 2018 Joe Bibby
 */

namespace visualyeti\simplepod\variables;

use visualyeti\simplepod\SimplePod;

use Craft;

/**
 * SimplePod Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.simplePod }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Joe Bibby
 * @package   SimplePod
 * @since     0.1.0
 */
class SimplePodVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.simplePod.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.simplePod.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function episodeDetails($episodeId)
    {
		$episodeData = SimplePod::$plugin->crawlAPI->get_episode_data($episodeId);
        return $episodeData;
    }
    
    public function episodes()
    {
		$episodesData = SimplePod::$plugin->crawlAPI->get_episodes_data();
        return $episodesData;
    }
    


}
