<h1>掲示板</h1>
<br /><a href="/cake/sample/boards/index">※一覧に戻る</a>
<br /><br />
<table>
<?php
    
    echo "<tr><th>投稿者</th><td>{$data[0]['Personal']['name']}</td></tr>" ;
    echo "<tr><th>コメント</th><td>{$data[0]['Personal']['comment']}</td></tr>" ;
    
?>
</table>
<br />