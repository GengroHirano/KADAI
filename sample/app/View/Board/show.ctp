<h1>掲示板</h1>
<br /><a href="/cake/sample/boards/index">※一覧に戻る</a>
<br /><br />
<table>
<?php
    
    echo "<tr><rh>投稿者</th><td>{$data[0]['Personal']['name']}</td></tr>" ;
    echo "<tr><rh>タイトル</th><td>{$data[0]['Board']['title']}</td></tr>" ;
    echo "<tr><rh>内容</th><td>{$data[0]['Board']['content']}</td></tr>" ;
    $id = $data[0]['Board']['id'] ;
    
?>
</table>
<br /><a href="/cake/sample/boards/edit/<?php echo $id; ?>">※この投稿を編集する</a><br />