<?php
include_once 'FormHeader.php'; ?>
<html>
    <body>
        <form method="post" action="../Controller/UserController.php">
            <table>
                <tr><th>Введите имя пользователя:</th><th><input type="text" name="user_name"></th></tr>
                <tr><th>Введите пароль:</th><th><input type="text" name="user_password"></th></tr>
                <tr><th><input type="submit" value="Добавить" name="addUser"></th><th></th></tr>
             </table>
        </form>
    </body>
</html>
