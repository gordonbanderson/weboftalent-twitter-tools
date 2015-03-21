<?php

class TwitterShortCodeHandler {

	public static function parse_tweet( $arguments, $caption = null, $parser = null ) {
		if(!isset($arguments['id'])){
			return null;
		}
		if(substr($arguments['id'], 0, 4) == 'http'){
			$id = explode('/status/', $arguments['id']);
			$id = $id[1];
		}
		else{
			$id = $arguments['id'];
		}

		$tweet = EmbeddedTweet::get()->filter('TwitterID',$id)->first();
		if (!$tweet) {
			$data = json_decode(file_get_contents(
				'https://api.twitter.com/1/statuses/oembed.json?align=center&id='.$id.'&omit_script=true'),
			1);
			$tweet = new EmbeddedTweet();
			$tweet->URL = $data['url'];
			$tweet->TwitterID = $id;
			$tweet->HTML = $data['html'];

			$author = EmbeddedTweetAuthor::get()->filter('Name', $data['author_name'])->first();
			if (!$author) {
				$author = new EmbeddedTweetAuthor();
				$author->Name = $data['author_name'];
				$author->URL = $data['author_url'];
				$author->write();
			}

			$tweet->Author = $author;
			$tweet->write();

		}

		return $tweet->HTML;
	}
}
