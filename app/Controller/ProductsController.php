<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
APP::uses('AppController', 'Controller');
class ProductsController extends AppController{
    public function index()
    {
        $this->set('products',  $this->Product->find('all'));
    }
    public function view($id)
    {
        if(!$this->Product->exists($id))
        {
            throw new NotFoundException(__('Ivalid Product'));
        }
        $product=  $this->Product->read(NULL,$id);
        $this-> set(compact('product'));
    }
    public function add()
    {
        $Carts=  $this->Cart->readProduct();
        $product=array();
        if(null!=$Carts)
        {
            foreach($Carts as $product=>$count)
            {
                $product=  $this->Product->read(null,$productId);
                $product['Product']['count']=$count;
                $productsp[]=$product;
            }
        }
        $this->set(compact('products'));
    }
    public function beforeFilter() {
    $this->loadModel('Cart');
     
    $this->set('count',$this->Cart->getCount());
    }   
}
