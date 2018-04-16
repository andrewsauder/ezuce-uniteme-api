<?php
namespace andrewsauder\ezuceunitemeapi\models;

class group {

	/** @var int Group Id **/
	public $id;

	/** @var string Group name (presumably no spaces allowed) **/
	public $name;

	/** @var string Group description **/
	public $description;

	/** @var int Weight (sorting) **/
	public $weight;

	/** @var int Count **/
	public $count;

}