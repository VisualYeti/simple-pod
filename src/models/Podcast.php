<?php
/**
 * SimplePod plugin for Craft CMS 3.x
 *
 * Use the Simplecast API to populate entries
 *
 * @link      http://joebibby.com
 * @copyright Copyright (c) 2018 Joe Bibby
 */

namespace visualyeti\simplepod\models;

use visualyeti\simplepod\Podcast;

use Craft;
use craft\base\Model;

/**
 * SimplePod Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Joe Bibby
 * @package   SimplePod
 * @since     0.1.0
 */
class Podcast extends Model
{
    // Public Properties
    // =========================================================================
    public $id;
    public $title;
    public $rss_url;
    public $description;
    public $author;
    public $copyright;
    public $keywords;
    public $subdomain;
    public $categories;
    public $itunes_url;
    public $language;
    public $website;
    public $twitter;
    public $explicit;
    public $images;
    
    /**
     * Some model attribute
     *
     * @var string
     */

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
