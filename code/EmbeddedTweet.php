<?php

namespace WebOfTalent\TwitterTools;

use SilverStripe\ORM\DataObject;

class EmbeddedTweet extends DataObject
{
    private static $table_name = 'EmbeddedTweet';

    private static $db = array(
        'cache_age' => 'Int',
        'URL' => 'Varchar(255)',
        'TwitterID' => 'Varchar(40)',
        'HTML' => 'Text',
        'Processed' => 'Boolean',
        'LargeURL' => 'Varchar(255)'
    );

    private static $belongs_to = array('Author' => 'EmbeddedTweetAuthor');

    private static $indexes = array(
        'TwitterID' => true
    );
}
