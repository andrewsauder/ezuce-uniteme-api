<?php
namespace \andrewsauder\ezuceunitemeapi\models;

class model {

	/** @var int Phone model Id **/
	public $modelId;

	/** @var string Phone human readable name **/
	public $label;

	/** @var string Phone vendor **/
	public $vendor;

	/** @var string[] versions **/
	public $versions = [];

}