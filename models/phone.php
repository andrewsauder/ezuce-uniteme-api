<?php
namespace andrewsauder\ezuceunitemeapi\models;

class phone {

	public function __construct($phone) {
		if(isset($phone)) {
			$this->id = $phone->id;
			$this->serialNo = $phone->serialNo;
			$this->deviceVersion = $phone->deviceVersion;
			$this->description = $phone->description;
			$this->model = $phone->model;
			$this->lines = $phone->lines;
			$this->groups = $phone->groups;
		}
	}

	/** @var int Phone Id **/
	public $id;

	/** @var string Phone serial number **/
	public $serialNo;

	/** @var string Phone software version **/
	public $deviceVersion;

	/** @var string Phone description **/
	public $description;

	/** @var \andrewsauder\ezuceunitemeapi\models\model Model of phone **/
	public $model;

	/** @var \andrewsauder\ezuceunitemeapi\models\line[] Lines on phone **/
	public $lines = [];

	/** @var \andrewsauder\ezuceunitemeapi\models\group[] Lines on phone **/
	public $groups = [];

}