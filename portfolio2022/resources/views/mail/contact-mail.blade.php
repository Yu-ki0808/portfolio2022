<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アイデア・ご意見ありがとうございます。</title>
</head>
<body>
    <p>以下の内容を受け付けました。</p>
    <p>お名前：{{$data['name']}}</p>
    <p>メールアドレス：{{$data['email']}}</p>
    <p>お問い合わせ内容：</p>
    <p>{!!nl2br(htmlspecialchars($data['contacts']))!!}</p>
</body>
</html>
