<?php
App::uses('AppModel', 'Model');
/**
 * Mydata Model
 *
 */
class Mydata extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $hasMany = "Comment";

}
