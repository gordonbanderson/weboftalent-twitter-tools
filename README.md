#Twitter Utilities
[![Build Status](https://travis-ci.org/gordonbanderson/silverstripe-sluggable.svg?branch=master)](https://travis-ci.org/gordonbanderson/silverstripe-sluggable)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-sluggable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-sluggable/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-sluggable/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-sluggable/build-status/master)
[![CircleCI](https://circleci.com/gh/gordonbanderson/silverstripe-sluggable.svg?style=svg)](https://circleci.com/gh/gordonbanderson/silverstripe-sluggable)

[![codecov.io](https://codecov.io/github/gordonbanderson/silverstripe-sluggable/coverage.svg?branch=master)](https://codecov.io/github/gordonbanderson/silverstripe-sluggable?branch=master)


[![Latest Stable Version](https://poser.pugx.org/suilven/sluggable/version)](https://packagist.org/packages/suilven/sluggable)
[![Latest Unstable Version](https://poser.pugx.org/suilven/sluggable/v/unstable)](//packagist.org/packages/suilven/sluggable)
[![Total Downloads](https://poser.pugx.org/suilven/sluggable/downloads)](https://packagist.org/packages/suilven/sluggable)
[![License](https://poser.pugx.org/suilven/sluggable/license)](https://packagist.org/packages/suilven/sluggable)
[![Monthly Downloads](https://poser.pugx.org/suilven/sluggable/d/monthly)](https://packagist.org/packages/suilven/sluggable)
[![Daily Downloads](https://poser.pugx.org/suilven/sluggable/d/daily)](https://packagist.org/packages/suilven/sluggable)
[![composer.lock](https://poser.pugx.org/suilven/sluggable/composerlock)](https://packagist.org/packages/suilven/sluggable)

[![GitHub Code Size](https://img.shields.io/github/languages/code-size/gordonbanderson/silverstripe-sluggable)](https://github.com/gordonbanderson/silverstripe-sluggable)
[![GitHub Repo Size](https://img.shields.io/github/repo-size/gordonbanderson/silverstripe-sluggable)](https://github.com/gordonbanderson/silverstripe-sluggable)
[![GitHub Last Commit](https://img.shields.io/github/last-commit/gordonbanderson/silverstripe-sluggable)](https://github.com/gordonbanderson/silverstripe-sluggable)
[![GitHub Activity](https://img.shields.io/github/commit-activity/m/gordonbanderson/silverstripe-sluggable)](https://github.com/gordonbanderson/silverstripe-sluggable)
[![GitHub Issues](https://img.shields.io/github/issues/gordonbanderson/silverstripe-sluggable)](https://github.com/gordonbanderson/silverstripe-sluggable/issues)

![codecov.io](https://codecov.io/github/gordonbanderson/silverstripe-sluggable/branch.svg?branch=master)




OLD



[![Build Status](https://travis-ci.org/gordonbanderson/weboftalent-twitter-tools.svg?branch=badgertest)](https://travis-ci.org/gordonbanderson/weboftalent-twitter-tools)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-twitter-tools/badges/quality-score.png?b=badgertest)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-twitter-tools/?branch=badgertest)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-twitter-tools/badges/coverage.png?b=badgertest)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-twitter-tools/?branch=badgertest)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-twitter-tools/badges/build.png?b=badgertest)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-twitter-tools/build-status/badgertest)
[![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-twitter-tools/coverage.svg?branch=badgertest)](https://codecov.io/github/gordonbanderson/weboftalent-twitter-tools?branch=badgertest)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/twitter-tools/version)](https://packagist.org/packages/weboftalent/twitter-tools)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/twitter-tools/v/unstable)](//packagist.org/packages/weboftalent/twitter-tools)
[![Total Downloads](https://poser.pugx.org/weboftalent/twitter-tools/downloads)](https://packagist.org/packages/weboftalent/twitter-tools)
[![License](https://poser.pugx.org/weboftalent/twitter-tools/license)](https://packagist.org/packages/weboftalent/twitter-tools)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/twitter-tools/d/monthly)](https://packagist.org/packages/weboftalent/twitter-tools)
[![Daily Downloads](https://poser.pugx.org/weboftalent/twitter-tools/d/daily)](https://packagist.org/packages/weboftalent/twitter-tools)


![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-twitter-tools/branch.svg?branch=badgertest)

##Introduction
This module provides the following functionality
* Embed tweets using a shortcode
* Optionally include a script to enlarge images in embedded tweets so that you can have them larger than Twitter's normal minimum width
* Twitter cards can be any type extending Page, provided an interface is implemented.

## Incorporate Twitter
<% require javascript("weboftalent/twitter_tools: javascript/render-twitter-embeds.js") %>

```
##Embedding Tweets
Tweets can be embedded into content using a shortcode like the following - the id parameter is the id of the tweet.

    [tweet id='537136515445710848']

## Enlarging Embedded Images
```
**** THIS NEEDS RETESTED ****
```
A script is included that you can include in your theme (either using require_javascript or a direct
 script include in the template) called twitteruril.js - include this and larger (at source size, 
 perhaps not theme size) embedded images will render on your site.

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

```txt
<% include TwitterSummaryCardLargeImage %>
```

This will check if the current page implements the RenderableAsTwitterCard interface.  If so it will produce the relevant metadata for Twitter to render a Twitter Card.


### Test With Card Validator
Test out your twitter card using the Card Validator, https://cards-dev.twitter.com/validator on a publicly accessible version of your site - this will highlight any issues.  It should also be noted that your site will probably need whitelisted.

## TODO
* ShortCode for follow button allowing content editors to add them inline.
* Allow different types of TwitterCard and make this configurable.
