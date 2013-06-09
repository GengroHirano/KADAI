<h1>編集フォーム</h1>
<br /><br />
<?php
    echo $this->Form->create(false, array('type'=>'post', 'action'=>"")) ;
    
    echo $this->Form->hidden('Board.id') ;
    echo $this->Form->hidden('Board.personal_id') ;
    echo $this->Form->hidden('Personal.id') ;
    echo $this->Form->hidden('Personal.name') ;
    
    echo "名前: {$data['Personal']['name']}<br /><br />" ;
    echo "パスワード : {$this->Form->password('Personal.password')}" ;
    echo $this->Form->error('Personal.password') ;
    
    echo "タイトル: {$this->Form->text('Board.title')}" ;
    echo $this->Form->error('Board.title') ;
    
    echo "内容: {$this->Form->textarea('Board.content')}" ;
    echo $this->Form->error('Board.content') ;
    echo $this->Form->end('送信') ; //引数が有るとどうやら上手く行かないようだ
?>

<br />