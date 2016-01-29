<?php
class CommonHelper extends HtmlHelper {
// Hàm tạo menu
function create_menu(){
    $menu  = "<ul>";
    $menu .= "<li>".$this->link("CodeIgniter", array(
                                      "controller"=>"templates",
                                      "action"=>"view",
                                      1))."</li>";
    $menu .= "<li>".$this->link("CakePHP", array(
                                      "controller"=>"templates",
                                      "action"=>"view",
                                       2))."</li>";
    $menu .= "<li>".$this->link("Zend", array(
                                      "controller"=>"templates",
                                      "action"=>"view",
                                      3))."</li>";   
    $menu .= "</ul>";
    return $menu;
  }
 
//Hàm tạo các thành phần cho header và footer
  function general(){
    $data = array(
                    "header" => "QHOnline.info",
                    "footer" => "Copyright 2011 &copy; | QHTeam",
                );
    return $data;
    }
}