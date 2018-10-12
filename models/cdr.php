<?php
namespace andrewsauder\ezuceunitemeapi\models;

class cdr {

	/** @var string **/
	public $caller;

	/** @var string **/
	public $callee;

	/** @var \DateTimeImmutable **/
	public $startAt;

	/** @var \DateTimeImmutable **/
	public $connectAt;

	/** @var int **/
	public $startTime;

	/** @var string **/
	public $duration;

	/** @var string **/
	public $callerAor;

	/** @var string **/
	public $calleeAor;

	/** @var string **/
	public $recipient;

	/** @var string **/
	public $termination;

	/** @var string **/
	public $callId;
}