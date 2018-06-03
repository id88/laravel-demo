<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>study</title>
</head>
<body>
    <!-- <div class="header">头部</div> -->

    <!-- 引入公头部，该文件在views目录下面的common目录，文件名叫header.blade.php -->
    @include('common.header')
    <div class="middle">中间</div>

    @include('common.footer', ['page' => '我是参数'])
    <!-- <div class="footer">底部</div> -->
</body>
</html>