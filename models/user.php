<?php
namespace andrewsauder\ezuceunitemeapi\models;

class user {

	public function __construct($user=null) {
		if(isset($user)) {
			$this->id = $user->id;
			$this->lastName = $user->lastName;
			$this->firstName = $user->firstName;
			$this->userName = $user->userName;
			$this->pin = $user->pin;
			$this->sipPassword = $user->sipPassword;
			$this->emailAddress = $user->emailAddress;
			$this->groups = $user->groups;
			$this->branch = $user->branch;
			$this->aliases = $user->aliases;
		}
	}

	/** @var int **/
	public $id;

	/** @var string **/
	public $lastName;

	/** @var string **/
	public $firstName;

	/** @var string **/
	public $userName;

	/** @var string **/
	public $pin;

	/** @var string **/
	public $sipPassword;

	/** @var string **/
	public $emailAddress;

	/** @var \andrewsauder\ezuceunitemeapi\models\group[] **/
	public $groups = [];

	/** @var \andrewsauder\ezuceunitemeapi\models\branch **/
	public $branch;

	/** @var \andrewsauder\ezuceunitemeapi\models\alias[] **/
	public $aliases = [];

}