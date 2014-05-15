<?php

/**
 * MasonryPage
 *
 * @author lekoala
 */
class MasonryPage extends Page {
	private static $has_many = array(
		'Blocks' => 'MasonryBlock',
	);

	public function getCMSFields() {
		$f = parent::getCMSFields();

		$gridFieldConfig = GridFieldConfig_RelationEditor::create();
		$gridfield = new GridField('Blocks', null, $this->Blocks(), $gridFieldConfig);
		$f->addFieldToTab('Root.Blocks', $gridfield);

		return $f;
	}

}

class MasonryPage_Controller extends Page_Controller {

	public function init() {
		parent::init();
		Requirements::css('masonry/css/masonry.css');
		Requirements::javascript('masonry/javascript/imagesloaded.pkgd.min.js');
		Requirements::javascript('masonry/javascript/masonry.pkgd.min.js');
		Requirements::customScript(<<<JS
var msnry = new Masonry( '#masonry-container', {
  itemSelector: '.masonry-block'
});
imagesLoaded( '#masonry-container', function() {
  msnry.layout();
});
$(window).resize(function () {
   msnry.bindResize();
});
JS
		);
	}

}
