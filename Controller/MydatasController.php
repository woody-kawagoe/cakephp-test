<?php
App::uses('AppController', 'Controller');
/**
 * Mydatas Controller
 *
 * @property Mydata $Mydata
 * @property PaginatorComponent $Paginator
 */
class MydatasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mydata->recursive = 0;
		$this->set('mydatas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mydata->exists($id)) {
			throw new NotFoundException(__('Invalid mydata'));
		}
		$options = array('conditions' => array('Mydata.' . $this->Mydata->primaryKey => $id));
		$this->set('mydata', $this->Mydata->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mydata->create();
			if ($this->Mydata->save($this->request->data)) {
				$this->Session->setFlash(__('The mydata has been saved.'));
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
		$this->Mydata->id = $id;
		if (!$this->Mydata->exists()) {
			throw new NotFoundException(__('Invalid mydata'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mydata->delete()) {
			$this->Session->setFlash(__('The mydata has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mydata could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
