<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Group extends AppModel{
    public $actsAs=array('Acl'=>array('type'=>'requester'));
    public function parentNode()
    {
        return NULL;
    }
}