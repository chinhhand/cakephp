<!--show submenu-->
<div class="productCategories left" style="float: left" >
    <h2>Menu  </h2>
    <ul>
        <?php
        
        if (is_array($list_cat) || is_object($list_cat))
        {
            print_r($list_cat);die();
            foreach ($list_cat as $item){
                echo '<li>'.$item.'</li>';
            }
        }
        ?>
        
    </ul>
    
</div>
<!--modify sub menu-->
<h2>Modify: <?php echo $this->Html->link('Add new',array('controller'=>'categories','action'=>'add')); ?></h2>
<h2><?php __('Categories'); ?></h2>>
<table cellspacing="0" cellpadd="0">
    <th>Id</th>
    <th>Name</th>
    <th>Parent Id</th>
    <th>Published</th>
    <th class="actions"><?php __('Action');?></th>
    <?php
    $i=0;
    //print_r($Categories);die();
        if(is_array($Categories) || is_object($Categories)){
            
             foreach ($Categories as $Category){
                
                $class=null;
                if($i++ % 2 ==0)
                    $class='class="altrow"';
            }
             
        
     }
    ?>
    <tr <?php echo $class; ?> >
        <td><?php echo $Category['Category']['id']?>&nbsp;</td>
        <td><?php echo $Category['Category']['name']?>&nbsp;</td>
        <td><?php echo $Category['ParentCat']['name']; ?>&nbsp;</td> 
        <td><?php echo $Category['Category']['published']?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('Up',true),array('action'=>'moveup/'.$Category['Category']['name'],$Category['Category']['id'])); ?>
            <?php echo $this->Html->link(__('Down',true),array('action'=>'movedown/'.$Category['Category']['name'],$Category['Category']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link(__('edit',true),array('action'=>'edit'.$Category['Category']['id']));?>
            <?php echo $this->Html->link(__('detele',true),array('action'=>'detele'.$Category['Category']['id']),null,  sprintf('Are you sure you want detele  # %s',true));?>
        </td>
    </tr>
  
</table>
