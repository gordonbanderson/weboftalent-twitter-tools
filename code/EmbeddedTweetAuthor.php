<?php

class EmbeddedTweetAuthor extends DataObject {
	private static $db = array(
		'URL' => 'Varchar(255)',
		'Name' => 'Varchar(255)'
	);

	private static $has_many = array(
		'Tweets' => 'EmbeddedTweet'
	);

}
/*
Array ( [cache_age] => 3153600000 [url] => https://twitter.com/qandrew/statuses/469515779415625729
[height] => [provider_url] => https://twitter.com [provider_name] => Twitter
[author_name] => Andrew Clark
[version] => 1.0
[author_url] => https://twitter.com/qandrew [type] => rich [html] =>
*/
