<?php
App::uses('AppModel', 'Model');
/**
 * MydatasGenre Model
 *
 * @property Data $Data
 * @property Genres $Genres
 */
class MydatasGenre extends AppModel {


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
		),
		'Genres' => array(
			'className' => 'Genres',
			'foreignKey' => 'genres_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
