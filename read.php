<!-- // データを受け取ると，受け取ったデータを元に処理を実行し，htmlのデータを返す
// まずデータの受取を確認 -->
<?php
//
var_dump($_POST);
exit();
// <!-- // name属性の値を指定してデータを受け取る -->
if (!empty($_POST["deadline"])) {
    $deadline = $_POST['deadline'];
}
if (!empty($_POST["name"])) {
    $name = $_POST['name'];
}
if (!empty($_POST["sex"])) {
    $sex = $_POST['sex'];
}
if (!empty($_POST["era"])) {
    $era = $_POST['era'];
}
if (!empty($_POST["answer"])) {
    $answer = $_POST['answer'];
}
// <!-- // 上記の変数をhtmlに埋め込んで表示する -->

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートフォーム回答画面（POST）</title>
</head>

<body>
    <fieldset>
        <legend>コロナ明けに行きたい旅行先は？（POST）</legend>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>回答日</th>
                        <th>名前</th>
                        <th>性別</th>
                        <th>年代</th>
                        <th>旅行先</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $deadline ?></td>
                        <td><?= $name ?></td>
                        <td><?= $sex ?></td>
                        <td><?= $era ?></td>
                        <td><?= $answer ?></td>
                    </tr>
                </tbody>
            </table>
    </fieldset>
</body>

</html>