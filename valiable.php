<!doctype html>
<html lang=kr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable</title>
</head>
<body>
    <h1>Variable - 변수</h1>
    <h2>php에서는 변수선언을 <strong>$</strong>를 쓴다!</h2>
    <?php
    $name = "hyeongjuPARK";
    echo "Lorem ipsum dolor sit amet, ".$name." adipisicing elit.</br> 
    Adipisci aspernatur blanditiis commodi".$name." cupiditate delectus deleniti ducimus et facere,<br>
     harum ipsum iste laudantium maxime odit ".$name." pariatur quaerat reiciendis ut veniam vero?<br>";
    ?>
    <h4><strong>"문자열".$변수명."문자열" 형식으로 사용됨!</strong></h4>
</body>
</html>