<?php
use SilverStripe\View\Parsers\ShortcodeParser;

echo '**** TWITTER SC SETUP MODULE ****';
ShortcodeParser::get('default')->register('tweet',[WebOfTalent\TwitterTools\TwitterShortCodeHandler::class,'handle_shortcode']);
echo '**** /TWITTER SC SETUP MODULE ****';
