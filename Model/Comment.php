<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property Post $Post
 */
class Comment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Mydata' => array(
			'className' => 'Mydata',
			'foreignKey' => 'mydata_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
