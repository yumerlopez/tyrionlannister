<?php
App::uses('AppController', 'Controller');
/**
 * Editorials Controller
 *
 * @property Editorial $Editorial
 * @property PaginatorComponent $Paginator
 */
class EditorialsController extends AppController {

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
		$this->Editorial->recursive = 0;
		$this->set('editorials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Editorial->exists($id)) {
			throw new NotFoundException(__('Invalid editorial'));
		}
		$options = array('conditions' => array('Editorial.' . $this->Editorial->primaryKey => $id));
		$this->set('editorial', $this->Editorial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Editorial->create();
			if ($this->Editorial->save($this->request->data)) {
				$this->Session->setFlash(__('The editorial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The editorial could not be saved. Please, try again.'));
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
		if (!$this->Editorial->exists($id)) {
			throw new NotFoundException(__('Invalid editorial'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Editorial->save($this->request->data)) {
				$this->Session->setFlash(__('The editorial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The editorial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Editorial.' . $this->Editorial->primaryKey => $id));
			$this->request->data = $this->Editorial->find('first', $options);
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
		$this->Editorial->id = $id;
		if (!$this->Editorial->exists()) {
			throw new NotFoundException(__('Invalid editorial'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Editorial->delete()) {
			$this->Session->setFlash(__('The editorial has been deleted.'));
		} else {
			$this->Session->setFlash(__('The editorial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
