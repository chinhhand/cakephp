<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model')   ;
App::uses('AuthComponent', 'Controller/Component');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
    public $belongsTo=array('Group');
//    public $actsAs=array('Acl'=>array('type'=>'requester'),'enabled'=>false);
    public $validate=array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );  
        }
        return true;
    }
    public function parentNode(){
        if(!$this->id && empty($this->data))
        {
            return null;
        }
        if(isset($this->data['User']['group_id']))
        {
           
            $groupId=  $this->data['User']['group_id'];
        }else{
            $groupId=  $this->field('group_id');
        }
        if(!$groupId)
        {
            return NULL;
        }
        return array('Group'=>array('id'=>$groupId));
    }
//    public function bindModel($user) {
//        return array('model'=>'group','foreign_key'=>$user['User']['group_id']);
//    }
    
}
