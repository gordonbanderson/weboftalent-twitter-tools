#Twitter Utilities
This module provides the following functionality
* Embed tweets using a shortcode
* Optionally include a script to enlarge images in embedded tweets so that you can have them larger than Twitter's normal minimum width
* Twitter cards can be any type extending Page, provided an interface is implemented.

## Incorporate Twitter
One needs to incorporate the Twitter JavaScript into the page template.  There are 2 ways of doing this:
* Add <% Include TwitterScript %> which will render the JavaScript inline
* Include twitteruril.js, either through require_javascript or - note this also enlarges images in embedded tweets.

##Embedding Tweets
Tweets can be embedded into content using a shortcode like the following - the id parameter is the id of the tweet.

    [Tweet id='537136515445710848']

## Enlarging Embedded Images
A script is included that you can include in your theme (either using require_javascript or a direct script include in the template) called twitteruril.js - include this and larger (at source size, perhaps not theme size) embedded images will render on your site.

## Twitter Cards
In order for a page to render an title, description and image when included as a link in a tweet, it needs provide metadata known as a Twitter Card.  There are two steps to take in order to achieve this:

### Implement RenderableAsTwitterCard Interface
A  minimal example of a class implementing a Twitter card is shown below.

```
class PageWithImage extends Page implements RenderableAsTwitterCard {
  private static $db = array(
    'ImageAttribution' => 'Varchar(255)',
    'BriefIntroduction' => 'Text'
  );


  static $has_one = array(
    'MainImage' => 'Image'
  );


  // implement the twitter card interface
  public function getTwitterTitle() {
    return $this->Title;
  }

  public function getTwitterImage() {
    return $this->MainImage();
  }

  public function getTwitterDescription() {
    return $this->BriefIntroduction;
  }

}
```

### Template Changes
In your page template, add the following to inside <head></head> section of your page:

```
<% include TwitterSummaryCardLargeImage %>
```

This will check if the current page implements the RenderableAsTwitterCard interface.  If so it will produce the relevant metadata for Twitter to render a Twitter Card.


### Test With Card Validator
Test out your twitter card using the Card Validator, https://cards-dev.twitter.com/validator on a publicly accessible version of your site - this will highlight any issues.  It should also be noted that your site will probably need whitelisted.

## TODO
* ShortCode for follow button allowing content editors to add them inline.
* Allow different types of TwitterCard and make this configurable.