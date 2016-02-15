<div class="productCategories form">
<?php echo $this->Form->create('Category');?>
    <fieldset>
         <legend><?php __('edit Category'); ?></legend>
    <?php
        echo $this->Form->input('name');
        echo $this->Form->input('parent_id',array('type'=>'select','options'=>$list_cat,'empty'=>'--Choose parent--'));        
        echo $this->Form->input('published');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>