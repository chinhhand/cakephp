<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Category extends AppModel{
    public $actAs = array('tree');
    public $name='category';
    public $userTable='categories';
    public $primaryKey='id';
    public  $displayField='name';
    var $validate=array(
        'name'=>array(
            'notempty'=>array(
                'rule'=>array('notempty'),
            ),
        ),
        'published'=>array(
            'numeric'=>array(
                'rule'=>array('numeric'),
            ),
        ),
    );
    var $belongsTo = array(
        'ParentCat' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id'
        )
    );
}
