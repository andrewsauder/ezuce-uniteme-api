<?php
namespace \andrewsauder\ezuceunitemeapi\models;

class line {

	/** @var int Line id **/
	public $id;

	/** @var string Line unique string identifier **/
	public $uri;

	/** @var string Line user name **/
	public $user;

	/** @var string Line user id **/
	public $userId;

	/** @var string Line extension **/
	public $extension;

	/** @var string Line display name **/
	public $displayName;

	/** @var string Line password **/
	public $password;

	/** @var string Line registration server **/
	public $registrationServer;

	/** @var int Line registration serverPort **/
	public $registrationServerPort;

	/** @var string voicemail **/
	public $voicemail;

}