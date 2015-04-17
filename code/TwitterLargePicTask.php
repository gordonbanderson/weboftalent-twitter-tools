<?php
class TwitterLargePicTask extends BuildTask {

    protected $title = 'Extract larger images from tweets';

    protected $description = 'Scrape tweets for their pic.twitter.com URL, then large image from that';

    protected $enabled = true;

    function run($request) {
		$tweets = EmbeddedTweet::get()->filter('Processed', false);
		foreach ($tweets->getIterator() as $tweet) {
			echo 'Processing tweet '.$tweet->URL.'<br/>';
			$cmd = "/home/gordon/.rvm/rubies/ruby-1.9.3-p194/bin/ruby";
			$cmd .= "/home/gordon/work/git/weboftalent/jakayanrides/files/twitter/'.
						'scrape_large_url.rb ".$tweet->URL;
			echo $cmd;
			$largeurl = exec($cmd);
			echo 'LARGE URL:'.$largeurl;

			echo "<br/><br/>";
		}
    }
}
