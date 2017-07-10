<?php

namespace App;

class Randomness {
	
	public $actionButtonTexts = [
		'Boom!',
		'Yay!',
		'Woop!',
		'I did awesome!',
		'I did this!',
		'Log it!'
	];

	function actionButtonText() {
		return $this->actionButtonTexts[array_rand( $this->actionButtonTexts )];
	}

}