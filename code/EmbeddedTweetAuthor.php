<?php
namespace WebOfTalent\TwitterTools;

use SilverStripe\ORM\DataObject;

class EmbeddedTweetAuthor extends DataObject
{
    private static $db = array(
        'URL' => 'Varchar(255)',
        'Name' => 'Varchar(255)'
    );

    private static $has_many = array(
        'Tweets' => 'EmbeddedTweet'
    );
}
