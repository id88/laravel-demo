</!DOCTYPE html>
<html>
<head>
    <title>blog</title>
</head>
<body>
    <p style="color: red;">注意：文件的名称必须以 .blade.php 结尾</p>

    <?php
        echo $sid."---".$email;//能取到值但不推荐
        echo $myData["sid"];//数组取值

        isset($sid) ? $sid:2008;//如果sid没有赋值，则默认值为2008
    ?>

    <h1>{{$email}}</h1>
    当email为空null时，默认值为123@qq.com
    <h1>{{$email or "123@qq.com"}}</h1>

    前面加@可以屏蔽，使其按元字符的形式输出，避免与其他语法相冲突
    <h1>@{{$sid}}</h1>

</body>
</html>