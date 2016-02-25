<?php
class TemplatesController extends AppController {
    var $layout = "template"; // load file chứa nội dung layout : views/layouts/template.ctp
    var $helpers = array("Html","Common"); // Thành phần Helper Common được gọi để tạo menu,header,footer trong view
 
    function  index(){
        
        $this->set('title_for_layout', 'Templates By QHOTeam');
        $this->set("content","QHO Team");
    }
 
    function view($id){
        switch($id){
            case 1 :{ 
                $this->set('title_for_layout', 'CodeIgniter FrameWork');
                $this->set("content","CodeIgniter FrameWork"); 
            }
            break;
            case 2 :{
                $this->set('title_for_layout', 'CakePHP FrameWork');
                $this->set("content","CakePHP FrameWork");
            }
            break;
            case 3 :{
                $this->set('title_for_layout', 'Zend Framework');
                $this->set("content","Zend Framework");
            }
            break;
            default :
                $this->set("content","Framwork");
            break;
        }
    }
 
}
?>