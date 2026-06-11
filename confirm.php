<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = $_POST['name'] ?? '';
$companyName = $_POST['companyName'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$message = $_POST['message'] ?? '';

if (
    trim($name) === '' ||
    trim($companyName) === '' ||
    trim($email) === '' ||
    trim($age) === '' ||
    trim($message) === ''
) {
    echo '未入力項目があります';
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2>お問い合わせフォーム - 確認画面</h2>
</header>

<aside>
    <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
    </ul>
</aside>

<form action="send.php" method="post">
    <table border="3">
        <tr>
            <th>お名前</th>
            <td><?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?></td> 
        </tr>

        <tr>
            <th>会社名</th>
            <td><?php echo htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8'); ?></td> 
        </tr>

        <tr>
            <th>メールアドレス</th>
            <td><?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?></td> 
        </tr>

        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8'); ?></td> 
        </tr>

        <tr>
            <th>お問い合わせ内容</th>
            <td><?php echo htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8'); ?></td> 
        </tr>
    </table>

    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">

    <input type="submit" value="送信">
    <br>
    <input type="button" value="戻る"onclick="history.back()">

</form>

</body>
</html>
