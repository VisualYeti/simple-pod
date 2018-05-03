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

use visualyeti\simplepod\Episode;

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
class Episode extends Model
{
    // Public Properties
    // =========================================================================
    public $id;
    public $number;
    public $podcast_id;
    public $guid;
    public $title;
    public $author;
    public $duration;
    public $explicit;
    public $published;
    public $description;
    public $long_description;
    public $published_at;
    public $audio_file_size;
    public $audio_url;
    public $sharing_url;
    public $images;
    public $sponsors;
    
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
            [['id', 'number', 'podcast_id', 'guid', 'title', 'passkey'], 'required'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
