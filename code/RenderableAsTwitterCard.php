<?php
/**
* Defines the interface for a DataObject renderable as a Twitter. Implementors of this interface
* must define the following functions in order to work with the {@link RenderTwitter}
* helper class.
*
*
*
* @author Gordon Anderson
* @package renderTwitter
*/
interface RenderableAsTwitterCard {

	/**
	* An accessor method for the title of an item in a Twitter
	* @example
	* <code>
	* 	return $this->Title;
	* </code>
	*
	* @return string
	*/
	public function getTwitterTitle();


	/**
	* An accessor method for an image for a Twitter
	* @example
	* <code>
	* 	return $this->NewsItemImage;
	* </code>
	 *
	* @return string
	 */
	public function getTwitterImage();


	/**
	* An accessor for text associated with the Twitter
	* @example
	* <code>
	* return $this->Summary
	* </code>
	*
	* @return string
	 */
	public function getTwitterDescription();
}
