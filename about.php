<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Контактная форма</title>
</head>
<body>
<div class="container mt-5">
    <?php require ("blocks/header.php") ?>
    <form action="check.php" method="post">
    <input type="email" name="email" placeholder="Email" class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
    <button type="submit" name="send" class="btn btn-success" >Отправить</button>
    </form>
    <?php require ("blocks/footer.php") ?>
</div>

</body>
</html>