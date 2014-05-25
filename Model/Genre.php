<?php
App::uses('AppModel', 'Model');
/**
 * Genre Model
 *
 * @property Mydata $Mydata
 */
class Genre extends AppModel {

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
			'joinTable' => 'mydatas_genres',
			'foreignKey' => 'genre_id',
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
