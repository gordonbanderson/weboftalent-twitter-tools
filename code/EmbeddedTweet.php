<?php 
class EmbeddedTweet extends DataObject {
	private static $db = array(
		'cache_age' => 'Int',
		'URL' => 'Varchar(255)',
		'TwitterID' => 'VarChar(40)',
		'HTML' => 'Text',
		'Processed' => 'Boolean',
		'LargeURL' => 'Varchar(255)'
	);

	private static $belongs_to = array('EmbeddedTweetAuthor');

	public static $indexes = array(
        // Just smack a btree index on Email
        'TwitterID' => true
    );
}
/*
Array ( [cache_age] => 3153600000 [url] => https://twitter.com/qandrew/statuses/469515779415625729 
[height] => [provider_url] => https://twitter.com [provider_name] => Twitter 
[author_name] => Andrew Clark 
[version] => 1.0 
[author_url] => https://twitter.com/qandrew [type] => rich [html] =>
*/