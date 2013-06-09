<h1>掲示板</h1>
<br /><a href="/cake/sample/boards/add">※投稿する</a>
<br /><br />
<table>
    <tr><th>投稿者</th><th>タイトル</th></tr>
    <?php
        for( $i = 0; $i < count($data); $i++ ){
            $arr = $data[$i] ;
            echo "<tr>" ;
            echo "<td><a href='/cake/sample/boards/show2/{$arr['Personal']['id']}'>
            {$arr['Personal']['name']}</a></td>" ;
            echo "<td><a href='/cake/sample/boards/show/{$arr['Board']['id']}'>
            {$arr['Board']['title']}</a></td>" ;
            echo "</tr>" ;
        }
    ?>
</table>