<?php
    class Board extends AppModel{
        public $name = 'Board' ;
        
        public $validate = array(
            'title' => array(
                'rule' => 'notEmpty', 
                'message' => 'タイトルは必ず入力してください'
            ),
            'content' => array(
                'rule' => 'notEmpty', 
                'message' => '内容は必ず入力してください'
            )
        ) ;
        
        public $belongsTo = array(
            "Personal" => array(
                'className' => 'Personal',
                'conditions' => '',
                'order' => '',
                'dependent' => false,
                'foreignKey' => 'Personal_id'
            )
        ) ;
    }  
?>