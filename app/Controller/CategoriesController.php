<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CategoriesController extends AppController{
    var $name='Categories';
    var $component=array('Session');
    public function index()
    {
        
       $this->set('Categories',  $this->Category->find("all"));
       
        $this->set('list_cat',$this->_find_list());
       
   
    }
    public function add(){
           if(!$this->data)
           {
               $this->Category->create();
               if($this->Category->save($this->data))
               {
                   $this->Session->setFlash(__('The product category has ben saved',true));
                   $this->redirect(array('action'=>'index'));
               }
               else{
                   $this->Session->setFlash(__('The product category could not be saved,please try again',true));
               }
           }
           $this->set('list_cat',  $this->_find_list());
    }
    public function edit()
    {
        if(!id && empty($$this->data))
        {
            $this->Session->setFlash('Ivalid Category');
            $this->redirect(array('action'=>'index'));
        }
        if(empty($this->data))
        {
            $this->data=  $this->Category->read(null,$id);
        }
        else{
            if($this->Category->save($this->data))
            {
                $this->Session->setFlash('Category is Updated',true);
                $this->redirect(array('action'=>'index'), null, true);
            }
        }
        $this->set('list_cat',  $this->_find_list());
    }
    public function detele()
    {
        $this->Category->removeFromTree($id,true);
        $this->redirect(array('action'=>'index'), null, true);
    }
    public function moveup($name=null,$delta=null)
    {
        $cat=$this->Category->findByName($name);
        if(empty($cat))
        {
            $this->Session->setFlash('Category is not category named'.$name);
            $this->redirect(array('action'=>'index'), null, true);  
        }
        $delta=$this->Category->id= $cat['Category']['id'];
        if($delta>0)
        {
            $this->Category->moveDown($this->Category->id,  abs($delta));
            
        }
        else
        {
            $this->Session->setFlash('Please provide the number of positions the field should be moved down.');
            
        }
        $this->redirect(array('action'=>'index'));
    }
    public function movedown()
    {
        $cat=  $this->Category->findByName($name);
        if(empty($cat))
        {
            $this->Session->setFlash('Category is not category named'.$name);
            $this->redirect(array('action'=>'index'), null, true); 
        }
        $this->Category->id=$cat['Category']['id'];
        if($delta> 0)
        {
            $this->Category->moveUp($this->Category->id,abs($delta));
        }  else {
            $this->Session->setFlash(' provide a number of positions the category should be moved up.');
        }
        $this->redirect(array('action'=>'index'), NULL, true);
    }
    function _find_list() {
        return $this->Category->generateTreeList();
    }
}

