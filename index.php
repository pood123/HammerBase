<?php
require_once __DIR__ . '/Func/Autoload.php';

if (!isset($_SESSION)) {
session_start();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./Src/Css/hammerbase.css">
</head>
<body>
    <header>
        <?php if (empty($_SESSION['user'])) :?>
            <form method="post" action="index.php">
                <table>
                    <tr><th>Введите имя пользователя:</th><th><input type="text" name="user_name"></th></tr>
                    <tr><th>Введите пароль:</th><th><input type="text" name="user_password"></th></tr>
                    <tr><th><input type="submit" value="ВОЙТИ"></th><th></th></tr>
                </table>
                <input type="hidden" name="controller" value="User">
                <input type="hidden" name="action" value="UserLogin">
            </form>
        <?php elseif (isset($_SESSION['user'])) :?>
            <form method="post" action="index.php">
                <table>
                    <tr><td>Приветствуем <?php echo $_SESSION['user']?></td><td><input type="submit" value="ВЫЙТИ" name="logout"></td></tr>
                </table>
                <input type="hidden" name="controller" value="User">
                <input type="hidden" name="action" value="UserLogout">
            </form>
        <?php endif;?>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?controller=View&action=Home">Home</a></li>
            <li><a href="index.php?controller=View&action=News">News</a></li>
            <li><a href="index.php?controller=Image&action=ShowAllImages">Images</a></li>
            <li><a href="index.php?controller=View&action=Roster">RosterBuilder</a></li>
        </ul>
    </nav>
    <main>

<?php require __DIR__.'/Controller/FrontController.php'; ?>

    </main>
        <footer>

        </footer>
</body>
</html>




