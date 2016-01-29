<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Tinymce->input('Post.title', array(
                    'label' => 'Title'
                    ),array(
                            'language'=>'en'
                    ),
                    'modern'
        );
echo $this->Tinymce->input('Post.body', array(
                    'label' => 'Body'
                    ),array('rows' => '3')
                    ,array(
                            'language'=>'en'
                    ),
                    'modern'
        );
echo $this->Form->end('Save Post');
?>
</div>