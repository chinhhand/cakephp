<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
APP::uses('AppModel', 'Model');
class Product extends AppModel
{
    public $name = 'Product';
    public $useTable = 'products';    
    public $primaryKey = 'id';
}
