<?php
namespace andrewsauder\ezuceunitemeapi\models;



class user {



	public function __construct( $user = null ) {
		if ( isset( $user ) ) {
			$this->id			 = isset( $user->id ) ? $user->id : '';//
			$this->lastName		 = isset( $user->lastName ) ? $user->lastName : '';//$user->lastName;
			$this->firstName	 = isset( $user->firstName ) ? $user->firstName : '';//$user->firstName;
			$this->userName		 = isset( $user->userName ) ? $user->userName : '';//$user->userName;
			$this->pin			 = isset( $user->pin ) ? $user->pin : '';//$user->pin;
			$this->sipPassword	 = isset( $user->sipPassword ) ? $user->sipPassword : '';//$user->sipPassword;
			$this->emailAddress	 = isset( $user->emailAddress ) ? $user->emailAddress : '';//$user->emailAddress;
			$this->groups		 = isset( $user->groups ) ? $user->groups : '';//$user->;
			$this->branch		 = isset( $user->branch ) ? $user->branch : '';//$user->branch;
			$this->aliases		 = isset( $user->aliases ) ? $user->aliases : '';//$user->aliases;
		}
	}

	/** @var int * */
	public $id;

	/** @var string * */
	public $lastName;

	/** @var string * */
	public $firstName;

	/** @var string * */
	public $userName;

	/** @var string * */
	public $pin;

	/** @var string * */
	public $sipPassword;

	/** @var string * */
	public $emailAddress;

	/** @var \andrewsauder\ezuceunitemeapi\models\group[] * */
	public $groups = [];

	/** @var \andrewsauder\ezuceunitemeapi\models\branch * */
	public $branch;

	/** @var \andrewsauder\ezuceunitemeapi\models\alias[] * */
	public $aliases = [];



}
