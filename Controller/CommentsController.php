<?php
App::uses('AppController', 'Controller');
/**
 * Mydatas Controller
 *
 * @property Mydata $Mydata
 * @property PaginatorComponent $Paginator
 */
class CommentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The mydata has been saved.'));
				$this->redirect(array('controller'=>'mydatas','action'=>'view',$this->data['Comment']['mydata_id']));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mydata could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mydata->exists($id)) {
			throw new NotFoundException(__('Invalid mydata'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mydata->save($this->request->data)) {
				$this->Session->setFlash(__('The mydata has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mydata could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mydata.' . $this->Mydata->primaryKey => $id));
			$this->request->data = $this->Mydata->find('first', $options);
		}
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid mydata'));
		}
		$this->request->onlyAllow('mydata', 'delete');
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('The mydata has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mydata could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller'=>'mydatas','action' => 'view',$this->data['mydatas']['id']));
	}
}
