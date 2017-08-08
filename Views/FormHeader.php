<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="Func/Authorisation.php">
        <?php if (empty($_COOKIE['user'])) :?>
            <table>
                <tr><th>Введите имя пользователя:</th><th><input type="text" name="user_name"></th></tr>
                <tr><th>Введите пароль:</th><th><input type="text" name="user_password"></th></tr>
                <tr><th><input type="submit" value="ВОЙТИ" name="login"></th><th></th></tr>
             </table>
        <?php elseif (isset($_COOKIE['user'])) :?>
            <table>
                <tr><td>Приветствуем <?php echo $_SESSION['user']?></td><td><input type="submit" value="ВЫЙТИ" name="logout"></td></tr>
            </table>
        <?php endif;?>
    </form>
</body>
</html>

