<?php
namespace \andrewsauder\ezuceunitemeapi\models;

class user {

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