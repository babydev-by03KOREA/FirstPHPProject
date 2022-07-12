<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>String - 문자열</h1>
    <h2><?php echo 'Hello world'; ?></h2>
    <p>echo 'Hello word'</p>
    <h2><?php echo "Hello \"Developer-HJP\"";?></h2>
    <p>"를 출력하려면 "뒤에 \를 붙이세요!</p>
    <h1>concatenation operator - 결합 연산자</h1>
    <h2><?php echo "Hello"."world"; ?></h2>
    <p>php는 문자열을 더할때 +가 아니라 <strong>'.'</strong>을 쓴다!</p>
    <h1>String length function</h1>
    <h2><?php echo strlen("HelloWorld")?></h2>
    <p>HelloWorld가 몇글자인지 알고싶다면? strlen("몇글자일까요?") 작성할것!</p>
</body>
</html>