<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートフォーム（POST）</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- formにはaction, method, nameを設定！ -->
    <form action="create.php" method="post">
        <fieldset>
            <legend>コロナ明けに行きたい旅行先は？（POST）</legend>
            <div>
                回答日: <input type="date" name="deadline">
            </div>
            <div>
                お名前: <input type="text" name="name">
            </div>
            <div class="sex">
                性別:
                <br>
                <input name="sex" type="radio" value="男" />男</br>
                <br><input name="sex" type="radio" value="女" />女</br>
            </div>
            <div class="era">
                年代:
                <br><input type="radio" name="era" value="10代" />10代</br>
                <br><input type="radio" name="era" value="20代" />20代</br>
                <br><input type="radio" name="era" value="30代" />30代</br>
                <br><input type="radio" name="era" value="40代" />40代</br>
                <br><input type="radio" name="era" value="50代" />50代</br>
                <br><input type="radio" name="era" value="60代以上" />60代以上</br>

            </div>
            <div class="answer">
                旅行先:
                <br><input type="radio" name="answer" value="東京" />東京</br>
                <br><input type="radio" name="answer" value="北海道" />北海道</br>
                <br><input type="radio" name="answer" value="沖縄" />沖縄</br>
                <br><input type="radio" name="answer" value="由布院" />由布院</br>
                <br><input type="radio" name="answer" value="京都" />京都</br>
                <br><input type="radio" name="answer" value="大阪" />大阪</br>
            </div>

            <div>
                <input type="submit" value=" 回答を送信" />
            </div>
            <!-- <input type="button" onclick="location.href='./sent.html' " value=" 回答を送信" /></br> -->

            回答をせずに結果を見る


            </div>
        </fieldset>
    </form>

</body>

</html>