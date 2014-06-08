<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AssociationsController
 *
 * @author Django
 */
class AssociationsController extends AppController {

	public function index(){
		// debug($this->Association->Favori->find('all'));
		// die();
        if($this->request->is('post') && !empty($this->request->data['nomAsso'])){
            $nomAsso = $this->request->data['nomAsso'];
            $assos = $this->Association->find('all', array( 'conditions' => array("Association.nom_asso LIKE" => "%$nomAsso%" )));
        }else{
            $assos = $this->Association->find('all');
        }

        $this->set('assos', $assos);
	}
	
	public function view($id = null){
		$asso = $this->Association->findById($id);
		$this->set('asso', $asso);
		
	}
	
	public function add($idUser) {
        if ($this->request->is('post')) {
            $this->Association->create();
            
            $this->request->data['Association']['user_id'] = $idUser;
			
            if ($this->Association->save($this->request->data)) {
            	
                $this->Session->setFlash(__('Félicitation votre compte a bien été créé !'));
            	$this->redirect(array('action' => 'view',$this->Association->id));
            } else {
                $this->Session->setFlash(__('Nous sommes désolé, une erreur est survenue. Merci de réessayer.'));
            }
        }
    }

    public function edit($id = null){

        $association = $this->Association->findById($id);
        if($this->request->is(array('post', 'put'))){
            $this->Association->id = $id;

            if($this->Association->save($this->request->data)){
                $this->Session->setFlash(__('L\'association a été modifié'));
                //return $this->redirect(array('action' => 'index'));
                return $this->redirect(array('controller'=>'associations','action' => 'view',$id));
            }
            $this->Session->setFlash(__('Impossible de modifier l\'association'));
        }

        if(!$this->request->data){
            $this->request->data = $association;
        }

    }


	
}

?>
