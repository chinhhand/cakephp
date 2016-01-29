<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class GroupController extends AppController{
        public function beforeFilter() {
            parent::beforeFilter();

            // For CakePHP 2.0
            $this->Auth->allow('*');

            // For CakePHP 2.1 and up
            $this->Auth->allow();
        }
}