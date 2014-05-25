<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Mydata $Mydata
 */
class Tag extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Mydata' => array(
			'className' => 'Mydata',
			'joinTable' => 'mydatas_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'mydata_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
