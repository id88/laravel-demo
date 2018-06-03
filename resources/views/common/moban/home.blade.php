<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>模板</title>
</head>
<body>
    <div class="header">aaaaa</div>

    @yield('content')
    <!-- 这个将会被替换 -->

    <div class="footer">ccccc</div>
</body>
</html>