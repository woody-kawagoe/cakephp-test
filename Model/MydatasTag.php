<?php
App::uses('AppModel', 'Model');
/**
 * MydatasTag Model
 *
 * @property Data $Data
 */
class MydatasTag extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Data' => array(
			'className' => 'Data',
			'foreignKey' => 'data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
