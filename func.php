<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Function - 함수</h1>
    <?php
        $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. </br>Aperiam cumque dolor doloremque, enim fugiat magnam neque obcaecati quam quis,</br> saepe sapiente tempora ullam ut voluptate voluptatem. </br>Error explicabo illum quis?";
        echo $str;
    ?>
    <h1>strlen()</h1>
    <?php
        echo strlen($str);
    ?>
    <h1>nl2br</h1>
    <?php
        $str2 = "안녕하세요.
                뭐 어쩌라고요
                개빡쳤으니깐 건들지마요
                건들면죽는다.";
        echo nl2br($str2);
    ?>
</body>
</html>