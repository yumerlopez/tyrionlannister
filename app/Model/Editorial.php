<?php
App::uses('AppModel', 'Model');
/**
 * Editorial Model
 *
 * @property Book $Book
 */
class Editorial extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Book' => array(
			'className' => 'Book',
			'foreignKey' => 'editorial_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
