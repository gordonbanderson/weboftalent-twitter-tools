<?php

use SilverStripe\ORM\DataObject;
class EmbeddedTweet extends DataObject {
	private static $db = array(
		'cache_age' => 'Int',
		'URL' => 'Varchar(255)',
		'TwitterID' => 'VarChar(40)',
		'HTML' => 'Text',
		'Processed' => 'Boolean',
		'LargeURL' => 'Varchar(255)'
	);

	private static $belongs_to = array('Author' => 'EmbeddedTweetAuthor');

	public static $indexes = array(
        // Just smack a btree index on Email
        'TwitterID' => true
    );
}
