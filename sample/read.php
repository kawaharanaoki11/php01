

<html>
<head>
	<meta charset="utf-8">
	<title>POST練習</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>お名前</th>
            <th>EMAIL</th>
            <th>出身地</th>
            <th>好きな食べ物</th>
            <th>評価</th>
        </tr>
    </thead>
    <tbody>
       
<?php

// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
    // fgetsでファイルを読み込み、変数に格納
    $txt = fgets($fp);
   
    // ファイルを読み込んだ変数を出力
    // echo h($txt).'<br>';
    $abc = explode(" ",$txt);
    echo '<tr>';
    echo '<td>';
    echo $abc[2];
    echo '</td>';
    echo '<td>';
    echo $abc[3];
    echo '</td>';
    echo '<td>';
    echo $abc[4];
    echo '</td>';
    echo '<td>';
    echo $abc[5];
    echo '</td>';
    echo '<td>';
    for ($i = 0; $i < $abc[6]; $i++) {
        echo '●';
    }
    if($abc[6]<5){
        for ($i = 0; $i < 5-$abc[6]; $i++) {
            echo '〇';
        }
    }
    echo '</td>';
    echo '</tr>';
}
// //
// <tr>
// <td>The table body</td>
// <td>with two columns</td>
// </tr>
// //

// fcloseでファイルを閉じる
fclose($fp);





?>
</tbody>
</table>

<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>