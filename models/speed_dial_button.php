<?php
namespace andrewsauder\ezuceunitemeapi\models;

class speed_dial_button {

	/** @var string Label visible on phone **/
	public $label;

	/** @var bool **/
	public $blf = true;

	/** @var int **/
	public $number;

	/** @var string "{label}={number}" **/
	public $name;


	/**
	 * Run this function after setting label and number and it will set name for you
	 */
	public function setName() {
		$this->name = $this->label.'='.$this->number;
	}
}