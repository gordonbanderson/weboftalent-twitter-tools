<?php
use SilverStripe\View\Parsers\ShortcodeParser;
ShortcodeParser::get('default')->register('tweet',[WebOfTalent\TwitterTools\TwitterShortCodeHandler::class,'handle_shortcode']);
