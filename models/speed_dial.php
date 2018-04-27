<?php
namespace andrewsauder\ezuceunitemeapi\models;

class speed_dial {

	/** @var bool **/
	public $updatePhones;

	/** @var bool **/
	public $canSubscribeToPresence;

	/** @var \andrewsauder\ezuceunitemeapi\models\speed_dial_button[] **/
	public $buttons = [];

	/** @var bool **/
	public $groupSpeedDial;

}