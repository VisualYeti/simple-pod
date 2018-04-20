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
	protected $allowAnonymous = ['crawlAPI'];

	private $scApiRoot;
	private $scPodcasts;
	private $scEpisodes;
	private $scPlayer;
	private $scApiKey;
	private $scApiStr;
	private $podcastId;
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
     
    public function init()
    {
	    $this->scApiRoot = 'https://api.simplecast.com/v1';
		$this->scPodcasts = '/podcasts.json';
		$this->scEpisodes = '/episodes.json';
// 		$this->scPlayer = '/embed.json';
		$this->scApiStr = '?api_key=' . SimplePod::getInstance()->getSettings()->apiKey;
		$this->podcastId = $this->get_podcast_id();
	}
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (SimplePod::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
    
	private function get_data($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		// print $data;
		curl_close($ch);
		return json_decode($data);
	}
	
	public function get_podcast_id(): string {
		$podcastsUrl = $this->scApiRoot . $this->scPodcasts . $this->scApiStr;
		$podcastsData = $this->get_data($podcastsUrl);
		return $podcastsData[0]->{"id"};
	}
    
    public function get_episodes_data(): array {
		$episodesUrl = $this->scApiRoot . '/podcasts/' . $this->podcastId . $this->scEpisodes . $this->scApiStr;
		$episodesData = $this->get_data($episodesUrl);
		return $episodesData;
	}
	
	public function get_episode_data($episodeId): object {
		$episodeUrl = $this->scApiRoot . '/podcasts/' . $this->podcastId . '/episodes/' . $episodeId . $this->scApiStr;
		$episodeData = $this->get_data($episodeUrl);
		return $episodeData;
	}
}
