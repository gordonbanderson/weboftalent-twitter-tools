<?php
namespace WebOfTalent\TwitterTools;

use SilverStripe\View\ArrayData;
use SilverStripe\View\Parsers\ShortcodeHandler;
use SilverStripe\View\SSViewer;

class TwitterShortCodeHandler implements ShortcodeHandler
{

    /**
     * Gets the list of shortcodes provided by this handler
     *
     * @return mixed
     */
    public static function get_shortcodes()
    {
        return ['tweet'];
    }


    /**
     *
     * @param array $arguments
     * @param string $content
     * @param ShortcodeParser $parser
     * @param string $shortcode
     * @param array $extra
     *
     * @return string
     */
    public static function handle_shortcode($arguments, $content, $parser, $shortcode, $extra = array())
    {
        if (empty($arguments['id'])) {
            return;
        }

        if (!empty($caption)) {
            $arguments['Caption'] = $caption;
        }

        $customise = array();
        $customise['TweetID'] = $arguments['id'];

        //overide the defaults with the arguments supplied
        $customise = array_merge($customise, $arguments);

        $template = new SSViewer('RenderTweet');

        //return the customised template
        return $template->process(new ArrayData($customise));
        /*
        if (!isset($arguments['id'])) {
            return null;
        }
        if (substr($arguments['id'], 0, 4) == 'http') {
            $id = explode('/status/', $arguments['id']);
            $id = $id[1];
        } else {
            $id = $arguments['id'];
        }

        $tweet = EmbeddedTweet::get()->filter('TwitterID', $id)->first();
        if (!$tweet) {
            $data = json_decode(file_get_contents('https://api.twitter.com/1/statuses/oembed.json?align=center&id='.$id.'&omit_script=true'), 1);
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
        } else {
            return 'No embedded tweet to return';
        }


        return $tweet->HTML;
        */
    }
}
