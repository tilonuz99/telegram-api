<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types\Inline;

use unreal4u\TelegramAPI\Abstracts\TelegramTypes;
use unreal4u\TelegramAPI\Telegram\Types\Location;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some
 * default or trending results.
 *
 * Objects defined as-is january 2016
 *
 * @see https://core.telegram.org/bots/api#inlinequery
 */
class Query extends TelegramTypes
{
    /**
     * Unique identifier for this query
     * @var string
     */
    public $id = '';

    /**
     * User‘s or bot’s first name
     * @var string
     */
    public $from = null;

    /**
     * Optional. Sender location, only for bots that request user location
     * @var Location
     */
    public $location = null;

    /**
     * Text of the query
     * @var string
     */
    public $query = '';

    /**
     * Offset of the results to be returned, can be controlled by the bot
     * @var string
     */
    public $offset = '';

    protected function mapSubObjects(): array
    {
        return [
            'from' => 'User',
            'location' => 'Location',
        ];
    }
}
