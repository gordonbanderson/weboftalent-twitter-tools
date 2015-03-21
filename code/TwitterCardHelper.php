<?php

class TwitterCardHelper extends Extension {
	public function CanRenderTwitterCard() {
		return $this->owner->dataRecord instanceof RenderableAsTwitterCard;
	}

	public function TwitterUsernameSite() {
		$result = Config::inst()->get('Twitter','UserNameSite');
		return $result;
	}

	public function TwitterUsernameCreator() {
		return Config::inst()->get('Twitter','UserNameCreator');
	}

}
