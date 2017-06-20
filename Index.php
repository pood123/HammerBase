<?php

echo <<<_SHIT
<html>
   <head>
       <title>Наша первая форма для теста</title>   
   </head>
   <body>
        <form method="post" action="Controller/UserController.php">
            <table>
                <tr><th>Введите имя пользователя:</th><th><input type="text" name="user_name"></th></tr>
                <tr><th>Введите пароль:</th><th><input type="text" name="user_password"></th></tr>
                <tr><th><input type="submit" value="Добавить"></th><th></th></tr>
             </table>
        </form> 
    </body>
</html>
_SHIT;
?>