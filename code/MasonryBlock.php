<?php

/**
 * MasonryBlock
 *
 * @author lekoala
 */
class MasonryBlock extends DataObject {

	private static $db = array(
		'Title' => 'Varchar(255)',
		'Content' => 'HTMLText',
		'ImagePosition' => "Enum('Top,Bottom','Top')"
	);
	private static $has_one = array(
		'Image' => 'Image',
		'Page' => 'MasonryPage'
	);
	private static $summary_fields = array(
		'Created', 'Title'
	);
	private static $default_sort = 'Created DESC';

	function forTemplate() {
		return $this->renderWith(__CLASS__);
	}

	function ImageBottom() {
		return $this->ImagePosition == 'Bottom';
	}

	function ImageTop() {
		return $this->ImagePosition == 'Top';
	}

}
