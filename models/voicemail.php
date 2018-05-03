<?php
namespace andrewsauder\ezuceunitemeapi\models;

class voicemail {

	/** @var string **/
	public $message_id;

	/** @var bool **/
	public $heard;

	/** @var bool **/
	public $urgent;

	/** @var string **/
	public $folder;

	/** @var float Duration of message in seconds **/
	public $duration;

	/** @var int **/
	public $contentLength;

	/** @var int unix timestamp of the time message was recieved **/
	public $received;

	/** @var string **/
	public $author;

	/** @var string **/
	public $authorExtension;

	/** @var string **/
	public $username;

	/** @var string **/
	public $format;

}