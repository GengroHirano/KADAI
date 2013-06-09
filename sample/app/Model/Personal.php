<?php
    class Personal extends AppModel {
        public $name = 'Personal' ;
        
        public $validate = array(
            'name' => array(
                'rule' => 'notEmpty',
                'message' => '名前は必ず入力してください'
            ),
            'password' => array(
                'rule' => 'notEmpty',
                'message' => 'パスワードは必ず入力してください'
            ),
            'comment' => array()
        ) ;
        
        public function checkNameAndPass($data){
            $n = $this->find('count', array(
                'conditions'=> array(
                    'Personal.name' => $data['Personal']['name'],
                    'Personal.password' => $data['Personal']['password']
                )
            )) ;
            return $n > 0 ? true : false ;
        }
    }
    
?>