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
    echo '送信に失敗しました';
    exit;
}

$to = 'test@example.com';
$subject = 'お問い合わせフォーム';
$body =
"お名前: {$name}\n" .
"会社名: {$companyName}\n" .
"メールアドレス: {$email}\n" .
"年齢: {$age}\n" .
"お問い合わせ内容: {$message}";

$result = mail($to, $subject, $body);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 送信完了画面</title>
</head>
<body>

<h1>お問い合わせフォーム - 送信完了画面</h1>

<?php if ($result): ?>
    <p>お問い合わせ内容が送信されました。ありがとうございます！</p>
<?php else: ?>
    <p>メール送信に失敗しました。</p>
<?php endif; ?>

<a href="contact.php">お問い合わせフォームに戻る</a>

</body>
</html>