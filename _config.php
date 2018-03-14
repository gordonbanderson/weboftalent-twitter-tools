<?php
ShortcodeParser::get('default')->register('Tweet',array('TwitterShortCodeHandler','p
use SilverStripe\View\Parsers\ShortcodeParser;
ShortcodeParser::get('default')->register('Tweet',array('TwitterShortCodeHandler','parse_tweet'));
